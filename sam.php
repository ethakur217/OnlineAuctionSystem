<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="onlineauctionsystem";
$con=mysqli_connect($host,$user,$password,$db);

if($con->connect_error){
	die("connection failed:".$con->connect_error);
}
$uname=$_POST['one'];
$pass=$_POST['two'];
$sql="INSERT INTO sample(username,password) VALUES ('$uname','$pass')";
if($con->query($sql)==TRUE)
{
	echo "Signed up Successfully";
}
else
{
	echo "error".$sql."</br>".$con->error;
}
?>