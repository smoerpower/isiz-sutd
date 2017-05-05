<?php include "paggination.php"; ?>
<!-- <a class="navbar-brand" href="../home.php">
  <img alt="Brand" src="../images/logo_iszi.png" id="main">
</a>  -->
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Информационная безопасность </title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:500" rel="stylesheet">
</head> <!--Конец шапки -->
<body>
<main>
<div class="container-fluid"> <!-- Главный контейнер -->
<div class="row">
<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
<form class="form">
<fieldset>
<div class="row">
  <div class="col-lg-12">
      <div class="col-lg-5">
        <h4>Панель администратора</h4>
      </div>
      <div class="col-lg-2   col-lg-push-5">
        <h4><?php echo $textline2; ?> &nbsp <?php echo $textline1; ?></h4>
      </div>
  </div>
</div> <!--Конец шапки -->
	<div class="row">  <!--Конец шапки -->
		<div class="col-lg-6 col-md-6">
    <div class="col-lg-12">
    			<textarea class="form-control" rows="1" id="textArea" placeholder="Введите заголовок..."></textarea>
          <span class="help-block"></span>
    </div>
    <div class="col-lg-12">
    			<textarea class="form-control" rows="15"  id="textArea" placeholder="Введите основной текст..."></textarea>
          <span class="help-block"></span>
      <div class="text-center">
      <div class="btn-group" role="group" aria-label="...">
        <button type="submit" class="btn btn-success ">Добавить</button>
        <button type="submit" class="btn btn-warning">Редактировать</button>
        <button type="submit" class="btn btn-danger">Удалить</button>
        <button type="reset" class="btn btn-default">Отчистить</button>
      </div>
      </div>
    </div>
	  </div>
    <div class="row">
		<div class="col-lg-6 col-md-6">
		<div class="col-lg-5 col-md-5">
        <!-- <span class="help-block"></span> -->
        <div class="list-group">
          <?php echo $linkid; ?>
        </div>
	  </div>
		</div>
	  </div>
  </div>                <!--Конец шапки -->
	 	</div>
</div>
</div>
</fieldset>
</form>
</div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="../js/bootstrap.js"></script>
</body>
</html>
