<?php 
	include 'lib.php';
	session_start();


	if(isset($_POST['rem']))
	{
		 
		 $var = rand(1000,9999);



		 $_SESSION['var']=$var;



		 setcookie('userinfo',$var,time()+5);



		 $_SESSION['username'] = $_POST['username'];



		 echo '<br />这个是SESSION内的数据：<br />';
		 p($_SESSION);
		 echo '<br />';
		 echo '<br />这个是COOKIE内的数据：<br />';
		 p($_COOKIE);


		 echo '<br />已记住密码<br />';

	}


	else


	{
		
		if(isset($_COOKIE['userinfo'])&&($_COOKIE['userinfo']==$_SESSION['var']))
			
			echo $_SESSION['username'].'您好，欢迎登录<br />';

		else 
			{
				echo $_POST['username'].'您好，欢迎登录<br />';

				if(isset($_SESSION['username']))
					unset($_SESSION['username']);
				if(isset($_SESSION['var']))
					unset($_SESSION['var']);
			}

		echo '<br />这个是SESSION内的数据：<br />';
		p($_SESSION);
		echo '<br />';
		echo '<br />这个是COOKIE内的数据：<br />';
		p($_COOKIE);
	}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<script>

		function loadin()
		{
			window.location.href='http://127.0.0.1/cookies/';
		}

	</script>
</head>
<body>
<pre>



	<tr>
		<td><input type="button" onclick="loadin()" value="重载欢迎页面" /></td>
	</tr>

</pre>
</body>
</html>


