<?php
$connection = mysql_connect("localhost", "root", "123" );
$db = mysql_select_db("smoer");


 if(!$connection || !$db)
{
    exit(mysql_error());
}?>
