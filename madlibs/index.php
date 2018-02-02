<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
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
		<p class="vragen">Welk dier zou je nooit als huisdier willen hebben?</p>
		<p class="vragen">Wie is de belangrijkste persoon in je leven?</p>
		<p class="vragen">In welk land zou je graag willen wonen?</p>
		<p class="vragen">Wat doe je als je je verveelt?</p>
		<p class="vragen">Met welk speelgoed speelde je als kind het meest?</p>
		<p class="vragen">Bij welke docent spijbel je het liefst?</p>
		<p class="vragen">Als je €100.000,- had wat zou je dan kopen?</p>
		<p class="vragen">Wat is je favoriete bezigheid?</p>
		 
		<form action="verhaal_1.php" method="post">
		<div class="input">
		<input type="text" name="input1">
		<input type="text" name="input2">
		<input type="text" name="input3">
		<input type="text" name="input4">
		<input type="text" name="input5">
		<input type="text" name="input6">
		<input type="text" name="input7">
		<input type="text" name="input8">
		<button type="submit" class="knop">Versturen</button>
	</div>
</form>
	</main>
</body>
</html>