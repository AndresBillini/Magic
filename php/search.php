<?php

$mysql_userB = 'root';
$mysql_passB = '';
$mysql_host = '127.0.0.1';
$mysql_db = 'magic';
$conn = mysqli_connect($mysql_host,$mysql_userB,$mysql_passB,$mysql_db);

if(isset($_GET['name'])){

	$name = mysqli_real_escape_string($conn,$_GET['name']);

	$sql = "SELECT artist FROM cards WHERE (name LIKE '%$name%')";
		if($sql_run = mysqli_query($conn,$sql)){

            while($row = $sql_run->fetch_assoc()) {
				echo $row['artist']."<br>";
			}
		}
}

?>
