<?php

//require('db-local.php');
require('db.php');

if(isset($_GET['artist']) && isset($_GET['cmc']) && isset($_GET['colorIdentity']) && isset($_GET['colors']) && isset($_GET['edition']) && isset($_GET['manaCost'])
&& isset($_GET['name']) && isset($_GET['power']) && isset($_GET['rarity']) && isset($_GET['text']) && isset($_GET['toughness']) && isset($_GET['types']) ){

	$artist = mysqli_real_escape_string($conn,$_GET['artist']);
	$cmc = mysqli_real_escape_string($conn,$_GET['cmc']);
	$colorIdentity = mysqli_real_escape_string($conn,$_GET['colorIdentity']);
	$colors = mysqli_real_escape_string($conn,$_GET['colors']);
	$edition = mysqli_real_escape_string($conn,$_GET['edition']);
	$manaCost = mysqli_real_escape_string($conn,$_GET['manaCost']);
	$name = mysqli_real_escape_string($conn,$_GET['name']);
	$power = mysqli_real_escape_string($conn,$_GET['power']);
	$rarity = mysqli_real_escape_string($conn,$_GET['rarity']);
	$text = mysqli_real_escape_string($conn,$_GET['text']);
    $toughness = mysqli_real_escape_string($conn,$_GET['toughness']);
	$types = mysqli_real_escape_string($conn,$_GET['types']);

	$sql = "INSERT INTO cards (artist,cmc,colorIdentity,colors,edition,manaCost,name,power,rarity,texts,toughness,types) VALUES ('$artist','$cmc','$colorIdentity','$colors','$edition','$manaCost',
	'$name','$power','$rarity','$text','$toughness','$types')";

	$conn->query($sql);
	echo $sql;

}

?>
