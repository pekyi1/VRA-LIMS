<?php 

//start sesion

$dbservername = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "vralims";

//create connection
$conn = mysqli_connect("$dbservername", "$dbuser", "$dbpassword" , "$dbname");

if($conn){
    echo "";
}

else{
    echo "Invalid";
}


?>