<?php

require_once __DIR__ . '/../config/twig.php';


$products = ['guitare', 'bass', 'bonjo', 'xylo', 'trompette', 'piano'];

echo $twig->render('products.html.twig', ['products' => $products]);
