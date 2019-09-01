<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="loginstyle.css">
<script>
function validateForm()
 {
  var x = document.myForm.uname;
  var y = document.myForm.pass;
  var emailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var alpha=/^\w{8,15}$/;
  if (!x.value.match(emailformat))
  {
   window.alert("You have entered an invalid email address!");
    x.focus();
    return (false);
  }
  
 if (!y.value.match(alpha))
  {
    window.alert("You have entered an invalid password!");
    y.focus();
    return (false);
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
	
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
<h1>Example</h1><br>
 Username<input type="text" name="uname" id="uname">
 Password<input type="text" name="pass">
 <input type="Submit" value="Submit">

</form>
</body>
</html>



