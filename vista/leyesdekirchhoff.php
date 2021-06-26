<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Leyes de Kirchhoff | OVA</title>
  <link rel="icon" href="../img/favicon2.ico">
  <link rel="stylesheet" href="bxslider-4-4.2.12/dist/jquery.bxslider.css">
  <!-- <script src="jquery-3.1.1.min.js"></script> -->
  <script src="jquery-1.11.3.min.js"></script>
  <script src="bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/leyesdekirchhoff.css">
  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="../css/content.css">
  <link rel="stylesheet" href="../css/nav.css">
  <script type="text/javascript" src="assets/js/leyesdekirchhoffbody.js"></script>
  <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
  <script type="text/javascript" src="jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/overhang.min.js"></script>
  <script src="assets/js/app.js"></script>

  <style type='text/css'  data-wpacu-inline-css-file='1'>
.lwptoc{margin:32px 0}.lwptoc:first-child{margin-top:16px}.lwptoc_i{padding:14px 18px 18px;text-align:left}.lwptoc_header{margin-bottom:6px}.rtl .lwptoc_header{text-align:right}.lwptoc_toggle{white-space:nowrap;margin-left:4px;font-size:80%}.rtl .lwptoc_toggle{margin-left:0;margin-right:4px}
.lwptoc_toggle:before{content:'['}.lwptoc_toggle:after{content:']'}.lwptoc_toggle_label{margin:0 1px}.lwptoc_item{margin-top:2px}.rtl .lwptoc_item{text-align:right}LI.lwptoc_item{margin:2px 0 0 0!important;padding:0!important;list-style:none!important}.lwptoc_item:first-child{margin-top:0}LI.lwptoc_item:first-child{margin-top:0!important}
.lwptoc_item_number{margin-right:2px}.rtl .lwptoc_item_number{margin-right:0;margin-left:2px}
.lwptoc_itemWrap .lwptoc_itemWrap{margin:2px 0 0 14px}.rtl .lwptoc_itemWrap .lwptoc_itemWrap{margin-left:0;margin-right:14px}OL.lwptoc_itemWrap,UL.lwptoc_itemWrap{margin:0!important;padding:0!important;list-style:none!important}OL.lwptoc_itemWrap OL.lwptoc_itemWrap,OL.lwptoc_itemWrap UL.lwptoc_itemWrap,UL.lwptoc_itemWrap OL.lwptoc_itemWrap,UL.lwptoc_itemWrap UL.lwptoc_itemWrap{margin:2px 0 0 14px!important}
.rtl OL.lwptoc_itemWrap OL.lwptoc_itemWrap,.rtl OL.lwptoc_itemWrap UL.lwptoc_itemWrap,.rtl UL.lwptoc_itemWrap OL.lwptoc_itemWrap,.rtl UL.lwptoc_itemWrap UL.lwptoc_itemWrap{margin-left:0!important;margin-right:14px!important}.lwptoc-autoWidth .lwptoc_i{display:inline-block}.lwptoc-left{float:left;margin-top:0;margin-right:32px}.lwptoc-right{float:right;margin-top:0;margin-left:32px}
.lwptoc-rightwithoutflow{text-align:right}.lwptoc-rightwithoutflow .lwptoc_i{display:inline-block}.lwptoc-center{text-align:center}.lwptoc-center .lwptoc_i{margin-left:auto;margin-right:auto}.lwptoc-baseItems .lwptoc_items{font-size:90%}.lwptoc-notInherit .lwptoc_i DIV A{box-shadow:none!important;border:none!important;text-decoration:none!important}
.lwptoc-notInherit .lwptoc_i DIV A:active,.lwptoc-notInherit .lwptoc_i DIV A:focus,.lwptoc-notInherit .lwptoc_i DIV A:hover{box-shadow:none!important;border:none!important;text-decoration:none!important}.lwptoc-notInherit .lwptoc_i DIV A:hover{border-bottom:1px dotted!important}.lwptoc-light .lwptoc_i{color:#333;background:#fafafa}
.lwptoc-light .lwptoc_i A{color:#3175e4}.lwptoc-light .lwptoc_i A:active,.lwptoc-light .lwptoc_i A:focus,.lwptoc-light .lwptoc_i A:hover{color:#3175e4;border-color:#3175e4}.lwptoc-light .lwptoc_items A:visited{color:#000394}.lwptoc-dark .lwptoc_i{color:#d3d5d8;background:#2b2b2b}
.lwptoc-dark .lwptoc_i A{color:#96c6ff}.lwptoc-dark .lwptoc_i A:active,.lwptoc-dark .lwptoc_i A:focus,.lwptoc-dark .lwptoc_i A:hover{color:#96c6ff;border-color:#71b2ff}.lwptoc-dark .lwptoc_items A:visited{color:#53a1ff}.lwptoc-white .lwptoc_i{color:#333;background:#fff}
.lwptoc-white .lwptoc_i A{color:#3175e4}.lwptoc-white .lwptoc_i A:active,.lwptoc-white .lwptoc_i A:focus,.lwptoc-white .lwptoc_i A:hover{color:#3175e4;border-color:#3175e4}.lwptoc-white .lwptoc_items A:visited{color:#000394}.lwptoc-transparent .lwptoc_i{border:1px solid #eee}
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
                <a href="#Ley-de-corrientes-de-Kirchhoff">
                  LCK
                </a>
              </li>
              <li>
                <a href="#Ley-de-voltajes-de-Kirchhoff">
                  LVK
                </a>
              </li>
              <li>
                <a href="#Resumen">
                  Resumen
                </a>
              </li>
              <li>
                <a href="#actividad">
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
        <div id="nodeDecoration"><h1 id="nodeTitle">Leyes de Kirchhoff.</h1></div>

        <div class="wprt-container">
            <p>Las leyes de Kirchhoff son fundamentales para el análisis de circuitos. <strong>Cuantifican cómo fluye la corriente a través de un circuito y cómo varía el voltaje alrededor de una malla en un circuito.</strong></p>


            <p>Nos permiten resolver problemas complejos definiendo un conjunto de leyes y teoremas de red básicos para los voltajes y corrientes alrededor de un circuito.</p>


            <ul class="blue"><li>Ley de corrientes de Kirchhoff (primera ley de Kirchhoff)</li><li>Ley de voltajes de Kirchhoff (segunda ley de Kirchhoff)</li></ul>


            <p>Estas leyes surgen de la aplicación de la ley de conservación de la energía.</p>


            <div class="lwptoc lwptoc-baseItems lwptoc-inherit" data-smooth-scroll="1" data-smooth-scroll-offset="25"><div class="lwptoc_i">    <div class="lwptoc_header">
                <b class="lwptoc_title">Índice de Contenidos</b>                    <span class="lwptoc_toggle">
                    <a href="#" class="lwptoc_toggle_label" data-label="mostrar">ocultar</a>
                </span>
            </div>
            <div class="lwptoc_items lwptoc_items-visible">
                <div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Ley-de-corrientes-de-Kirchhoff" rel="nofollow">
                    <span class="lwptoc_item_number">1.</span>
                    <span class="lwptoc_item_label">⚡ Ley de corrientes de Kirchhoff</span>
                </a>
                <div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Primera-ley-de-Kirchhoff-ejemplos" rel="nofollow">
                    <span class="lwptoc_item_number">1.1.</span>
                    <span class="lwptoc_item_label">Primera ley de Kirchhoff ejemplos</span>
                </a>
            </div><div class="lwptoc_item">    <a href="#LCK-Ejercicios" rel="nofollow">
                <span class="lwptoc_item_number">1.2.</span>
                <span class="lwptoc_item_label">LCK Ejercicios</span>
            </a>
        </div></div></div><div class="lwptoc_item">    <a href="#Ley-de-voltajes-de-Kirchhoff" rel="nofollow">
            <span class="lwptoc_item_number">2.</span>
            <span class="lwptoc_item_label">⚡ Ley de voltajes de Kirchhoff</span>
        </a>
        <div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Segunda-ley-de-Kirchhoff-ejemplos" rel="nofollow">
            <span class="lwptoc_item_number">2.1.</span>
            <span class="lwptoc_item_label">Segunda ley de Kirchhoff ejemplos</span>
        </a>
    </div><div class="lwptoc_item">    <a href="#LVK-Ejercicios" rel="nofollow">
        <span class="lwptoc_item_number">2.2.</span>
        <span class="lwptoc_item_label">LVK Ejercicios</span>
    </a>
</div></div></div><div class="lwptoc_item">    <a href="#Resumen" rel="nofollow">
    <span class="lwptoc_item_number">3.</span>
    <span class="lwptoc_item_label">Resumen</span>
</a>
</div><div class="lwptoc_item">    <a href="#actividad" rel="nofollow">
    <span class="lwptoc_item_number">4.</span>
    <span class="lwptoc_item_label">Actividad de Selección Múltiple</span>
</a>
</div></div></div>
</div></div><h2><span id="Ley-de-corrientes-de-Kirchhoff"><strong>⚡ Ley de corrientes de Kirchhoff</strong></span></h2>


<p>Esta ley axiomática se denomina como <strong>Ley de corrientes de Kirchhoff (abreviada LCK)</strong>, la cual establece simplemente que:</p>


<p class="blue">La suma algebraica de las corrientes que entran a cualquier nodo es igual a cero. </p>


<p>Esta ley representa un enunciado matemático del hecho de que la carga no se acumula en un nodo. En consecuencia, las corrientes deben sumar cero.</p>


<hr class="wp-block-separator">


<h3><span id="Primera-ley-de-Kirchhoff-ejemplos">Primera ley de Kirchhoff ejemplos</span></h3>


<p>Vamos a utilizar la siguiente ilustración como ejemplo de un nodo para ejemplificar la aplicación de la LCK.</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-800">
    <source type="image/webp" data-lazy-srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff.png 646w, ../img/Ejemplo-primera-Ley-de-Kirchhoff.png 300w" srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff.png" data-lazy-sizes="(max-width: 438px) 100vw, 438px"/>
    <img src="../img/Ejemplo-primera-Ley-de-Kirchhoff.png" alt="Ejercicio primera ley de Kirchhoff" width="438" height="266" data-lazy-srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff.png 646w, ../img/Ejemplo-primera-Ley-de-Kirchhoff.png 300w" data-lazy-sizes="(max-width: 438px) 100vw, 438px" data-lazy-src="../img/Ejemplo-primera-Ley-de-Kirchhoff.png"/>
</picture>
<noscript><picture class="wp-image-800">
    <source type="image/webp" srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff.png 646w, ../img/Ejemplo-primera-Ley-de-Kirchhoff.png 300w" sizes="(max-width: 438px) 100vw, 438px"/>
    <img src="../img/Ejemplo-primera-Ley-de-Kirchhoff.png" alt="Ejercicio primera ley de Kirchhoff" width="438" height="266" srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff.png 646w, ../img/Ejemplo-primera-Ley-de-Kirchhoff.png 300w" sizes="(max-width: 438px) 100vw, 438px"/>
</picture>
</noscript></figure></div>


<p class="has-text-color has-vivid-cyan-blue-color"><strong>¿Cuál es la corriente </strong><em><strong>i4</strong></em><strong> en el nodo distribuido?</strong></p>


<p>Esta pregunta pone a prueba tus habilidades con flechas y signos. Las direcciones de las flechas están mezcladas, algunas van hacia adentro, y otras hacia afuera. </p>


    <p>Si <strong>volvemos a dibujar el nodo con todas las flechas apuntando en la misma dirección (todas hacia adentro o todas hacia afuera)</strong> y haciendo ajustes a los signos numéricos según sea necesario tenemos lo siguiente:</p>


    <div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-802">
        <source type="image/webp" data-lazy-srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 612w, ../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 300w" srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png" data-lazy-sizes="(max-width: 425px) 100vw, 425px"/>
        <img src="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png" alt="Ejercicio LCK" width="425" height="245" data-lazy-srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 612w, ../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 300w" data-lazy-sizes="(max-width: 425px) 100vw, 425px" data-lazy-src="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png"/>
    </picture>
    <noscript><picture class="wp-image-802">
        <source type="image/webp" srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 612w, ../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 300w" sizes="(max-width: 425px) 100vw, 425px"/>
        <img src="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png" alt="Ejercicio LCK" width="425" height="245" srcset="../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 612w, ../img/Ejemplo-primera-Ley-de-Kirchhoff-2.png 300w" sizes="(max-width: 425px) 100vw, 425px"/>
    </picture>
</noscript></figure></div>


<p>Aplicando la ley de corrientes de Kirchhoff y despejando la corriente <em>i4</em> obtendremos nuestro valor final de corriente.</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mo>−</mo><mn>9</mn><mi>A</mi><mo>+</mo><mn>15</mn><mi>A</mi><mo>+</mo><mn>11</mn><mi>A</mi><mo>+</mo><msub><mi>i</mi><mn>4</mn></msub><mo>−</mo><mn>20</mn><mi>A</mi><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">−</span><span class="mord">9</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">5</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">1</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">4</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mn>4</mn></msub><mo>=</mo><mo>+</mo><mn>9</mn><mi>A</mi><mo>−</mo><mn>15</mn><mi>A</mi><mo>−</mo><mn>11</mn><mi>A</mi><mo>+</mo><mn>20</mn><mi>A</mi></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">4</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">+</span><span class="mord">9</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">5</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">1</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">A</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mn>4</mn></msub><mo>=</mo><mrow><mn mathvariant="bold">3</mn><mi mathvariant="bold">A</mi></mrow></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">4</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68611em; vertical-align: 0em;"></span><span class="mord"><span class="mord mathbf">3</span><span class="mord mathbf">A</span></span></span></span></span></span>
    </div>
</div><br>


<hr class="wp-block-separator">


<h3><span id="LCK-Ejercicios">LCK Ejercicios</span></h3>


<p class="has-text-color has-vivid-cyan-blue-color"><strong>Ejercicio 1:</strong> ¿Cuál es la corriente <em>i6</em> en el nodo distribuido?</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-811">
    <source type="image/webp" data-lazy-srcset="../img/Ejercicio-1-LCK.png 706w, ../img/Ejercicio-1-LCK.png 300w" srcset="../img/Ejercicio-1-LCK.png" data-lazy-sizes="(max-width: 471px) 100vw, 471px"/>
    <img src="../img/Ejercicio-1-LCK.png" alt="Primera ley Kirchhoff ejercicio paso a paso" width="471" height="289" data-lazy-srcset="../img/Ejercicio-1-LCK.png 706w, ../img/Ejercicio-1-LCK.png 300w" data-lazy-sizes="(max-width: 471px) 100vw, 471px" data-lazy-src="../img/Ejercicio-1-LCK.png"/>
</picture>
<noscript><picture class="wp-image-811">
    <source type="image/webp" srcset="../img/Ejercicio-1-LCK.png 706w, ../img/Ejercicio-1-LCK.png 300w" sizes="(max-width: 471px) 100vw, 471px"/>
    <img src="../img/Ejercicio-1-LCK.png" alt="Primera ley Kirchhoff ejercicio paso a paso" width="471" height="289" srcset="../img/Ejercicio-1-LCK.png 706w, ../img/Ejercicio-1-LCK.png 300w" sizes="(max-width: 471px) 100vw, 471px"/>
</picture>
</noscript></figure></div>


<p>Volvamos a redibujar el circuito con todas las flechas apuntando hacia la misma dirección (hacia afuera o hacia adentro). <strong>Elegiremos todas las corrientes apuntando hacia afuera</strong>; haciendo los ajustes necesarios con las flechas y signos tenemos lo siguiente:</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-813">
    <source type="image/webp" data-lazy-srcset="../img/Ejercicio-1-LCK-2.png 680w, ../img/Ejercicio-1-LCK-2.png 300w" srcset="../img/Ejercicio-1-LCK-2.png" data-lazy-sizes="(max-width: 477px) 100vw, 477px"/>
    <img src="../img/Ejercicio-1-LCK-2.png" alt="Ejemplo LCK" width="477" height="305" data-lazy-srcset="../img/Ejercicio-1-LCK-2.png 680w, ../img/Ejercicio-1-LCK-2.png 300w" data-lazy-sizes="(max-width: 477px) 100vw, 477px" data-lazy-src="../img/Ejercicio-1-LCK-2.png"/>
</picture>
<noscript><picture class="wp-image-813">
    <source type="image/webp" srcset="../img/Ejercicio-1-LCK-2.png 680w, ../img/Ejercicio-1-LCK-2.png 300w" sizes="(max-width: 477px) 100vw, 477px"/>
    <img src="../img/Ejercicio-1-LCK-2.png" alt="Ejemplo LCK" width="477" height="305" srcset="../img/Ejercicio-1-LCK-2.png 680w, ../img/Ejercicio-1-LCK-2.png 300w" sizes="(max-width: 477px) 100vw, 477px"/>
</picture>
</noscript></figure></div>


<p>Ahora simplemente aplicamos la Ley de corrientes de Kirchhoff y despejamos nuestra incógnita <em>i6.</em></p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mo>−</mo><mn>100</mn><mi>m</mi><mi>A</mi><mo>−</mo><mn>75</mn><mi>m</mi><mi>A</mi><mo>+</mo><mn>105</mn><mi>m</mi><mi>A</mi><mo>−</mo><mn>210</mn><mi>m</mi><mi>A</mi><mo>+</mo><mn>320</mn><mi>m</mi><mi>A</mi><mo>−</mo><msub><mi>i</mi><mn>6</mn></msub><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">−</span><span class="mord">1</span><span class="mord">0</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">7</span><span class="mord">5</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">0</span><span class="mord">5</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">2</span><span class="mord">1</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">3</span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">6</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mn>6</mn></msub><mo>=</mo><mo>−</mo><mn>100</mn><mi>m</mi><mi>A</mi><mo>−</mo><mn>75</mn><mi>m</mi><mi>A</mi><mo>+</mo><mn>105</mn><mi>m</mi><mi>A</mi><mo>−</mo><mn>210</mn><mi>m</mi><mi>A</mi><mo>+</mo><mn>320</mn><mi>m</mi><mi>A</mi></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">6</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">−</span><span class="mord">1</span><span class="mord">0</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">7</span><span class="mord">5</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">0</span><span class="mord">5</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">2</span><span class="mord">1</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">3</span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mn>6</mn></msub><mo>=</mo><mrow><mn mathvariant="bold">40</mn><mi mathvariant="bold">m</mi><mi mathvariant="bold">A</mi></mrow></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.301108em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight">6</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68611em; vertical-align: 0em;"></span><span class="mord"><span class="mord mathbf">4</span><span class="mord mathbf">0</span><span class="mord mathbf">m</span><span class="mord mathbf">A</span></span></span></span></span></span>
    </div>
</div><br><br>


<p class="has-text-color has-vivid-cyan-blue-color"><strong>Ejercicio 2:</strong> Encontrar el valor de la suma de las corrientes <em>iA+iB</em>, si <em>iC=37mA</em> <em>e iD=33mA</em>.</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-799">
    <source type="image/webp" data-lazy-srcset="../img/Ejercicio-2-LCK.png 736w, ../img/Ejercicio-2-LCK.png 300w" srcset="../img/Ejercicio-2-LCK.png" data-lazy-sizes="(max-width: 450px) 100vw, 450px"/>
    <img src="../img/Ejercicio-2-LCK.png" alt="Ejercicio paso a paso segunda ley d Kirchhoff nodo" width="450" height="253" data-lazy-srcset="../img/Ejercicio-2-LCK.png 736w, ../img/Ejercicio-2-LCK.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="../img/Ejercicio-2-LCK.png"/>
</picture>
<noscript><picture class="wp-image-799">
    <source type="image/webp" srcset="../img/Ejercicio-2-LCK.png 736w, ../img/Ejercicio-2-LCK.png 300w" sizes="(max-width: 450px) 100vw, 450px"/>
    <img src="../img/Ejercicio-2-LCK.png" alt="Ejercicio paso a paso segunda ley d Kirchhoff nodo" width="450" height="253" srcset="../img/Ejercicio-2-LCK.png 736w, ../img/Ejercicio-2-LCK.png 300w" sizes="(max-width: 450px) 100vw, 450px"/>
</picture>
</noscript></figure></div>


<p>Si consideramos el nodo de la figura anterior, la suma algebraica de<strong> las corrientes que entran al nodo </strong>debe ser cero:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mi>A</mi></msub><mo>+</mo><msub><mi>i</mi><mi>B</mi></msub><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><msub><mi>i</mi><mi>C</mi></msub><mo stretchy="false">)</mo><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><msub><mi>i</mi><mi>D</mi></msub><mo stretchy="false">)</mo><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">A</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.05017em;">B</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.07153em;">C</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.02778em;">D</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br>


    <p>Entonces, por obviedad sabemos que la ley también podría aplicarse de igual forma pero a la suma algebraica de <strong>las corrientes que abandonen el nodo:</strong></p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mo stretchy="false">(</mo><mo>−</mo><msub><mi>i</mi><mi>A</mi></msub><mo stretchy="false">)</mo><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><msub><mi>i</mi><mi>B</mi></msub><mo stretchy="false">)</mo><mo>+</mo><msub><mi>i</mi><mi>C</mi></msub><mo>+</mo><msub><mi>i</mi><mi>D</mi></msub><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">A</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.05017em;">B</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.07153em;">C</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.02778em;">D</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br>


    <p>Ahora, al igualar la suma de <strong>las corrientes que tienen flechas de referencia dirigidas hacia el nodo, con la suma de las dirigidas hacia afuera del mismo, </strong>y sustituyendo los valores de <em>iC e iD</em> tenemos lo siguiente:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mi>A</mi></msub><mo>+</mo><msub><mi>i</mi><mi>B</mi></msub><mo>=</mo><msub><mi>i</mi><mi>C</mi></msub><mo>+</mo><msub><mi>i</mi><mi>D</mi></msub></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">A</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.05017em;">B</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.07153em;">C</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.02778em;">D</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>i</mi><mi>A</mi></msub><mo>+</mo><msub><mi>i</mi><mi>B</mi></msub><mo>=</mo><mn>37</mn><mi>m</mi><mi>A</mi><mo>+</mo><mn>33</mn><mi>m</mi><mi>A</mi><mo>=</mo><mrow><mn mathvariant="bold">70</mn><mi mathvariant="bold">m</mi><mi mathvariant="bold">A</mi></mrow></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight">A</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.80952em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault">i</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: 0em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathdefault mtight" style="margin-right: 0.05017em;">B</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">3</span><span class="mord">7</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">3</span><span class="mord">3</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68611em; vertical-align: 0em;"></span><span class="mord"><span class="mord mathbf">7</span><span class="mord mathbf">0</span><span class="mord mathbf">m</span><span class="mord mathbf">A</span></span></span></span></span></span>
    </div>
</div><br><br>


    <p>Lo que establece de forma muy sencilla que en este caso la suma de las corrientes que entran es igual a la suma de las corrientes que salen.</p>


    <hr class="wp-block-separator">


    <h2><span id="Ley-de-voltajes-de-Kirchhoff"><strong>⚡ Ley de voltajes de Kirchhoff</strong></span></h2>


    <p>La ley de voltajes de Kirchhoff (abreviada <strong>LVK</strong>) es la segunda de sus leyes fundamentales que podemos usar para el análisis de circuitos, la cual simplemente  establece  que:</p>


    <p class="blue">La suma algebraica de los voltajes alrededor de cualquier trayectoria cerrada es igual a cero.</p>


    <p>En otras palabras, <strong>la suma algebraica de TODAS las tensiones alrededor del bucle debe ser igual a cero </strong><em><strong>(ΣV = 0)</strong></em><strong>.</strong> Tenga en cuenta aquí que el término “suma algebraica” significa tener en cuenta las polaridades y signos de las fuentes y las caídas de voltaje alrededor el lazo.</p>


        <hr class="wp-block-separator">


        <h3><span id="Segunda-ley-de-Kirchhoff-ejemplos">Segunda ley de Kirchhoff ejemplos</span></h3>


        <p class="has-text-color has-vivid-cyan-blue-color"><strong>Con ayuda de la Ley de Tensiones de Kirchhoff, encuentre el voltaje de la resistencia <em>R2. </em></strong></p>


        <div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-850">
            <source type="image/webp" data-lazy-srcset="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 766w, ../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 300w" srcset="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png" data-lazy-sizes="(max-width: 526px) 100vw, 526px"/>
            <img src="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png" alt="Ejemplo segunda ley Kirchhoff" width="526" height="353" data-lazy-srcset="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 766w, ../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 300w" data-lazy-sizes="(max-width: 526px) 100vw, 526px" data-lazy-src="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png"/>
        </picture>
        <noscript><picture class="wp-image-850">
            <source type="image/webp" srcset="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 766w, ../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 300w" sizes="(max-width: 526px) 100vw, 526px"/>
            <img src="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png" alt="Ejemplo segunda ley Kirchhoff" width="526" height="353" srcset="../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 766w, ../img/Ejemplo-segunda-Ley-de-Kirchhoff-1.png 300w" sizes="(max-width: 526px) 100vw, 526px"/>
        </picture>
    </noscript></figure></div>


    <p>Primero elegimos un nodo para comenzar el análisis. Usemos el nodo que conecta la R4 con la fuente de voltaje. Caminaremos en sentido horario alrededor de la trayectoria.</p>


    <p>Las flechas de voltaje están mezcladas, no todas apuntan en la misma dirección alrededor de la trayectoria. Entonces, mientras escribimos esta próxima ecuación, tendremos mucho cuidado de prestar mucha atención a la polaridad del voltaje de cada elemento en el bucle. Dependiendo de la dirección de la flecha de voltaje, se define el signo positivo o negativo.</p>


    <p>Conseguir los signos correctos en la ecuación anterior es la parte difícil. Esta es la habilidad esencial cuando se aplican las leyes de Kirchhoff. Con ayuda de la LVK obtenemos la siguiente ecuación:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mn>15</mn><mi>V</mi><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><mn>5</mn><mi>V</mi><mo stretchy="false">)</mo><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo stretchy="false">)</mo><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><mn>3</mn><mi>V</mi><mo stretchy="false">)</mo><mo>+</mo><mo stretchy="false">(</mo><mo>−</mo><mn>1</mn><mi>V</mi><mo stretchy="false">)</mo><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">5</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord">5</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">2</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord">3</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 1em; vertical-align: -0.25em;"></span><span class="mopen">(</span><span class="mord">−</span><span class="mord">1</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mclose">)</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mn>15</mn><mi>V</mi><mo>−</mo><mn>5</mn><mi>V</mi><mo>−</mo><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>−</mo><mn>3</mn><mi>V</mi><mo>−</mo><mn>1</mn><mi>V</mi><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">5</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">5</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">2</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">3</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">1</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mn>6</mn><mi>V</mi><mo>−</mo><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">6</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">−</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">2</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>=</mo><mrow><mn mathvariant="bold">6</mn><mi mathvariant="bold">V</mi></mrow></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.83333em; vertical-align: -0.15em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">2</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68611em; vertical-align: 0em;"></span><span class="mord"><span class="mord mathbf">6</span><span class="mord mathbf" style="margin-right: 0.01597em;">V</span></span></span></span></span></span>
    </div>
