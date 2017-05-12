
  <?php

  $conn = mysqli_connect("localhost", "root", "123", "smoer");

$row = mysql_fetch_assoc($result);
if (isset($_POST['add'])) { // если кнопка нажата
   $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));


    $sql = "INSERT INTO news (title, text, date, time, author)
VALUES ('$title', '$text', '$date', '$time', '$autor')";

    if (mysqli_query($conn, $sql)) {
      header(location 'admin.php');
        echo "Новая запись успешно добавлена!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
