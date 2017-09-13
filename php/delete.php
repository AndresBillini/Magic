<?php
require('db-local.php');
//require('db.php');
$result = mysql_query('TRUNCATE TABLE cards');
$sql = "TRUNCATE TABLE cards"; 
$conn->query($sql);
echo "Table deleted";
?>