</div><br>


    <hr class="wp-block-separator">


    <h3><span id="LVK-Ejercicios">LVK Ejercicios</span></h3>


    <p class="has-text-color has-vivid-cyan-blue-color"><strong>Ejercicio 1:</strong> Calcular el voltaje de cada una de las resistencias del siguiente circuito. Comprobar los resultados con ayuda de la Ley de Voltajes de Kirchhoff.</p>


    <div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-851">
        <source type="image/webp" data-lazy-srcset="../img/Ejercicio-1-LVK-1.png 762w, ../img/Ejercicio-1-LVK-1.png 300w" srcset="../img/Ejercicio-1-LVK-1.png" data-lazy-sizes="(max-width: 469px) 100vw, 469px"/>
        <img src="../img/Ejercicio-1-LVK-1.png" alt="Ejercicio segunda ley de kirchhoff" width="469" height="288" data-lazy-srcset="../img/Ejercicio-1-LVK-1.png 762w, ../img/Ejercicio-1-LVK-1.png 300w" data-lazy-sizes="(max-width: 469px) 100vw, 469px" data-lazy-src="../img/Ejercicio-1-LVK-1.png"/>
    </picture>
    <noscript><picture class="wp-image-851">
        <source type="image/webp" srcset="../img/Ejercicio-1-LVK-1.png 762w, ../img/Ejercicio-1-LVK-1.png 300w" sizes="(max-width: 469px) 100vw, 469px"/>
        <img src="../img/Ejercicio-1-LVK-1.png" alt="Ejercicio segunda ley de kirchhoff" width="469" height="288" srcset="../img/Ejercicio-1-LVK-1.png 762w, ../img/Ejercicio-1-LVK-1.png 300w" sizes="(max-width: 469px) 100vw, 469px"/>
    </picture>
