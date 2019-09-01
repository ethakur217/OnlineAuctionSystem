<!DOCTYPE html>
<html>
<head>
<style>
.box
{
	/*padding-left: 600px;*/
	padding: 70px 20px;
	box-sizing: border-box;
	text-align: center;
	margin-left: 500px;
	margin-top: 100px;
	background:#2E8B57;
	height:400px; 
	width:400px;
}
		
</style>
</head>
<body>
	<form name ="myform" action=sam.php method="post">
		
		<div class="box">
			<h1 id="name1" style="font-size: 40px">Login</h1>
			<input type="text" name="one" placeholder="Username" id="username"></br></br></br>
			<input type="password" name="two" placeholder="Password" id="password"></br><br>
			<input type="submit" value="Log-In">

		</div>


	</form>





</body>
</html>
