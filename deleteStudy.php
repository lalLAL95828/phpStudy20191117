<?php
require_once("./connect_mysql.php");

//获取地址栏id
$id = $_GET["id"];

//删除sql
$sql = "DELETE FROM studyinfo WHERE id=$id";

if(mysqli_query($link, $sql))
{
	echo "<h2>删除成功</h2>";
	header("refresh:3;url=./studyInfoSystem.php");
}

