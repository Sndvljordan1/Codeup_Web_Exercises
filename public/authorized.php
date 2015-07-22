<?php 
session_start();
function pageController(){

	$data = [];
	$data['message'] = "Authorized User: Access Granted";
	return $data;
}
extract(pageController());
?>
<!Doctype html>
<html>
	<head>
		<title>Authorized</title>
	</head>
	<body>
		<h1><?= $message;?></h1>
		<a href="login.php">BACK</a>
		<a href="logout.php">LOGOUT</a>
	</body>
</html>