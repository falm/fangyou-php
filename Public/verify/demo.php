<?php
	session_start();
	
	include('validationcode.class.php');

	$verify = new ValidationCode(100,30);

	$verify->showImage();
	$_SESSION['verify'] = md5($verify->getCheckCode());
?>