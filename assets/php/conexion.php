<?php

$dbServername = "162.241.62.206";
$dbUsername = "expoinge_dev";
$dbPassword = "dev123";
$dbName = "expoinge_database";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_errno())
{
    echo "Error con la conexión" . mysqli_connect_error();
}
?>
