<?php
var_dump($_POST);
session_start();

if(isset($_SESSION['LOGGED_IN_USER'])){
	header('Location: authorized.php');
	exit();
}else{
	$_SESSION['LOGGED_IN_USER']	= false;
}
function pageController(){

	$data = [];
	$data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$data['password']= isset($_POST['password']) ? $_POST['password'] : '';
	if ($data['username'] == '' && $data['password'] == '') {
		echo "Please enter valid username and password";
	}elseif (strtolower($data['username']) == 'guest' && strtolower($data['password']) == 'password') {
		$_SESSION['LOGGED_IN_USER'] = true;
		header('Location: authorized.php');
		exit();
	}else{
		echo "Login Failed";
	}
	
	return $data;
};
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>