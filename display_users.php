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
body


.b1
{
	font-size: 25px;
	color: black;
	left: 3vw;
	position: absolute;
	top: 19vh;
	margin-bottom: 30px;
}

td
{
    width: 15vw;
    height: 6vh;
    padding: 5px;   
	font-size: 20px;
}

.b2
{
	margin-left: 0vw;
	margin-top: 5vh;
	position: absolute;
}
th
{
	background-color: indigo;
	opacity:0.75;
	height: 40px;
}
.h12
{
	left: 5vw;
	font-size: 25px;
	background-color: white;
	width: 5em;
	text-align: center;
}	
.b3
{
	margin-left: 37vw;
	margin-top: 15vh;
	font-size: 35px;
	color: white;
}
</style>
<head>
<div class = "h1">
<div id="h11">
	<font face="Colonna MT">SERVICE BOX</font>
</div>
</head>
<body>
<div class="b1">
<span id="text"><font face="verdana">Users of service-box</font></span>
</div>
<div class="h12">
<form action="admin_home.php" method="POST">
<input type="submit" value="BACK" style="position: fixed; top: 12vh; left: 85vw; width: 10em; height: 2em; border-radius: 10px; border-style: none; background-color: lavender; color: black;">
</div>
<div class="b3"><font face="script">LIST OF USERS</font></div>
<div class="b2">
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$connection = mysqli_connect($host, $user, $pass, $db_name);
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
$result = mysqli_query($connection,"SELECT  * FROM users");
$all_property = array();  

echo "<table style = 'background color: black; opacity: 0.85; color: white; border-style: none; border-collapse: seperate; border-spacing: 0px 0px; border-radius: 10px;'>";
while ($property = mysqli_fetch_field($result)) {
    echo '<th>' . $property->name . '</th>';  
    array_push($all_property, $property->name);  
}
echo '</tr>';
$i=1;

while ($row = mysqli_fetch_array($result)) {

    $index = $row[0];
    if($i%2 == 0)
    {
    echo "<tr style='background-color: floralwhite; opacity:0.85; color: black;'>";
    foreach ($all_property as $item) {
        echo "<td align='center'> $row[$item]  </td>"; 
    }
    }
    else
    {
      echo "<tr style='background-color: black; opacity: 0.85; color: white;'>";
    foreach ($all_property as $item) {
        echo "<td align='center'> $row[$item] </td>";   
    }
    }
    $i++;
    echo '</tr>';
}
echo "</table>";
?>
</table>
</div>
</body>
</html>
