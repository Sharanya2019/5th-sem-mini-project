<?php
$name = $_POST['name'];
$address=$_POST['address'];
$contact=$_POST['num'];
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$date_array = explode("-",$date); // split the array
$var_year = $date_array[0]; //day seqment
$var_month = $date_array[1]; //month segment
$var_day = $date_array[2]; //year segment
$new_date_format = "$var_year $var_month $var_day";
$checkbox1=$_POST['interest'];  
$chk="";
/*if(!empty($_POST['interest'])) {

        foreach($_POST['lang'] as $value){
            echo "value : ".$value.'<br/>';
        }

    }
for ($i=0; $i<sizeof ($checkbox1);$i++)
*/foreach($checkbox1 as $chk1)  
   {  
      $chk .=$chk1.",";
   }  

$connection = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
$query="insert into users values(DEFAULT,4,'$name','$address',$contact,'$email','$chk',STR_TO_DATE('$new_date_format','%Y %m %d'),'$time','NA','NA','NA',0,'NA',0)";
mysqli_query($connection,$query);
header("Location:thank.php");
mysqli_close($connection);
?>
