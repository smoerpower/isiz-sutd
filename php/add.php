<?php
$conn = mysqli_connect("localhost", "root", "123", "smoer");
$row = mysql_fetch_assoc($query);
if (isset($_POST['add'])) {
    $text = strip_tags(trim($_POST['text']));
    $title = strip_tags(trim($_POST['title']));
    $date = strftime('%e.%m.%Y');
    $time = strftime('%k:%M');
    $author = strip_tags(trim($_POST['author']));

    $query ="INSERT INTO `news` (text, title, date, time, author)
    VALUES ('$text', '$title', '$date', '$time' , '$author')";
    if (mysqli_query($conn, $query)) {
        echo '<div class="alert alert-success> Запись успешно добавлена! Вернуться в <a href="admin.php">админ панель?</a> </div>" mysqli_close($conn);';
    } else {
        "Error: " . $conn->query . "<br>" . print_r(mysqli_error_list($conn));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title> Загрузчик </title>
  </head>
  <body>
<div class="container-fluid">
<div class="row">
 <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
  <form method="post">
    <div class="col-lg-10">     <!-- Заголовок\Текст -->
      <h4> Заголовок </h4>
        <input type="text" name ="title" class="form-control" placeholder="Заголовок.."/>
    </div>
        <div class="col-lg-10">
          <h4>Текст</h4>
            <textarea cols="60" rows="15" class="form-control"  name ="text">
            </textarea>
        </div>
          <div class="col-lg-12">        <!-- Автора\Дата\Время -->
            <div class="col-lg-3">
              <h4>Автор</h4>
              <input type="text" name="author" class="form-control" placeholder="Администратор" />
            </div>
            <div class="col-lg-3">
              <h4>Дата</h4>
              <input name="data" class="form-control" value="<?php echo $time = strftime('%k:%M');?>"/>
            </div>
            <div class="col-lg-3">
              <h4>Время</h4>
              <input name="time" class="form-control"value="<?php echo $date = strftime('%e.%m.%Y');?>"/>
          </div>
            <div class="col-lg-12">
              <div class="btn-toolbar" role="toolbar">         <!-- Кнопки -->
                <button type="submit" class="btn btn-success pull-right" name="add" value="Добавить">Добавить</button>
                <button type="file" class="btn btn-info pull-right" name="picture" class="btn btn-default">Загрузить</button>
              </div>
            </div>
  </form>
 </div>
</div>
</div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>
