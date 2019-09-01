<?php
 
 ob_start();
 session_start();
 
$host="localhost";
$user="root";
$password="";
$database="onlineauctionsystem";

$link=mysql_connect($host,$user,$password,$database);
//mysql_select_db($db);

if(!$link)	
{
	die('Could Not Connect:'.mysql_error());
}
$db_selected=mysql_select_db("onlineauctionsystem",$link);

if(!$db_selected){
	die('Can\'t use:'.mysql_error());
}
$value=$_POST['input1'];
$value1=$_POST['input2'];
$sql="INSERT INTO art2 (username,amount) VALUES ('$value','$value1')";


if(!mysql_query($sql)){
	die('Error:'.mysql_error());
}
mysql_close();

?>
<html>
<head>
</head>
<body style="background-image: url(web-designer-pune-background.jpg)">
	<h style="font-size: 60px">E-BIDDING</h></br></br></br>
<a href='art2display.php' align='center'>CLICK HERE TO VIEW RESULT</a><br/>
</body>
</html>