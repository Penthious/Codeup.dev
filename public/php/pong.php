<?php
function pageController(){
    $counter = file_get_contents('counter.txt');
    $counter = (int)($counter);
    $newCounter;
    $data = [];
    if (array_key_exists('Hit',$_GET)) {
        $newCounter = $counter + 1;
        $handle = fopen('counter.txt','w');
        fwrite($handle, $newCounter);
        fclose($handle);
    }
    $_GET;
    $data['counter'] = $newCounter;
    return $data;
}
extract(pageController());


 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" href="/css/">
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1>PONG!!!</h1>
         <h3><?php echo $counter ?></h3>
         <form action="/php/ping.php" method="get">
             <button type="submit" name="Hit">Hit</button>
             <button type="Miss" name="Miss">Miss</button>
         </form>
         <script src="/js/jquery-1.12.0.js"></script>
         <script src="/js/"></script>
     </body>
 </html>
