<?php
require('functions.php');

	$firstName = "";
	$lastName = "";
	$fullName = "";
	$birthYear = null;
	$birthMonth = null;
	$birthDay = null;
	$birthDate = "";
	$gender = "";
	$email = "";

	if (isset($_POST["firstname"]) and !empty($_POST["firstname"])) {
			$firstname = test_input($_POST["firstname"]);
	} else {
		$fistNameError = "Palun sisesta oma eesnimi!";
	}
	
	if (isset($_POST["lastname"])){
		$lastName = test_input($_POST["lastname"]);
	}

	$months = [
		'et' => [
			1 => 'Jaanuar',
			2 => 'Veebruar',
			3 => 'Märts',
			4 => 'Aprill',
			5 => 'Mai',
			6 => 'Juuni',
			7 => 'Juuli',
			8 => 'August',
			9 => 'September',
			10 => 'Oktoober',
			11 => 'November',
			12 => 'Detsember',
		]
	];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IF18 praktikum</title>
		<link rel="stylesheet" href="http://greeny.cs.tlu.ee/~cauphel/site.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"> 
	</head>

	<body>
		<div class="center">
            <h1><?= basename(__FILE__) ?></h1>

			<hr>
			<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
					<label for="firstname">Eesnimi:</label><br>
					<input type="text" name="firstname" /><br>
					<label for="lastname">Perenimi</label><br>
					<input type="text" name="lastname" /><br>
					<input type="radio" name="gender" value="1"> Naine<br>
                    <input type="radio" name="gender" value="2"> Mees<br>
                    <select name="birthDay">
                        <option value="" selected disabled>Päev</option>
                        <?php for($i = 0; $i <= 31; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select><br>

                    <select name="birthMonth">
                        <option value="" selected disabled>Kuu</option>
                        <?php foreach($months['et'] as $key => $month): ?>
                            <option <?= $month == $key ? 'selected':'' ?> value="<?= $key ?>"><?= $month ?></option>
                        <?php endforeach; ?>
                    </select><br>

                    <select name="birthYear">
                        <option value="" selected disabled>Aasta</option>
                        <?php for($i = date('Y') - 15; $i < date('Y'); $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select><br>
					
					<input type="submit" name="submitUserData" value="Saada andmed" />
			</form>
		</div>
	</body>
</html> 