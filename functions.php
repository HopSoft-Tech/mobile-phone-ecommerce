<?php
// require MySQL database connection file
require 'database/DBController.php';

// require Product Class file
require 'database/Product.php';

// require Cart Class
require 'database/Cart.php';

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
// print_r($product->getData());

$productList = $product->getData();

// Cart object
$Cart = new Cart($db);
// $arr = array(
// 	"user_id" => 1,
// 	"item_id" => 2,
// );

// $Cart->insertIntoCart($arr);

// print_r($Cart->getCartId($product->getData('cart')));

