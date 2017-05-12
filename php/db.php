<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "smoer";
// This first query is just to get the total count of rows
$conn = mysqli_connect($servername, $username, $password, $dbname);


 if (!$connection || !$db) {
     exit(mysql_error());
 }
