<html>
<link rel="stylesheet" href="t.css"/>
<title>HOME APPLIANCES</title>
<head>
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
	height: 145vh;
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
	<font face="Colonna MT">APPLIANCE REPAIR</font>
</div>
<br><br>

<body>
<div class = "b1">
<div id = "b11">Fill your details</div>
<form action="homeappldb.php" method="post">
<br><br>
<div id="b12">
Name* : <input type="text" name = "name" placeholder="Name..." style="width: 62%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Address*    : <input type="textarea" row="2" cols="20" name="address" placeholder="Enter Address" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
Contact*  :    <input type="tel" name = "num" placeholder="contact number" pattern="[0-9]{10}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Email-id*   : <input type="email" name="email" placeholder="Enter Email" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>

</br>Select appliance*:</br></br><select required id="services" name="services" size="3"></br>
    <option value="Washing machine-Rs.300">Washing machine-Rs.300</option>
    <option value="Water purifier-Rs.300">Water purifier-Rs.300</option>
    <option value="Refrigerator-Rs.300">Refrigator-Rs.300</option>
    <option value="Water heater/Geyser-Rs.300">Water heater/Geyser-Rs.300</option>
    <option value="Laptop-Rs.300">Laptop-Rs.300</option>
  </select><br><br></br>
Company/type of appliance*:</br><input type="text" id="company" name="company" placeholder="Company/type....." style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Problem note*:</br><input type="text" id="note" name="note" placeholder="Ex:Servicing/parts supply etc.." style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br><br>
Date*:<input type="date" id="date" name="date" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
<label for=time">Time Slot*:</label></br></br>
<select required id="time" name="time" size="3">
    <option value="10:00A.M">10:00A.M</option>
    <option value="1:00P.M">1:00P.M</option>
    <option value="3:00P.M">3:00P.M</option>
    <option value="6:00P.M">6:00P.M</option>
  </select>
</div>
<input type = "submit"/ class = "button3">
<input type = "reset"/ class = "button3">
</form>
</body>
</html>