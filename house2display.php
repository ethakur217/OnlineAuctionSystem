<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border:1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  backgrxound-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
.btn {
  background-color: Green;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
#nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

#nav li {
  float: left;
}

#nav li a {
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

#nav li a:hover {
  background-color: RoyalBlue;
}
.topnav_right{
  float: right;
}
</style>
</head> 
<body style="background-image: url(web-designer-pune-background.jpg)">


<h2 style="font-size: 60px">E-BIDDING</h2>
  <form method="get" action="login.php">
    <nav class="styles" style="background-color: red" id="nav">
    <ul >
  <li><a class="active" href="category.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
 <div class="topnav_right">
    <li><a href="logout.php">Logout</a></li>
 </div>
</ul>
</nav>

<table class="right" style="background-color:#ddd;"> 
     
 <tr>


    <th><img src="house2.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="house2.php">Vintage French Provence Bamboo and Rattan Longue Chaise with Legs Extension</a></th>
     <th>
        <p>Beautiful and comfortable French bamboo and rattan longue chaise with legs extension and great details. Measures: 68 inches with extension.


      </th>
  </tr>
  <tr>
  <tr>
  </table>
    
   
<p>RESULT:</p>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>


</body>
</html>



<?php
 
ob_start();

error_reporting(0);
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
//$value=$_POST['input1'];
//$value1=$_POST['input2'];
//$sql="SELECT MAX(amount) FROM watch";
//$row = mysql_query($sql);

$rowSQL = mysql_query( "SELECT MAX(amount) AS max FROM house2;" );
$row = mysql_fetch_array( $rowSQL );
$largestNumber = $row['max'];
$rowuser=mysql_query( "SELECT username AS user FROM house2 where amount=($largestNumber);" );
$row1 = mysql_fetch_array( $rowuser );
$winner = $row1['user'];
//$res="SELECT username FROM watch WHERE amount='$row'";
/*while($res=mysql_fetch_assoc($row))
{

echo $row['amount'];
}
*/
echo "The username <strong><i>".$winner."</i></strong> has the highest Bid of Rupees <strong><i>".$largestNumber."</i></strong>, so this product is theirs.";

//if(!mysql_query($rowuser)){
//	die('Error:'.mysql_error());
//}
mysql_close();

?>
