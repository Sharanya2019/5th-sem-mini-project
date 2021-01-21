<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$name = $_POST['branch_name'];
$connection = mysqli_connect($host, $user, $pass, $db_name);
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

$query = "delete from branch where branch_name='$name'";
$result = mysqli_query($connection,$query);
if($result)
{
	header("Location:add_branch1.php");
}

?>