</noscript></figure></div>


<p>Resolveremos el circuito desde cero usando la Ley de Ohm. Luego veremos el resultado y haremos algunas observaciones. </p>

<p>El primer paso para resolver el circuito es calcular la corriente. Luego calcularemos el voltaje a través de las resistencias individuales.</p>


<p>Reconocemos este circuito como un circuito en serie, por lo que solo hay una corriente <em>i</em> que fluye a través de los cinco elementos. Para encontrarla corriente <em>i</em>, las cuatro resistencias en serie se pueden reducir a una sola resistencia equivalente:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><msub><mi>R</mi><mrow><mi>e</mi><mi>q</mi></mrow></msub><mo>=</mo><mn>100</mn><mi mathvariant="normal">Ω</mi><mo>+</mo><mn>200</mn><mi mathvariant="normal">Ω</mi><mo>+</mo><mn>300</mn><mi mathvariant="normal">Ω</mi><mo>+</mo><mn>400</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mn mathvariant="bold">1000</mn><mi mathvariant="bold">Ω</mi></mrow></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.969438em; vertical-align: -0.286108em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">R</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.151392em;"><span class="" style="top: -2.55em; margin-left: -0.00773em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight">e</span><span class="mord mathdefault mtight" style="margin-right: 0.03588em;">q</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.286108em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">1</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">3</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">4</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68611em; vertical-align: 0em;"></span><span class="mord"><span class="mord mathbf">1</span><span class="mord mathbf">0</span><span class="mord mathbf">0</span><span class="mord mathbf">0</span><span class="mord mathbf">Ω</span></span></span></span></span></span>
    </div>
