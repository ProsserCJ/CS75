<?php session_start();
	require_once('../includes/helpers.php');
	render('templates/header');
	
	if (isset($_GET['page']))
		$page = $_GET['page'];
	else
		$page = 'categories';		
	
	switch($page){
		case 'categories':			
			render('categories');
			break;
			
		case 'category':		
			render('category', array('xml' => $xml));
			break;	
	}	
	render('templates/footer');
?>
