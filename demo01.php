<?php
$db_host = "localhost";
$db_password = "LALsq20190822";
$db_user = "root";
$db_port = "3306";
$db_database = "phpstudy";

$link = mysqli_connect($db_host.":".$db_port,$db_user,$db_password);

var_dump($link);



