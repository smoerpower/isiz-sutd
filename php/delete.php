<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "smoer";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

$id = $_GET['id'];

$sql = "DELETE FROM news WHERE id= '$id' ";

if (mysqli_query($conn, $sql)) {
    header('location: admin.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysql_close();
