<?php
$id = $_POST['emp_id'];
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
$result = mysqli_query($connection,"SELECT * FROM employee where emp_id='$id'");
$row = mysqli_fetch_row($result);
$name = $row[1];
$profession = $row[2];
$address = $row[3];
?>
<html>
<link rel="stylesheet" href="details_.css"/>
<title>SERVICE BOX-Home</title>
<head>
<div class = "h1">
<div id="h11">
<font face="Colonna MT">SERVICE BOX</font>
</div>
</head>
<body>
<br>
<form action="admin_home.php" method="POST">
<input type="submit" value="BACK" style="position: fixed; top: 12vh; left: 85vw; width: 10em; height: 2em; border-radius: 10px; border-style: none; background-color: white; color: black;">
<br>
<h1 align="center" style="color:black;">EMPLOYEE DETAILS</h1>
<div class="b1">
<span id="b11">Name : <?php echo $name ?></span>
<br>
<span id="b11">Profession : <?php echo $profession ?></span>
<br>
<span id="b11">Address : <?php echo $address ?></span>
<span id="b111">Number of EMP : <?php
$result = mysqli_query($connection,"SELECT count(*) FROM employee where emp_id='$id'");
$row = mysqli_fetch_row($result);
$count = $row[0];
echo $count;
?></span>
</div>

<div class="b2"></div>
<div id="b21">List of EMP</div>
<div class="b3">

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
$result = mysqli_query($connection,"SELECT * FROM employee where emp_id='$id'");
$all_property = array();  

echo "<table style = 'background color: black; opacity: 0.85; color: white; border-style: none; border-collapse: seperate; border-spacing: 0px 0px; border-radius: 10px;'>
        "; 
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
      echo "<tr style='background-color: floralwhite; color: black; opacity:0.85;'>";
    foreach ($all_property as $item) {
        echo "<td align='center'> $row[$item]  </td>"; 
    }
	}
    else
    {
      echo "<tr style='background-color: indigo;opacity: 0.85; color: white;'>";
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