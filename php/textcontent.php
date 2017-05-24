<?php
include 'db.php';




if ($_GET['del_id']) {
    $id = intval($_GET['del_id']);// ожидаем integer
       $sql = mysql_query('DELETE FROM `news` WHERE `id` = '.$_GET['del_id']);
}


if (isset($_GET['id'])) { //Проверяем, передана ли переменная на редактирования
    if (isset($_POST['save'])) { //Если новое имя предано, то обновляем и имя и цену
        $sql = mysql_query('UPDATE `news` SET '
                .'`title` = "'.$_POST['title'].'",'
                .'`text` = '.$_POST['text'].' '
                .'`author` = '.$_POST['author'].' '
                .'WHERE `id` = '.$_GET['red_id']);
    }
}
?>


<?php
$sql = mysql_query("SELECT * FROM `news`", $link);
while ($result = mysql_fetch_array($sql)) {
    echo     '<tr><td>'.$result['id'].'</td>'.
        '<td>'.$result['title'].'</td>'.
        '<td>'.$result['text'].'</td>'.
        '<td>'.$result['author'].'</td>'.
        '<td><a href="?del_id='.$result['id'].'">Удалить</a></td>'.
        '<td><a href="?id='.$result['id'].'">Редактировать</a>.        </td></tr>';
}
?>

<?php
 if (isset($_GET['red_id'])) { //Если передана переменная на    редактирование
   //Достаем запсись из БД
   $sql = mysql_query("SELECT * FROM `news` WHERE `id`=".$_GET['red_id'], $link); //запрос к БД
   $result = mysql_fetch_array($sql); //получение самой записи
?>

 <form action="" method="post">
<input type="text" name="title" value="<?php echo($result['title']); ?>">
<input type="text" name="text" size="3" value="<?php echo($result['text']); ?>">
<input type="text" name="author" value="<?php echo($result['author']); ?>">
<input type="submit" value="OK"></td>
</form>

<?php

 }?>
<!-- https://ru.stackoverflow.com/questions/633846/%D0%A0%D0%B5%D0%B4%D0%B0%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-mysql-%D1%82%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B5-%D1%87%D0%B5%D1%80%D0%B5%D0%B7-php





$mysqli = new mysqli("localhost", "user", "password", "database");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


Второй явный косяк - вставка переменных в запросы напрямую. Необходимо обработать переменные перед формированием запроса:

if($_GET['del_id']){
    $id = intval($_GET['del_id']);// ожидаем integer
}


Смысл в том, что бы проверить каждую входящую переменную на соответствие ожидаемому типу данных и отсутствие "примесей". Далее можно формировать запрос:

if (!$mysqli->query("DELETE FROM `hyldia_users` WHERE `id` = '.$id"){
    echo " . $mysqli->erro . " " . $mysqli->error;
}

Выборка данных и формирование таблицы(mysqli):

$query = "SELECT * FROM `hyldia_users`";

if ($result = $mysqli->query($query)){
echo "<table>";//в своём примере вы не открыли таблицу
/* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>$row['id']";
        ... ... ...
        echo "</td></tr>"
    }
echo "</table>";
/* удаление выборки */
$result->free();
}


Запрос на изменение данных по выбранной записи(mysqli):

передавать name как параметр не корректно, правильнее все-таки id(уникальное значение). Поэтому лучше формируйте так:

<form action="" method="post">
    <input type="hidden" name="id" value="?php echo ($result['id']); ?>">
    <input type="text" name="nick" value="?php echo ($result['nick']); ?>">
    <input type="text" name="money" size="3" value="?php echo ($result['money']); ?>">
    <input type="submit" value="OK">
</form>

if($_POST){
  $id = intval($_POST['id']);
  ...
  $money = intval($_POSt['money'])// intval только если money не может быть минусовым, иначе (int)
  $query = "UPDATE hyldia_users SET money = $money, nick = $nick ... WHERE id= $id";
  $mysqli->query($query);
}


КОНЕЦ

























-->
