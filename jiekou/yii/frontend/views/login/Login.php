<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
</head>
<body>
	<form action="index.php?r=login/login" method="post">
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="password" id=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="登陆"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>
<!-- 
	$arr = '';
	$array = array('a'=>'b','c'=>'d');
	foreach($arra as $k => $y){
		$arr. = $k."=".$y;
	}
	rti
 -->