<?php
require_once("./connect_mysql.php");
//$_POST["token"] 判断是否为合法提交
if (isset($_POST["token"]) && $_POST["token"] == "add") {
	$name = $_POST["name"];
	$age = $_POST["age"];
	$sex = $_POST["sex"];
	$edu = $_POST["edu"];
	$salary = $_POST["salary"];
	$bonus = $_POST["bonus"];
	$city = $_POST["city"];

	$sql = "INSERT INTO studyinfo VALUES(null, '$name', '$sex', $age, '$edu', $salary, $bonus, '$city') ";

	if(mysqli_query($link, $sql)){
		echo "<h2>插入成功</h2>";
		header('refresh:3; url=./studyInfoSystem.php');
		die();
	}else{
		echo "<h2>插入失败</h2>";
		header('refresh:3; url=./studyInfoSystem.php');
		die();
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理</title>
</head>
<body>
	<div style="margin:10px auto;text-align: center;" width="600">
		<h2>添加学生信息</h2>
		<a href="./studyInfoSystem.php">返回</a>
	</div>
	<!-- 提交给当前页面 -->
	<form action="" method="POST">
		<table width="400" border="1" rules="all" align="center">
			<tr>
				<td width="100">姓名</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td width="100">性别</td>
				<td>
					<input type="radio" name="sex" value="男" checked>男
					<input type="radio" name="sex" value="女">女
				</td>
			</tr>
			<tr>
				<td width="100">年龄</td>
				<td>
					<input type="number" name="age">
				</td>
			</tr>
			<tr>
				<td width="100">学历</td>
				<td>
					<select name="edu">
						<option value="1">小学</option>
						<option value="2">初中</option>
						<option value="3">高中</option>
						<option value="4">大专</option>
						<option value="5">本科</option>
						<option value="6">研究生</option>
						<option value="7">博士</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="100">薪资</td>
				<td><input type="text" name="salary"></td>
			</tr>
			<tr>
				<td width="100">奖金</td>
				<td><input type="text" name="bonus"></td>
			</tr>
			<tr>
				<td width="100">城市</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr>
				<td width="100"></td>
				<td>
					<input type="submit" value="提交">
					<input type="hidden" name="token" value="add">
					<input type="reset" value="重置">
				</td>
			</tr>
		</table>

	</form>

</body>
</html>