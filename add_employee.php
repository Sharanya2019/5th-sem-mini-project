<html>

<title>SERVICE BOX-Home</title>
<style type="text/css">
.h1
{
	width: 100vw;
	height: 10vh;
	background-color: black;
	opacity: 0.75;
}
#h11
{
	font-size: 50;
	margin-left: 36vw;
	color: gold;
	position:center;
}

body{
	margin: 0;
	padding: 0;
	background-color:lavender;
	background-size: cover;
	background-position: center;
	background-attachment: scroll;
}
.b1
{
	position: absolute;
	font-size: 40px;
	color: Indigo;
	margin-left: 5vw;
	margin-top: 4vh;
}

.b2
{
	font-size: 30px;
	color: white;
	margin-left: 5vw;
	margin-top: 10vh;
}
</style>
<head>
<div class = "h1">
<div id="h11">
	<font face="Colonna MT">SERVICE BOX</font>
</div>
</head>
<body>
<div class="b1">Enter Employee Details</div>

<form action="emp_added.php" method="POST">


<input type="text" name="name" placeholder="Enter Employee Name" style="width: 40vw; font-size: 20px;height: 7vh; padding-left: 2vw; margin-left: 5vw; margin-top: 20vh;"required/>
<input type="text" name="address" placeholder="Enter address of Employee" style="width: 40vw; font-size: 20px;height: 7vh; padding-left: 2vw; margin-left: 5vw; margin-top: 10vh;"required/>
<input type="text" name="gender" placeholder="Gender of Employee" style="width: 40vw; font-size: 20px;height: 7vh; padding-left: 2vw; margin-left: 5vw; margin-top: 20vh;"required/>
<input type="text" name="profession" placeholder="Enter Employee profession" style="width: 40vw; font-size: 20px;height: 7vh; padding-left: 2vw; margin-left: 5vw; margin-top: 20vh;"required/>
<input type="text" name="age" placeholder="Enter age" style="width: 40vw; font-size: 20px;height: 7vh; padding-left: 2vw; margin-left: 5vw; margin-top: 20vh;"required/>
<input type="text" name="num" placeholder="Enter contact number" pattern="[0-9]{10}" style="width: 40vw; font-size: 20px;height: 7vh; padding-left: 2vw; margin-left: 5vw; margin-top: 20vh;"required/>

</div>
<input type="submit" value="ADD" style="width: 20vw; height: 7vh; margin-top: 90vh; margin-left: 5vw; font-size: 30px; background-color: LavenderBlush; border-radius: 15px;">
</form>
</body>
</html>