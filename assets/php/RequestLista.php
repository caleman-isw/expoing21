<?php

require "conexion.php";

$result = mysqli_query($con, "SELECT * FROM proyecto");

while($data = mysqli_fetch_assoc($result)){
  switch ($data['tipoProyecto'][0]) {
        case 1:
            $abbreviation = "academico";
            break;
        case 2:
            $abbreviation = "producto";
            break;
        case 3:
            $abbreviation = "proceso";
            break;
    }


    echo "<ol start = ". $data['idProyecto'] . "  id =\"filter\" ". $abbreviation . " class=\"project-list filter- ". $abbreviation . " list-content\">
            <li><span>" . $data['nombre'] . "</span></li>
          </ol>";
}
?>
