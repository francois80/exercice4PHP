<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 4 PHP</title>
	</head>
	<body>
		<h1>Créer une variable number. Créer une variable multiple.
			Afficher le résultat de number multiplié par tous les chiffres entre 1 et multiple.</h1>
			<?php
			$number = 234;
			$multiple= 48;?>
			<h2>$number = <?= $number ?> et $multiple = <?= $multiple ?>
			</h2>
			<?php
				for ($i=0; $i < $multiple ; $i++) { ?>
					<p><?php echo $number. ' X '. $i. ' = '. $number*$i ?></p>
				<?php
				}
			 ?>
	</body>
</html>
