<?php 

$main_phar="main-web.phar";

if (file_exists($main_phar)) {
	require_once $main_phar; 
} else {
	?>
<html><body><h1>Application not Initialized!</h1>(<?php echo $main_phar; ?> not found)</body></html>
	<?php
}
?>
