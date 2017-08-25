<?php

$mysql_userB = 'root';
$mysql_passB = '';
$mysql_host = '127.0.0.1';
$mysql_db = 'magic';
$conn = mysqli_connect($mysql_host,$mysql_userB,$mysql_passB,$mysql_db);

if(isset($_GET['artist']) && isset($_GET['cmc']) && isset($_GET['colorIdentity']) && isset($_GET['colors']) && isset($_GET['edition']) && isset($_GET['manaCost'])
&& isset($_GET['name']) && isset($_GET['number']) && isset($_GET['numberOfCardsOfEdition']) && isset($_GET['rarity']) && isset($_GET['text']) && isset($_GET['types']) ){

	$artist = mysqli_real_escape_string($conn,$_GET['artist']);
	$cmc = mysqli_real_escape_string($conn,$_GET['cmc']);
	$colorIdentity = mysqli_real_escape_string($conn,$_GET['colorIdentity']);
	$colors = mysqli_real_escape_string($conn,$_GET['colors']);
	$edition = mysqli_real_escape_string($conn,$_GET['edition']);
	$manaCost = mysqli_real_escape_string($conn,$_GET['manaCost']);
	$name = mysqli_real_escape_string($conn,$_GET['name']);
	$number = mysqli_real_escape_string($conn,$_GET['number']);
	$numberOfCardsOfEdition = mysqli_real_escape_string($conn,$_GET['numberOfCardsOfEdition']);
	$rarity = mysqli_real_escape_string($conn,$_GET['rarity']);
	$text = mysqli_real_escape_string($conn,$_GET['text']);
	$types = mysqli_real_escape_string($conn,$_GET['types']);

	$sql = "INSERT INTO cards (artist,cMC,colorIdentity,colors,edition,manaCost,name,numbers,numberOfCardsOfEdition,rarity,texts,types) VALUES ('$artist','$cmc','$colorIdentity','$colors','$edition','$manaCost',
	'$name','$number','$numberOfCardsOfEdition','$rarity','$text','$types')";

	$conn->query($sql);
	echo $sql;

}

?>
