<!-- <!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Редактирование новости</title>


</head>

<body>


<a href="../home.php">Перейти на главную</a>
 -->

<?php
include_once("db.php");

$id = $_GET['id'];


$result = mysql_query("SELECT title, text, date, time, author FROM news
                      WHERE id='$id'
      ");     // DESC LIMIT 10 обратный порядок сортировки (вместо id = date)




 $row = mysql_fetch_assoc($result);


if(isset($_POST['save']))


{
    $title = strip_tags(trim ($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));


    mysql_query("UPDATE news SET title = '$title', text='$text', author='$author' WHERE id ='$id' ");
    mysql_close();
}

?>
