<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Circuitos DC | OVA</title>
  <link rel="icon" href="../img/favicon2.ico">
  <link rel="stylesheet" href="bxslider-4-4.2.12/dist/jquery.bxslider.css">
  <!-- <script src="jquery-3.1.1.min.js"></script> -->
  <script src="jquery-1.11.3.min.js"></script>
  <script src="bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
  <script type="text/javascript" src="jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/overhang.min.js"></script>
  <script src="assets/js/app.js"></script>
</head>
<body>

  <!-- MAIN WRAPPER -->
  <div id="wrapper">

    <!-- BANNER WRAPPER -->
    <div id="banner-wrapper">
      <header>
        <div id="header-inner">
          <!-- <a href="ova.php" id="logo">
            <img src="../img/pics/dc_logo.png" alt="">
          </a> -->

          <!-- <nav>
            <a href="#" id="menu-icon">
              <i class="fa fa-bars"></i>
            </a>
            <ul class="menu">
              <li>
                <a href="ova.php" class="current">
                  Inicio
                </a>
              </li>
              <li>
                <a href="#presentacion">
                  Presentación
                </a>
              </li>
              <li>
                <a href="#elementos">
                  Elementos
                </a>
              </li>
              <li>
                <a href="#conceptos">
                  Conceptos
                </a>
              </li>
              <li>
                <a href="#actividades">
                  Temáticas
                </a>
                <ul class="submenu">
                    <li> <a href="leydeohm.php">Ley de Ohm</a> </li>
                    <li> <a href="tiposdecircuitos.php">Tipos de Circuitos</a> </li>
                    <li> <a href="leyesdekirchhoff.php">Leyes de Kirchhoff</a> </li>
                </ul>
              </li>
            </ul>
          </nav> -->

          <nav class="navbar navbar-inverse navbar-fixed-top" id="barra">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="ova.php" id="logo"> <img src="../img/pics/dc_logo.png" alt=""> </a>
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                      <!-- <li class="active"><a href="index.php">Principal</a></li> -->

                      <li class="active"><a href="ova.php">Inicio</a></li>
                      <li><a href="leydeohm.php">Ley de Ohm</a></li>
                      <li><a href="tiposdecircuitos.php">Tipos de Circuitos</a></li>
                      <li><a href="leyesdekirchhoff.php">Leyes de Kirchhoff</a></li>

                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </nav>

          <?php if (!isset($_SESSION["usuario"])) {?>
          <a href="index.php" id="loginButton" style="text-decoration: none;"><span><i class="fa fa-unlock-alt"></i>&nbsp Login</span></a>
          <?php } else {
    ?>
            <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
            <a href="admin.php" id="loginButton" style="text-decoration: none;"><span><i class="fa fa-unlock-alt"></i>&nbsp <?php echo $_SESSION["usuario"]["nombre"]; ?></span></a>
            <?php } else {?>
            <a href="usuario.php" id="loginButton" style="text-decoration: none;"><span><i class="fa fa-unlock-alt"></i>&nbsp <?php echo $_SESSION["usuario"]["nombre"]; ?></span></a>
          <?php }

}?>

        </div>
      </header>
      <!-- SLIDER -->
      <div id="slide-wrap">
        <section class="slider">
          <ul class="slider1">
            <li><img src="../img/slider/slider1.jpg" alt=""></li>
            <li><img src="../img/slider/slider2.jpg" alt=""></li>
            <li><img src="../img/slider/slider3.png" alt=""></li>
          </ul>
        </section>
      </div>
    </div>

    <!-- LEFT COL -->
    <section class="left-col" id="presentacion">
      <h3>Presentación del curso</h3>
      <p>La teoría de circuitos eléctricos DC hace referencia al estudio teórico-práctico de las leyes, métodos y teoremas que existen para el análisis de circuitos eléctricos energizados con DC (Corriente Directa), con el fin de conocer las diferentes variables eléctricas que intervienen en los componentes eléctricos cuando hacen parte de éstos como la intensidad de corriente, voltaje eléctrico, potencia y energía eléctrica. <a href="https://www.usco.edu.co/es/estudia-en-la-usco/programas-pregrado/facultad-de-ingenieria/ingenieria-electronica/" target="_blank" style="text-decoration: none;">Microdiseño Curricular.</a> </p>
    </section>
    <section class="sidebar">
      <img src="../img/pics/circuito.png">
    </section>

    <div class="clearfix-padding"></div>
    <!-- ICONS -->
    <section class="one-third" id="elementos">
      <div class="icon-wrap">
          <i> <img src="../img/pics/fuente_voltaje.png" alt="" class="icon-wrap"> </i>
      </div>
      <h3>Fuente de Tensión</h3>
      <p> Es un elemento activo que es capaz de entregar energía, genera una diferencia de potencial constante entre sus terminales. Una fuente de tensión real se puede considerar como una fuente de tensión ideal, en serie con una resistencia.</p>
    </section>
    <section class="one-third">
      <div class="icon-wrap">
          <i> <img src="../img/pics/fuente_corriente.png" alt="" class="icon-wrap"> </i>
      </div>
      <h3>Fuente de Corriente</h3>
      <p>Es elemento activo que es capaz de entregar energía, proporciona una corriente eléctrica para que otros circuitos funcionen. Una fuente de corriente real se puede considerar como una fuente de corriente ideal, en paralelo con una resistencia.</p>
    </section>
    <section class="one-third">
      <div class="icon-wrap">
          <i> <img src="../img/pics/resistencias.png" alt="" class="icon-wrap"> </i>
      </div>
      <h3>Resistencia Eléctrica</h3>
      <p>Es elemento pasivo que consume energía y la disipa en forma de calor. Es toda oposición que encuentra la corriente a su paso por un circuito eléctrico cerrado, atenuando o frenando el libre flujo de circulación de las cargas eléctricas o electrones.</p>
    </section>

    <div class="clearfix-padding"></div>
    <!-- INFO THUMBNAILS -->
    <div class="one-third-padding" id="conceptos">
      <h3>Ley de Ohm</h3>
      <iframe width="400" height="197" src="https://www.youtube.com/embed/izDKIyCPRWE" frameborder="0">
      </iframe>
      <p>Postulada por el físico y matemático alemán Georg Simon Ohm, es una ley básica de los circuitos eléctricos. Establece que la intensidad de corriente que atraviesa un circuito es directamente proporcional al voltaje o tensión del mismo e inversamente proporcional a la resistencia.</p>
    </div>
    <div class="one-third-padding">
      <h3>Circuitos Resistivos</h3>
      <iframe width="400" height="197" src="https://www.youtube.com/embed/qgxo6ZeNs0g" frameborder="0">
      </iframe>
      <p>Es una interconexión de componentes eléctricos que contiene solo resistencias, fuentes de voltaje y corriente. Si las fuentes son de corriente directa (o continua), se denomina circuito de corriente directa, pero si estas son de corriente alterna, se denomina circuito de corriente alterna.</p>
    </div>
    <div class="one-third-padding">
      <h3>Leyes de Kirchhoff</h3>
      <iframe width="400" height="197" src="https://www.youtube.com/embed/Ni37_i656RI" frameborder="0">
      </iframe>
      <p>Estas son fundamentales para el análisis de circuitos. Cuantifican y/o describen el comportamiento de la corriente en un nodo y del voltaje alrededor de una malla en un circuito. Son en realidad dos reglas o leyes de Kirchhoff, una aplicada a la corriente y la otra a la tensión.</p>
    </div>
  </div>
  <div class="clearfix-padding"></div>
  <!-- FOOTER -->
  <footer>
    <div class="banner-wrapper">
      <div class="icon-text">
        <div class="icon-text-icon">
          <ul class="footer-nav" style="list-style: none;">
            <li>
              <a href="ova.php" style="text-decoration: none;">Inicio</a>
            </li>
            <li>
              <a href="#presentacion" style="text-decoration: none;">Presentación</a>
            </li>
            <li>
              <a href="#elementos" style="text-decoration: none;">Elementos</a>
            </li>
            <li>
              <a href="#conceptos" style="text-decoration: none;">Conceptos</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none;">Contact</a>
            </li>
          </ul>
        </div>
        <div class="icon-text-text">
          <ul class="social">
            <li>
              <a href="mailto:u20142130907@usco.edu.co" target="_blank">
                <i class="fa fa-envelope-o"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/MilabTechnology/" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/GeekElectronica" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/results?search_query=circuitos+dc" target="_blank">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/circuitmix/" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-second">
    <p>
      &copy; <a style="text-decoration: none;">Copyright 2020. Design by Carlos Polanco</a>
    </p>
  </footer>

  <!-- SCRIPTS -->
  <script>
    $(document).ready(function(){
      $('.slider1').bxSlider({
        mode: 'fade',
      });
      $('.slider2').bxSlider({
        mode: 'fade',
      });
      $('.slider3').bxSlider({
        mode: 'fade',
      });
    });
  </script>
</body>
</html>
