<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name= "services";
$name= $_POST['name'];
$address=$_POST['address'];
$contact=$_POST['num'];


$connection = mysqli_connect($host, $user, $pass, $db_name);
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

$query = "insert into employee values('$name','$address','$contact')";
mysqli_query($connection,$query);
header("Location: add_branch1.php");
mysqli_close($connection);
?>