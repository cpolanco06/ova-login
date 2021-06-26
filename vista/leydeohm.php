<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ley de Ohm | OVA</title>
  <link rel="icon" href="../img/favicon2.ico">
  <link rel="stylesheet" href="bxslider-4-4.2.12/dist/jquery.bxslider.css">
  <!-- <script src="jquery-3.1.1.min.js"></script> -->
  <script src="jquery-1.11.3.min.js"></script>
  <script src="bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/leydeohm.css">
  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="../css/content.css">
  <link rel="stylesheet" href="../css/nav.css">
  <script type="text/javascript" src="assets/js/common.js"></script>
  <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
  <script type="text/javascript" src="jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/overhang.min.js"></script>
  <script src="assets/js/app.js"></script>

  <style type='text/css'  data-wpacu-inline-css-file='1'>
  /*! /wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public.css */
  #cookie-law-info-bar{font-size:12pt;margin:0 auto;padding:13px 10px;position:absolute;text-align:center;box-sizing:border-box;width:100%;z-index:9999;box-shadow:rgba(0,0,0,.5) 0 5px 50px;display:none;left:0;font-weight:300}
  #cookie-law-info-again{font-size:10pt;margin:0;padding:5px 10px;text-align:center;z-index:9999;cursor:pointer;box-shadow:#161616 2px 2px 5px 2px}
  #cookie-law-info-bar span{vertical-align:middle}
  .cli-plugin-button,.cli-plugin-button:visited{display:inline-block;padding:10px 16px 10px;color:#fff;text-decoration:none;position:relative;cursor:pointer;margin-left:0;text-decoration:none}
  .cli-plugin-main-link{margin-left:0;font-weight:550;text-decoration:underline}
  .cli-plugin-button:hover{background-color:#111;color:#fff;text-decoration:none}
  .small.cli-plugin-button,.small.cli-plugin-button:visited{font-size:11px}
  .cli-plugin-button,.cli-plugin-button:visited,.medium.cli-plugin-button,.medium.cli-plugin-button:visited{font-size:14px;font-weight:500;line-height:1}
  .large.cli-plugin-button,.large.cli-plugin-button:visited{font-size:14px;padding:8px 14px 9px}
  .super.cli-plugin-button,.super.cli-plugin-button:visited{font-size:34px;padding:8px 14px 9px}
  .pink.cli-plugin-button,.magenta.cli-plugin-button:visited{background-color:#e22092}
  .pink.cli-plugin-button:hover{background-color:#c81e82}
  .green.cli-plugin-button,.green.cli-plugin-button:visited{background-color:#91bd09}
  .green.cli-plugin-button:hover{background-color:#749a02}
  .red.cli-plugin-button,.red.cli-plugin-button:visited{background-color:#e62727}
  .red.cli-plugin-button:hover{background-color:#cf2525}
  .orange.cli-plugin-button,.orange.cli-plugin-button:visited{background-color:#ff5c00}
  .orange.cli-plugin-button:hover{background-color:#d45500}
  .blue.cli-plugin-button,.blue.cli-plugin-button:visited{background-color:#2981e4}
  .blue.cli-plugin-button:hover{background-color:#2575cf}
  .yellow.cli-plugin-button,.yellow.cli-plugin-button:visited{background-color:#ffb515}
  .yellow.cli-plugin-button:hover{background-color:#fc9200}
  .cli-plugin-button{margin-top:5px}
  .cli-bar-popup{-moz-background-clip:padding;-webkit-background-clip:padding;background-clip:padding-box;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;padding:20px}
  .cli-powered_by_p{width:100%!important;display:block!important;color:#333;clear:both;font-style:italic!important;font-size:12px!important;margin-top:15px!important}
  .cli-powered_by_a{color:#333;font-weight:600!important;font-size:12px!important}
  </style>

  <style type="text/css" id="wp-custom-css">
  .wp-block-spacer{height:23px!important}.font-icon-post.fa.fa-calendar,.span12{display:none}.wp-block-pullquote{padding-bottom:5px!important;padding-top:5px!important}.blue{border-radius:3px;box-shadow:0 1px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);background-color:#03a9f4;color:#313131;padding:20px 30px}
  .hache4{border-bottom:3px solid #03a9f4}.galeria:hover{opacity:1}.katex-display{padding:20px 30px;background-color:#f1f1f1;color:#03a9f4!important;box-shadow:0 1px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)!important;border-radius:3px}
  span.katex-display{overflow-x:auto!important}@media only screen and (max-width:1800px){.katex-display{font-size:20px!important}}@media only screen and (max-width:1200px){.katex-display{font-size:18px!important}}@media only screen and (max-width:1000px){.katex-display{font-size:17px;padding-left:12px}}@media only screen and (max-width:800px){.katex-display{font-size:16px!important}}
  @media only screen and (max-width:600px){.katex-display{font-size:15px!important;padding-left:10px}}@media only screen and (max-width:400px){.katex-display{font-size:14px;padding-left:7px!important}}@media only screen and (max-width:350px){.katex-display{font-size:13px!important;padding-left:5px}}.blocks-gallery-item:hover{box-shadow:rgba(0,0,0,.419608) 0 10px 15px 0,rgba(0,0,0,.117647) 0 20px 20px 10px,rgba(0,0,0,.2) 0 6px 0 -5px;-moz-box-shadow:rgba(0,0,0,.419608) 0 10px 15px 0,rgba(0,0,0,.117647) 0 20px 20px 10px,rgba(0,0,0,.2) 0 6px 0 -5px;-webkit-box-shadow:rgba(0,0,0,.419608) 0 10px 15px 0,rgba(0,0,0,.117647) 0 20px 20px 10px,rgba(0,0,0,.2) 0 6px 0 -5px;outline:none;text-decoration:none;transition:ease 250ms;transform:scale(1.03);-webkit-transition:.5s ease-in-out;transition:.18s ease-in-out}
  .nav-links{display:none}.tabla,table,th,td{margin-bottom:27px;border:1px solid rgb(221,221,221);padding:10px 20px;text-align:center;max-width:100%;width:100%}.page-id-55 .size-post-thumbnail.wp-post-image{display:block}@media only screen and (max-width:1000px){.text-logo{font-size:32px!important}}
  @media only screen and (max-width:900px){.text-logo{font-size:32px!important}}@media only screen and (max-width:800px){.text-logo{font-size:30px!important}}@media only screen and (max-width:600px){.text-logo{font-size:28px!important}}
  @media only screen and (max-width:400px){.text-logo{font-size:24px!important}}.wp-block-separator{margin-bottom:27px}#overlapable-4{padding-bottom:20px}#about-1,#content-2{padding-top:35px}@media (max-width:400px){.button.blue{width:100%;font-size:13px}}.wp-block-gallery.columns-2.is-cropped.galeria,.wp-block-gallery.columns-1{margin-top:-20%}
  @media (max-width:2000px){.wp-block-gallery.columns-2{display:flex}.wp-block-gallery.columns-1{display:none}}@media (max-width:500px){.wp-block-gallery.columns-2{display:none}.wp-block-gallery.columns-1{display:block;margin-top:-25%}}#head{margin:10px;padding:9px}.bib__title,.relacionado{display:none}.pt-cv-wrapper{margin-bottom:20px}
  @media (max-width:2000px){.pt-cv-wrapper{display:block}}@media (max-width:750px){.pt-cv-wrapper{display:block}.cvwidget{display:none}}.textwidget.custom-html-widget{padding:0}.adsbygoogle.adsbygoogle-noablate{max-height:500px!important}.gridContainer{margin-left:75px;margin-right:75px;max-width:4000px!important;width:auto!important}.post-item,.post-list{width:73%}
  .sidebar{min-width:300px!important;padding:0;margin:0}@media only screen and (max-width:1261px){.post-item,.post-list{width:70%}}@media only screen and (max-width:1261px){.post-item,.post-list{width:69.5%}}@media only screen and (max-width:1149px){.post-item,.post-list{width:60%}}
  @media only screen and (max-width:900px){.post-item,.post-list{min-width:auto}.sidebar{min-width:auto;padding:0}.gridContainer{margin-left:auto;margin-right:auto}#ai_widget-2{display:none}}@media only screen and (max-width:767px){.post-item,.post-list{width:auto}.sidebar{min-width:auto;padding:0}
  .gridContainer{margin-left:auto;margin-right:auto}#ai_widget-2{display:none}}ul.relaciona2{display:inline-flex;flex-wrap:wrap;align-items:center;justify-content:center}.code-block{margin:0!important}.features-overlapped-icons-featuresrow.flexbox-list{width:90%}.cta-blue-section{padding-left:5%;padding-right:5%}.pt-cv-wrapper{margin-bottom:0}.pt-cv-readmore.btn-success.cvplbd{border-radius:4px}li.active{background-color:#03a9f4!important;background-image:-webkit-gradient(linear,left top,left bottom,from(#03a9f4),to(#03a9f4))!important;background-image:-webkit-linear-gradient(top,#03a9f4,#03a9f4)!important}
  .clients-grid-textrow.row{margin-bottom:0}.clients-grid-section{padding-bottom:35px}.clients-grid-textcol.dynamic-color{width:90%;margin:auto}.contact-section-formsection,.numbers-section:before{background-image:-webkit-gradient(linear,left top,left bottom,from(#03a9f4),to(#2186c4))!important}.is-form-style input.is-search-input{font-size:18px!important;margin-right:1.55em!important}
  .is-search-form.is-form-style.is-form-style-1.is-form-id-215.is-ajax-search{margin:0;width:100%!important}
  .is-search-submit{border-width:0!important;border-radius:4px!important}.search-icon{color:#ededed!important;background-color:#ededed;padding:1.5px;border-radius:3px;opacity:.85;margin-bottom:-3.5px!important}.wp-block-katex-display-block.katex-eq.blue{padding:0;background-color:transparent}.blue a:link{color:#fff;text-decoration-line:underline}
  .lista ol,.listaventajas ol,.listadesventajas ol{max-width:350px;counter-reset:my-awesome-counter;list-style:none;padding-left:40px}.lista ol,.lista li,.listaventajas ol,.listaventajas li,.listadesventajas ol,.listadesventajas li{margin:0 0 1.8rem 0;counter-increment:my-awesome-counter;position:relative;text-align:left}
  .lista ol::before,.lista li::before,.listaventajas ol::before,.listaventajas li::before,.listadesventajas ol::before,.listadesventajas li::before{content:counter(my-awesome-counter);color:#fff;font-size:1.5rem;font-weight:700;position:absolute;--size:35px;left:calc(-1*var(--size) - 5px);line-height:var(--size);width:var(--size);height:var(--size);top:-6px;transform:rotate(-10deg);background:#03a9f4;border-radius:50%;text-align:center;box-shadow:1px 1px 0 #999}
  .hache3{border-left:7px solid #03a9f4;padding-left:10px;font-size:28px}.grupo{padding:1em;border:2.5px solid #03a9f4;margin-bottom:20px;border-radius:4px}.schema-faq-question{color:#03a9f4;font-size:20px}.listaventajas li::before{content:counter(my-awesome-counter);background:#00d084}.listadesventajas li::before{content:counter(my-awesome-counter);background:#cf2e2e}
  .lista li::before{content:counter(my-awesome-counter);background:#03a9f4}.heading8{margin-bottom:10px!important}.header-subtitle{margin-bottom:20px!important}a{text-decoration:none!important}.page-id-1924 .header,.page-id-2034 .header{padding-bottom:0!important;top:-10;padding-top:20px!important}.page-id-1924 .page-content,.page-id-2034 .page-content{padding-top:0}
  .page-id-1924 h2,.page-id-2034 h2{font-size:21px}@media only screen and (max-width:900px){.about-images-right-imgcol{display:none}}@media only screen and (max-width:700px){.page-id-1924 .header,.page-id-2034 .header{padding-bottom:75px!important;padding-top:75px!important}}@media only screen and (max-width:1000px){.page-id-1924 #drop_mainmenu,.page-id-2034 #drop_mainmenu{margin-left:-200px!important}}
  .page-id-2034 .pt-cv-ifield,.page-id-1924 .pt-cv-ifield,.home .pt-cv-ifield{-webkit-box-shadow:0 5px 15px -6px #777;-moz-box-shadow:0 5px 15px -6px #777;box-shadow:0 5px 15px -6px #777}.pt-cv-thumbnail:hover{opacity:0.85!important}.pt-cv-title,.pt-cv-content,.pt-cv-social-buttons{padding-left:5px;padding-right:5px}
  .page-id-1743 h3{font-size:21px!important}.calculadora{padding:1em;border:2.5px solid #00c800;margin-bottom:20px;border-radius:4px}.calculadora:after{content:' \2705'}.pt-cv-title{line-height:1em!important}.header{padding-top:50px;padding-bottom:150px!important}.content{padding-top:0}
  @media only screen and (max-width:750px){.header-top{display:block!important}.header{padding-top:60px;padding-bottom:36px!important}.post-item{padding-left:0;padding-right:0}}.schema-faq-answer{margin-top:14px}p,h1{font-family:'Montserrat',sans-serif;color:#555}strong{color:#000}.has-vivid-cyan-blue-color strong{color:#03a9f4!important}
  .single-post .wp-post-image{display:none!important}.katex-display{margin-top:5px!important;margin-bottom:10px!important}@media only screen and (max-width:2000px){h1{font-size:48px!important}}@media only screen and (max-width:900px){.home p.header-subtitle,h1{font-size:38px!important}}@media only screen and (max-width:600px){.home p.header-subtitle,h1{font-size:30px!important}}
  @media only screen and (max-width:700px){.custom-logo{min-width:250px!important}}p{font-size:16px}.home-h2{margin:0 0 14px 0;color:#333;font-size:1.11em;line-height:150%;font-weight:600}p.cta-blue-text{color:#FFF!important;font-size:30px;font-weight:600;margin:0;color:#3D3D3D;line-height:110%;font-family:sans-serif}
  .explora{font-size:2em;margin:0 0 33px 0;color:#3D3D3D;font-weight:300;line-height:110%}.hablamos{font-size:2.7em;margin:0 0 33px 0;color:#FFF;font-weight:300;line-height:110%}.about-images-right-bigtitle{font-weight:600;margin-bottom:20px;margin:0 0 33px 0;color:#3D3D3D;line-height:110%;font-size:1.8em}
  .numbers-numbertext,.numbers-titletext{font-size:1.8em;color:#FFF;font-weight:600;margin:0}.home-h5{margin:10px 0 15px 0;color:#333;letter-spacing:2px;font-size:.9em;font-weight:600;line-height:150%}.home-h3{font-size:1.5em;margin:0 0 15px 0;color:#333;font-weight:600;line-height:115%}
  .home .heading8{font-weight:300;font-size:1em!important;text-transform:none}.home .header-subtitle{font-size:48px!important;text-transform:uppercase;font-weight:600}@media only screen and (max-width:3000px){.galeria{display:block!important}}@media only screen and (max-width:900px){.home p.header-subtitle,.numbers-numbertext,.numbers-titletext{line-height:110%!important}}
  </style>

  <style>
  .table-responsive table{border-collapse:collapse;border-spacing:0;padding:0;width:100%;max-width:100%;margin:0 auto 20px auto}.table-responsive{overflow-x:auto;min-height:.01%;margin-bottom:20px}.table-responsive::-webkit-scrollbar{width:10px;height:10px}.table-responsive::-webkit-scrollbar-thumb{background:#ddd;border-radius:2px}.table-responsive::-webkit-scrollbar-track-piece{background:#fff}@media (max-width:992px){.table-responsive table{width:auto!important;margin:0 auto 15px auto!important}}
  @media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive::-webkit-scrollbar{width:5px;height:5px}}
  @media screen and (min-width:1200px){.table-responsive .table{max-width:100%!important}}
  .wprt-container .table>thead>tr>th,.wprt-container .table>tbody>tr>th,.wprt-container .table>tfoot>tr>th,.wprt-container .table>thead>tr>td,.wprt-container .table>tbody>tr>td,.wprt-container .table>tfoot>tr>td,.wprt-container .table>tr>td{border:2px solid #dddddd!important}
  .wprt-container .table>thead>tr>th,.wprt-container .table>tbody>tr>th,.wprt-container .table>tfoot>tr>th,.wprt-container .table>thead>tr>td,.wprt-container .table>tbody>tr>td,.wprt-container .table>tfoot>tr>td,.wprt-container .table>tr>td{padding-top:8px!important;padding-right:8px!important;padding-bottom:8px!important;padding-left:8px!important;vertical-align:middle;text-align:center}
  .wprt-container .table-responsive .table tr:nth-child(odd){background-color:#fff!important}.wprt-container .table-responsive .table tr:nth-child(even){background-color:#f9f9f9!important}.wprt-container .table-responsive .table thead+tbody tr:nth-child(even){background-color:#fff!important}.wprt-container .table-responsive .table thead+tbody tr:nth-child(odd){background-color:#f9f9f9!important}
  .table-responsive table p{margin:0!important;padding:0!important}.table-responsive table tbody tr td,.table-responsive table tbody tr th{background-color:inherit!important}
  </style>

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
                <a href="ova.php">
                  Inicio
                </a>
              </li>
              <li>
                <a href="#informacion">
                  Información
                </a>
              </li>
              <li>
                <a href="#actividad">
                  Actividad
                </a>
              </li>
              <li>
                <a href="#calculadora">
                  Calculadora
                </a>
              </li>
              <li>
                <a href="#actividades" class="current">
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

          <nav class="navbar navbar-inverse navbar-fixed-top">
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
          <a href="index.php" id="loginButton"><span><i class="fa fa-unlock-alt"></i>&nbsp Login</span></a>
          <?php } else {
    ?>
            <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
            <a href="admin.php" id="loginButton"><span><i class="fa fa-unlock-alt"></i>&nbsp <?php echo $_SESSION["usuario"]["nombre"]; ?></span></a>
            <?php } else {?>
            <a href="usuario.php" id="loginButton"><span><i class="fa fa-unlock-alt"></i>&nbsp <?php echo $_SESSION["usuario"]["nombre"]; ?></span></a>
          <?php }

}?>

        </div>
      </header>
    </div>

    <div id="main">
        <div id="nodeDecoration"><h1 id="nodeTitle">La ley de Ohm.</h1></div>
        <div class="FreeTextfpdIdevice" id="id47">
            <div class="iDevice emphasis0">
                <div id="ta47_69" class="block" style="display:block;position:relative"><p>La Ley de Ohm relaciona las magnitudes de <strong>voltaje</strong>, <strong>resistencia</strong> e <strong>intensidad</strong> de la siguiente manera. Su enunciado es el siguiente:</p></div></div>
            </div>
            <div class="DebesconocerfpdIdevice" id="id48">
                <div class="iDevice emphasis_debesconocerfpd" id="leyohm">
                    <img alt="" class="iDevice_icon"  src="../img/icon_debesconocerfpd.png"/>
                    <span class="iDeviceTitle"><strong>Ley de Ohm.</strong></span>
                    <div class="iDevice_inner">
                        <div id="ta48_44" class="block" style="display:block;position:relative"><p><strong>La intensidad de corriente que atraviesa un circuito es directamente proporcional al voltaje o tensi&oacute;n del mismo e inversamente proporcional a la resistencia que presenta.</strong></p>
                            <p><strong>En forma de fracci&oacute;n se pone de la siguiente forma:</strong></p>
                            <p><strong><img style="display: block; margin-left: auto; margin-right: auto;" src="../img/eXe_LaTeX_math_0.gif" alt="I igual a V entre R."  /></strong></p>
                            <p style="text-align: right;">Donde <strong>I</strong> es la <strong>intensidad</strong> que se mide en <strong>amperios</strong> (<strong>A</strong>), <strong>V</strong> el <strong>voltaje</strong> que se mide en <strong>voltios</strong> (<strong>V</strong>); y <strong>R</strong> la <strong>resistencia</strong> que se mide en <strong>ohmios</strong> (<strong>&Omega;</strong>).</p></div></div>
                        </div>
                    </div>
                    <p style="text-align: right;">&nbsp;</p>
                    <div class="FreeTextfpdIdevice" id="id49">
                        <div class="iDevice emphasis0">
                            <div id="ta49_69" class="block" style="display:block;position:relative"><p>Con esta expresi&oacute;n vas a ser capaz de calcular en un circuito una magnitud a partir de las otras dos. Para calcular la intensidad calculamos directamente la fracci&oacute;n anterior.</p>
                                <p>Para calcular el <strong>voltaje</strong>, vamos a deshacer la fracci&oacute;n, pasando <strong>R</strong> que est&aacute; dividiendo al otro lado de la igualdad <strong>multiplicando</strong>. Nos queda:</p>
                                <p><img style="display: block; margin-left: auto; margin-right: auto;" src="../img/eXe_LaTeX_math_1.gif" alt="V es igual a I por R."  /><br />Ahora, si queremos calcular <strong>R</strong>, en la expresi&oacute;n anterior pasamos la<strong> I</strong> que est&aacute; multiplicando <strong>al otro lado de la igualdad dividiendo</strong>, aislando as&iacute; R. Nos queda:</p>
                                <p><img style="display: block; margin-left: auto; margin-right: auto;" src="../img/eXe_LaTeX_math_2.gif" alt="R igual a V entre I."  /></p>

                            </div>
                            <div class="ParasabermasfpdIdevice" id="informacion">
                                <div class="iDevice emphasis_parasabermasfpd">
                                    <img alt="" class="iDevice_icon"  src="../img/icon_parasabermasfpd.png"/>
                                    <span class="iDeviceTitle"><strong>Para saber más</strong></span>
                                    <div class="iDevice_inner">
                                        <div id="ta50_43" class="block" style="display:block;position:relative"><p><strong><img style="float: right;" src="../img/Georg_Simon_Ohm_wikimedia.jpg" alt="Retrato de Georg Simon Ohm." title="Georg Simon Ohm." height="127" width="100" />La ley de Ohm.</strong></p>
                                            <p>Puedes obtener m&aacute;s informaci&oacute;n sobre Ohm y su ley en el siguiente art&iacute;culo de la wikipedia:&nbsp;<a title="Acceso en nueva ventana al art&iacute;culo de la Wikipedia &quot;Ley de Ohm&quot;." href="https://es.wikipedia.org/wiki/Ley_de_Ohm" target="_blank">https://es.wikipedia.org/wiki/Ley_de_Ohm</a></p>
                                            <p style="text-align: right;">&nbsp;</p>
                                            <p style="text-align: right;">&nbsp;</p>

                                            <p>&nbsp;</p></div></div>
                                        </div>
                                    </div>
                                    <p style="text-align: right;">&nbsp;</p>
                                    <div class="ClozeIdevice" id="actividad">
                                        <div class="iDevice emphasis1">
                                            <img alt="" class="iDevice_icon"  src="../img/icon_question.gif"/>
                                            <span class="iDeviceTitle"><strong>Actividad de Espacios en Blanco</strong></span>
                                            <script type="text/javascript" src="assets/js/common.js"></script>

                                            <div class="iDevice_inner">

                                                <div id="ta163_21" class="block" style="display:block;position:relative"><p><span style="font-size: medium;"><strong>Autoevaluaci&oacute;n</strong></span></p>
                                                    <p>Completa la tabla siguiente empleando la ley de Ohm y la f&oacute;rmula de la potencia (P = V x I). (Escribe con dos cifras decimales y coma, los resultados que no sean n&uacute;meros enteros)</p></div>
                                                    <div id="cloze163_22">
                                                        <script>var YOUR_SCORE_IS = "Su puntuación es ";</script>
                                                        <input type="hidden" name="clozeFlag163_22.strictMarking" id="clozeFlag163_22.strictMarking" value="false"/>

                                                        <input type="hidden" name="clozeFlag163_22.checkCaps" id="clozeFlag163_22.checkCaps" value="false"/>

                                                        <input type="hidden" name="clozeFlag163_22.instantMarking" id="clozeFlag163_22.instantMarking" value="false"/>

                                                        <table border="0" cellpadding="5">
                                                            <thead>
                                                                <tr style="background-color: #87ceeb;" align="center">
                                                                    <td>VOLTAJE (V)</td>
                                                                    <td>INTENSIDAD (I)</td>
                                                                    <td>RESISTENCIA (R)</td>
                                                                    <td>POTENCIA (W)</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr align="center">
                                                                    <td>
                                                                        <input type="text" value=""
                                                                        id="clozeBlank163_22.0"
                                                                        style="width:4em"/>

                                                                        <span style="display: none;"
                                                                        id="clozeAnswer163_22.0">JXUwMDY5JXUwMDFkJXUwMDFlJXUwMDA3
                                                                    </span>
                                                                </td>
                                                                <td>0,25</td>
                                                                <td>5</td>
                                                                <td>
                                                                    <input type="text" value=""
                                                                    id="clozeBlank163_22.1"
                                                                    style="width:4em"/>

                                                                    <span style="display: none;"
                                                                    id="clozeAnswer163_22.1">JXUwMDY4JXUwMDFjJXUwMDFmJXUwMDAy
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr style="background-color: #f0f8ff;" align="center">
                                                            <td>12</td>
                                                            <td>
                                                                <input type="text" value=""
                                                                id="clozeBlank163_22.2"
                                                                style="width:4em"/>

                                                                <span style="display: none;"
                                                                id="clozeAnswer163_22.2">JXUwMDY4JXUwMDFjJXUwMDFkJXUwMDAz
                                                            </span>
                                                        </td>
                                                        <td>100</td>
                                                        <td>
                                                            <input type="text" value=""
                                                            id="clozeBlank163_22.3"
                                                            style="width:4em"/>

                                                            <span style="display: none;"
                                                            id="clozeAnswer163_22.3">JXUwMDY5JXUwMDFkJXUwMDE4JXUwMDAw
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr align="center">
                                                    <td>24</td>
                                                    <td>1,5</td>
                                                    <td>16</td>
                                                    <td>
                                                        <input type="text" value=""
                                                        id="clozeBlank163_22.4"
                                                        style="width:2em"/>

                                                        <span style="display: none;"
                                                        id="clozeAnswer163_22.4">JXUwMDZiJXUwMDA1
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #f0f8ff;" align="center">
                                                <td>220</td>
                                                <td>
                                                    <input type="text" value=""
                                                    id="clozeBlank163_22.5"
                                                    style="width:2em"/>

                                                    <span style="display: none;"
                                                    id="clozeAnswer163_22.5">JXUwMDY5JXUwMDAx
                                                </span>
                                            </td>
                                            <td>
                                                <input type="text" value=""
                                                id="clozeBlank163_22.6"
                                                style="width:2em"/>

                                                <span style="display: none;"
                                                id="clozeAnswer163_22.6">JXUwMDZhJXUwMDAw
                                            </span>
                                        </td>
                                        <td>2200</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="block">

                                <input type="button" name="submit163_22" value="Enviar" id="submit163_22" onclick="clozeSubmit('163_22')"/>

                                <input type="button" name="restart163_22" value="Reiniciar" style="display: none;" id="restart163_22" onclick="clozeRestart('163_22')"/>

                                &nbsp;&nbsp;
                                <input type="button" name="163_22showAnswersButton" value="Mostrar las respuestas" style="display: none;" id="showAnswersButton163_22" onclick="fillClozeInputs('163_22')"/>

                                <div id="clozeScore163_22"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    <div class="wprt-container" id="calculadora">
        <h2 class="heading8">Calculadora Ley de Ohm</h2>
        <p>Introduce únicamente DOS de los valores en los campos correspondientes y da clic en el botón &#8220;Calcular&#8221; para obtener todos los resultados. No olvides reiniciar la Calculadora ley de ohm cada vez que quieras calcular nuevos valores.</p>



        <style>table{display:inline-table}td{text-align:center;padding:5px;width:auto}</style>
        <script>var fvf;var frf;var fif;var fpf;function reset(){fvf.value="";frf.value="";fif.value="";fpf.value=""}
        function calc(){if(fvf.value!=""&&frf.value!=""&&fif.value==""&&fpf.value==""){fif.value=fvf.value/frf.value;fpf.value=fvf.value*fif.value}
        if(fvf.value!=""&&frf.value==""&&fif.value!=""&&fpf.value==""){frf.value=fvf.value/fif.value;fpf.value=fvf.value*fif.value}
        if(fvf.value!=""&&frf.value==""&&fif.value==""&&fpf.value!=""){fif.value=fpf.value/fvf.value;frf.value=fvf.value/fif.value}
        if(fvf.value==""&&frf.value!=""&&fif.value!=""&&fpf.value==""){fvf.value=frf.value*fif.value;fpf.value=fif.value*fvf.value}
        if(fvf.value==""&&frf.value!=""&&fif.value==""&&fpf.value!=""){fvf.value=Math.sqrt(fpf.value*frf.value);fif.value=fvf.value/frf.value}
        if(fvf.value==""&&frf.value==""&&fif.value!=""&&fpf.value!=""){fvf.value=fpf.value/fif.value;frf.value=fvf.value/fif.value}}
        function maino(){fvf=document.getElementById('fv');frf=document.getElementById('fr');fif=document.getElementById('fi');fpf=document.getElementById('fp')}</script>
        <body data-rsssl=1 onload="maino();">
            <div class="table-responsive wprt_style_display">
                <table class="table">
                    <tr>
                        <td>Voltaje (V)</td>
                        <td><input id="fv" type="number" min="0" step="0.1"></td>
                        <td>Volts (V)</td>
                    </tr>
                    <tr>
                        <td>Resistencia (R)</td>
                        <td><input id="fr" type="number" min="0" step="0.1"></td>
                        <td>Ohms (&ohm;)</td>
                    </tr>
                    <tr>
                        <td>Corriente (I)</td>
                        <td><input id="fi" type="number" min="0" step="0.1"></td>
                        <td>Amps (A)</td>
                    </tr>
                    <tr>
                        <td>Potencia (P)</td>
                        <td><input id="fp" type="number" min="0" step="0.1"></td>
                        <td>Watts (W)</td>
                    </tr>
                </table>
            </div>
            <div class="padre">
                <button class="button blue" onclick="calc();" style="cursor: pointer">Calcular</button>
                <button class="button blue" onclick="reset();" style="cursor: pointer">Reiniciar</button>
            </div><br>



            <hr class="wp-block-separator"/>



            <h2><strong>¿Cómo usar la calculadora de Potencia y </strong> <strong><a href="#leyohm">Ley de Ohm</a>?</strong></h2>



            <p>Para utilizar la calculadora de la Ley de ohm debemos seguir estos sencillos pasos: Introduce DOS variables (cualesquiera) en los campos de Voltaje, Resistencia, Corriente o Potencia. En cada campo se especifican las unidades (volts, ohms, amperios, watts). Una vez introducidos los dos valores da clic en el botón &#8220;Calcular&#8221; para obtener todos los resultados. Si desea calcular nuevos datos deberá limpiar los valores de los campos dando clic en &#8220;Reiniciar&#8221;.</p>



            <hr class="wp-block-separator"/>



            <h2><strong>Ecuaciones que utiliza la calculadora de Ley de ohm y Watts</strong></h2>



            <p>Fórmulas de la ley de ohm.</p>



            <p>El voltaje V en volts (V) es igual a la corriente I en amperios (A) multiplicado por la resistencia R en ohms (Ω):  <strong>V(V) = I(A) × R(Ω)</strong>.</p><br>
            <div class='code-block code-block-10 ai-viewport-1' style='margin: 8px auto; text-align: center; display: block; clear: both;'></div>



                <div class="padre">
                    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
                        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>V</mi><mo>=</mo><mi>I</mi><mo>⋅</mo><mi>R</mi></mrow></semantics></math>
                        </span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.277778em;">
                        </span><span class="mrel" style="margin-right: 0.68333em;">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.07847em;">I
                        </span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">⋅</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;">
                        </span><span class="mord mathdefault" style="margin-right: 0.00773em;">R</span></span></span></span></span>
                    </div><br><br>
                </div>



                <p>Sustituyendo la fórmula anterior podemos encontrar los valores de corriente y resistencia eléctrica de un circuito.</p><br>



                <div class="padre">
                    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
                        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>I</mi><mo>=</mo><mfrac><mi>V</mi><mi>R</mi></mfrac></mrow></semantics></math>
                        </span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="mspace" style="margin-right: 0.277778em;">
                        </span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 2.04633em; vertical-align: -0.686em;">
                        </span><span class="mord"><span class="mopen nulldelimiter">
                        </span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.36033em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;">
                        </span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.10773em;">V</span>
                        <span class="mord mathdefault" style="margin-right: 0.22222em;">/
                        </span>
                        </span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;">
                        </span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">R
                        </span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span></span>
                        </span></span></span>
                    </div><br><br>
                </div>



                <div class="padre">
                    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
                        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>I</mi><mo>=</mo><mfrac><mi>V</mi><mi>R</mi></mfrac></mrow></semantics></math>
                        </span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.07847em;">R</span><span class="mspace" style="margin-right: 0.277778em;">
                        </span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 2.04633em; vertical-align: -0.686em;">
                        </span><span class="mord"><span class="mopen nulldelimiter">
                        </span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.36033em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;">
                        </span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.10773em;">V</span>
                        <span class="mord mathdefault" style="margin-right: 0.22222em;">/
                        </span>
                        </span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;">
                        </span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">I
                        </span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span></span>
                        </span></span></span>
                    </div><br>
                </div>



                <p>Fórmula de potencia eléctrica.</p>



                <p>La potencia P en watts (W) es igual a el voltaje V en volts (V) multiplicado por la corriente I en amperios (A): <strong>P(W) = V(V) × I(A)</strong>.</p><br>



                <div class="padre">
                    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
                        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>V</mi><mo>=</mo><mi>I</mi><mo>⋅</mo><mi>R</mi></mrow></semantics></math>
                        </span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.22222em;">P</span><span class="mspace" style="margin-right: 0.277778em;">
                        </span><span class="mrel" style="margin-right: 0.68333em;">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.07847em;">V
                        </span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">⋅</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;">
                        </span><span class="mord mathdefault" style="margin-right: 0.00773em;">I</span></span></span></span></span>
                    </div>
                </div>
    </div>
  </div>

  <div class="clearfix-padding"></div>
  <!-- FOOTER -->
  <footer class="footer-second">
    <p>
      &copy; <a>Copyright 2020. Design by Carlos Polanco</a>
    </p>
  </footer>
</body>
</html>
