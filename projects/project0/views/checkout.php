<?php session_start();
if ($_SESSION['cart'] !== Array()){
	require_once('../includes/helpers.php'); render('templates/header'); 
?>

<h3>The following will be charged to your imaginary account:</h3>
<?php
	$total = 0;
	foreach($_SESSION['cart'] as $item){
		echo $item['name'].' $'.$item['sPrice'].'<br>';
		$total += (double)$item['sPrice'];		
	}
	printf('<h2>Total: $%.2lf</h2>', $total);
	
	session_Destroy();
} 
else require('cart.php'); 
?>
