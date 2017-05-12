<!DOCTYPE>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Информационная безопасность </title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:500" rel="stylesheet">
</head>

<body>


              <h4><a href="admin.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></h4>
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


$result = mysql_query("SELECT title, text, date, time, author FROM news
                      WHERE id='$id'
      ");   // DESC LIMIT 10 обратный порядок сортировки (вместо id = date)




 $row = mysql_fetch_assoc($result);
if (isset($_POST['save'])) {
    $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));


    $conn->query("UPDATE news SET title = '$title', text='$text', author='$author' WHERE id ='$id' ");
    mysql_close();
}
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
      <div class="row">
        <div class="col-lg-12 col-md-12">
           <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="page-header">
                  <h3><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Управление содержимым
                  <small> / Запись #<?php echo $id; ?></small></h3>
                </div>
              </div>
            </div>
           </div>
            <div class="form-group">
             <form method="post">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-12">
                <h4>Заголовок</h4>
                  <input type="text"  id="focusedInput" class="form-control"
                   name ="title" value="<?php echo $title;?>"/>
                   <p class="help-block">Help text here.</p>
                </div>
                 <div class="col-lg-12">
                   <h4>Текст</h4>
                   <textarea id="focusedInput" class="form-control" rows="20"
                  name ="text"><?php echo $text;?></textarea>
                 </div>
                  <div class="col-lg-12">
                    <div class="col-lg-4 col-md-4 ">
                        <h5>Дата
                        <input type="text"  id="focusedInput" class="form-control"
                        name="author" /></h5>
                    </div>
                     <div class="col-lg-4 col-md-4 ">
                        <h5>Время
                        <input type="text"  id="focusedInput" class="form-control"
                         name="author" /></h5>
                     </div>
                      <div class="col-lg-4 col-md-4 ">
                        <h5>Автор
                        <input type="text"  id="focusedInput" class="form-control"
                         name="author" value="<?php echo $author;?>"/></h5>
                      </div>
                    </div>
                     <div class="col-lg-12">
                        <a type ="submit" class="btn btn-danger pull-right" href="delete.php?id=<?php echo $id;?>"> Удалить </a>
                          <a type ="submit" class="btn btn-warning pull-right" name="save" href="edit.php?id=<?php echo $id;?> "> Сохранить </a>
                     </div>
                  </div>
                 </form>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
