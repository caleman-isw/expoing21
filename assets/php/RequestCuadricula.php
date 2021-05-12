<?php

require "conexion.php";

$result = mysqli_query($con, "SELECT * FROM proyecto");

echo "<div class=\"col-lg-12\">";
while ($data = mysqli_fetch_assoc($result)) {
    switch ($data['filtro'][0]) {
        case 0:
            $filter = "ACADEMICO";
            break;
        case 1:
            $filter = "SWMC1";
            break;
        case 2:
            $filter = "SWMC2";
            break;
        case 3:
            $filter = "PROCESOC1";
            break;
        case 4:
            $filter = "PROCESOC2";
            break;
        case 5:
            $filter = "PRODUCTOC1";
            break;
    }

    echo   "<div class=\"col-lg-3 portfolio-item filter-" . $abbreviation . "\">
                <div class=\"portfolio-wrap\">
                    <div class=\"image-container\">
                        <img src=\"assets/img/map/1.png\" class=\"img-fluid\" alt=\"\">
                        <div class=\"grid-text\">123</div>
                    </div>
                    <div class=\"portfolio-info\">
                        <h4>" . $data['nombre'] . "</h4>
                        <p>" . $data['nombre'] . "</p>
                        <div class=\"portfolio-links\">
                            <a href=\"proyecto.html\" title=\"Conocer más\"><i class=\"icon-arrow-right-circle\"></i></a>
                        </div>
                    </div>
                </div>
            </div>\n";
}
echo "</div>";
