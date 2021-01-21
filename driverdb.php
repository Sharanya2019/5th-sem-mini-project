<?php
$name = $_POST['name'];
$contact=$_POST['num'];
$email=$_POST['email'];
$services=$_POST['services'];
$car=$_POST['carname'];
$date=$_POST['date'];
$time=$_POST['time'];
$from=$_POST['from'];
$to=$_POST['to'];
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
$query="insert into users values(DEFAULT,3,'$name','$from',$contact,'$email','$services',STR_TO_DATE('$new_date_format','%Y %m %d'),'$time','NA','$to','$car',0,'NA',0)";
mysqli_query($connection,$query);
header("Location:thank.php");
mysqli_close($connection);
?>