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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:500" rel="stylesheet">

</head>

<body>

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
    <!--  zamena slobikov
    <div class="row">
      <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
      <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
    </div> -->

<div class="container-fluid">
  <div class="col-lg-5 col-md-5 col-lg-offset-2 col-md-offset-2">
            <?php
            include_once("php/db.php");
            $author = 'Admin';
            $limit = 4;
            $result = mysql_query("SELECT id, title, text, image, date, time, author FROM news
            ORDER BY id DESC
            LIMIT $limit
            ");

            mysql_close();
            while ($row = mysql_fetch_assoc($result)) {
                ?>
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <article id="<?php echo $row['id']?>" name="post-id">
        <h2>
          <?php echo $row ['title']?>
        </h2>
          <small>
            Дата: <?php echo $row['date']?>,<?php echo $row['time']?>
            Автор: <?php echo $row['author']?>
          </small>
          <p><?php echo $row ['text']?></p>

    <div class="btn-toolbar">
          <button type="button" class="btn btn-default pull-right">
          Подробнее<i class="fa fa-arrow-right"></i>
          </button>
          <!-- Админ кнопки -->
          <form action="php/add.php" method="post">
              <button type="submit" class="btn btn-success pull-left" value="Добавить новость">Добавить</button>
          </form>
          <form action="php/edit.php?id=<?php echo $row['id']?>" method="post">
              <button type="submit" class="btn btn-warning pull-left" value="Редактировать новость">Изменить</button>
          </form>
          <form action="php/delete.php?id=<?php echo $row['id']?>" method="post">
              <button type="submit" class="btn btn-danger pull-left" value="Удалить новость">Удалить</button>
          </form>
          </div>
        </div>
      </article>
  </div>
        <?php

            }?>

            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div> <!--- тут заканчивается колонка контента --->

<div class="col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">Контактная информация</div>
          <div class="panel-body">
              <span class="glyphicon glyphicon-earphone" aria-hidden="true">
              </span> Телефон: +793218312 <hr />
              <span class="glyphicon glyphicon-envelope" aria-hidden="true">
               </span> Email: isiz-sutd@gmail.com <hr />
               <span class="glyphicon glyphicon-home" aria-hidden="true">
              </span> Адресс: Вознессенский проспект,д20
            </div>
        </div>









      </div>
    </div>


  </div>
</div>


    <footer class="footer text-center">
        <div class="container">
            <small>  Smoer404 © Copyright 2017.</small>
        </div>
    </footer>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>

<script src="js/bootstrap.js">
</script>

</body>

</html>
