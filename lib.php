<?php 

/**
 * 跳转页面函数
 */
function load($url)
{
	$url1="http://127.0.0.1/cookies/".$url;
	echo '<script>';
	echo  "window.location.href='$url1'"; 
	echo '</script>';
}


/**
 * 格式化打印
 */
function p($arr)
{
	echo '<pre>';
	print_r ($arr);
	echo '</pre>';
}


 ?>
