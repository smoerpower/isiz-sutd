<?php

      $conn = mysqli_connect("localhost", "root", "123", "smoer");
/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
}
