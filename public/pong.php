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
		<title>Pong</title>
	</head>
	<body>
		<h1>PONG!!!!</h1>
		<a href="ping.php?name=hit&counter=<?= $count; ?>">Hit</a>
		<a href="pong.php?name=miss&counter=<?= $count; ?>">Miss</a>
		<h2><?= $count; ?></h2>
	</body>
</html>