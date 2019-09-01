 
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
  height: 100px;
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

<div id="topline">
            <p>Welcome, <?php  include('log.php'); echo $_SESSION['uname'];?>!</p>
        </div>
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
    
   
</form>

  
 <tr>

<table>
     <tr class="one">
    <th><img src="furniture1.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="furniture1.php">The Collector</th>
      <th>
        <p>Featuring high-style 18th and 19th century French and European furniture, 
silver, Sèvres porcelain, fleur danica silve0rware and matching dinner sets,
fine art, a rare collection of porcelain horses and more, the upcoming
Collector sale celebrates a refined antique chic.

</p>
      </th>

  </tr>
  <tr>
  </table>
  <form name="myForm1" action="furcon1.php"  method="post">
  <div>
   <p>Enter Your Username   :<input type="text" name="input1" > </p> </br>
    <p>Enter Your Bid Amount:<input type="text" name="input2" > </p> </br>
 
  <input type="submit" value="Submit"></br>
</div>
</form>

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






