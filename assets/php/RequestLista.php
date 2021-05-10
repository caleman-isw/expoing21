<?php

require "conexion.php";

#Lista de académicos

$result = mysqli_query($con, "SELECT * FROM proyecto where tipoProyecto like '1%'");
$abbreviation = "academico";
$numProyecto = 1;

echo "<ol start = ". $numProyecto . "  id =\"filteracademico\" class=\"project-list filter-academico list-content\">";

while($data = mysqli_fetch_assoc($result))
{
  echo "<li><span>" . $data['nombre'] . "</span></li>";
}

echo "</ol>";

#Lista de Producto
$abbreviation = "producto";
$result = mysqli_query($con, "SELECT * FROM proyecto where tipoProyecto like '2%'");

echo "<ol start = ". $numProyecto . "  id =\"filterproducto\" class=\"project-list filter-producto list-content\">";

  while($data = mysqli_fetch_assoc($result)){
    echo "<li><span>" . $data['nombre'] . "</span></li>";
    }
echo "</ol>";

#Lista de Proceso
$abbreviation = "proceso";
$result = mysqli_query($con, "SELECT * FROM proyecto where tipoProyecto like '3%'");

echo "<ol start = ". $numProyecto . "  id =\"filterproceso\" class=\"project-list filter-proceso list-content\">";

  while($data = mysqli_fetch_assoc($result)){

    echo "<li><span>" . $data['nombre'] . "</span></li>";

    }

echo "</ol>";

?>
