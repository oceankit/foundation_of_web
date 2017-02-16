<?php 
require_once 'dbconnect.php';
session_start();

$scr = $_POST['score'];

if ($_SESSION['login_name']!="" && $_SESSION['login_user']!=""){
	$sql = "UPDATE minesweeper SET Score = '$src' Where Login = '".$_SESSION['login_user']."'";

	if ($DBcon->query($sql)==true){
	    echo "Record updated successfully <br>";
	} else {
	    echo "Error updating record: " . $conn->error;
	}
}
$DBcon->close();

?>