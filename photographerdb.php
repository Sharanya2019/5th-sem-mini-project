<?php
$name = $_POST['name'];
$address=$_POST['address'];
$contact=$_POST['num'];
$email=$_POST['email'];
$services=$_POST['services'];
$date=$_POST['date'];
$time_from=$_POST['time_from'];
$time_to=$_POST['time_to'];
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$date_array = explode("-",$date); 
$var_year = $date_array[0]; 
$var_month = $date_array[1]; 
$var_day = $date_array[2]; 
$new_date_format = "$var_year $var_month $var_day";

$connection = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
$query="insert into users values(DEFAULT,7,'$name','$address',$contact,'$email','$services',STR_TO_DATE('$new_date_format','%Y %m %d'),'$time_from','$time_to','NA','NA',0,'NA',0)";
mysqli_query($connection,$query);

header("Location:thank.php");
mysqli_close($connection);
?>