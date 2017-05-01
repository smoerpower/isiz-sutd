<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <title> Добавить новость</title>
</head>

<body>

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

$row = mysql_fetch_assoc($result);
if (isset($_POST['add'])) { // если кнопка нажата
   $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));
    $date = $_POST['date'];
    $time = $_POST['time'];


    $sql = "INSERT INTO news (title, text, date, time, author)
VALUES ('$title', '$text', '$date', '$time', '$autor')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


<a href="../home.php">Перейти на главную</a>

<form method="post" action="add.php">

Название новости
<div class="add-title">
   <input type="text" name ="title" />
</div>

Текст новости
<div class="add-text">
    <textarea cols="40" rows="10" name ="text" > </textarea>
</div>

Автор новости <br />
<div class="add-author">
  <input type="text" name="author" /> <br />

  <input type="text" name="date" value="<?php echo date('Y-m-d'); ?> " />
  <input type="text" name="time" value="<?php echo date('H:i:s'); ?> " />
</div>
<input type ="submit" name="add" value ="Добавить"/>
<input type="reset" Value=" Отчистить ">
</form>



  </body>
</html>
