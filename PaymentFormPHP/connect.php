<?php
	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/dashboard/');
	// exit;

	$con=new mysqli('localhost','root','','payment_details');

	if(!$con){
		die(mysqli_error($con));
	}

?>
<!-- Something is wrong with the XAMPP installation :-( -->
