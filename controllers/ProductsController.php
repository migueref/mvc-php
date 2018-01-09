<?php
include_once("../models/Product.php");

$products = Product::get();

$products = json_encode($products);

echo $products;
