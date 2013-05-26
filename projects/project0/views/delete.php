<?php session_start();
	if (isset($_GET['selection'])){
		foreach($_SESSION['cart'] as $key=>$arr){
			if (in_array($arr['name'], $_GET['selection'])){
				unset($_SESSION['cart'][$key]);
				unset($_GET['selection'][$arr['name']]);
			}
		}	
		unset($_GET['choice']);
	}	
	require('cart.php');	
?>
