<?php 
session_start();
if ($_SESSION['login_name']!="" && $_SESSION['login_user']!="")
{
	$ans = $_SESSION['login_name'];
	echo $ans;
}

?>