</div><br><br>


<p>Usando la Ley de Ohm, la corriente es:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>I</mi><mo>=</mo><mfrac><mi>V</mi><mi>R</mi></mfrac><mo>=</mo><mfrac><mrow><mn>20</mn><mi>V</mi></mrow><mrow><mn>1000</mn><mi mathvariant="normal">Ω</mi></mrow></mfrac><mo>=</mo><mn>0.020</mn><mi>A</mi><mo>=</mo><mrow><mn mathvariant="bold">20</mn><mi mathvariant="bold">m</mi><mi mathvariant="bold">A</mi></mrow></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord mathdefault" style="margin-right: 0.07847em;">I</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 2.04633em; vertical-align: -0.686em;"></span><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.36033em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.00773em;">V/</span></span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">R</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 2.04633em; vertical-align: -0.686em;"></span><span class="mord"><span class="mopen nulldelimiter"></span><span class="mfrac"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 1.36033em;"><span class="" style="top: -2.314em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord">2</span><span class="mord">0</span><span class="mord"></span><span class="mord"></span><span class="mord">V/</span></span></span><span class="" style="top: -3.23em;"><span class="pstrut" style="height: 3em;"></span><span class="frac-line" style="border-bottom-width: 0.04em;"></span></span><span class="" style="top: -3.677em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord">100</span><span class="mord">0</span><span class="mord mathdefault" style="margin-right: 0.22222em;">Ω</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.686em;"><span class=""></span></span></span></span></span><span class="mclose nulldelimiter"></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">0</span><span class="mord">.</span><span class="mord">0</span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68611em; vertical-align: 0em;"></span><span class="mord"><span class="mord mathbf">2</span><span class="mord mathbf">0</span><span class="mord mathbf">m</span><span class="mord mathbf">A</span></span></span></span></span></span>
    </div>
