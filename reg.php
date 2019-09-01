<?php 
$host="localhost";
$user="root";
$pass="";
$db="onlineauctionsystem";

$con=mysqli_connect($host,$user,$pass,$db);

if ($con->connect_error) {
	die("connection failed:".$con->connect_error);
}
$usname=$_POST['fname'];
$lname=$_POST['lname'];
//$gender=$_POST['maleorfemale'];
$age=$_POST['age'];
$bdate=$_POST['bday'];
$use=$_POST['uname'];
$pass=$_POST['pass'];
$sql="INSERT INTO register(firstname,lastname,age,bdate,username,password) VALUES('$usname','$lname','$age','$bdate','$use','$pass')";

if ($con->query($sql)==TRUE) 
{
echo "Signed up Successfully";
	# code...
}
else
{
	echo "error".$sql."</br>".$con->error;;
}

 ?>