<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tipos de Circuitos | OVA</title>
  <link rel="icon" href="../img/favicon2.ico">
  <link rel="stylesheet" href="bxslider-4-4.2.12/dist/jquery.bxslider.css">
  <!-- <script src="jquery-3.1.1.min.js"></script> -->
  <script src="jquery-1.11.3.min.js"></script>
  <script src="bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/tiposdecircuito.css">
  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="../css/content.css">
  <link rel="stylesheet" href="../css/nav.css">
  <script type="text/javascript" src="assets/js/tiposdecircuitosbody.js"></script>
  <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
  <script type="text/javascript" src="jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/overhang.min.js"></script>
  <script src="assets/js/app.js"></script>

  <style type='text/css'  data-wpacu-inline-css-file='1'>
  /*! /wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public.css */#cookie-law-info-bar{font-size:12pt;margin:0 auto;padding:13px 10px;position:absolute;text-align:center;box-sizing:border-box;width:100%;z-index:9999;box-shadow:rgba(0,0,0,.5) 0 5px 50px;display:none;left:0;font-weight:300}
  #cookie-law-info-again{font-size:10pt;margin:0;padding:5px 10px;text-align:center;z-index:9999;cursor:pointer;box-shadow:#161616 2px 2px 5px 2px}#cookie-law-info-bar span{vertical-align:middle}
  .cli-plugin-button,.cli-plugin-button:visited{display:inline-block;padding:10px 16px 10px;color:#fff;text-decoration:none;position:relative;cursor:pointer;margin-left:0;text-decoration:none}.cli-plugin-main-link{margin-left:0;font-weight:550;text-decoration:underline}.cli-plugin-button:hover{background-color:#111;color:#fff;text-decoration:none}
  .small.cli-plugin-button,.small.cli-plugin-button:visited{font-size:11px}.cli-plugin-button,.cli-plugin-button:visited,.medium.cli-plugin-button,.medium.cli-plugin-button:visited{font-size:14px;font-weight:500;line-height:1}.large.cli-plugin-button,.large.cli-plugin-button:visited{font-size:14px;padding:8px 14px 9px}
  .super.cli-plugin-button,.super.cli-plugin-button:visited{font-size:34px;padding:8px 14px 9px}.pink.cli-plugin-button,.magenta.cli-plugin-button:visited{background-color:#e22092}.pink.cli-plugin-button:hover{background-color:#c81e82}.green.cli-plugin-button,.green.cli-plugin-button:visited{background-color:#91bd09}.green.cli-plugin-button:hover{background-color:#749a02}
  .red.cli-plugin-button,.red.cli-plugin-button:visited{background-color:#e62727}.red.cli-plugin-button:hover{background-color:#cf2525}.orange.cli-plugin-button,.orange.cli-plugin-button:visited{background-color:#ff5c00}.orange.cli-plugin-button:hover{background-color:#d45500}.blue.cli-plugin-button,.blue.cli-plugin-button:visited{background-color:#2981e4}
  .blue.cli-plugin-button:hover{background-color:#2575cf}.yellow.cli-plugin-button,.yellow.cli-plugin-button:visited{background-color:#ffb515}.yellow.cli-plugin-button:hover{background-color:#fc9200}.cli-plugin-button{margin-top:5px}.cli-bar-popup{-moz-background-clip:padding;-webkit-background-clip:padding;background-clip:padding-box;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;padding:20px}
  .cli-powered_by_p{width:100%!important;display:block!important;color:#333;clear:both;font-style:italic!important;font-size:12px!important;margin-top:15px!important}.cli-powered_by_a{color:#333;font-weight:600!important;font-size:12px!important}
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
  .home .heading8{font-weight:300;font-size:1em!important;text-transform:none}.home .header-subtitle{font-size:48px!important;text-transform:uppercase;font-weight:600}@media only screen and (max-width:3000px){.galeria{display:block!important}}
  @media only screen and (max-width:900px){.home p.header-subtitle,.numbers-numbertext,.numbers-titletext{line-height:110%!important}}
  </style>

  <style type='text/css'  data-wpacu-inline-css-file='1'>
  .lwptoc{margin:32px 0}.lwptoc:first-child{margin-top:16px}.lwptoc_i{padding:14px 18px 18px;text-align:left}.lwptoc_header{margin-bottom:6px}.rtl .lwptoc_header{text-align:right}.lwptoc_toggle{white-space:nowrap;margin-left:4px;font-size:80%}
  .rtl .lwptoc_toggle{margin-left:0;margin-right:4px}.lwptoc_toggle:before{content:'['}.lwptoc_toggle:after{content:']'}.lwptoc_toggle_label{margin:0 1px}.lwptoc_item{margin-top:2px}.rtl .lwptoc_item{text-align:right}LI.lwptoc_item{margin:2px 0 0 0!important;padding:0!important;list-style:none!important}
  .lwptoc_item:first-child{margin-top:0}LI.lwptoc_item:first-child{margin-top:0!important}.lwptoc_item_number{margin-right:2px}.rtl .lwptoc_item_number{margin-right:0;margin-left:2px}.lwptoc_itemWrap .lwptoc_itemWrap{margin:2px 0 0 14px}.rtl .lwptoc_itemWrap .lwptoc_itemWrap{margin-left:0;margin-right:14px}
  OL.lwptoc_itemWrap,UL.lwptoc_itemWrap{margin:0!important;padding:0!important;list-style:none!important}OL.lwptoc_itemWrap OL.lwptoc_itemWrap,OL.lwptoc_itemWrap UL.lwptoc_itemWrap,UL.lwptoc_itemWrap OL.lwptoc_itemWrap,UL.lwptoc_itemWrap UL.lwptoc_itemWrap{margin:2px 0 0 14px!important}
  .rtl OL.lwptoc_itemWrap OL.lwptoc_itemWrap,.rtl OL.lwptoc_itemWrap UL.lwptoc_itemWrap,.rtl UL.lwptoc_itemWrap OL.lwptoc_itemWrap,.rtl UL.lwptoc_itemWrap UL.lwptoc_itemWrap{margin-left:0!important;margin-right:14px!important}.lwptoc-autoWidth .lwptoc_i{display:inline-block}.lwptoc-left{float:left;margin-top:0;margin-right:32px}
  .lwptoc-right{float:right;margin-top:0;margin-left:32px}.lwptoc-rightwithoutflow{text-align:right}.lwptoc-rightwithoutflow .lwptoc_i{display:inline-block}.lwptoc-center{text-align:center}.lwptoc-center .lwptoc_i{margin-left:auto;margin-right:auto}.lwptoc-baseItems .lwptoc_items{font-size:90%}.lwptoc-notInherit .lwptoc_i DIV A{box-shadow:none!important;border:none!important;text-decoration:none!important}
  .lwptoc-notInherit .lwptoc_i DIV A:active,.lwptoc-notInherit .lwptoc_i DIV A:focus,.lwptoc-notInherit .lwptoc_i DIV A:hover{box-shadow:none!important;border:none!important;text-decoration:none!important}.lwptoc-notInherit .lwptoc_i DIV A:hover{border-bottom:1px dotted!important}
  .lwptoc-light .lwptoc_i{color:#333;background:#fafafa}.lwptoc-light .lwptoc_i A{color:#3175e4}.lwptoc-light .lwptoc_i A:active,.lwptoc-light .lwptoc_i A:focus,.lwptoc-light .lwptoc_i A:hover{color:#3175e4;border-color:#3175e4}.lwptoc-light .lwptoc_items A:visited{color:#000394}
  .lwptoc-dark .lwptoc_i{color:#d3d5d8;background:#2b2b2b}.lwptoc-dark .lwptoc_i A{color:#96c6ff}.lwptoc-dark .lwptoc_i A:active,.lwptoc-dark .lwptoc_i A:focus,.lwptoc-dark .lwptoc_i A:hover{color:#96c6ff;border-color:#71b2ff}.lwptoc-dark .lwptoc_items A:visited{color:#53a1ff}
  .lwptoc-white .lwptoc_i{color:#333;background:#fff}.lwptoc-white .lwptoc_i A{color:#3175e4}.lwptoc-white .lwptoc_i A:active,.lwptoc-white .lwptoc_i A:focus,.lwptoc-white .lwptoc_i A:hover{color:#3175e4;border-color:#3175e4}.lwptoc-white .lwptoc_items A:visited{color:#000394}.lwptoc-transparent .lwptoc_i{border:1px solid #eee}
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
                <a href="#Introduccion-a-Circuitos-en-Serie">
                  Circuito Serie
                </a>
              </li>
              <li>
                <a href="#Circuito-en-Paralelo-definicion">
                  Circuito Paralelo
                </a>
              </li>
              <li>
                <a href="#Ejercicios-de-circuitos-en-serie-y-paralelo">
                  Actividad
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
        <div id="nodeDecoration"><h1 id="nodeTitle">Tipos de Circuitos.</h1></div>

        <div class="wprt-container">
            <p>Es importante saber identificar los tipos de conexiones que existen entre los componentes electrónicos que conforman cualquier circuito, ya que dependiendo de cómo estén conectados entre sí, varían su funcionamiento y sus características. Sabiendo esto vamos a ser capaces de reconocer más fácilmente cuál es la función de nuestro circuito.</p>



            <p><strong>Las dos conexiones que se pueden encontrar entre componentes electrónicos son las conexiones&nbsp;en serie y en paralelo</strong>. La necesidad de conectar componentes en serie o en paralelo es tan frecuente que justifica especial atención y cuidado al estudio de este tema.</p>



            <div class="lwptoc lwptoc-baseItems lwptoc-inherit" data-smooth-scroll="1" data-smooth-scroll-offset="25"><div class="lwptoc_i">    <div class="lwptoc_header">
                <b class="lwptoc_title">Índice de Contenidos</b>                    <span class="lwptoc_toggle">
                    <a href="#" class="lwptoc_toggle_label" data-label="mostrar">ocultar</a>
                </span>
            </div>
            <div class="lwptoc_items lwptoc_items-visible">
                <div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Introduccion-a-Circuitos-en-Serie" rel="nofollow">
                    <span class="lwptoc_item_number">1.</span>
                    <span class="lwptoc_item_label">⚡ Introducción a Circuitos en Serie</span>
                </a>
                <div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Formulas" rel="nofollow">
    <span class="lwptoc_item_number">1.1.</span>
    <span class="lwptoc_item_label">Fórmulas</span>
</a>
</div><div class="lwptoc_item">    <a href="#Circuitos-en-serie-Ejemplos" rel="nofollow">
    <span class="lwptoc_item_number">1.2.</span>
    <span class="lwptoc_item_label">Circuitos en serie Ejemplos</span>
</a>
</div></div></div><div class="lwptoc_item">    <a href="#Circuito-en-Paralelo-definicion" rel="nofollow">
    <span class="lwptoc_item_number">2.</span>
    <span class="lwptoc_item_label">⚡ Circuito en Paralelo definición</span>
</a>
<div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Formulas1" rel="nofollow">
    <span class="lwptoc_item_number">2.1.</span>
    <span class="lwptoc_item_label">Fórmulas</span>
</a>
</div><div class="lwptoc_item">    <a href="#Circuitos-en-paralelo-Ejemplos" rel="nofollow">
    <span class="lwptoc_item_number">2.2.</span>
    <span class="lwptoc_item_label">Circuitos en paralelo Ejemplos</span>
</a>
</div></div></div><div class="lwptoc_item">    <a href="#Caracteristicas-de-los-circuitos-en-serie-y-en-paralelo" rel="nofollow">
    <span class="lwptoc_item_number">3.</span>
    <span class="lwptoc_item_label">Características de los Circuitos en Serie y en Paralelo</span>
</a>
</div><div class="lwptoc_item">    <a href="#Ejercicios-de-circuitos-en-serie-y-paralelo" rel="nofollow">
    <span class="lwptoc_item_number">4.</span>
    <span class="lwptoc_item_label">Actividad de Circuitos en Serie y Paralelo</span>
</a>
</div></div></div>
</div></div><h2><span id="Introduccion-a-Circuitos-en-Serie">⚡ <strong>Introducción a Circuitos en Serie</strong></span></h2>



<p>Cualquier circuito en el que la electricidad tiene que pasar a través de todos los componentes del circuito y no tiene una ruta alternativa <strong>se denomina circuito en serie</strong>. En este circuito, todos los componentes están conectados en el mismo ciclo o bucle.</p>



<p style="background-color:#03a9f4" class="has-text-color has-background has-medium-font-size has-very-dark-gray-color blue">En un circuito en serie <strong>los componentes electrónicos están conectados como los eslabones de una cadena</strong>: el final de uno con el principio del otro.</p>



<div class="wp-block-image"><figure class="aligncenter"><picture class="wp-image-140">
    <source type="image/webp" data-lazy-srcset="../img/Resistencias-en-serie.png 1024w, ../img/Resistencias-en-serie.png 300w, ../img/Resistencias-en-serie.png 768w, ../img/Resistencias-en-serie.png 1068w" srcset="../img/Resistencias-en-serie.png" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
    <img src="../img/Resistencias-en-serie.png" alt="Conexión en serie de dos resistencias" data-lazy-srcset="../img/Resistencias-en-serie.png 1024w, ../img/Resistencias-en-serie.png 300w, ../img/Resistencias-en-serie.png 768w, ../img/Resistencias-en-serie.png 1068w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="../img/Resistencias-en-serie.png"/>
</picture>
<noscript><picture class="wp-image-140">
    <source type="image/webp" srcset="../img/Resistencias-en-serie.png 1024w, ../img/Resistencias-en-serie.png 300w, ../img/Resistencias-en-serie.png 768w, ../img/Resistencias-en-serie.png 1068w" sizes="(max-width: 1024px) 100vw, 1024px"/>
    <img src="../img/Resistencias-en-serie.png" alt="Conexión en serie de dos resistencias" srcset="../img/Resistencias-en-serie.png 1024w, ../img/Resistencias-en-serie.png 300w, ../img/Resistencias-en-serie.png 768w, ../img/Resistencias-en-serie.png 1068w" sizes="(max-width: 1024px) 100vw, 1024px"/>
</picture>
</noscript><figcaption>Conexión en serie de dos resistencias</figcaption></figure></div>

<hr class="wp-block-separator">


<h3><span id="Formulas">Fórmulas</span></h3>


<p>Recordemos que en un Circuito en Serie los receptores están instalados uno a continuación de otro en la línea eléctrica, de tal forma que <strong>la corriente  que atraviesa el primero de ellos será la misma que la que atraviesa el último.</strong> Sabiendo esto y con ayuda de la Ley de Ohm podemos deducir las fórmulas que se utilizan para obtener alguna característica en específico de nuestro circuito.</p>


<hr class="wp-block-separator">


<h4 class="hache4"><strong>Resistencia</strong> Equivalente</h4>


<p><strong>La resistencia equivalente</strong> <strong>de un circuito es la</strong> <strong>cantidad de resistencia (ohms) que necesitaría una sola resistencia para igualar el efecto general de la colección de resistencias</strong> que están presentes en el circuito. Para los circuitos en serie, la fórmula matemática para calcular la resistencia equivalente
    <em>( R</em>
    <sub>
        <em>eq</em>
    </sub>
    <em> )</em>
    es:</p><br>

    <div class="padre">
        <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
            <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>R</mi><mrow><mi>e</mi><mi>q</mi></mrow></msub><mo>=</mo><msub><mi>R</mi><mn>1</mn>
            </msub><mo>+</mo><msub><mi>R</mi><mn>2</mn></msub><mo>+</mo><msub><mi>R</mi><mn>3</mn></msub><mo>+</mo><mo>…</mo><msub><mi>R</mi><mi>n</mi></msub></mrow>
            </semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.969438em; vertical-align: -0.286108em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">R
            </span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span>
            <span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight">e</span><span class="mord mathdefault mtight" style="margin-right: 0.03588em;">q</span></span></span></span></span><span class="vlist-s">​</span></span>
            <span class="vlist-r"><span class="vlist" style="height: 0.286108em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span>
            <span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span>
            <span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">R</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;">
                <span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">1</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;">
                    <span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base">
                        <span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">R</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r">
                            <span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2</span>
                        </span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;">
                        </span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord">
                            <span class="mord mathdefault" style="margin-right: 0.00773em;">R</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;">
                                <span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">3</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;">
                                    <span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base">
                                        <span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="minner">…</span><span class="mspace" style="margin-right: 0.166667em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">R</span>
                                        <span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;">
                                        </span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">n</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span>
                                    </span></span></span></span></span></span>
        </div>
    </div><br>


<h4 class="hache4">Intensidad total</h4>


<p><strong>La corriente en un circuito en serie es igual en todas partes.</strong> Se puede pensar que las cargas marchan juntas a través de los cables de un circuito eléctrico, avanzando en todas partes al mismo ritmo. <strong>La velocidad a la que fluye la carga, es igual en todas partes. Es lo mismo en la primera resistencia que en la última resistencia que en la batería.</strong> Matemáticamente, la fórmula se podría escribir de la siguiente manera:</p><br>


<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>I</mi><mi>T</mi></msub><mo>=</mo><msub><mi>I</mi><mn>1</mn></msub><mo>=</mo><msub><mi>I</mi><mn>2</mn></msub><mo>=</mo><msub><mi>I</mi><mn>3</mn></msub><mo>=</mo><mo>…</mo><msub><mi>I</mi><mi>n</mi></msub></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.13889em;">T</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">1</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">3</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="minner">…</span><span class="mspace" style="margin-right: 0.166667em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">n</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span></span></span></span></span>
    </div>
</div><br><br>

<hr class="wp-block-separator">


<h3><span id="Circuitos-en-serie-Ejemplos">Circuitos en serie Ejemplos</span></h3>


<p>Ya sabemos que <strong>en un circuito en serie los elementos están conectados como los eslabones de una cadena</strong>. La salida de uno a la entrada del siguiente y así sucesivamente hasta cerrar el circuito (únicamente tocándose en un nodo).</p>


<p><strong>El funcionamiento y las características de cualquier circuito en serie dependerán de los componentes que lo conforman.</strong> A continuación te presentamos algunos ejemplos de circuitos en serie:</p>

<hr class="wp-block-separator">


<h4 class="hache3">Circuitos RLC en serie e impedancia </h4>


<p><strong>El circuito en serie RLC está compuesto por una resistencia pura de R ohmios, una inductancia pura de L henrio​s y una capacitancia pura de C faradios que se conectan entre sí </strong>en combinación en serie. Como los tres elementos están conectados en serie, la corriente que fluye en cada elemento del circuito será la misma que la corriente total I que fluye en el circuito.</p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-250">
<source type="image/webp" data-lazy-srcset="../img/Circuito-RLC-en-serie.png 698w, ../img/Circuito-RLC-en-serie.png 300w" srcset="../img/Circuito-RLC-en-serie.png" data-lazy-sizes="(max-width: 456px) 100vw, 456px"/>
<img src="../img/Circuito-RLC-en-serie.png" alt="Circuito RLC en serie" width="456" height="267" data-lazy-srcset="../img/Circuito-RLC-en-serie.png 698w, ../img/Circuito-RLC-en-serie.png 300w" data-lazy-sizes="(max-width: 456px) 100vw, 456px" data-lazy-src="../img/Circuito-RLC-en-serie.png"/>
</picture>
<noscript><picture class="wp-image-250">
<source type="image/webp" srcset="../img/Circuito-RLC-en-serie.png 698w, ../img/Circuito-RLC-en-serie.png 300w" sizes="(max-width: 456px) 100vw, 456px"/>
<img src="../img/Circuito-RLC-en-serie.png" alt="Circuito RLC en serie" width="456" height="267" srcset="../img/Circuito-RLC-en-serie.pngg 698w, ../img/Circuito-RLC-en-serie.png 300w" sizes="(max-width: 456px) 100vw, 456px"/>
</picture>
</noscript><figcaption>Circuito RLC en serie</figcaption></figure></div>


<p>La impedancia en un circuito en serie RLC se obtiene con la siguiente fórmula:</p><br>


<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>Z</mi><mo>=</mo><msqrt><mrow><msup><mi>R</mi><mn>2</mn></msup><mo>+</mo><mo stretchy="false">(</mo><msub><mi>X</mi><mi>L</mi></msub><mo>−</mo><msub><mi>X</mi><mi>C</mi></msub><msup><mo stretchy="false">)</mo><mn>2</mn></msup></mrow></msqrt></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.07153em;">Z</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">= sqrt</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 1.24em; vertical-align: -0.256125em;"></span><span class="mord"><span class="mord sqrt"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.983875em;"><span class="svg-align" style="top: -3.2em;"><span class="pstrut" style="height: 3.2em;"></span><span class="mord" style="padding-left: 1em;"><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">[R</span><span class="msupsub"><span class="vlist-t"><span class="vlist-r"><span class="vlist" style="height: 0.740108em;"><span class="" style="top: -2.989em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2</span></span></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mopen">(</span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">X</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">L</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">X</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.07153em;">C</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mclose"><span class="mclose">)</span><span class="msupsub"><span class="vlist-t"><span class="vlist-r"><span class="vlist" style="height: 0.740108em;"><span class="" style="top: -2.989em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2]</span></span></span></span></span></span></span></span></span></span><span class="" style="top: -2.94388em;"><span class="pstrut" style="height: 3.2em;"></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.256125em;"><span class=""></span></span></span></span></span></span></span></span></span></span>
    </div>
</div><br>


<h4 class="hache3">Circuitos en serie capacitivos</h4>


<p>Los capacitores se encuentran conectados en serie cuando están en cadena en una sola línea (presentan una conexión de lado a lado). <strong>Para los capacitores conectados en serie, la corriente de carga que fluye a través de ellos es LA MISMA</strong> para todos, ya que solo tiene un camino a seguir. Entonces, todos los condensadores en serie tienen la misma corriente que fluye a través de ellos. Por lo tanto, <strong>cada capacitor almacenará la misma cantidad de carga eléctrica Q en sus placas, independientemente de su capacidad.</strong> Esto se debe a que la carga almacenada por una placa de cualquier capacitor debe provenir de la placa de su capacitor adyacente. Por lo tanto, los condensadores conectados en serie deben tener la misma carga.</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-265">
<source type="image/webp" data-lazy-srcset="../img/Circuito-capacitivo-en-serie.png 680w, ../img/Circuito-capacitivo-en-serie.png 300w" srcset="../img/Circuito-capacitivo-en-serie.png" data-lazy-sizes="(max-width: 548px) 100vw, 548px"/>
<img src="../img/Circuito-capacitivo-en-serie.png" alt="Conexión en serie de capacitores" width="548" height="188" data-lazy-srcset="../img/Circuito-capacitivo-en-serie.png 680w, ../img/Circuito-capacitivo-en-serie.png 300w" data-lazy-sizes="(max-width: 548px) 100vw, 548px" data-lazy-src="../img/Circuito-capacitivo-en-serie.png"/>
</picture>
<noscript><picture class="wp-image-265">
<source type="image/webp" srcset="../img/Circuito-capacitivo-en-serie.png 680w, ../img/Circuito-capacitivo-en-serie.png 300w" sizes="(max-width: 548px) 100vw, 548px"/>
<img src="../img/Circuito-capacitivo-en-serie.png" alt="Conexión en serie de capacitores" width="548" height="188" srcset="../img/Circuito-capacitivo-en-serie.png 680w, ../img/Circuito-capacitivo-en-serie.png 300w" sizes="(max-width: 548px) 100vw, 548px"/>
</picture>
</noscript><figcaption>Conexión en serie de tres capacitores</figcaption></figure></div>


<hr class="wp-block-separator">


<h4 class="hache3">Circuitos en serie con resistencias</h4>


<p><strong>Las resistencias se encuentran conectadas en serie cuando están en cadena en una sola línea </strong>(presentan una conexión de lado a lado). Dado que toda la corriente que fluye a través de la primera resistencia no tiene otro camino por recorrer, también debe pasar a través de la segunda resistencia y la tercera y así sucesivamente. <strong>Las resistencias en serie tienen una corriente común que fluye a través de ellas</strong>, ya que la corriente que fluye a través de una resistencia también debe fluir a través de las otras, ya que solo puede tomar un camino.</p>


<div class="wp-block-image"><figure class="aligncenter"><picture class="wp-image-269">
<source type="image/webp" data-lazy-srcset="../img/Tres-resistencias-en-serie.png 928w, ../img/Tres-resistencias-en-serie.png 300w, ../img/Tres-resistencias-en-serie.png 768w" srcset="../img/Tres-resistencias-en-serie.png" data-lazy-sizes="(max-width: 928px) 100vw, 928px"/>
<img src="../img/Tres-resistencias-en-serie.png" alt="Conexión en serie de tres resistencias" data-lazy-srcset="../img/Tres-resistencias-en-serie.png 928w, ../img/Tres-resistencias-en-serie.png 300w, ../img/Tres-resistencias-en-serie.png 768w" data-lazy-sizes="(max-width: 928px) 100vw, 928px" data-lazy-src="../img/Tres-resistencias-en-serie.png"/>
</picture>
<noscript><picture class="wp-image-269">
<source type="image/webp" srcset="../img/Tres-resistencias-en-serie.png 928w, ../img/Tres-resistencias-en-serie.png 300w, ../img/Tres-resistencias-en-serie.png 768w" sizes="(max-width: 928px) 100vw, 928px"/>
<img src="../img/Tres-resistencias-en-serie.png" alt="Conexión en serie de tres resistencias" srcset="../img/Tres-resistencias-en-serie.png 928w, ../img/Tres-resistencias-en-serie.png 300w, ../img/Tres-resistencias-en-serie.png 768w" sizes="(max-width: 928px) 100vw, 928px"/>
</picture>
</noscript><figcaption>Conexión en serie de tres resistencias </figcaption></figure></div>


<hr class="wp-block-separator">


<h4 class="hache3">Circuitos en serie con diodos</h4>


<p><strong>Los diodos se encuentran conectados en serie cuando están en cadena en una sola línea</strong> (presentan una conexión de lado a lado). En la conexión en serie, el voltaje directo del diodo resultante aumenta y las capacidades de bloqueo inverso de los diodos se incrementan.</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-270">
<source type="image/webp" data-lazy-srcset="../img/Diodos-en-serie.png 666w, ../img/Diodos-en-serie.png 300w" srcset="../img/Diodos-en-serie.png" data-lazy-sizes="(max-width: 435px) 100vw, 435px"/>
<img src="../img/Diodos-en-serie.png" alt="Conexión en serie de diodos" width="435" height="298" data-lazy-srcset="../img/Diodos-en-serie.png 666w, ../img/Diodos-en-serie.png 300w" data-lazy-sizes="(max-width: 435px) 100vw, 435px" data-lazy-src="../img/Diodos-en-serie.png"/>
</picture>
<noscript><picture class="wp-image-270">
<source type="image/webp" srcset="../img/Diodos-en-serie.png 666w, ../img/Diodos-en-serie.png 300w" sizes="(max-width: 435px) 100vw, 435px"/>
<img src="../img/Diodos-en-serie.png" alt="Conexión en serie de diodos" width="435" height="298" srcset="../img/Diodos-en-serie.png 666w, ../img/Diodos-en-serie.png 300w" sizes="(max-width: 435px) 100vw, 435px"/>
</picture>
</noscript><figcaption>Conexión en serie de dos diodos</figcaption></figure></div>


<hr class="wp-block-separator">


<h2><span id="Circuito-en-Paralelo-definicion">⚡ <strong>Circuito en Paralelo definición</strong></span></h2>


<p><strong>Un circuito paralelo es un circuito eléctrico que tiene dos o más caminos para que fluya una carga eléctrica.</strong> Cada carga conectada en una ruta separada recibe el voltaje del circuito completo, y la corriente total del circuito es igual a la suma de las corrientes de derivación individuales.</p>

<p style="background-color:#03a9f4" class="has-text-color has-background has-medium-font-size has-very-dark-gray-color blue"><strong>Un circuito paralelo es un circuito cerrado en el que la corriente se divide en dos o más caminos antes de recombinarse para completar el circuito.</strong> </p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-141">
<source type="image/webp" data-lazy-srcset="../img/Resistencias-en-paralelo.png 510w, ../img/Resistencias-en-paralelo.png 291w" srcset="../img/Resistencias-en-paralelo.png" data-lazy-sizes="(max-width: 355px) 100vw, 355px"/>
<img src="../img/Resistencias-en-paralelo.png" alt="Conexión en paralelo de dos resistencias" width="355" height="366" data-lazy-srcset="../img/Resistencias-en-paralelo.png 510w, ../img/Resistencias-en-paralelo.png 291w" data-lazy-sizes="(max-width: 355px) 100vw, 355px" data-lazy-src="../img/Resistencias-en-paralelo.png"/>
</picture>
<noscript><picture class="wp-image-141">
<source type="image/webp" srcset="../img/Resistencias-en-paralelo.png 510w, ../img/Resistencias-en-paralelo.png 291w" sizes="(max-width: 355px) 100vw, 355px"/>
<img src="../img/Resistencias-en-paralelo.png" alt="Conexión en paralelo de dos resistencias" width="355" height="366" srcset="../img/Resistencias-en-paralelo.png 510w, ../img/Resistencias-en-paralelo.png 291w" sizes="(max-width: 355px) 100vw, 355px"/>
</picture>
</noscript><figcaption>Conexión en paralelo de dos resistencias</figcaption></figure></div>


<hr class="wp-block-separator">

<h3><span id="Formulas1">Fórmulas</span></h3>


<p>Recordemos que en un circuito en paralelo los receptores están instalados tocándose en dos nodos en la línea eléctrica, de tal forma que <strong>la corriente total del circuito es la suma de las corrientes que atraviesan por cada malla, y el voltaje es el mismo en cada una de éstas.</strong> Sabiendo esto podemos deducir las fórmulas que se utilizan para obtener alguna característica en específico de nuestro circuito.</p>


<hr class="wp-block-separator">


<h4 class="hache4"><strong>Resistencia</strong> Equivalente</h4>


<p>Al contrario de los circuitos en serie, aquí <strong>en el circuito en paralelo decimos que las resistencias individuales disminuyen en lugar de sumarse. La resistencia equivalente es menor que la menor de las resistencias del circuito.</strong> Matemáticamente, la relación entre la resistencia total y las resistencias individuales en un circuito paralelo se ve así:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mfrac><mn>1</mn><msub><mi>R</mi><mrow><mi>e</mi><mi>q</mi></mrow></msub></mfrac><mo>=</mo><msub><mfrac><mn>1</mn><mi>R</mi></mfrac><mn>1</mn></msub><mo>+</mo><msub><mfrac><mn>1</mn><mi>R</mi></mfrac><mn>2</mn></msub><mo>+</mo><msub><mfrac><mn>1</mn><mi>R</mi></mfrac><mn>3</mn></msub><mo>+</mo><mo>…</mo><msub><mfrac><mn>1</mn><mi>R</mi></mfrac><mi>n</mi></msub></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 2.29355em; vertical-align: -0.972108em;"></span><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.32144em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">1/R</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight">e</span><span class="mord mathdefault mtight" style="margin-right: 0.03588em;">q</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.286108em;"><span class=""></span></span></span></span></span></span></span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.972108em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 2.05714em; vertical-align: -0.7357em;"></span><span class="mord"><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.32144em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord mathdefault" style="margin-right: 0.00773em;">1/R</span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist"><span class="" style="top: -1.9643em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">1</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.7357em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 2.05714em; vertical-align: -0.7357em;"></span><span class="mord"><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.32144em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord mathdefault" style="margin-right: 0.00773em;">1/R</span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist"><span class="" style="top: -1.9643em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.7357em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 2.05714em; vertical-align: -0.7357em;"></span><span class="mord"><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.32144em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord mathdefault" style="margin-right: 0.00773em;">1/R</span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist"><span class="" style="top: -1.9643em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">3</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.7357em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 2.05714em; vertical-align: -0.7357em;"></span><span class="minner">…</span><span class="mspace" style="margin-right: 0.166667em;"></span><span class="mord"><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.32144em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord mathdefault" style="margin-right: 0.00773em;">1/R</span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist"><span class="" style="top: -1.9643em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">n</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.7357em;"><span class=""></span></span></span></span></span></span></span></span></span></span>
    </div>
</div><br>


<h4 class="hache4">Intensidad total</h4>


<p>Sabemos que a cada uno de los caminos que puede seguir la corriente eléctrica se le denomina “rama”. <strong>La suma de las intensidades de rama es la intensidad total del circuito.</strong> Donde  I<sub>T</sub>  es la intensidad total e  I<sub>n</sub>  son todas las intensidades de rama.  Para los circuitos en paralelo, la fórmula matemática para calcular la intensidad total ( I<sub>T</sub> ) es: </p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>I</mi><mi>T</mi></msub><mo>=</mo><msub><mi>I</mi><mn>1</mn></msub><mo>=</mo><msub><mi>I</mi><mn>2</mn></msub><mo>=</mo><msub><mi>I</mi><mn>3</mn></msub><mo>=</mo><mo>…</mo><msub><mi>I</mi><mi>n</mi></msub></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.13889em;">T</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">1</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">+</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">+</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">3</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">+</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="minner">…</span><span class="mspace" style="margin-right: 0.166667em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.07847em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">n</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span></span></span></span></span>
    </div>
</div><br>


<h4 class="hache4">Voltaje final</h4>


<p>El primer principio para entender los circuitos en paralelo es que <strong>el voltaje es igual en todos los componentes del circuito.</strong> Esto se debe a que solo hay dos conjuntos de puntos eléctricamente comunes en un circuito paralelo, y el voltaje medido entre conjuntos de puntos comunes siempre debe ser el mismo en un momento dado.</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>V</mi><mi>F</mi></msub><mo>=</mo><msub><mi>V</mi><mn>1</mn></msub><mo>=</mo><msub><mi>V</mi><mn>2</mn></msub><mo>=</mo><msub><mi>V</mi><mn>3</mn></msub><mo>=</mo><mo>…</mo><msub><mi>V</mi><mi>n</mi></msub></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.13889em;">F</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">1</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">2</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">3</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="minner">…</span><span class="mspace" style="margin-right: 0.166667em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">n</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span></span></span></span></span>
    </div>
</div><br><br>


<hr class="wp-block-separator">


<h3><span id="Circuitos-en-paralelo-Ejemplos">Circuitos en paralelo Ejemplos</span></h3>


<p><strong>La conexión en paralelo se utiliza cuando es preciso conservar la independencia absoluta entre cada uno de los componentes y la alimentación.</strong> En los extremos de cada uno de los elementos existe la misma&nbsp;diferencia de potencial,&nbsp;y <strong>la interrupción de un conductor no perjudica la circulación por los demás.</strong></p>


<p>En cambio, en una conexión en serie la interrupción de un utilizador deja sin alimentación a todo el circuito.&nbsp;A continuación te presentamos algunos ejemplos de circuitos en paralelo: </p>


<hr class="wp-block-separator">


<h4 class="hache3">C<strong>ircuitos con baterías en paralelo</strong> </h4>


<p><strong>Las pilas eléctricas están conectadas en paralelo si todos los polos del mismo signo están unidos entre sí.</strong> De estos puntos comunes de unión sale el cable que lleva la corriente al circuito.</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="../img/baterias-en-paralelo.png" alt="Baterías conectadas en paralelo" class="wp-image-338" width="330" height="394" data-lazy-srcset="../img/baterias-en-paralelo.png 439w, ../img/baterias-en-paralelo.png 251w" data-lazy-sizes="(max-width: 330px) 100vw, 330px" data-lazy-src="../img/baterias-en-paralelo.png"><noscript><img src="https://mielectronicafacil.com/wp-content/uploads/2019/09/baterias-en-paralelo.png" alt="Baterías conectadas en paralelo" class="wp-image-338" width="330" height="394" srcset="../img/baterias-en-paralelo.png 439w, ../img/baterias-en-paralelo.png 251w" sizes="(max-width: 330px) 100vw, 330px"></noscript><figcaption>Baterías conectadas en paralelo</figcaption></figure></div>


<p><strong>Un conjunto de pilas en paralelo ofrece el mismo voltaje que una sola pila</strong>: las 4 pilas de 1,5 V de la imagen conectadas en paralelo dan un voltaje de 1,5 V.</p>


<ul><li>La ventaja que logramos es que la duración del sistema manteniendo esa tensión es mayor que si usamos una pila única.</li><li>La resistencia que ofrece al paso de la corriente eléctrica del circuito es menor que la de una sola pila. </li></ul>


<hr class="wp-block-separator">


<h4 class="hache3">Circuitos en paralelo&nbsp;con leds y resistencias </h4>


<p>Es posible conectar LEDS en paralelo, pero al conectarlo de esta manera da más problemas que en serie. <strong>Los voltajes directos de los LED deben coincidir estrechamente; de lo contrario, solo se iluminará el LED de voltaje más bajo y posiblemente se queme por la corriente más grande.</strong></p>


<p>Incluso si los LED tienen la misma especificación, pueden tener características I-V de mala correspondencia debido a variaciones en el proceso de producción. Esto hace que los LED pasen una corriente diferente. <strong>Para minimizar la diferencia de corriente, los LED en paralelo normalmente tienen una resistencia de lastre para cada rama.</strong> </p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="../img/LEDS-en-paralelo-768x403.png" alt="LEDS y resistencias conectados en paralelo" class="wp-image-339" width="479" height="251" data-lazy-srcset="../img/LEDS-en-paralelo-768x403.png 858w, ../img/LEDS-en-paralelo-768x403.png 300w, ../img/LEDS-en-paralelo-768x403.png 768w" data-lazy-sizes="(max-width: 479px) 100vw, 479px" data-lazy-src="../img/LEDS-en-paralelo-768x403.png"><noscript><img src="../img/LEDS-en-paralelo-768x403.png" alt="LEDS y resistencias conectados en paralelo" class="wp-image-339" width="479" height="251" srcset="../img/LEDS-en-paralelo-768x403.png 858w, ../img/LEDS-en-paralelo-768x403.png 300w, ../img/LEDS-en-paralelo-768x403.png 768w" sizes="(max-width: 479px) 100vw, 479px"></noscript><figcaption>LEDS y resistencias conectados en paralelo</figcaption></figure></div>


<hr class="wp-block-separator">


<h4 class="hache3">Circuitos RC en paralelo </h4>


<p>Las caídas de voltaje en un circuito RC paralelo son las mismas que en cualquier otro circuito paralelo; y por lo tanto, son iguales. <strong>Aplicamos un voltaje y ese voltaje se aplica igualmente a través de la resistencia y a través del capacitor.</strong></p>


<p><strong>El valor de la corriente entregada por la fuente de voltaje, se divide entre la resistencia y el capacitor</strong> ( I<sub>T</sub> = I<sub>R</sub> + I<sub>C</sub> ).</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="../img/Circuoto-RC-paralelo.png" alt="Conexion circuito RC en paralelo" class="wp-image-343" width="430" height="281" data-lazy-srcset="../img/Circuoto-RC-paralelo.png 670w, ../img/Circuoto-RC-paralelo.png 300w" data-lazy-sizes="(max-width: 430px) 100vw, 430px" data-lazy-src="../img/Circuoto-RC-paralelo.png"><noscript><img src="../img/Circuoto-RC-paralelo.png" alt="Conexion circuito RC en paralelo" class="wp-image-343" width="430" height="281" srcset="../img/Circuoto-RC-paralelo.png 670w, ../img/Circuoto-RC-paralelo.png 300w" sizes="(max-width: 430px) 100vw, 430px"></noscript><figcaption>Conexión circuito RC en paralelo</figcaption></figure></div>


<hr class="wp-block-separator">


<h2><span id="Caracteristicas-de-los-circuitos-en-serie-y-en-paralelo"><strong>Características de los circuitos en serie y en paralelo</strong></span></h2>


<p><strong>Las características y el funcionamiento entre los circuitos en serie y en paralelo varían</strong> entre sí. Tales características se pueden apreciar en la siguiente tabla:</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><a href="../img/serieparalelo.jpg"><img src="../img/serieparalelo.jpg" alt="Características circuitos en Serie y Paralelo" class="wp-image-73" width="724" height="190" data-lazy-src="../img/serieparalelo.jpg"><noscript><img src="../img/serieparalelo.jpg" alt="Características circuitos en Serie y Paralelo" class="wp-image-73" width="724" height="190"></noscript></a><figcaption>Características conexiones en serie y paralelo</figcaption></figure></div>


<hr class="wp-block-separator">


<h2><span id="Ejercicios-de-circuitos-en-serie-y-paralelo"><strong>Actividad de&nbsp;Circuitos en Serie&nbsp;y Paralelo</strong></span></h2>

<p> <strong>Actividad 1:</strong> Realizar los calculos de voltaje, corriente y potencia en cada resistor para los dos circuitos aplicando los conceptos y formulas vistas (Realizar los calculos con los valores por defecto que aparecen en los campos).</p>
<p> <strong>Actividad 2:</strong> Para visualizar los resultados correctos debemos seguir estos sencillos pasos: Introduce todos los valores (cualesquiera) en los campos de Voltaje y Resistencia. En cada campo se especifican las unidades (volts, ohms, amperios, watts). Una vez introducidos los valores da clic en el botón “Calcular” para obtener todos los resultados. Si desea calcular nuevos datos deberá borrar los valores de los campos e introducir los nuevos para posteriormente dar clic en el boton "Calcular" de nuevo.</p><br><br>

<div class="imagenes">

<p> <h3><strong>Circuito en Serie</strong></h3> </p>
<img src="../img/circuito_s.png" width="300" height="200" /><br><br>
<!-- <p> <strong>Circuito en Serie</strong> </p> -->
<div id="Voltaje_s">
    <strong> V &nbsp;= <input type="number" placeholder="10" step="0.001" min="0" max="100" id="Vs"> (V) </strong>
</div><br>
<div id="Resistencia_s1">
    <strong> R1 = <input type="number" placeholder="10000" step="0.001" min="0" max="100" id="Rs1"> (Ω) </strong>
</div><br>
<div id="Resistencia_s2">
    <strong> R2 = <input type="number" placeholder="10000" step="0.001" min="0" max="100" id="Rs2"> (Ω) </strong>
</div><br>

<button class="button blue" id="calc_s" onclick="calc();" style="cursor: pointer">Calcular</button><br><br>

<strong> <div id="resultado_s"></div> </strong>

<script>
    document.getElementById("calc_s").onclick= function calc()
    {
        var vs = document.getElementById('Vs').value;
        var rs1 = document.getElementById('Rs1').value;
        var rs2 = document.getElementById('Rs2').value;

        var text_s = "V = " + vs + " V" + ", &nbsp R1 = " + rs1 + " Ω" + ",  &nbsp R2 = " + rs2 + " Ω";

        var is = ((parseFloat(vs))/((parseFloat(rs1))+(parseFloat(rs2)))).toFixed(3);
        var vsr1 = (is * rs1).toFixed(3);
        var vsr2 = (is * rs2).toFixed(3);
        var psr1 = (is * vsr1).toFixed(3);
        var psr2 = (is * vsr2).toFixed(3);

        text_s = text_s + "<br/><br/> I_R1 = I_R2 = " + is + " A" + "<br/><br/> V_R1 = " + vsr1 + " V" + "<br/><br/> V_R2 = " + vsr2 + " V" + "<br/><br/> P_R1 = " + psr1 + " W" + "<br/><br/> P_R2 = " + psr2 + " W";

        document.getElementById('resultado_s').innerHTML= text_s;
    }
</script>

</div>


<div class="imagenes">

<p> <h3><strong>Circuito en Paralelo</strong></h3> </p>
<img src="../img/circuito_p.png" width="300" height="200" /><br><br>
<!-- <p> <strong>Circuito en Paralelo</strong> </p> -->
<div id="Voltaje_p">
    <strong> V &nbsp;= <input type="number" placeholder="10" step="0.001" min="0" max="100" id="Vp"> (V) </strong>
</div><br>
<div id="Resistencia_p1">
    <strong> R1 = <input type="number" placeholder="10000" step="0.001" min="0" max="100" id="Rp1"> (Ω) </strong>
</div><br>
<div id="Resistencia_p2">
    <strong> R2 = <input type="number" placeholder="10000" step="0.001" min="0" max="100" id="Rp2"> (Ω) </strong>
</div><br>

<button class="button blue" id="calc_p" onclick="calc();" style="cursor: pointer">Calcular</button><br><br>

<strong> <div id="resultado_p"></div> </strong>

<script>
    document.getElementById("calc_p").onclick= function calc()
    {
        var vp = document.getElementById('Vp').value;
        var rp1 = document.getElementById('Rp1').value;
        var rp2 = document.getElementById('Rp2').value;

        var text_p = "V = " + vp + " V" + ", &nbsp R1 = " + rp1 + " Ω" + ",  &nbsp R2 = " + rp2 + " Ω";

        var ipr1 = ((parseFloat(vp))/(parseFloat(rp1))).toFixed(3);
        var ipr2 = ((parseFloat(vp))/(parseFloat(rp2))).toFixed(3);
        var vpr1 = (ipr1 * rp1).toFixed(3);
        var vpr2 = (ipr2 * rp2).toFixed(3);
        var ppr1 = (ipr1 * vpr1).toFixed(3);
        var ppr2 = (ipr2 * vpr2).toFixed(3);

        text_p = text_p + "<br/><br/> I_R1 = " + ipr1 + " A" + "<br/><br/> I_R2 = " + ipr2 + " A" + "<br/><br/> V_R1 = V_R2 =  " + vpr1 + " V" + "<br/><br/> P_R1 = " + ppr1 + " W" + "<br/><br/> P_R2 = " + ppr2 + " W";

        document.getElementById('resultado_p').innerHTML= text_p;
    };
</script>

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
