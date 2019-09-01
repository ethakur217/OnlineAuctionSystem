<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="registerstyle.css">
  <script>
function validateForm() {
  var x = document.forms["myForm"]["uname"].value;
  if (x == "") {
    alert("Entries must be filled out");
    return false;
  }
}
</script>
</head>
<style>
 #name1{

 	font-size: 60px
 	
 }
</style>
<body style="background-image: url(web-designer-pune-background.jpg)">
<form name="myForm" action="reg.php"  onsubmit="return validateForm()" method="post">

<h1 id="name1" >E-BIDDING</h1>
<div class="login">
	<h5 style="font-size: 25px; padding-left: 100px">Register</h5></br>
	<label style="padding-left: 20px">Name:<input type="text" name="fname"></label></br></br>
	<label style="padding-left: 20px">LastName:<input type="text" name="lname"></label></br></br>
	<label style="padding-left: 20px">Gender:</label></br></br>
	<label style="padding-left: 20px">Male:</label>
<input  type="Radio" name="maleorfemale "value="Male">
<label style="padding-left: 20px">Female:</label>
<input type="Radio" name="maleorfemale" value="Female"> </br> </br>
<label style="padding-left: 20px">Age:</label>
<input type="number" name="age"> </br></br>
<label style="padding-left: 20px">Birthday:</label>
<input type="date" name="bday"> </br> </br>
<p5 style="padding-left: 20px">Username:</p5>
<input type="text" name="uname"></br></br>
		<p6 style="padding-left: 20px" >Password :</p6>
		<input type="password" name="pass"></br>
<input type="Submit" value="Submit" > </br> </br>
<p23 style="padding-bottom: 20px"> Already a member? <a href="login.php">click to login </a> </p23>
    
</div>
<div class="shadow"></div>

</form>
</body>
</html>