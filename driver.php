<html>
<head>
<title>DRIVER</title>
</head>
<style type="text/css">
.h1
{
	width: 100vw;
	height: 10vh;
	background-color: black;
	opacity: 0.65;
}
#h11
{
	font-size: 50;
	margin-left: 30vw;
	color: gold;
	position: center;
}

#h22
{
	font-size:30;
	margin-left:7em;
	margin-top:1em;
	color: white;
}


.b1
{
	background-color: black;
	opacity: 0.85;
	width: 50vw;
	height: 130vh;
	position: center;
	margin-left: 25vw;
	margin-top: 10vh;
	border-radius: 40px;
	color:white;
}

#b11
{
	margin-left: 9em;
	margin-top: 2em;
	font-size: 25;
}

#b12
{
	margin-left: 3em;
}



.button3
{
	width: 10em;
	height: 3em;
	margin-left: 50px;
	margin-top: 50px;
	padding-left: 10px;
	background-color: white;
	color: red;
}

</style>
<div class = "h1">
<div id="h11">
	<font face="Colonna MT">DRIVER BOOKING</font>
</div>
<br><br></br>
<marquee direction = "left">Service is done after verifying the vehicle documents</marquee>
<body>
<div class = "b1">
<div id = "b11">Fill your details</div>
<form action="driverdb.php" method="post">
<br><br>
<div id="b12">
Name* : <input type="text" name = "name" placeholder="Name..." style="width: 62%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Contact*  :    <input type="tel" name = "num" placeholder="contact number" pattern="[0-9]{10}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Email-id*   : <input type="email" name="email" placeholder="Enter Email" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
Car Type* : <input type="text" name = "carname" placeholder="Car company Name..." style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
</br>Select service*:</br></br><select required id="services" name="services" size="2"></br>
    <option value="Local-Rs.60/hr(+extra after 8 hrs)">Local-Rs.60/hr(+extra after 8 hrs)</option>
    
  </select><br><br></br>
From*: <input type="text" name="from" placeholder="Enter Address" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
To*  : <input type="text" name="to" placeholder="Destination Address" style="width: 61%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>

Date*:<input type="date" id="date" name="date" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Time*:<input type="time" id="time" name="time" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>

</div>
<input type = "submit"/ class = "button3">
<input type = "reset"/ class = "button3">
</form>
</body>
</html>