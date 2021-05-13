<?php

require "conexion.php";

#Lista de académicos
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE 'academico%'");
echo "<ol id =\"filterAcademico\" class=\"project-list ACADEMICO\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de SWMC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%swmc1%'");

echo "<ol id =\"filterSWM\" class=\"project-list SWMC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de SWMC2
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%SWMC2%'");

echo "<ol id =\"filterSWM\" class=\"project-list SWMC2 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";


#Lista de PRODUCTOC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PRODUCTOC1%'");

echo "<ol id =\"filterProducto\" class=\"project-list PRODUCTOC1\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";

}
echo "</ol>";


#Lista de PROCESOC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PROCESOC1%'");

echo "<ol id =\"filterProceso\" class=\"project-list PROCESOC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de PROCESOC2
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PROCESOC2%'");

echo "<ol id =\"filterProceso\" class=\"project-list PROCESOC2 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

?>
