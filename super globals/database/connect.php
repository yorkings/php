<?php
$dbHost="localhost:3310 ";
$dbUser="root";
$dbPass="";
$dbName="first";
//connecting to the database
$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($conn){

}
else{
    echo "connection failed";
}
?>