<?php

require "conexion.php";

#Lista de académicos
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro = 'ACADEMICO'");

echo "<ol start = ". $data['idProyecto'] . "  id =\"filterACADEMICO\" class=\"project-list filter-ACADEMICO list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "
          <li><span>
            <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
          </span></li>";
}
echo "</ol>";

#Lista de SWMC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro = 'SWMC1'");

echo "<ol start = ". $data['idProyecto'] . "  id =\"filterSWMC1\" class=\"project-list filter-SWMC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de SWMC2
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro = 'SWMC2'");

echo "<ol start = ". $data['idProyecto'] . "  id =\"filterSWMC2\" class=\"project-list filter-SWMC2 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";


#Lista de PRODUCTOC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro = 'PRODUCTOC1'");

echo "<ol start = ". $data['idProyecto'] . "  id =\"filterPRODUCTOC1\" class=\"project-list filter-PRODUCTOC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";


#Lista de PROCESOC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro = 'PROCESOC1'");

echo "<ol start = ". $data['idProyecto'] . "  id =\"filterPROCESOC1\" class=\"project-list filter-PROCESOC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de PROCESOC2
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro = 'PROCESOC2'");

echo "<ol start = ". $data['idProyecto'] . "  id =\"filterPROCESOC2\" class=\"project-list filter-PROCESOC2 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

?>
