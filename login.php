
<?php 
require_once 'dbconnect.php';
session_start();

if ($_POST['login']!="" and  $_POST['pass']!="")
{

$login = $_POST['login'];
$passw = $_POST['pass'];

$hashed_pass = md5($passw);

$query = mysqli_query($DBcon,"SELECT Name, Login, Password FROM minesweeper WHERE Login='".mysqli_real_escape_string($DBcon,$_POST['login'])."' LIMIT 1");

    $data = mysqli_fetch_assoc($query);

    if ($data['Password'] == $hashed_pass)
	{
		$_SESSION['login_name'] = $data['Name'];
		$_SESSION['login_user'] = $data['Login'];
		$DBcon -> close();
	} 
	else {
         echo "Your Login Name or Password is invalid";
      }
}
else
{
	echo "EMPTY required fields!";
}

$DBcon -> close();

?>
