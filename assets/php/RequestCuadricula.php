<?php



require "conexion.php";

$result = mysqli_query($con, "SELECT * FROM proyecto order by idProyecto");

echo "<div class=\"col-lg-12\">";

$result = mysqli_query($con, "SELECT * FROM proyecto order by idProyecto");



echo "<div class=\"col-lg-12\">";



$cont = 1;

while ($data = mysqli_fetch_assoc($result)) {



	    echo   "<div class=\"col-lg-3 portfolio-item " . $data['filtro'] . "\">



      <div class=\"portfolio-wrap\">



        <div class=\"image-container\">



			     <img src=\"assets/img/map/" . $cont . "Sillas.png\" class=\"img-fluid\" alt=\"\">



		         <div class=\"grid-text\">" . $data['idProyecto'] . "</div>

		   </div>



                    <div class=\"portfolio-info\">



                        <h4>" . $data['nombre'] . "</h4>



                        <div class=\"portfolio-links\">



                          <form method=\"POST\" >

	                     <button class=\"redirect-button\" style=\"background-color: transparent; border: none; width: 5rem; \" type=\"submit\" name=\"id\" value=". $data['idProyecto'] ."><i class=\"icon-arrow-right-circle\" style=\"color: #ffff; width: 2rem;\"></i></button>

                          </form>

 

                        </div>



                    </div>



                </div>



            </div>\n";



	$cont += 2;

	if ($cont == 7)

	{

		$cont = 1;

	}

}



echo "</div>";

