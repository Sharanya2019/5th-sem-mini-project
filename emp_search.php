<html>
<link rel="stylesheet" href="search_by.css"/>
<title>SERVICE BOX-Home</title>
<head>
<div class = "h1">
<div id="h11">
<font face="Colonna MT">SERVICE BOX</font>
</div>
</head>
<body>
<div class="b1">
SEARCH BY EMPLOYEE</div>
<div class="b2">
<form action="emp_details.php" method="POST">
<input type="submit" value="Search" style="position: fixed; margin-top: 5em; margin-left: 40vw; width: 10em; height: 2em; border-radius: 10px; border-style: none; background-color: black;opacity:0.95; color: white;">
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
mysqli_query($connection,"SELECT emp_id,emp_name FROM employee");
$all_property = array();  

echo "<table style = 'background color: white; border-style: none; border-collapse: seperate; border-spacing: 0px 0px; border-radius: 10px;'>
        <tr><th>Select</th>"; 
while ($property = mysqli_fetch_field(mysqli_query($connection,"SELECT emp_id,emp_name FROM employee"))) {
    echo '<th>' . $property->name . '</th>';  
    array_push($all_property, $property->name);  
}
echo '</tr>';
$i=1;

while ($row = mysqli_fetch_array(mysqli_query($connection,"SELECT emp_id,emp_name FROM employee"))) {

    $index = $row[0];
    if($i%2 == 0)
    {
    echo "<tr style='background-color: floralwhite; opacity:0.85;'>";
    echo "<td align='center' style='width: 50px';><input type='radio' name='emp_id' value=$index></td>";
    foreach ($all_property as $item) {
        echo "<td align='center'> $row[$item]  </td>"; 
    }
    }
    else
    {
      echo "<tr style='background-color: black; color: white; opacity: 0.85; color: white;'>";
        echo "<td align='center' style='width: 50px'><input type='radio' name='emp_id' value=$index></td>";
    foreach ($all_property as $item) {
        echo "<td align='center'> $row[$item] </td>";   
    }
    }
    $i++;
    echo '</tr>';
}
?>
</table>
</form>
</div>
</body>
</html>