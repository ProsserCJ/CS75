<?php require_once('../includes/helpers.php'); render('templates/header'); ?>

<p>You have purchased the following:</p>
<?php
	foreach($_SESSION['cart'] as $item){
		echo '<br>'.$item;		
	}
	
	session_Destroy();
?>
<br><br>
<p>Have a nice day!</p>