</div><br>


<p>Ahora que ya sabemos la corriente podemos encontrar los voltajes en las cuatro resistencias. Regresemos al esquema original y agreguemos etiquetas de voltaje a los cinco elementos:</p>


<div class="wp-block-image"><figure class="aligncenter is-resized"><picture class="wp-image-852">
    <source type="image/webp" data-lazy-srcset="../img/Ejercicio-1-LVK-2.png 732w, ../img/Ejercicio-1-LVK-2.png 300w" srcset="../img/Ejercicio-1-LVK-2.png" data-lazy-sizes="(max-width: 514px) 100vw, 514px"/>
    <img src="../img/Ejercicio-1-LVK-2.png" alt="Dirección Voltajes de Kirchhoff etiquetas de voltaje" width="514" height="349" data-lazy-srcset="../img/Ejercicio-1-LVK-2.png 732w, ../img/Ejercicio-1-LVK-2.png 300w" data-lazy-sizes="(max-width: 514px) 100vw, 514px" data-lazy-src="../img/Ejercicio-1-LVK-2.png"/>
</picture>
<noscript><picture class="wp-image-852">
    <source type="image/webp" srcset="../img/Ejercicio-1-LVK-2.png 732w, ../img/Ejercicio-1-LVK-2.png 300w" sizes="(max-width: 514px) 100vw, 514px"/>
    <img src="../img/Ejercicio-1-LVK-2.png" alt="Dirección Voltajes de Kirchhoff etiquetas de voltaje" width="514" height="349" srcset="../img/Ejercicio-1-LVK-2.png 732w, ../img/Ejercicio-1-LVK-2.png 300w" sizes="(max-width: 514px) 100vw, 514px"/>
</picture>
</noscript></figure></div>


<p>Aplicando la Ley de Ohm cuatro veces para encontrar el voltaje en cada resistencia tenemos los resultados finales:</p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mtable rowspacing="0.24999999999999992em" columnalign="right" columnspacing=""><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>1</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>100</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">2</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>200</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">4</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>3</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>300</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">6</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>4</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>400</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">8</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr></mtable></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 6em; vertical-align: -2.75em;"></span><span class="mord"><span class="mtable"><span class="col-align-r"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 3.25em;"><span class="" style="top: -5.41em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">1</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">⋅</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mord">1</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord"><span class="mord">+</span><span class="mord mathbf">2</span><span class="mord mathbf" style="margin-right: 0.01597em;">V</span></span></span></span></span></span></span></span></span></span></span></span>
    </div>
</div>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mtable rowspacing="0.24999999999999992em" columnalign="right" columnspacing=""><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>1</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>100</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">2</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>200</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">4</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>3</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>300</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">6</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>4</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>400</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">8</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr></mtable></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 6em; vertical-align: -2.75em;"></span><span class="mord"><span class="mtable"><span class="col-align-r"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 3.25em;"><span class="" style="top: -5.41em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">2</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">⋅</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord"><span class="mord">+</span><span class="mord mathbf">4</span><span class="mord mathbf" style="margin-right: 0.01597em;">V</span></span></span></span></span></span></span></span></span></span></span></span>
    </div>
