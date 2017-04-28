<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title> Информационная безопасность </title>

</head>

<body>

  <header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


      <!-- <div class="user-button">

          <form action="php/register.php">
              <button type="submit">Зарегистрироваться</button>
          </form>

              <form action="php/login.php">
                  <button type="submit">Войти</button>
              </form>
       </div> -->

<div class="navcont">

    <div class="nav">
    <ul>
      <li><a href="#">Новости</a></li>
      <li><a href="#">Выпусникам</a></li>

    <li class="drop">
          <a href="#">Студентам</a>
      <div class="dropdownContain">
        <div class="dropOut">
              <ul>
                  <li>Тут что-то будет</li>
                  <li>Тут что-то будет</li>
                  <li>Тут что-то будет</li>
                  <li>Тут что-то будет</li>
              </ul>
       </div>
      </div>
      </li>

    <li class="drop">
        <a href="#">Преподавателям</a>
      <div class="dropdownContain">
        <div class="dropOut">
              <ul>
                  <li>Тут что-то будет</li>
                  <li>Тут что-то будет</li>
                  <li>Тут что-то будет</li>
                  <li>Тут что-то будет</li>
             </ul>
               </div>
          </div>
         </li>
            <li><a href="#">Библиотека</a></li>
            <li><a href="#">Контакты</a></li>

            </div>
        </div>
  </header>




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
    <div class="full-content">
      <div class="content">

          <div class="title-content">
              <h2><?php echo $row ['title']?></h2>
            </div>

              <div class="text-content">
                  <?php echo $row ['text']?>
                </div>

                <div class="date-time">
                      <p> Дата публикации: <?php echo $row['date']?> / <?php echo $row['time']?>
                         Автор новости: <?php echo $row['author']?></p>
                </div>

              </div>

              <div class="admin-button">
                    <form action="php/edit.php?id=<?php echo $row['id']?>" method="post">
                          <button type='submit' name='editnews' value='Редактировать'>
                              Редактировать запись</button></form>

                    <form action="php/delete.php?id=<?php echo $row['id']?>" method="post">
                          <button type='submit' name='deletenews' value='Удалить'>
                              Удалить запись</button></form>

                    <form action="php/add.php" method="post">
                          <button type='submit' name='addnews' value='+Новость'>
                              Добавить запись</button></form>
              </div>
            </div>


<?php }?>

    <div id="scrolltop" class ="scroll-visible"></div>
</main>


<footer>

    <div class="wrap">
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

</footer>

</body>
</html>
