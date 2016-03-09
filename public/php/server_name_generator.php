<?php


function getRandomWord($array){
    $randomWord = mt_rand(0,count($array) - 1);
    $capsOnFirstLetter = ucfirst($array[$randomWord]); ;

    return $capsOnFirstLetter . PHP_EOL;
}
function getServerName($noun, $adjectives){
    return getRandomWord($noun) . ' - ' . getRandomWord($adjectives);
}
function pageController(){
    $data =[];
    $adjectives = [
        'adament',
        'endemic',
        'fulsome',
        'Incendiary',
        'Mordant',
        'obtuse',
        'puckish',
        'strident',
        'voluble',
        'zealous'
    ];

    $noun = [
        'people',
        'way',
        'art',
        'world',
        'computer',
        'meat',
        'music',
        'data',
        'law',
        'power'
    ];
    $data['serverName'] = getServerName($noun, $adjectives);
    return $data;
}
extract(pageController());


?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color: grey;
            }
            .borders{
                font-size: 1.8rem;
            }
            #reloadPage{
                border: 1px solid black;
                width: 55px;
                border-radius: 7px;
                text-align: center;
                background-color: red
            }
        </style>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="borders">
            <p>
                <?php echo $serverName; ?>
            </p>
        </div>

        <p id="reloadPage" type="button" name="button">Reload</p>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type='text/javascript'>
        'use strict'

        $('#reloadPage').on('click',function(){
            interval
            location.reload();
        })

        </script>
    </body>
</html>
