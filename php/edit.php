<?php
$conn = mysqli_connect("localhost", "root", "123", "smoer");
if ($conn->connect_error) {
    die("$mysqli->connect_errno: $conn->connect_error");
}


$id = ($_GET['id']);

if ($_GET['id']) {
    $query = "SELECT * FROM news ";

    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {  /* извлечение ассоциативного массива */
            $text = $row['text'];
            $title = $row['title'];
            $author = $row['author'];
        }
    }

/* удаление выборки */
}

//Если передана переменная на    редактирование /Достаем запсись из БД / ожидаем integer //запрос к БД
       // DESC LIMIT 10 обратный порядок сортировки (вместо id = date)
 $row = mysql_fetch_assoc($query);
if (isset($_POST['save'])) {
    $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));
    $date = $row['date'];
    $date = strftime('%e.%m.%Y , strtotime($date)');
    $time = $row['time'];
    $time = strftime('%K.%M , strtotime($time)');

    $conn->query("UPDATE news SET title = '$title', text='$text', author='$author' WHERE id = $id ");
    pg_free_result($query);
}

mysqli_close($conn)
?>

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
            header('location: admin.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        pg_free_result($sql);
    }


    ?>
