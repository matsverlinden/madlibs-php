<?php 
	$doosje1 = $_POST["input10"];
	$doosje2 = $_POST["input20"];
	$doosje3 = $_POST["input30"];
	$doosje4 = $_POST["input40"];
	$doosje5 = $_POST["input50"];
	$doosje6 = $_POST["input60"];
	$doosje7 = $_POST["input70"];
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
	<main class="main2">
		<h1 id="h1">Onkunde</h1>
		<p class="p2">Er zijn veel mensen die niet kunnen <?= $doosje1 ?>. Neem nou <?= $doosje2 ?>. Zelfs met de hulp van en <?= $doosje4 ?> of zelfs <?= $doosje3 ?> kan <?= $doosje2 ?> niet <?= $doosje1 ?>. Dat heeft niet te maken met een gebrek aan <?= $doosje5 ?>, maar met een te veel aan <?= $doosje6 ?>. Te veel <?= $doosje6 ?> leidt tot <?= $doosje7 ?> en dat is niet goed als je wilt <?= $doosje1 ?>. Helaas voor <?= $doosje2 ?></p>
	</main>

	<footer class="footer2">Deze website is gemaakt door <?php echo $doosje2 ?>.</footer>
</body>
</html>