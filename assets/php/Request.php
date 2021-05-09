<?php

require "conexion.php";

$result = mysqli_query($con, "SELECT * FROM proyecto");

while($data = mysqli_fetch_assoc($result))
{
    echo "<li ><span>".$data['nombre']."</span></li>";

}
?>
