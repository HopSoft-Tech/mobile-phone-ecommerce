<?php
$brand = array_map(function ($product) {
	return $product['item_brand'];
}, $productList);

$unique = array_unique($brand);
sort($unique);
shuffle($productList);
// print_r($unique);

// post request method
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['special_price_submit'])) {
		// addToCart method call Using $Cart object
		$Cart->addToCart($_POST['user_id'], $_POST['item_id']);
	}
}
?>
<!-- Special Price -->
<section id="special-price">
	<div class="container">
		<h4 class="font-rubik font-size-20">Special Price</h4>
		<div
			id="filters"
			class="button-group d-flex justify-content-end font-baloo font-size-16">
			<button class="btn is-checked" data-filter="*">All Brand</button>
			<?php
			array_map(function ($brand) {
				printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
			}, $unique);
			?>
		</div>

		<div class="grid">
			<?php foreach ($productList as $item): ?>
				<div class="grid-item border <?php echo $item['item_brand']; ?>">
					<div class="item py-2" style="width: 200px">
						<div class="product font-rale">
							<a href="product.php?item_id=<?php echo $item['item_id']; ?>"><img
									src="<?php echo $item['item_image'] ?? './assets/products/13.png'; ?>"
									alt="product1"
									class="img-fluid" /></a>
							<div class="text-center">
								<h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
								<div class="rating text-warning font-size-12">
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="fas fa-star"></i></span>
									<span><i class="far fa-star"></i></span>
								</div>
								<div class="price py-2">
									<span>$<?php echo $item['item_price'] ?? 0 ?></span>
								</div>
								<form method="POST">
									<input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1"; ?>">
									<input type="hidden" name="user_id" value="<?php echo 1; ?>">
									<?php
									if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
										echo '<button type="submit" disabled class="btn btn-success font-size-12">
									in the Cart
								</button>';
									} else {
										echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">
									Add to Cart
								</button>';
									}
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- Special Price -->