<?php
function pageController(){
    $counter = file_get_contents('counter.txt');
    $counter = (int)($counter);
    var_dump($counter);
    $data = [];
    $newCounter;
    if(array_key_exists('buttonUp',$_GET)){
        $newCounter = $counter + 1;
        $handle = fopen('counter.txt','w');
        fwrite($handle, $newCounter);
        fclose($handle);

    }else if(array_key_exists('buttonDown',$_GET)){
        $newCounter = $counter - 1;
        $handle = fopen('counter.txt','w');
        fwrite($handle, $newCounter);
        fclose($handle);
    }
    $_GET;
    $data['counter'] = $newCounter;
    return $data;
}
extract(pageController())



 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" href="/css/">
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1><?php echo $counter ?></h1>
         <form method="get">
             <button type="submit" name="buttonUp"> up</button>
             <button type="submit" name="buttonDown">Down</button>
         </form>
         <script src="/js/jquery-1.12.0.js"></script>
         <script src="/js/"></script>
     </body>
 </html>
