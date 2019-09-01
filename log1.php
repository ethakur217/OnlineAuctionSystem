<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="onlineauctionsystem";

$con=mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);

if(isset($_POST['submit']))
{
  $a=$_POST['uname'];
  $p=$_POST['pass'];

  $sql="SELECT * from register where username='$a' AND password='$p' limit 1";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)==1){
    $_SESSION['name']=$a;
     header("location: category.php");
  }
  else
  {
    echo "invalid  credentials!";
    exit();
  }
}
 ?>
