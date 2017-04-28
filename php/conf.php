<?php
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', '123');
define ('DB_NAME', 'smoer');
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("MySQL Error: " . mysql_error());
mysql_query("SET NAMES utf8") or die ("<br>Invalid query: " . mysql_error());
mysql_select_db(DB_NAME) or die ("<br>Invalid query: " . mysql_error());


$error[0] = 'ERROR[0]';
$error[1] = 'ERROR[1]';
$error[2] = 'ERROR[2]';
?>
