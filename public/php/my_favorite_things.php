<?php

$favoriteThings = [
    'skating',
    'video games',
    'coding',
    'computer',
    'sleeping'
];

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <table>
            <?php foreach ($favoriteThings as $value): ?>
                <tr>
                    <td>
                        <?= ucfirst($value); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    
        </table>
        <script src="/js/jquery-1.12.0.js"></script>
        <script src="/js/"></script>
    </body>
</html>
