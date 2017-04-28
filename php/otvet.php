<?php
$connection = mysql_connect("localhost", "root", "123" );
$db = mysql_select_db("smoer");
mysql_query("SET NAMES "utf8"");

 if(!$connection || !$db)
{
    exit(mysql_error());

} else {

  $result = mysql_query(" SELECT id , title, text, date, time, author FROM news
  ORDER BY id DESC
  LIMIT $limit")
  mysql_close();
  while ($row = mysql_fetch_assoc($result))
?>
