<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name= "services";
$name= $_POST['service_name'];
$id= $_POST['service_id'];



$connection = mysqli_connect($host, $user, $pass, $db_name);
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

$query = "insert into service values('$id','$name')";
mysqli_query($connection,$query);
header("Location: service_suc.php");
mysqli_close($connection);
?>