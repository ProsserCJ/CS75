<?php 
	require_once('../includes/helpers.php'); render('templates/header'); 
	$n = $_GET['n'];
	$xml = simplexml_load_file("../menu.xml");
	foreach($xml->xpath("//menu/category[@num=".$n."]") as $cat)
		echo '<br><h2>'.$cat['name'].'</h2>';		
?>

<form action="cart.php">
<select name='choice'>
<?php	
	foreach($xml->xpath("//menu/category[@num=".$n."]/item") as $item){
			echo '<option>';
			echo $item["name"]."<br>"; 
			echo '</option>';
		}		
?>
</select>
<input type="submit" value="Add to Cart" >		
</form>

<?php render('templates/footer'); ?>
