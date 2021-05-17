<?php



session_start();



  require "assets/php/conexion.php";



  include("assets/php/functions.php");

  
header("Access-Control-Allow-Origin: *");

  


  $proyecto = getData($con);







?>



<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Expo Ing - Proyecto</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link href="assets/img/favicon.png" rel="icon">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

 <!-- Custom style -->

  <link href="assets/css/proyecto-page.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">



  <!-- =======================================================

  * Template Name: OnePage - v2.2.2

  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/

  * Author: BootstrapMade.com

  * License: https://bootstrapmade.com/license/

  ======================================================== -->

</head>

 

<body>





<!-- Navigation -->

  <nav id=" " class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

    <div class="container ">



      <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="assets/img/cetysinternacional-black.png" style="width: 20vh;"></a>

       



        

        

        <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">

            <a class="scrollto  btn mr-4" href="index.php#ciap">CIAP</a>

          </li>

       

        

        </ul>

      </div>

        

    </div>

        

  </nav>



























  <!-- Masthead -->

<header class="masthead text-white ">

     

    <div class="container">

      <div class="row">

        <div class="col-sm-12 col-md-6 mx-auto" style="margin-top: 100pt" >

            <h1 class="mb-5"><?php echo $proyecto["nombre"];?><br></h1>

            <h4><span class="font-weight-light">Proyecto #<?php echo $proyecto["idProyecto"];?> | Categoría: <?php echo $proyecto["filtro"];?> </span></h4>

             

        </div>

        <div class="col-sm-6 col-md-6 mx-auto d-flex justify-content-center align-items-center">

          <div class="row">

            <div class="col-sm-12 text-center ">

           

         

      </div>

    </div>

    </div>

    </div> 

  </header>

    

	 <!-- Icons Grid -->

<section class="features-icons bg-light">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-xl-6 mx-auto pr-4 d-flex align-items-center">

            

                <div class="col-sm-12  ">
		<?php
		if($proyecto["url"] != "NULL"){ 
			echo "<div class=\"row\">
			            <div class=\"col-sm-12   text-center\">
				    <h5 class=\"text-uppercase text-primary\" style=\"padding-bottom: 15pt\"  >Reproducir video</h5>
            		      </div>";
			echo "<iframe id=\"cnvs_content\" width=\"560\" height=\"315\" src=". $proyecto["url"] ." title=\"Video de equipo\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
			echo "<div class=\"text-center\">
				    <h7 style=\"padding-bottom: 15pt\"  >Si no puede reproducir el video haga <a href=". $proyecto["url"] ." target=\"_blank\" >click aqui</a></h7>
            		      </div>";

		} else {
			echo "<h3 style=\"display: flex; justify-content: center; height: 10rem;\">Este equipo no cuenta con video</h3>";
		}
		?>
       

        </div>

          </div>

        </div>

        

        <div class="col-sm-12 col-md-6 mx-auto">

    <div class="row">

            

          <div class="col-sm-12  align-content-center text-center">

	<?php
		if($proyecto["url"] != "NULL"){
			echo "
<div class=\"col-sm-12   text-center\">

            <h5 class=\"text-uppercase text-primary\" style=\"margin-bottom: 15pt \" >LINKS</h5>

            </div>
<a href=" . $proyecto["meetLink"] . "><img src=\"assets/img/aviso_meet.png\" class=\"img-fluid\">
				<p class=\"lead mb-0\" style=\"margin-top: 23pt\">" . $proyecto["meetLink"] . "></p>
	  			</a>";
		} else {
			echo "<h3 style=\"display: flex; justify-content: center; height: 10rem;\">Este equipo no cuenta con link de meet</h3>";
		}
		?>


          

        </div>

          </div>

           

        </div>    

      </div>

    </div>

  </section>

   <!-- DESCRIPCI[ON] -->

<div class="proyecto-about bg-black">

    <div class="container-fluid pl-0">

       

 

          <div class="col-sm-12 col-md-6 mx-auto bg-black p-5 d-flex align-items-center text-white">

         <div class="row"> 

              

              <h1 class="" >Descripción del proyecto</h1>

              <p class="text-justify"><?php echo $proyecto["descripcion"];?></h4>

             

        </div>     

        </div>

           

        

            

      

    </div>

  </div>



  

    

    <!-- Equipo Integrantes-->

    <section class="my-5 p-5">

    <div class="container">

        

            

            <div class="col-sm-12 col-md-8   col-lg-12 align-content-center">

              <h5 class="text-primary text-center" style="margin-bottom:25pt; font-size:25pt ">Integrantes</h5>

         

           


            

        </div>

        

      <div class="row" style="display:flex; justify-content: center;">

          

           
		<?php

		$id = $proyecto['idProyecto'];
		$query = "SELECT * FROM integrante where idProyecto = '$id'";
		$res = mysqli_query($con, $query);
		while($data = mysqli_fetch_assoc($res)){
			
		  $name = getPicture();
                  echo "<div class=\"col-lg-3 container-img p-2\"  >

                      <img src=\"assets/img/". $name . "-user.png\">

                          <div class=\"card-img-overlay d-flex justify-content-center \">

                              </div>

				<h5 class=\"card-title text-center\" style=\"margin-top: 15pt;\">" . $data["nombre"] . "</h5>

 						 

                      

                   </div>"; 

		}

		?>

      </div>

    

        

           <!-- Section Button-->

           <div class="col-sm-12  text-white  d-sm-block d-md-none">

                <div class="text-center  mt-4">

                    <a class="btn btn-xl btn-block btn-outline-light" href="#">

                            Explore all <i class="  mr-2"></i>

                    </a>

                </div>

      </div>      

        

    </div>

</section>

    

       



  <!-- Upcoming Events -->



    

  <footer id="footer">

  

    <div class="container  py-4">

      <div class="row justify-content-center">

        <div class="col-xs-6 col-sm-3 text-center">

          <img src="assets/img/logoexpo2.png" alt="" class="img-fluid logo-expo">

        </div>

        <div class="col-xs-6 col-sm-3 text-center">

          <img src="assets/img/tyva.png" alt="" class="img-fluid logo-expo">

        </div>

        <div class="col-xs-6 col-sm-3 text-center">

          <img src="assets/img/ceid.png" alt="" class="img-fluid logo-expo">

        </div>

        <div class="col-xs-6 col-sm-3 text-center">

          <img src="assets/img/ciap.png" alt="" class="img-fluid logo-expo">

        </div>

      </div>

    <div class="row justify-content-center">

      <div class="mr-md-auto mt-5 text-center text-md-left">

       <!--  <div class="copyright">

          &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved

        </div> -->

        <div class="social-links pt-3 pt-md-0">

       

        <a href="#" class="facebook"> <i class="fab fa-facebook fa-2x fa-fw footer-text"></i></a>

        <a href="#" class="instagram"><i class="fab fa-instagram fa-2x fa-fw footer-text"></i></a>



      </div>

        



      </div>

    </div>

    </div>





<div class="credits text-center">

          <!-- All the links in the footer should remain intact. -->

          <!-- You can delete the links only if you purchased the pro version. -->

          <!-- Licensing information: https://bootstrapmade.com/license/ -->

          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->

          <a style="color:gray" href="https://bootstrapmade.com/">Made with Bootstrap</a>

        </div>

   

  </footer><!-- End Footer -->



  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <div id="preloader"></div>



  <!-- Vendor JS Files -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="assets/vendor/counterup/counterup.min.js"></script>

  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>



  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>



</body>

