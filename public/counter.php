<?php 
var_dump($_GET);
function pageController(){
	$data = [];
	if(isset($_GET['name'])){
		$counter = $_GET['counter'];
		if(!empty($_GET)){
			if($_GET['name'] == 'up'){
				$counter+=1;	
			}elseif ($_GET['name'] == 'down') {
				$counter-=1;	
			}
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
		<title>Count</title>
	</head>
	<body>
		<h1>TIME TO COUNT!!!!</h1>
		<a href="counter.php?name=up&counter=<?= $count; ?>">UP</a>
		<a href="counter.php?name=down&counter=<?= $count; ?>">DOWN</a>
		<h2><?= $count; ?></h2>
	</body>
</html>