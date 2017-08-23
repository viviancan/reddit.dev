<!DOCTYPE html>
	<html>
	<head>
		<title>Roll Dice</title>
	</head>
	<body>

		<h1>Random Number: <?= $random ?></h1>
		<br>
		<h1>Guess: <?= $guess ?></h1>
		<br>

		<?php if($guess == $random): ?>
			<h2>Yay you guessed correct!</h2>
		<?php else : ?>
			<h2>Sorry you did not guess correctly!</h2>
		<?php endif ?>

	</body>
</html>