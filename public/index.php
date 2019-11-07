<?php

require __DIR__ . "/../vendor/autoload.php";
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/view');
$twig = new \Twig\Environment($loader, [
        'cache' => false
    ]
);


$products = ['Carambar', 'Batnan', 'Chamallow', 'Ourson-guimauve', 'Chuppa chups', 'm&m\'s'];


echo $twig->render('index.html.twig', [
    'bonbons' => $products
]);
