<?php
//引入数据库连接
require_once("./connect_mysql.php");
//执行查询
$sql = "SELECT * FROM studyinfo ORDER BY id ASC";
$result = mysqli_query($link, $sql);

//获取数据
$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
//获取学生的总数
$nums = mysqli_num_rows($result);

// print_r($arrs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理</title>
</head>
<body>
	<div style="margin:10px auto;text-align: center;" width="600">
		<h2>学生信息管理</h2>
		<a href="./addStudy.php">添加学生</a>
		<span>共有<font color="red"><?php echo $nums ?></font>个学生</span>
	</div>
	<table width="600" border="1" align="center" rules="all" cellpadding="5">
		<thead>
			<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>学历</th>
				<th>工资</th>
				<th>奖金</th>
				<th>城市</th>
				<th>操作选项</th>
			</tr>
		</thead>
		<tbody>

			<!-- 以下是两种不同的渲染方式 -->
			<?php
				foreach ($arrs as $value) {
			?>
			<tr align="center">
				<td><?php echo $value["id"] ?></td>
				<td><?php echo $value["name"] ?></td>
				<td><?php echo $value["sex"] ?></td>
				<td><?php echo $value["age"] ?></td>
				<td><?php echo $value["edu"] ?></td>
				<td><?php echo $value["salary"] ?></td>
				<td><?php echo $value["bonus"] ?></td>
				<td><?php echo $value["city"] ?></td>
				<td>
					<a href="">修改</a>
					<a href="#" onClick="confirmDel(<?php echo $value["id"] ?>)">删除</a>
				</td>
			</tr>
			<?php } ?>

			
			<?php
			// 另外一种渲染方式
			/*	foreach ($arrs as $value) {
					echo "<tr align='center'>
					        <td> $value[id] </td>
							<td> $value[name] </td>
							<td> $value[sex] </td>
							<td> $value[age] </td>
							<td> $value[edu] </td>
							<td> $value[salary] </td>
							<td> $value[bonus] </td>
							<td> $value[city] </td>
							<td></td>
						</tr>";
				}
			*/
			?>
		</tbody>
	</table>
	<script type="text/javascript">
		function confirmDel(id){
			if(confirm(id)){
				console.log("删除成功", id);
				//跳转到删除页面
				location.href = "./deleteStudy.php?id=" + id;

			}
		}

	</script>
</body>
</html>




