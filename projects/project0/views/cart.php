<?php require_once('../includes/helpers.php'); render('templates/header'); ?>
<h3>Items you have selected:</h3>
<?php 

if (!isset($_SESSION['cart']))
	$_SESSION['cart']=Array();	
		
if (isset($_GET['choice'])){
	$temp= $_GET['choice'];	
	$xml = simplexml_load_file("../menu.xml");	
	foreach($xml->xpath("//menu/category/item[@name='".$temp."']") as $x){
		$sPrice = (string)$x['sPrice'];
		$lPrice = (string)$x['lPrice'];
	} 	
	if (isset($_GET['pasta'])) $temp = $_GET['pasta'].' '.$temp;
	array_push($_SESSION['cart'], array('name' => $temp, 'sPrice' => $sPrice, 'lPrice' => $lPrice));
}
?>
<form name="delete" method="get" action="delete.php">
<?php
	foreach($_SESSION['cart'] as $item){
		
		$output = $item['name'].' - $'.$item['sPrice'];				
		echo '<input type="checkbox" name="selection[]" value = "'.$item['name'].'">'.$output.'</input><br>';
	}
	
if (empty($_SESSION['cart'])) echo "There is nothing in your cart!<br>";	
?>
<br>
<input type='submit' value = 'Delete Checked'></input> 
</form>
<form name='checkout' action='checkout.php'>
	<input type='submit' name value='Checkout'> 
</form>
