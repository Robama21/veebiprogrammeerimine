<?php
	//echo "phphphphphphphphphp";
	$firstName = "Robin";
	$lastName = "Rannavete";
	$dateToday = date("d/m/y");
	$hourNow = date("d/m/y");
	$partOfDay = " ";
	if ($hourNow < 8) {
	$partOfDay = "Varajane hommik";
	}
	if ($hourNow >= 8  and $hourNow < 16){
	$partOfDay = "koolipäev";
	}
	if ($hourNow > 16) {
	$partOfDay = "loodetavasti vaba aeg";
	}
?>
<DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
				<title>
				<?php
					echo $firstName;
					echo " ";
					echo $lastName;
					
				?>
				õppetöö</title>
		</head>
			<body>
				<h1>
				<?php
					echo $firstName ." " .$lastName;
				?>
				</h1>
				<p>nothing to see here. *flies away*
					<?php
					echo "Tänane kuupäev on " .$dateToday."</p>";
					echo "<p>Lehe avamise hetkel oli " .$partOfDay."</p>";
					?>
				<img src="ykFr82X8gH-2.png">
				<img src="tlu_terra_600x800_2.jpg" alt="TLÜ Terra õppehoone">
				<a href="https://www.tlu.ee">Tallinna Ülikool</a>
				<a href="../../~cauphel/">magic program man</a>
			</body>
	</html>