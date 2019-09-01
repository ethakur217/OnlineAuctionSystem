<?php

 if (!isset($_SESSION['uname']) {
   $q = mysql_query("SELECT username FROM login WHERE id = $_SESSION['uname']['id']");
   $r = mysql_fetch_row($q);
   $_SESSION['uname'] = $r[0];
}

echo 'Hello, '.$_SESSION['uname']
?>