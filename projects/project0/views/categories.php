<ul>
<?php
	$xml = simplexml_load_file("../menu.xml");
	foreach($xml->xpath('//menu/category') as $cat){
		echo '<li>';
		echo '<a href="../views/category.php?n='.$cat['num'].'")>'.$cat["name"].'</a>';	
		echo '</li>';
	}
?>
</ul>
