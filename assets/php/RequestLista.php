<?php



require "conexion.php";

<<<<<<< HEAD


echo "<h2 class=\"projects-title\">Lista de proyectos</h2>";



#Lista de académicos

$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE 'academico%'");

echo "<ol id =\"filterAcademico\" class=\"project-list ACADEMICO\">";

while($data = mysqli_fetch_assoc($result))

{

  echo "<li value=\"" . $data['idProyecto'] . "\">
			<form method=\"POST\" >
				<button class=\"redirect-button refLista text-left\" style=\"background-color: transparent; border: none;\" type=\"submit\" name=\"id\" value=". $data['idProyecto'] .">" . $data['nombre'] . "</button>
			</form>
		</li>";
}

echo "</ol>";



#Lista de SWMC1

$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%swmc1%'");



echo "<ol id =\"filterSWM\" class=\"project-list SWMC1 list-content\">";

while($data = mysqli_fetch_assoc($result))

{

  echo "<li value=\"" . $data['idProyecto'] . "\">

                      <form method=\"POST\">
              <button class=\"redirect-button refLista\" style=\"background-color: transparent; border: none;\" type=\"submit\" name=\"id\" value=". $data['idProyecto'] .">" . $data['nombre'] . "</button>
            </form>

        </li>";

}

echo "</ol>";



#Lista de SWMC2

$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%SWMC2%'");



echo "<ol id =\"filterSWM\" class=\"project-list SWMC2 list-content\">";

while($data = mysqli_fetch_assoc($result))

{

  echo "<li value=\"" . $data['idProyecto'] . "\">

                      <form method=\"POST\">
              <button class=\"redirect-button refLista\" style=\"background-color: transparent; border: none;\" type=\"submit\" name=\"id\" value=". $data['idProyecto'] .">" . $data['nombre'] . "</button>
            </form>

        </li>";

}

echo "</ol>";





#Lista de PRODUCTOC1

$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PRODUCTOC1%'");



echo "<ol id =\"filterProducto\" class=\"project-list PRODUCTOC1\">";

while($data = mysqli_fetch_assoc($result))

{

  echo "<li value=\"" . $data['idProyecto'] . "\">

                      <form method=\"POST\">
              <button class=\"redirect-button refLista\" style=\"background-color: transparent; border: none;\" type=\"submit\" name=\"id\" value=". $data['idProyecto'] .">" . $data['nombre'] . "</button>
            </form>

        </li>";



}

echo "</ol>";





#Lista de PROCESOC1

$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PROCESOC1%'");



echo "<ol id =\"filterProceso\" class=\"project-list PROCESOC1 list-content\">";

while($data = mysqli_fetch_assoc($result))

{

  echo "<li value=\"" . $data['idProyecto'] . "\">

                      <form method=\"POST\">
              <button class=\"redirect-button refLista\" style=\"background-color: transparent; border: none;\" type=\"submit\" name=\"id\" value=". $data['idProyecto'] .">" . $data['nombre'] . "</button>
            </form>

        </li>";

}

echo "</ol>";



#Lista de PROCESOC2

$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PROCESOC2%'");



echo "<ol id =\"filterProceso\" class=\"project-list PROCESOC2 list-content\">";

while($data = mysqli_fetch_assoc($result))

{

  echo "<li value=\"" . $data['idProyecto'] . "\">

                      <form method=\"POST\">
              <button class=\"redirect-button refLista\" style=\"background-color: transparent; border: none;\" type=\"submit\" name=\"id\" value=". $data['idProyecto'] .">" . $data['nombre'] . "</button>
            </form>

        </li>";

}

echo "</ol>";


=======
echo "<h2 class=\"projects-title\">Lista de proyectos</h2>";

#Lista de académicos
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE 'academico%'");
echo "<ol id =\"filterAcademico\" class=\"project-list ACADEMICO\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a class =\"refLista\" href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de SWMC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%swmc1%'");

echo "<ol id =\"filterSWM\" class=\"project-list SWMC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a class =\"refLista\" href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de SWMC2
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%SWMC2%'");

echo "<ol id =\"filterSWM\" class=\"project-list SWMC2 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a class =\"refLista\" href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";


#Lista de PRODUCTOC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PRODUCTOC1%'");

echo "<ol id =\"filterProducto\" class=\"project-list PRODUCTOC1\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a class =\"refLista\" href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";

}
echo "</ol>";


#Lista de PROCESOC1
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PROCESOC1%'");

echo "<ol id =\"filterProceso\" class=\"project-list PROCESOC1 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a class =\"refLista\" href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";

#Lista de PROCESOC2
$result = mysqli_query($con, "SELECT * FROM proyecto where filtro LIKE '%PROCESOC2%'");

echo "<ol id =\"filterProceso\" class=\"project-list PROCESOC2 list-content\">";
while($data = mysqli_fetch_assoc($result))
{
  echo "<li value=\"" . $data['idProyecto'] . "\"><span>
          <a class =\"refLista\" href=\"proyecto.html\" title=\"Conocer más\">" . $data['nombre'] . "</a>
        </span></li>";
}
echo "</ol>";
>>>>>>> ba4b6a73bb5751603f022f6ccb980ea241acc209

?>

