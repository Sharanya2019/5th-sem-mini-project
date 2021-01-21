<html>
<head>
<title>PANDIT SEVA</title>
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
	margin-left: 38vw;
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
	<font face="Colonna MT">PANDIT(pooja)</font>
</div>
<br><br>

<body>
<div class = "b1">
<div id = "b11">Fill your details</div>
<form action="panditdb.php" method="post">
<br><br>
<div id="b12">
Name* : <input type="text" name = "name" placeholder="Name..." style="width: 62%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Address*   : <input type="textarea" row="2" cols="20" name="address" placeholder="Enter Address" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
Contact*  :    <input type="tel" name = "num" placeholder="contact number" pattern="[0-9]{10}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Email-id*   : <input type="email" name="email" placeholder="Enter Email" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>

</br>
Select service*:</br></br><select required id="services" name="services" size="5"></br>
    <option value="Antim Sanskar">Antim Sanskar-Rs.1000</option>
    <option value="Horoscope">Horoscope-Rs.1000</option>
    <option value="Naming ceremony">Naming Ceremony-Rs.5000</option>
    <option value="House opening ceremony">House opening ceremony-Rs.5000</option>
    <option value="Marriage">Marriage-Rs.15000</option>
    <option value="Bhoomi pooja">Bhoomi pooja-Rs.1000</option>
    <option value="Satya Narayan Katha">Satya Narayan Katha-Rs.3000</option>
    <option value="Jyotish">Jyotish-Rs.1000</option>
    </select><br><br></br>

Date*:<input type="date" id="date" name="date" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Time(From)*:<input type="time" name="time_from" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Time(To):<input type="time" name="time_to"  style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;"/><br><br>
</div>
<input type = "submit"/ class = "button3">
<input type = "reset"/ class = "button3">
</form>
</body>
</html>