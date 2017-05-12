<?php
include_once "php/paggination.php";  ?>

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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>

<body>
<header>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">ИСЗИ <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="index.php"> Новости </a></li>
                <li><a href="catalog.php"> Библиотека </a></li>
            </ul>
        </div>
     </div>
    </div>
  </header>

<div class="container-fluid">
  <div class="row">
  <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">

<div class="row">
    <div class="col-lg-9 col-md-8">


    <?php echo $list; ?>

      </div>

<div class="row">
<div class="col-lg-3 col-md-4">

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

<div class="text-center">
<ul class="pagination pagination-sm">
  <?php echo $paginationCtrls; ?>
</ul>
</div>
  </div>




</div>

</div>
  </div>


        <footer>

            <div class="col-lg-12">
<div class="text-center">

              <ul class="list-unstyled">
                <li class="pull-right"><a href="#top"><span class="glyphicon glyphicon-chevron-up"></span></a></li>
              <p>Made by <a href="http://thomaspark.co/" rel="nofollow">Thomas Park</a>. Contact him at <a href="mailto:thomas@bootswatch.com">smoer661@gmail.com</a>.</p>
              <p>Based on <a href="http://getbootstrap.com/" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>

            </div>
            </div>

        </footer>


<!-- <footer class="footer text-center">
  <div class="container">
    <small>  Smoer404 © Copyright 2017.</small>
  </div>
</footer> -->

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/jquery-1.js"></script>
<script src="js/bootstrap.js"></script>

</body>


</html>
