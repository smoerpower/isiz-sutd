<?php
$conn = mysqli_connect($servername, $username, $password, $dbname);


$id = ($_GET['id']);


 $row = mysql_fetch_assoc($query);
if (isset($_POST['save'])) {
    $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));
    $date = $row['date'];
    $date = strftime('%e.%m.%Y , strtotime($date)');
    $time = $row['time'];
    $time = strftime('%K.%M , strtotime($time)');

    $query = "UPDATE news SET title = '$title', text='$text', author='$author' WHERE id = $id ";
    if (mysqli_query($conn, $query)) {
        echo '<div class="alert"> Запись успешно отредактировано! Вернуться в <a href="admin.php"><b></b>админ панель?</a> </div>';
    } else {
        echo "Error: Не выбрана запись" ;
    }
}


    $query = "SELECT * FROM news WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($query)) {  /* извлечение ассоциативного массива */
            $text = $row['text'];
            $title = $row['title'];
            $author = $row['author'];
        }
        mysqli_free_result($query);
    }

mysqli_close($conn);