</div>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mtable rowspacing="0.24999999999999992em" columnalign="right" columnspacing=""><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>1</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>100</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">2</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>200</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">4</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>3</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>300</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">6</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>4</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>400</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">8</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr></mtable></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 6em; vertical-align: -2.75em;"></span><span class="mord"><span class="mtable"><span class="col-align-r"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 3.25em;"><span class="" style="top: -5.41em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">3</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">⋅</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mord">3</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord"><span class="mord">+</span><span class="mord mathbf">6</span><span class="mord mathbf" style="margin-right: 0.01597em;">V</span></span></span></span></span></span></span></span></span></span></span></span>
    </div>
</div>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mtable rowspacing="0.24999999999999992em" columnalign="right" columnspacing=""><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>1</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>100</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">2</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>2</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>200</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">4</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>3</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>300</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">6</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr><mtr><mtd><mstyle scriptlevel="0" displaystyle="true"><mrow><msub><mi>V</mi><mrow><mi>R</mi><mn>4</mn></mrow></msub><mo>=</mo><mn>20</mn><mi>m</mi><mi>A</mi><mo>⋅</mo><mn>400</mn><mi mathvariant="normal">Ω</mi><mo>=</mo><mrow><mo>+</mo><mn mathvariant="bold">8</mn><mi mathvariant="bold">V</mi></mrow></mrow></mstyle></mtd></mtr></mtable></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 6em; vertical-align: -2.75em;"></span><span class="mord"><span class="mtable"><span class="col-align-r"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 3.25em;"><span class="" style="top: -5.41em;"><span class="pstrut" style="height: 3em;"></span><span class="mord"><span class="mord"><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height: 0.328331em;"><span class="" style="top: -2.55em; margin-left: -0.22222em; margin-right: 0.05em;"><span class="pstrut" style="height: 2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mtight"><span class="mord mathdefault mtight" style="margin-right: 0.00773em;">R</span><span class="mord mtight">4</span></span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height: 0.15em;"><span class=""></span></span></span></span></span></span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault">m</span><span class="mord mathdefault">A</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">⋅</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mord">4</span><span class="mord">0</span><span class="mord">0</span><span class="mord">Ω</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mord"><span class="mord">+</span><span class="mord mathbf">8</span><span class="mord mathbf" style="margin-right: 0.01597em;">V</span></span></span></span></span></span></span></span></span></span></span></span>
    </div>
</div>


    <p>Para comprobar que nuestros resultados son correctos utilizaremos la LVK </p><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mo>−</mo><mn>20</mn><mi>V</mi><mo>+</mo><mn>2</mn><mi>V</mi><mo>+</mo><mn>4</mn><mi>V</mi><mo>+</mo><mn>6</mn><mi>V</mi><mo>+</mo><mn>8</mn><mi>V</mi><mo>=</mo><mn>0</mn></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">−</span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">2</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">4</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">6</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">8</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.64444em; vertical-align: 0em;"></span><span class="mord">0</span></span></span></span></span>
    </div>
</div><br><br><br>

<div class="padre">
    <div class="wp-block-katex-display-block katex-eq" data-katex-display="true">
        <span class="katex-display"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mn>2</mn><mi>V</mi><mo>+</mo><mn>4</mn><mi>V</mi><mo>+</mo><mn>6</mn><mi>V</mi><mo>+</mo><mn>8</mn><mi>V</mi><mo>=</mo><mn>20</mn><mi>V</mi></mrow></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">2</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">4</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.76666em; vertical-align: -0.08333em;"></span><span class="mord">6</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.222222em;"></span><span class="mbin">+</span><span class="mspace" style="margin-right: 0.222222em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">8</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span><span class="mspace" style="margin-right: 0.277778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right: 0.277778em;"></span></span><span class="base"><span class="strut" style="height: 0.68333em; vertical-align: 0em;"></span><span class="mord">2</span><span class="mord">0</span><span class="mord mathdefault" style="margin-right: 0.22222em;">V</span></span></span></span></span>
    </div>
</div><br>


    <hr class="wp-block-separator">


    <h2><span id="Resumen"><strong>Resumen</strong></span></h2>


    <div class="wp-block-image"><figure class="aligncenter"><picture class="wp-image-862">
        <source type="image/webp" data-lazy-srcset="../img/Leyes-de-Kirchhoff-Pinterest.png 735w, ../img/Leyes-de-Kirchhoff-Pinterest.png 200w, ../img/Leyes-de-Kirchhoff-Pinterest.png 683w, ../img/Leyes-de-Kirchhoff-Pinterest.png 720w" srcset="../img/Leyes-de-Kirchhoff-Pinterest.png" data-lazy-sizes="(max-width: 735px) 100vw, 735px"/>
        <img src="../img/Leyes-de-Kirchhoff-Pinterest.png" alt="Leyes de Kirchhoff resumen y formulas" data-lazy-srcset="../img/Leyes-de-Kirchhoff-Pinterest.png 735w, ../img/Leyes-de-Kirchhoff-Pinterest.png 200w, ../img/Leyes-de-Kirchhoff-Pinterest.png 683w, ../img/Leyes-de-Kirchhoff-Pinterest.png 720w" data-lazy-sizes="(max-width: 735px) 100vw, 735px" data-lazy-src="../img/Leyes-de-Kirchhoff-Pinterest.png"/>
    </picture>
    <noscript><picture class="wp-image-862">
        <source type="image/webp" srcset="../img/Leyes-de-Kirchhoff-Pinterest.png 735w, ../img/Leyes-de-Kirchhoff-Pinterest.png 200w, ../img/Leyes-de-Kirchhoff-Pinterest.png 683w, ../img/Leyes-de-Kirchhoff-Pinterest.png 720w" sizes="(max-width: 735px) 100vw, 735px"/>
        <img src="../img/Leyes-de-Kirchhoff-Pinterest.png" alt="Leyes de Kirchhoff resumen y formulas" srcset="../img/Leyes-de-Kirchhoff-Pinterest.png 735w, ../img/Leyes-de-Kirchhoff-Pinterest.png 200w, ../img/Leyes-de-Kirchhoff-Pinterest.png 683w, ../img/Leyes-de-Kirchhoff-Pinterest.png 720w" sizes="(max-width: 735px) 100vw, 735px"/>
    </picture>
</noscript></figure></div>

<hr class="wp-block-separator">

<h2><span id="actividad"><strong>Actividad</strong></span></h2>

