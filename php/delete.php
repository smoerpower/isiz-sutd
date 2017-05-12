<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "smoer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM news WHERE id= '$id'   ";

if (mysqli_query($conn, $sql)) {
    echo "Запись успешно удалена!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





mysql_close();
?>

<a href = "admin.php"> Перейти обратно к сайту </a>
