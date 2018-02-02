<?php 
	$doosje1 = $_POST["input1"];
	$doosje2 = $_POST["input2"];
	$doosje3 = $_POST["input3"];
	$doosje4 = $_POST["input4"];
	$doosje5 = $_POST["input5"];
	$doosje6 = $_POST["input6"];
	$doosje7 = $_POST["input7"];
	$doosje8 = $_POST["input8"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad libs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
</head>
<body>
	<header>
		<h1 id="kop">Mad Libs</h1>
		<ul class="balk">
			<li  class="paniek"><a href="index.php"> Er heerst paniek...</a></li>
			<li class="onkunde"><a href="onkunde.html"> Onkunde</a></li>
		</ul>
	</header>
	<main class="main">
		<h1 id="h1">Er heerst paniek...</h1>
	<p class="p1">Er heerst paniek in het koninkrijk <?php echo $doosje3 ?>. Koning <? echo  $doosje6 ?> is ten einde raad en als koning <?php echo $doosje6 ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $doosje2 ?>.</p>
	<p class="p1"><?php echo $doosje2?>! Het is een ramp! Het is een schande!</p>
	<p class="p1">Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?</p>
	<p class="p1">Mijn <?php echo $doosje1 ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $doosje5 ?> voor hem gekocht!</p>
	<p class="p1">Majesteit, uw <?php echo $doosje1 ?> komt vast vanzelf weer terug.</p>
	<p class="p1">Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $doosje8 ?> leren?</p>
	<p class="p1">Maar Sire, daar kunt u toch uw <?php echo $doosje7 ?> voor gebruiken.</p>
	<p class="p1"><?php echo $doosje2 ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.</p>
	<p class="p1"><?= $doosje4 ?>, Sire.</p>
</main>
<footer class="footer">Deze website is gemaakt door <?php echo $doosje2 ?>.</footer>
</body>
</html>
