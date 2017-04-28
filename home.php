<!DOCTYPE HTML>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title> Информационная безопасность </title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/fonts.css" rel="stylesheet">

</head>

<body>
  <header>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <a href="home.php" class="navbar-brand">ИСЗИ <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

          <!-- <a class="navbar-brand" href="#"> Company name </a> синтаксис-->

        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="#"> Новости </a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Студентам <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"> Тут что-то будет </a></li>
                        <li><a href="#"> Тут что-то будет </a></li>
                          <!-- если понадобится разделитель <li class="divider"></li> -->
                        <li><a href="#"> Тут что-то будет </a></li>
                    </ul>
                </li>

                <li><a href="#"> Библиотека </a></li>
                <li><a href="#"> Мероприятия </a></li>
            </ul>
        </div>
       </div>
      </div>

  </header>

<main>

<?php

include_once("php/db.php");
$author = 'Admin';
$limit = 4;
$result = mysql_query("SELECT id, title, text, image, date, time, author FROM news
ORDER BY id DESC
LIMIT $limit
"); // DESC LIMIT 10 обратный порядок сортировки (вместо id = date)

mysql_close();
while ($row = mysql_fetch_assoc($result))
{?>

<main>

<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-8 col-sm-12">

        <h2><?php echo $row ['title']?></h2>
          <p>  <?php echo $row ['text']?></p>
          <small>Дата: <?php echo $row['date']?>,<?php echo $row['time']?>
                 Автор: <?php echo $row['author']?>
          </small>
    <div class="btn-toolbar">

          <button type="button" class="btn btn-default  ">
          Подробнее<i class="fa fa-arrow-right"></i>
          </button>
          <!-- Админ кнопки -->
          <form action="php/delete.php?id=<?php echo $row['id']?>" method="post">
              <button type="submit" class="btn btn-danger pull-right" value="Удалить новость">Удалить</button>
          </form>
          <form action="php/edit.php?id=<?php echo $row['id']?>" method="post">
              <button type="submit" class="btn btn-warning pull-right" value="Редактировать новость">Изменить</button>
          </form>
          <form action="php/add.php" method="post">
              <button type="submit" class="btn btn-success pull-right" value="Добавить новость">Добавить</button>
          </form>

    </div>
        <hr>
    </div>
  </div>
</div>
    <div id="scrolltop" class ="scroll-visible"></div>
    <?php }?>


              <ul class="pager">
                <li><a href="#">Предыдущая</a></li>
                <li><a href="#">Следующая</a></li>
              </ul>


</main>
<footer class="footer text-center">
    <div class="container">
        <small>  Smoer404 © Copyright 2017.</small>
    </div>
</footer>
<!--
<footer>
  <div class="container-fluid">
    <div class="row">

      <ol>
        <li> <a href="#">Регламентирующие документы </a> </li>
        <li> <a href="#">Направления обучения </a></li>
        <li> <a href="#">Документы для самостоятельной работы и бланки </a></li>
        <li> <a href="#">Учебно-методическая литература </a> </li>
        <li> <a href="#">Информационно-образовательная среда </a></li>
        <li> <a href="#">Научные труды </a></li>
        <li> <a href="#">Информатизация управления Университета </a></li>
        <li> <a href="#">Разработка электронных учебников и мультимедиа приложений </a></li>
        <li> <a href="#">Лаборатории </a></li>
        <li> <a href="#">Повышение уровня профессионального образования</a></li>
        <li> <a href="#">История </a></li>
      </ol>
    </div>
    </div>
</footer> -->

</body>
</html>