<div class="MultichoiceIdevice" id="id155">
<script type="text/javascript" src="assets/js/common.js"></script>
<script type="text/javascript" src="assets/js/libot_drag.js"></script>
<div class="iDevice emphasis1">
<img alt=""      class="iDevice_icon" src="../img/icon_question.gif" />
<span class="iDeviceTitle"><strong>Preguntas de Selección Múltiple</strong></span>
<div class="iDevice_inner">
<div class="question">
<div id="taquestion155_2" class="block" style="display:block;position:relative"><p><span style="font-size: medium;"><strong>Autoevaluaci&oacute;n</strong></span></p>
<p>Responder las preguntas con base en tus conocimientos sobre las leyes de kirchhoff:</p>
<p>1. Son dos igualdades que se basan en la conservación de la energía y la carga en los circuitos eléctricos:</p></div><div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_2" id="i155_5" onclick="getFeedback(0,3,'155_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_5" class="block" style="display:block;position:relative"><p>Ley de ohm</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_2" id="i155_78" onclick="getFeedback(1,3,'155_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_78" class="block" style="display:block;position:relative"><p>	Ley de kirchhoff</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_2" id="i155_82" onclick="getFeedback(2,3,'155_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_82" class="block" style="display:block;position:relative"><p>		Ley de watt</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_2" id="i155_5" onclick="getFeedback(0,3,'155_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_5" class="block" style="display:block;position:relative"><p>	Ley de conservación</p></div></div>
</div></div>
<div id="sa0b155_2" class="feedback" style="display: none;"><div id="taf155_5" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa1b155_2" class="feedback" style="display: none;"><div id="taf155_78" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<div id="sa2b155_2" class="feedback" style="display: none;"><div id="taf155_82" class="" style="display:block;position:relative"><div align="justify"><img src="../img/incorrecto.gif" height="20" width="24" />Incorrecto!</div></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Si es un receptor &iquest;qu&eacute; tipo de energ&iacute;a transforma?</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Uy! y cuando lo pulsas &iquest;generas energ&iacute;a?</p></li><li><strong>Opción correcta</strong> <div align="justify"><img src="../img/correcto.gif" height="20" width="24" /> &iexcl;Bien! Claro que s&iacute;, si quieres que suene pulsas y si no quieres que suene no pulsas, es decir eliges lo que quieres ( eso es controlar &iquest;no?)</div></li></ol>
</div></noscript></div>
<br/><div class="question">
<div id="taquestion155_86" class="block" style="display:block;position:relative"><p>2. En un lazo cerrado, la suma de todas las caídas de tensión es igual a la tensión total suministrada. De forma equivalente, la suma algebraica de las diferencias de potencial eléctrico en un lazo es igual a cero:</p></div><div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_86" id="i155_93" onclick="getFeedback(1,3,'155_86','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_93" class="block" style="display:block;position:relative"><p>	Ley de ohm</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_86" id="i155_93" onclick="getFeedback(1,3,'155_86','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_93" class="block" style="display:block;position:relative"><p>	Ley de conservación</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_86" id="i155_97" onclick="getFeedback(2,3,'155_86','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_97" class="block" style="display:block;position:relative"><p>	Ley de corrientes</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_86" id="i155_89" onclick="getFeedback(0,3,'155_86','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_89" class="block" style="display:block;position:relative"><p>	Ley de tensiones</p></div></div>
</div></div>
<div id="sa0b155_86" class="feedback" style="display: none;"><div id="taf155_89" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<div id="sa1b155_86" class="feedback" style="display: none;"><div id="taf155_93" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa2b155_86" class="feedback" style="display: none;"><div id="taf155_97" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Opción correcta</strong> <p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Muy bien! Sin ella ni arranca el coche, ni suena.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> &iquest;Qu&eacute; controla la bater&iacute;a?</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Me parece que no te has enterado muy bien, de lo que es un receptor.</p></li></ol>
</div></noscript></div>
<br/><div class="question">
<div id="taquestion155_102" class="block" style="display:block;position:relative"><p>3. En cualquier nodo, la suma de las corrientes que entran en ese nodo es igual a la suma de las corrientes que salen. De forma equivalente, la suma de todas las corrientes que pasan por el nodo es igual a cero:</p></div><div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_102" id="i155_105" onclick="getFeedback(0,3,'155_102','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_105" class="block" style="display:block;position:relative"><p>	Ley de tensiones</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_102" id="i155_108" onclick="getFeedback(1,3,'155_102','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_108" class="block" style="display:block;position:relative"><p>	Ley de conservación</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_102" id="i155_112" onclick="getFeedback(2,3,'155_102','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_112" class="block" style="display:block;position:relative"><p>	Ley de corrientes</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option155_102" id="i155_108" onclick="getFeedback(1,3,'155_102','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans155_108" class="block" style="display:block;position:relative"><p>	Ley de watt</p></div></div>
</div></div>
<div id="sa0b155_102" class="feedback" style="display: none;"><div id="taf155_105" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa1b155_102" class="feedback" style="display: none;"><div id="taf155_108" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa2b155_102" class="feedback" style="display: none;"><div id="taf155_112" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> &iquest;Crees que la bocina le aporta energ&iacute;a a los electrones para que se muevan?</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Me parece que no "controlas" eh!</p></li><li><strong>Opción correcta</strong> <p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" /> Excelente. El claxon transforma la energ&iacute;a el&eacute;ctrica de la bater&iacute;a en sonora.</p></li></ol>
</div></noscript></div>
<br><div class="question">
<div id="taquestion154_s" class="block" style="display:block;position:relative;color:rgb(74, 71, 71)"><div align="justify">4. La leyes de kirchhoff fueron descritas por:</div> <br> </div><div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option154_2" id="i154_5" onclick="getFeedback(0,3,'154_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans154_5" class="block" style="display:block;position:relative"><p>Gustav kirchhoff</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option154_2" id="i154_52" onclick="getFeedback(1,3,'154_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans154_52" class="block" style="display:block;position:relative"><p>	Georg ohm</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option154_2" id="i154_56" onclick="getFeedback(2,3,'154_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans154_56" class="block" style="display:block;position:relative"><p>	James Watt</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option154_2" id="i154_56" onclick="getFeedback(2,3,'154_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans154_56" class="block" style="display:block;position:relative"><p>Jorge R</p></div></div>
</div></div>
<div id="sa0b154_2" class="feedback" style="display: none;"><div id="taf154_5" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<div id="sa1b154_2" class="feedback" style="display: none;"><div id="taf154_52" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa2b154_2" class="feedback" style="display: none;"><div id="taf154_56" class="" style="display:block;position:relative"><div align="justify"><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</div></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Incorrecto</strong> <p><img src="incorrecto.gif" height="20" width="24" align="absmiddle" /> Parece que no te est&aacute;s enterando de los contenidos. Anda rep&aacute;salos otra vez.</p></li><li><strong>Incorrecto</strong> <p><img src="incorrecto.gif" height="20" width="24" align="absmiddle" /> &iquest;Has le&iacute;do antes los contenidos? Pues l&eacute;elos.</p></li><li><strong>Opción correcta</strong> <div align="justify"><img src="correcto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Qu&eacute; bien! te has enterado.&nbsp; As&iacute; es, la mayor&iacute;a de los dispositivos electr&oacute;nicos aprovechan la capacidad de los&nbsp; semiconductores para liberar o no electrones, seg&uacute;n las circunstancias.</div></li></ol>
</div></noscript></div>
<br/></div>
</div>
</div>

<div class="MultichoiceIdevice" id="id152">
<script type="text/javascript" src="common.js"></script>
<script type="text/javascript" src="libot_drag.js"></script>
<div class="iDevice emphasis1">
<img alt=""      class="iDevice_icon" src="../img/icon_question.gif" />
<span class="iDeviceTitle"><strong>Ejercicios de Selección Múltiple</strong></span>
<div class="iDevice_inner">
<div class="question">
<div id="taquestion152_2" class="block" style="display:block;position:relative"><p><span style="font-size: medium;"><strong>Autoevaluaci&oacute;n</strong></span></p>
<p>1. El esquema a continuación muestra cuatro corrientes de rama que fluyen dentro y fuera de un nodo distribuido. Las distintas corrientes están en miliamperes, mA. Una de las corrientes, i, es desconocida. ¿Cuánto vale i?</p></div> <div> <img src="../img/problema1.svg" alt=""> </div> <div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_2" id="i152_5" onclick="getFeedback(0,3,'152_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_5" class="block" style="display:block;position:relative"><p>- &nbsp;4 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_2" id="i152_39" onclick="getFeedback(1,3,'152_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_39" class="block" style="display:block;position:relative"><p>+ 2 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_2" id="i152_43" onclick="getFeedback(2,3,'152_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_43" class="block" style="display:block;position:relative"><p>+ 4 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_2" id="i152_39" onclick="getFeedback(1,3,'152_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_39" class="block" style="display:block;position:relative"><p>+ 8 mA</p></div></div>
</div></div>
<div id="sa0b152_2" class="feedback" style="display: none;"><div id="taf152_5" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa1b152_2" class="feedback" style="display: none;"><div id="taf152_39" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa2b152_2" class="feedback" style="display: none;"><div id="taf152_43" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Lo siento, int&eacute;ntalo de nuevo.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Uy! me parece que tienes una peque&ntilde;a confusi&oacute;n.</p></li><li><strong>Opción correcta</strong> <p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Excelente! has acertado.</p></li></ol>
</div></noscript></div>
<br/><div class="question">
<div id="taquestion152_47" class="block" style="display:block;position:relative"><p>2. Todas las corrientes están en miliamperes, mA. ¿Cuánto vale i_5?</p></div> <div> <img src="../img/problema2.svg" alt=""> </div> <div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_47" id="i152_50" onclick="getFeedback(0,3,'152_47','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_50" class="block" style="display:block;position:relative"><p>- &nbsp;6 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_47" id="i152_54" onclick="getFeedback(1,3,'152_47','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_54" class="block" style="display:block;position:relative"><p>&nbsp;&nbsp;&nbsp;0 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_47" id="i152_58" onclick="getFeedback(2,3,'152_47','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_58" class="block" style="display:block;position:relative"><p>+ 6 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option152_47" id="i152_58" onclick="getFeedback(2,3,'152_47','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans152_58" class="block" style="display:block;position:relative"><p>+ 9 mA</p></div></div>
</div></div>
<div id="sa0b152_47" class="feedback" style="display: none;"><div id="taf152_50" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<div id="sa1b152_47" class="feedback" style="display: none;"><div id="taf152_54" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa2b152_47" class="feedback" style="display: none;"><div id="taf152_58" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Que va! con lo bien que est&aacute;n dentro de n&uacute;cleo.</p></li><li><strong>Opción correcta</strong> <p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" /> Muy bien, claro que s&iacute;, se nota que lo has entendido.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> &iexcl;Ay, Ay! te has confundido, repasa un poquito.</p></li></ol>
</div></noscript></div>
<br> <div class="question">
<div id="taquestion165_2" class="block" style="display:block;position:relative">
<p>3. ¿Cuánto vale i_3 en este nodo distribuido?</p> <div> <img src="../img/problema3.svg" alt=""> </div> </div><div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_2" id="i165_5" onclick="getFeedback(0,4,'165_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_5" class="block" style="display:block;position:relative"><p>- &nbsp;6 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_2" id="i165_130" onclick="getFeedback(1,4,'165_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_130" class="block" style="display:block;position:relative"><p> &nbsp;&nbsp;&nbsp;0 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_2" id="i165_134" onclick="getFeedback(2,4,'165_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_134" class="block" style="display:block;position:relative"><p>+ 6 mA</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_2" id="i165_138" onclick="getFeedback(3,4,'165_2','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_138" class="block" style="display:block;position:relative"><p>+ 12 mA</p></div></div>
</div></div>
<div id="sa0b165_2" class="feedback" style="display: none;"><div id="taf165_5" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa1b165_2" class="feedback" style="display: none;"><div id="taf165_130" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<div id="sa2b165_2" class="feedback" style="display: none;"><div id="taf165_134" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa3b165_2" class="feedback" style="display: none;"><div id="taf165_138" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Opción correcta</strong> <p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" /> Muy bien. Has acertado.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Lo siento, int&eacute;ntalo de nuevo.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Creo que no.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> A m&iacute; me parece que te has confundido.</p></li></ol>
</div></noscript></div>
<br/><div class="question">
<div id="taquestion165_142" class="block" style="display:block;position:relative"><p>4. ¿Cuánto vale V_R3? Recuerda: revisa el primer signo en cada uno de los voltajes de los componentes conforme caminas alrededor de la malla.</p> <div> <img src="../img/problema4.svg" alt=""> </div> </div><div style="display: table; overflow: auto; width: 100%;">
<div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_142" id="i165_145" onclick="getFeedback(0,4,'165_142','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_145" class="block" style="display:block;position:relative"><p>+ 24 V</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_142" id="i165_149" onclick="getFeedback(1,4,'165_142','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_149" class="block" style="display:block;position:relative"><p>+ 8 V</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_142" id="i165_153" onclick="getFeedback(2,4,'165_142','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_153" class="block" style="display:block;position:relative"><p>+ 7 V</p></div></div>
</div><div style="display: table-row; clear: both;" class="answer">
<div style="float: left; display: table-cell; margin-left: 0.2em;">
<input type="radio" name="option165_142" id="i165_157" onclick="getFeedback(3,4,'165_142','multi')"/></div>
<div style="float: left; display: table-cell; margin-left: 0.5em; width: 93%;">
<div id="taans165_157" class="block" style="display:block;position:relative"><p>+ 6 V</p></div></div>
</div></div>
<div id="sa0b165_142" class="feedback" style="display: none;"><div id="taf165_145" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa1b165_142" class="feedback" style="display: none;"><div id="taf165_149" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa2b165_142" class="feedback" style="display: none;"><div id="taf165_153" class="" style="display:block;position:relative"><p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" />Incorrecto!</p></div></div>
<div id="sa3b165_142" class="feedback" style="display: none;"><div id="taf165_157" class="" style="display:block;position:relative"><p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" />Correcto!</p></div></div>
<noscript><br/><div class="feedback">
<p><strong>Solution: </strong></p>
<ol><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Lo siento.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> No es correcto.</p></li><li><strong>Opción correcta</strong> <p><img src="../img/correcto.gif" height="20" width="24" align="absmiddle" /> Muy bien, has elegido la respuesta correcta.</p></li><li><strong>Incorrecto</strong> <p><img src="../img/incorrecto.gif" height="20" width="24" align="absmiddle" /> Me parece que no.</p></li></ol>
</div></noscript></div>
<br/></div>
</div>
</div>

</div>

    </div>

  <!-- FOOTER -->
  <footer class="footer-second">
    <p>
      &copy; <a>Copyright 2020. Design by Carlos Polanco</a>
    </p>
  </footer>
</body>
</html>
