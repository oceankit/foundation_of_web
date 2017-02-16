<?php

  $DBhost = "localhost";
  $DBuser = "root";
  $DBpass = "storm";
  $DBname = "minesweeper";
  
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
 ?>