<?php

require "conexion.php";

$result = mysqli_query($con, "SELECT * FROM proyecto");


while ($data = mysqli_fetch_assoc($result))
{
    switch ($data['tipoProyecto'][0])
    {
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

      echo "<div class=\"col-lg-3 col-md-6 portfolio-item filter-" . $abbreviation . "\">
              <div class=\"portfolio-wrap\">
                  <img src=\"assets/img/map/" . $data['idProyecto'] . ".png\" class=\"img-fluid\" alt=\"\">
                  <div class=\"portfolio-info\">
                      <h4>" . $data['nombre'] . "</h4>
                      <p>" . $data['nombre'] . "</p>
                      <div class=\"portfolio-links\">
                          <a href=\"proyecto.html\" title=\"Conocer más\"><i class=\"icon-arrow-right-circle\"></i></a>
                      </div>
                  </div>
              </div>
          </div>";
}
