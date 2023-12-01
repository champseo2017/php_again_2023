<?php
include 'class.product.php';
$product = new Product();
$product->id = 1;
$product->name = 'TV';
echo $product->info();