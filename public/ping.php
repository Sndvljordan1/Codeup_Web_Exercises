<?php 
var_dump($_GET);
function pageController(){
	$data = [];
	if(isset($_GET['name'])){
		$counter = $_GET['counter'];
		if($_GET['name'] == 'hit'){
			$counter+=1;	
		}elseif ($_GET['name'] == 'miss') {
			$counter = "Game Over";	
		}
	}else{
		$counter = 0;
	}
	$data['count'] = $counter;
	return $data;
}
extract(pageController());
?>
<html>
	<head>
		<title>Ping</title>
	</head>
	<body>
		<h1>PING!!!!</h1>
		<a href="pong.php?name=hit&counter=<?= $count; ?>">Hit</a>
		<a href="ping.php?name=miss&counter=<?= $count; ?>">Miss</a>
		<h2><?= $count; ?></h2>
	</body>
</html>