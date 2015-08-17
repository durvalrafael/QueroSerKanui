<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WordRank por Durval Rafael</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style>
		.container{
			max-width: 1170px;
			width: 100%;
			margin: auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Word Rank class in action baby</h1>
		<?php require ('class.php');
		# Debug like a ninja ;)
		# require '/kint/Kint.class.php';

		# Init class
		$rank = new rank;

		# Store init Class
		$array = $rank->init("data.txt", "/[aA-zZ|]{2,}/");

		# Check if works
		# Kint::dump($array);

		# Sim, a 'chave' é o 'valor'
		foreach ($array as $word => $times) : ?>
		
			<p>A palarva <strong><?php echo $word ?></strong> apareceu <strong> <?php echo $times ?> </strong> vezes</p>
		
		<?php endforeach; ?>
	</div>
</body>
</html>