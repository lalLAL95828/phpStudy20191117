<?php

// create table studyinfo(
// 	id int unsigned primary key auto_increment,
// 	name varchar(12),
// 	sex enum("男", "女"),
// 	age tinyint unsigned,
// 	edu enum("小学", "初中", "高中", "大专", "本科", "研究生", "博士"),
// 	salary float(8,2) unsigned,
// 	bonus float(6,2) unsigned,
// 	city varchar(32)
// );


$db_host = "localhost";
$db_port = "3306";
$db_user = "root";
// $db_password = "LALsq20190822";
$db_password = "lal123456";
$db_database = "phpstudy";
$db_charset = "utf-8";

// 连接数据库
$link = @mysqli_connect($db_host.":".$db_port, $db_user,$db_password);
// 判断是否连接成功
if(!$link)
{
	echo "<h2>连接失败</h2>";
	echo mysqli_connect_error();
	die();//停止往下执行
}
//设置连接的数据库
if(!mysqli_select_db($link, $db_database))
{
	//字符串靠在一起时，需要加{}来区分
	// echo "连接{$db_database}数据库失败";
	echo "连接 $db_database 数据库失败";
	die();
}
//设置字符
mysqli_set_charset($link, $db_charset);


