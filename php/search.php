<?php
require('db-local.php');
//require('db.php');

if(isset($_GET['name'])){

	$name = mysqli_real_escape_string($conn,$_GET['name']);
	$edition = mysqli_real_escape_string($conn,$_GET['edition']);

	$sql = "SELECT name FROM cards WHERE (name LIKE '%$name%' AND edition LIKE '%$edition%') ORDER BY name ASC";
    $i = 0;
		if($sql_run = mysqli_query($conn,$sql)){

            while($row = $sql_run->fetch_assoc()) {
                if($i<21){
                    echo $row['name']."<br>";
                    $i++;
                }

			}
		}
}

?>
