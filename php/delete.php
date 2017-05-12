<?php
include_once 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM news WHERE id= '$id'   ";

if (mysqli_query($conn, $sql)) {
    header('location: admin.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysql_close();
