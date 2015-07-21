<?php
function pageController()
{
    // Initialize an empty data array.
    $data = array();
    // $favThings = ['Raindrops on roses', 'whiskers on kittens', 'bright copper kettles', 'warm oven mittens', 'brown paper packages tied up with string'];
    // Add data to be used in the html view.
    $data['favThings'] = ['Raindrops on roses', 'whiskers on kittens', 'bright copper kettles', 'warm oven mittens', 'brown paper packages tied up with string'];

    // Return the completed data array.
    return $data;    
}
extract(pageController());

?>
<!Doctype html>
<html>
	<head>
		<title>Fave Things</title>
	</head>
	<body>
		<div class="div">
			<table class=" col-md-4 container  table table-striped table-bordered">
			<? foreach ($favThings as $thingy): ?>
				<tr><td><?= $thingy; ?></td></tr>
			<? endforeach; ?>
			</table>
			<h1 class="container">These are a few of my favourite things...</h1>
		</div>
	</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
	table{
		color: burlywood;
		font-size: 1.5em;
	}
	.div{
		margin: 150px;
		width: 450px;
	}
	h1{
		position: relative;
		float: left;
	}
</style>
</html>