<?php
	require_once('../includes/helpers.php'); render('templates/header'); 
	$n = $_GET['n'];
	$xml = simplexml_load_file("../menu.xml");
	$name = (string)$xml->xpath("//menu/category[@num='".$n."']")[0]['name'];
	foreach($xml->xpath("//menu/category[@num='".$n."']") as $cat)
		echo '<br><h2>'.$name.'</h2>';		
?>

<form method = 'get' action="cart.php">
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
<?php if ($name == 'Pasta'){ echo"
<br>
<input type='radio' name='pasta' value='Spaghetti'>Spaghetti</input>
<input type='radio' name='pasta' value='Ziti'>Ziti</input>
<input type='radio' name='pasta' value='Lasagna'>Lasagna</input>
<input type='radio' name='pasta' value='Ravioli'>Ravioli</input>
</form>";
}

render('templates/footer'); 
?>
