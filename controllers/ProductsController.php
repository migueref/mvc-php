<?php
include_once("../models/Product.php");



if(isset($_POST["action"])) {
     echo "Nombre del producto: ".$_POST["name"];
} else {
     $products = Product::get();

     $products = json_encode($products);

     echo $products;
}
