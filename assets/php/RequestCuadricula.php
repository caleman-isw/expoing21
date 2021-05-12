<?php

require "conexion.php";

$result = mysqli_query($con, "SELECT * FROM proyecto order by idProyecto");

echo "<div class=\"col-lg-12\">";

while ($data = mysqli_fetch_assoc($result)) {

    echo   "<div class=\"col-lg-3 portfolio-item filter-" . $data['filtro'] . "\">
                <div class=\"portfolio-wrap\">
                    <div class=\"image-container\">
                        <img src=\"assets/img/map/1.png\" class=\"img-fluid\" alt=\"\">
                        <div class=\"grid-text\">123</div>
                    </div>
                    <div class=\"portfolio-info\">
                        <h4>" . $data['nombre'] . "</h4>
                        <div class=\"portfolio-links\">
                            <a href=\"proyecto.html\" title=\"Conocer más\"><i class=\"icon-arrow-right-circle\"></i></a>
                        </div>
                    </div>
                </div>
            </div>\n";
}

echo "</div>";
