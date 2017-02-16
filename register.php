<?php
require_once 'dbconnect.php';
session_start();
// define variables and set to empty values

if ($_POST['name']!="" and $_POST['username']!="" and $_POST['password']!="")
{

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$hashed_pass = md5($password);

$check_login = $DBcon-> query("SELECT Login from minesweeper where Login='$username'");
$count = $check_login->num_rows;

if ($count == 0)
{
  $sql = "INSERT INTO minesweeper (Name, Login, Password)
  values ('$name', '$username', '$hashed_pass')";

 if ($DBcon->query($sql)) {
   echo 'successfully registered!';
  }else {
   echo 'error while registering !';
  }
  
 } else {
  
  echo 'sorry LOGIN already taken!';
   
 }
$DBcon -> close();
}
else {
	echo "Some required fields was EMPTY!";
}

?>