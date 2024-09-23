<?php
ob_start();
// Included header.php file
include 'header.php';
?>

<?php
// Included All Partials
include 'Template/_banner-area.php';

include 'Template/_top-sale.php';

include 'Template/_special-price.php';

include 'Template/_banner-ads.php';

include 'Template/_new-phones.php';

include 'Template/_blogs.php';
?>


<?php
include 'footer.php';
?>