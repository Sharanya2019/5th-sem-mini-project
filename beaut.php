<html>
<head>
<title>BEAUTICIAN</title>
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
	margin-top: 35px;
	padding-left: 10px;
	background-color: white;
	color: red;
}

</style>
<div class = "h1">
<div id="h11">
	<font face="Colonna MT">BEAUTICIAN SERVICES</font>
</div>
<br><br>
<body>
<marquee direction = "left">Costs are mentioned per person</marquee>
<div class = "b1">
<div id = "b11">Fill your details</div>
<form action="beautdb.php" method="post">
<br><br>
<div id="b12">
Name* : <input type="text" name = "name" placeholder="Name..." style="width: 62%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Address*    : <input type="textarea" row="2" cols="20" name="address" placeholder="Enter Address" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>
Contact*  :    <input type="tel" name = "num" placeholder="contact number" pattern="[0-9]{10}" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Email-id*   : <input type="email" name="email" placeholder="Enter Email" style="width: 59%; height: 40px; border-style: solid; padding-left: 10px;" required/></br></br>

  <fieldset required id="time" name="services">
  <legend>Choose required services*</legend>
   
      <input type="checkbox" id="Facial" name="interest[]" value="Facial">
      <label for="coding">Facial(silver-Rs.1000-2000,fruit-Rs.500-650,gold-Rs.1200-1500)</label></br>
   
      <input type="checkbox" id="Bridal makeup" name="interest[]" value="Bridal makeup">
      <label for="Bridal makeup">Bridal makeup-Rs.5000-6000</label></br>

      <input type="checkbox" id="Hair cut" name="interest[]" value="Hair cut">
      <label for="Hair cut">Hair cut(level cut-Rs.50-100,U cut-Rs.120-140,Feather cut-Rs.900-1000,layer cut-Rs.1000-1200)</label></br>
   
      <input type="checkbox" id="Bleaching" name="interest[]" value="Bleaching">
      <label for="Bleaching">Bleaching(face-Rs.330-450,arms-Rs.300-400)</label></br>
   
      <input type="checkbox" id="Manicure" name="interest[]" value="Manicure">
      <label for="Manicure">Manicure-(classic-Rs.400-500,detan-Rs.500-600)</label></br>
    
      <input type="checkbox" id="pedicure" name="interest[]" value="pedicure">
      <label for="pedicure">pedicure-(classic-Rs.400-500,detan-Rs.500-600)</label></br>
      
      <input type="checkbox" id="Mehandi" name="interest[]" value="Mehandi">
      <label for="Mehandi">Mehandi(2 hands=Rs.1000-1300,2 legs=Rs.1000-1500)</label>


   
  </fieldset>

</br></br>

Date*:<input type="date" id="date" name="date" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>
Time*:<input type="time" id="time" name="time" style="width: 60%; height: 40px; border-style: solid; padding-left: 10px;" required/><br><br>

</div>
<input type = "submit"/ class = "button3">
<input type = "reset"/ class = "button3">
</form>
</body>
</html>