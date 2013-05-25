<?php session_start();
	if (isset($_GET['selection'])){
		foreach($_GET['selection'] as $item){		
			if(($key = array_search($item, $_SESSION['cart'])) !== false)
			unset($_SESSION['cart'][$key]);			
		}
		unset($_GET['choice']);
	}
	require('cart.php');	
?>
