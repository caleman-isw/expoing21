<?php 

    function getData($con){

        if(isset($_SESSION['id']))

	{



		$id = $_SESSION['id'];

		$query = "select * from proyecto where idProyecto = '$id' limit 1";



		$result = mysqli_query($con,$query);

		$idProyecto = mysqli_fetch_assoc($result);

		return $idProyecto;

	}

	header("Location: proyecto.php");

	die;

    }

    function getPicture(){
	$name = "";
	$num = rand(0,5);
	if($num == 0){
		$name = "idgd";
	}
	if($num == 1){
		$name = "industrial";
	}
	if($num == 2){
		$name = "mecanica";
	}
	if($num == 3){
		$name = "mecatronica";
	}
	if($num == 4){
		$name = "renovables";
	}
	if($num == 5){
		$name = "software";
	}
	return $name;
    }



?>