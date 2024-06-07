
<?php
//db connection
//declaring variables

$host="localhost";
$user="root";
$pass="";
$db="logon";

 // create object to establish db connection
$conn=new mysqli($host,$user,$pass,$db);


if($conn->connect_error)
        {
            echo "Failed to connect DB".$conn->connect_error;
        }
?>