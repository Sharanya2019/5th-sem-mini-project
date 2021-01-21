<html>
<head><title>MAID-Home</title>
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
	margin-left: 40vw;
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
body
{
	margin:0;
	padding:0;
	background-image: url('background.jpg');
	background-size:cover;
	background-position: center;
	background-repeat: no-repeat;
}

.b1
{
	background-color: black;
	opacity: 0.85;
	width: 50vw;
	height: 120vh;
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
	<font face="Colonna MT">CLEANING</font>
</div>
<br><br>

<body>
<div class = "b1">
<div id = "b11">Fill your details</div>
<form action="cleaningdb.php" method="post">
<br><br>
<div id="b12">
Name* : <input type="text" name = "name" placeholder="Name..." style="width: 62%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Address*   : <input type="textarea" row="2" cols="20" name="address" placeholder="Enter Address" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
Contact*  :    <input type="tel" name = "num" placeholder="contact number" pattern="[0-9]{10}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Email-id*   : <input type="email" name="email" placeholder="Enter Email" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>

</br>Services*:</br></br><select required id="services" name="services" size="3"></br>
<option value="1 time cooking-Rs.400">1 time cooking-Rs.400</option>
   <option value="Home deep Cleaning(1BHK)-Rs.3000">Home deep cleaning(1BHK)-Rs.3000</option>
    <option value="Home deep Cleaning(2BHK)-Rs.4000">Home deep cleaning(2BHK)-Rs.4000</option>
    <option value="Villa deep cleaning(to 3000sft)-Rs.10000">Villa deep cleaning(to 3000sft)-Rs.10000</option>
    <option value="1 Balcony cleaning-Rs.500">1 balcony cleaning-Rs.500</option>
<option value="Single Bathroom cleaning-Rs.500">Single Bathroom cleaning-Rs.500</option>
    <option value="Kitchen cleaning-Rs.1000">Kitchen cleaning-Rs.1000</option>
	

  </select><br><br></br>
Date*    :     <input type="date" id="date" name="date" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>

Time*    :     <input type="time" id="time" name="time" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>

</div>
<input type = "submit"/ class = "button3">
<input type = "reset"/ class = "button3">
</form>
</body>
</html>