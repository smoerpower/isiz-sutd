<?php
$conn = mysqli_connect("localhost", "root", "123", "smoer");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
