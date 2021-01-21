<html>
<head>
<title>CATERING</title>
</head>
<style type="text/css">
p{color:black;}
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
	opacity: 0.75;
	width: 50vw;
	height: 140vh;
	position: center;
	margin-left: 25vw;
	margin-top: 15vh;
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
	margin-top: 40px;
	padding-left: 10px;
	background-color: white;
	color: red;
}

</style>
<div class = "h1">
<div id="h11">
	<font face="Colonna MT">CATERING SERVICE</font>
</div>
<br><br>

<body>
<p>****Menu-1:Idly,Sambhar,vada,Masala Dosa,coconut chetney,Tomato chetney,pongal.</br>****Menu-2:Dry-fruit burfi,Jamun,Vegetable soup,veg manchurian,Roti gravy,Neer dosa,Puri,sagu,papad,Veg Biriyani,Rice,Rasam,Curdrice,Ice cream,Pan beeda.</br>****Menu-3:Salt,Pickle,curry,Puran poli/obattu,ghee,milk,Kheer,Roti,Ricebath,Raitha,Rice,dal,Sambhar,curd.</P>

<div class = "b1">
<div id = "b11">Fill your details</div>
<form action="cateringdb.php" method="post">
<br><br>
<div id="b12">
Name* : <input type="text" name = "name" placeholder="Name..." style="width: 62%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Address*    : <input type="textarea" row="2" cols="20" name="address" placeholder="Enter Address" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
Contact*  :    <input type="tel" name = "num" placeholder="contact number" pattern="[0-9]{10}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Email-id*   : <input type="email" name="email" placeholder="Enter Email" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>

</br>
Select service*:</br></br><select required id="service" name="services" size="3"></br>
    <option value="Menu-1">Menu-1-Rs.150/person</option>
    <option value="Menu-2">Menu-2-Rs.500/person</option>
    <option value="Menu-3">Menu-3-Rs.400/person</option>
    
   
    </select><br><br></br>
Number of persons(maximum 300):*</br></br><input type="text" name="persons" placeholder="No. of persons" pattern="[0-9]{3}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Date*:<input type="date" id="date" name="date" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Time(to be bought)*:<input type="time" name="time" style="width: 40%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
</div>
<input type = "submit"/ class = "button3">
<input type = "reset"/ class = "button3">
</form>
</body>
</html>