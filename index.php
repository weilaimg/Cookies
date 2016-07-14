<?php 
	include 'lib.php';
	session_start();

	if(isset($_COOKIE['userinfo']))
	{
		load('success.php');
	}


 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>Document</title>
</head>
<body>




	<form action="success.php" method="post">
	<tr>
		<td>用户名：</td>
		<td><input type="text" name="username" /></td>
		<td>密码：</td>
		<td><input type="password" name="passwd" /></td>

		<td><input type="submit" value='提交' /></td>
		
		<td><label><input name="rem" type="checkbox" value="1" />记住密码</label></td>
	</tr>
	</form>





</body>
</html>