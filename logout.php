<?php
   session_start();
   unset($_SESSION["uname"]);
   unset($_SESSION["pass"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>