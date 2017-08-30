<?php

/*$mysql_userB = 'root';
$mysql_passB = '';
$mysql_host = '127.0.0.1';
$mysql_db = 'magic';*/
$mysql_userB = 'fs_magic';
$mysql_passB = 'lctKbMhX05wlD92E';
$mysql_host = 'fractalsstudio.ipagemysql.com';
$mysql_db = 'fs_magic';
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
