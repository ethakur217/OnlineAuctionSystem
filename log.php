<?php
 
 ob_start();
 session_start();
 /*if (!isset($_SESSION['uname']) {
   $q = mysql_query("SELECT username FROM login WHERE id = $_SESSION['uname']");
   $r = mysql_fetch_row($q);
   $_SESSION['uname'] = $r[0];
}*/
//echo 'Hello, '.$_SESSION['uname'];
 //$_SESSION['uname'] = $Username;
 //header('Location: session1.php');


$host="localhost";
$user="root";
$password="";
$db="onlineauctionsystem";

$con=mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);

if(isset($_POST['uname']))
{
	$a=$_POST['uname'];
	$p=$_POST['pass'];

	$sql="select * from register where username='$a' AND password='$p' limit 1";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)==1){

		 header("location: category.php");
		 
		 
		exit();
	}
	else
	{
		echo "invalid  credentials!";
		exit();
	}
}


?>


