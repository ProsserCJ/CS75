<?php
require_once('../includes/helpers.php'); render('templates/header'); 

if (!isset($_SESSION['cart']))
	$_SESSION['cart']=Array();	
		
if (isset($_GET['choice'])) 	
	array_push($_SESSION['cart'], $_GET['choice']);
	
	echo '<form name="delete" method="get" action="delete.php">';
	foreach($_SESSION['cart'] as $item){
		echo '<input type="checkbox" name="selection[]" value ="'.$item.'">'.$item.'</input><br>';
	}
	
if (empty($_SESSION['cart'])) echo "There is nothing in your cart!<br>";	
?>
<input type='submit' value = 'Delete Checked'></input> 
</form>
<form name='checkout' action='checkout.php'>
	<input type='submit' name value='Checkout'> 
</form>
