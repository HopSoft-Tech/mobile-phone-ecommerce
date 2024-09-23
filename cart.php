<?php
ob_start(); // Start output buffering
// Included header.php file
include 'header.php';
?>

<?php
// Include cart items if it is not empty
count($product->getData('cart')) ? include 'Template/_cart-template.php' : include 'Template/notfound/_cart_notFound.php';

// Include wishlist items if it is not empty
count($product->getData('wishlist')) ? include 'Template/_wishlist_template.php' : include 'Template/notfound/_wishlist_notFound.php';

// Included top sale section
include 'Template/_new-phones.php';

?>

<?php
include 'footer.php';
?>