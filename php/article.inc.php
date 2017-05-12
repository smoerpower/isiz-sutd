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



if ($_GET['del_id']) {
    $id = intval($_GET['del_id']);// ожидаем integer
       $sql = mysql_query('DELETE FROM `news` WHERE `id` = '.$_GET['del_id']);
}


if (isset($_GET['red_id'])) { //Проверяем, передана ли переменная на редактирования
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
        '<td><a href="?red_id='.$result['id'].'">Редактировать</a>.        </td></tr>';
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
<!-- https://ru.stackoverflow.com/questions/633846/%D0%A0%D0%B5%D0%B4%D0%B0%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-mysql-%D1%82%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B5-%D1%87%D0%B5%D1%80%D0%B5%D0%B7-php -->
