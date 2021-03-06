<?php

session_start();



require "assets/php/conexion.php";

//include("assets/php/functions.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $id = $_POST["id"];

  // $query = "select * from proyecto where idProyecto = '$id' limit 1";

  // $proyectoInfo = mysqli_query($con, $query);

  // $proyectID = mysqli_fetch_assoc($proyectoInfo);

  $_SESSION["id"] = $id;

  header("Location: proyecto.php");

  die;
}



?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Expo Ingeniería 2021</title>

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



      <a class="navbar-brand js-scroll-trigger" href="#"><img src="assets/img/cetysinternacional-black.png" style="width: 20vh;"></a>



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>



      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">

            <a class="scrollto  btn mr-4" href="index.php#ciap">CIAP</a>

          </li>

          <!-- <li class="nav-item">

                <a class="scrollto  btn mr-4" href="proyecto.php"><i class="icon-user pr-2"></i> Iniciar sesión</a>

              </li> -->

          <li class="nav-item">

            <a class="scrollto get-started-btn btn btn-outline-primary rounded-pill px-4" href="https://www.eventbrite.com.mx/e/expoingenieria-2021-tickets-153237043121">Regístrate</a>

          </li>

        </ul>

      </div>



    </div>

  </nav>



  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top">

  </header>

  <!-- End Header -->



  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-9 text-center">

          <img src="assets/img/logoexpo.png" alt="" class="img-fluid logo-expo">

        </div>

      </div>

      <div class="text-center">

        <p class="btn-get-started bg-black rounded-pill scrollto"> 17 - 19 MAYO 2021</p>

      </div>

      <div class="row icon-boxes">



        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">

          <div class="icon-box d-flex align-items-center">

            <img class="iconos d-flex" src="assets/img/Academico.png" alt="">

            <h4 class="title">Académico</h4>

          </div>

        </div>



        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">

          <div class="icon-box d-flex align-items-center">

            <img class="iconos d-flex" src="assets/img/Software.png" alt="">

            <h4 class="title">Software y Multimedia</h4>

          </div>

        </div>



        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">

          <div class="icon-box d-flex align-items-center">

            <img class="iconos d-flex" src="assets/img/Producto.png" alt="">

            <h4 class="title">Producto</h4>

          </div>

        </div>



        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">

          <div class="icon-box d-flex align-items-center">

            <img class="iconos d-flex" src="assets/img/Proceso.png" alt="">

            <h4 class="title">Procesos</h4>

          </div>

        </div>



      </div>

    </div>

  </section>

  <!-- End Hero -->





  <!-- Botones de filtros, cuadrícula y lista de proyectos aquí. -->

  <main id="main" style=" background-color: #ffdc00;">



    <!-- ======= Project grid & list section (portfolio) ======= -->

    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">



        <div class="section-title">

          <h2>Proyectos</h2>

          <p>Elige la categoría del proyecto al que deseas ingresar.</p>

        </div>



        <div class="row">

          <div class="col-lg-12 justify-content-center">

            <ul id="portfolio-flters">



              <li data-filter=".ACADEMICO" class="filter-active academico"><img class="iconos  movil-size" style="padding-bottom: 2.4rem;" src="assets/img/Academico.png" alt="">Académico</li>



              <li data-filter=".filter-swm, .SWMC1, .SWMC2" id="SWM"><img class="iconos  movil-size" style="

               padding-bottom: 1rem;" src="assets/img/Software.png" alt="">Software y Multimedia</li>



              <li data-filter=".PRODUCTOC1"><img class="iconos  movil-size" src="assets/img/Producto.png" alt="">Producto</li>



              <li data-filter=".filter-proceso, .PROCESOC1, .PROCESOC2" id="PROCESO"><img class="iconos  movil-size" src="assets/img/Proceso.png" alt="">Proceso</li>



            </ul>

            <ul id="portfolio-flters" class="cat-swm">

              <li data-filter=".SWMC1" id="swm-c1">Categoría 1</li>

              <li data-filter=".SWMC2" id="swm-c2">Categoría 2</li>

            </ul>

            <ul id="portfolio-flters" class="cat-proceso">

              <li data-filter=".PROCESOC1" id="proceso-c1">Categoría 1</li>

              <li data-filter=".PROCESOC2" id="proceso-c2">Categoría 2</li>

            </ul>

          </div>

        </div>



        <!-- Lista y cuadricula -->

        <div class="row projects-container">



          <!-- Lista -->

          <!-- Rellenar con n cantidad de <ol> que contengan la info de cada proyecto -->

          <div class="col-xs-12 col-lg-3 list-project" id="listaProyectos">

            <h2 class="projects-title">Lista de proyectos</h2>



            <!-- ACADÉMICOS -->

            <ol class="project-list ACADEMICO">

              <li><span>Canales de Energía</span></li>

              <li><span>Suspensión Electromagnética</span></li>

            </ol>



            <!-- SOFT/MULTIMEDIA -->

            <ol start=15 id="filterSWM" class="project-list SWMC1 list-content">

              <p>Categoría 1</p>

              <li><span>Wisteria</span></li>

              <li><span>Botware</span></li>

            </ol>



            <ol start=37 id="filterSWM" class="project-list SWMC2 list-content">

              <p>Categoría 2</p>

              <li><span>GST app</span></li>

              <li><span>FireMap</span></li>

            </ol>



            <!-- PRODUCTO -->

            <ol start=21 id="filterProducto" class="project-list PRODUCTOC1">

              <p>Categoría 1</p>

              <li><span>Sistema Rompeolas</span></li>

              <li><span>Suplements Dispenser</span></li>

            </ol>



            <!-- PROCESO -->

            <ol start=34 id="filterProceso" class="project-list PROCESOC2 list-content">

              <p>Categoría 1</p>

              <li><span>Sistema de regado </li>

              <li><span>PRO PyME (Procesos Optimizados para Pequeñas y Medianas Empresas)</li>

            </ol>



            <ol start=42 id="filterProceso" class="project-list PROCESOC1 list-content">

              <p>Categoría 2</p>

              <li><span>Optimización de almacenes e inventarios, caso Carl's Jr</li>

              <li><span>Adjustment of the 10% in the current expense for the production of the 3 part numbers of Klune´s

                  Family</li>

            </ol>



          </div>



          <!-- Cuadrícula -->

          <div class="col-xs-12 col-lg-9 text-center">

            <img src="assets/img/map/top.png" class="img-fluid" alt="">



            <!-- Rellenar con n cantidad de <div> que contengan la info de cada proyecto -->

            <div class="row portfolio-container" id="cuadriculaProyectos">

              <div class="col-lg-12 ">



                <!-- ACADÉMICO -->

                <div class="col-lg-3 col-md-6 portfolio-item ACADEMICO">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/cuadro-01.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Canales de Energía</h4>

                      <p>Los Agrónomos Sustentables</p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item ACADEMICO">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/2.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Suspensión Electromagnética</h4>

                      <p>Dúo Mecánico</p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <!-- SOFTWARE Y MULTIMEDIA -->

                <div class="col-lg-3 col-md-6 portfolio-item SWMC1">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/15.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Wisteria</h4>

                      <p>The Coven</p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item SWMC2">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/16.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Botware</h4>

                      <p>ENGlife</p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <!-- PRODUCTO -->

                <div class="col-lg-3 col-md-6 portfolio-item PRODUCTOC1">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/21.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Sistema Rompeolas</h4>

                      <p>The Hyperwaves</p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item PRODUCTOC1">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/22.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Suplements Dispenser</h4>

                      <p>Suplementos N.V</p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <!-- PROCESO -->

                <div class="col-lg-3 col-md-6 portfolio-item PROCESOC1">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/34.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>Sistema de regado </h4>

                      <p>JLET </p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item PROCESOC2">

                  <div class="portfolio-wrap">

                    <img src="assets/img/map/35.png" class="img-fluid" alt="">

                    <div class="portfolio-info">

                      <h4>PRO PyME (Procesos Optimizados para Pequeñas y Medianas Empresas)</h4>

                      <p>Innovative Thinking </p>

                      <div class="portfolio-links">

                        <a href="proyecto.html" title="Conocer más"><i class="icon-arrow-right-circle"></i></a>

                      </div>

                    </div>

                  </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item PROCESOC1 PROCESOC2">

                  <div class=" ">

                    <img src="assets/img/map/zorro.png" class="img-fluid" alt="">

                  </div>

                </div>



              </div>

            </div>



            <img src="assets/img/map/grass.png" class="img-fluid" alt="">



          </div>



        </div>



      </div>

    </section>

    <!-- End Portfolio Section -->



  </main>

  <!-- Fin filtros y proyectos -->



  <!-- ======= CIAP Section ======= -->

  <section id="ciap" class="d-flex align-items-center">



    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-9 text-center">

          <img src="assets/img/ciaplogo2.png" alt="" class="img-fluid logo-expo">

        </div>

      </div>



      <div class="text-center">

        <a href="https://www.eventbrite.com.mx/e/expoingenieria-2021-tickets-153237043121" class="btn-get-started  rounded-pill scrollto">Regístrate Ahora</a>

      </div>

    </div>



  </section>

  <!-- End CIAP -->



  <!-- ======= Footer ======= -->

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



  </footer>

  <!-- End Footer -->



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



</html>