<?php
//引入数据库连接
require_once("./connect_mysql.php");
var_dump($_GET["id"]);
if(isset($_GET["id"]) && $_GET["token"] == "change"){
    
    $sql = "SELECT * FROM studyinfo WHERE id={$_GET["id"]}";
    echo $sql;
    $result = mysqli_query($link, $sql);
    if($result){
        var_dump(mysqli_fetch_row($result));
    }
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理</title>
</head>
<body>
	<div style="margin:10px auto;text-align: center;" width="600">
		<h2>修改学生信息</h2>
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