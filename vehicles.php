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
.class{
  background-color: red;
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
  flex:65%;
 padding: 15px;
}

.right img{

   height: 32%;
   width: 92%;
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
  background-color:  RoyalBlue;

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn2 {
  background-color: RoyalBlue;

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}


/* Darker background on mouse-over */
.btn:hover {
  background-color: Red;
}
.btn2:hover {
  background-color: Red;
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
  <form method="get" action="login.php">  
</form>
<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Categories</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
     <li><a href="watches.php">Watches</a></li>
      <li><a href="jewellery.php">Jewellery</a></li>
      <li><a href="art.php">Art</a></li>
      <li><a href="antiques.php">Antiques</a></li>
      <li><a href="households.php">Hoseholds</a></li>
      <li><a href="vehicles.php">Vehicles</a></li>
      <li><a href="furniture.php">Furniture</a></li>
      <li><a href="electronics.php">Electronics</a></li>
      <li><a href="#">Other</a></li>
    </ul>
  </div>
  <div  class="right" style="background-color:#ddd;">
  <h2>Vehicles</h2>
  <table class="right" style="background-color:#ddd;"> 
  <tr class="one">
    <th><img src="veh1.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="veh1.php">2004 BMW X5 3.0I</th>
      <th>
        <p>VIN - 5UXFA13554LU30372
Inventory - CO29589349
Year - 2004
Make - BMW
Model - X5
Trim - 3.0I
Color - Beige
Vehicle Style - SUV
Engine - 3.0L 6
Drivetrain - All wheel drive
Fuel Type - GAS

</p>
      </th>

  </tr>
  <tr>


    <th><img src="veh2.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="veh2.php">2008 MERCEDES-BENZ E 320 CDI</a></th>
     <th>
        <p>VIN - WDBUF22X28B190145
Inventory - CO31273339
Year - 2008
Make - Mercedes-Benz
Model - E-CLASS
Trim - E320 BLUETEC
Vehicle Style - Sedan
Engine - 3.0L 6
Drivetrain - Rear-wheel drive
Fuel Type - DIESEL


      </th>
  </tr>
  
  <tr>
    <th><img src="veh3.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="veh3.php">
2005 LEXUS GX 470</a></th>
    <th>
        <p>
VIN - JTJBT20X850077924
Inventory - CO29587219
Year - 2005
Make - Lexus
Model - GX 470
Color - Blue
Vehicle Style - SUV
Engine - 4.7L 8
Drivetrain - All wheel drive
Fuel Type - GAS
</p>

      </th>
</tr>
  
</table>
</div>

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
