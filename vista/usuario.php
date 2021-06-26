<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'DOCENTE' : 'ESTUDIANTE'; ?></span></p>
				<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
        <h1><strong>Listado de actividades para realizar</strong></h1>
        <div class="table-responsive">
            <table class="table table-striped">

                <thead>
                    <tr style="background: #333333; color: #ffffff; text-align: center; font-size: 26px;">
                        <th scope="col"></th>
                        <th scope="col">ACTIVIDADES</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr style="background: #333333; color: #ffffff;  font-size: 20px;">
                        <td scope="col" style="text-align: center;">Ley de Ohm</td>
                        <td scope="col" style="text-align: center;">Tipos de Circuitos</td>
                        <td scope="col" style="text-align: center;">Leyes de Kirchhoff</td>
                    </tr>
            		<tr style="background: #333333; color: #ffffff;">
                        <td style="text-align: center;"><a href="http://localhost/ova-login2/vista/leydeohm.php#actividad" target="_blank" style="text-decoration: none;">Actividad 1: Espacios en Blanco</a> | <a href="http://localhost/ova-login2/vista/leydeohm.php#calculadora" target="_blank" style="text-decoration: none;">Actividad 2: Calculadora Ley de Ohm</a></td>
                        <td style="text-align: center;"><a href="http://localhost/ova-login2/vista/tiposdecircuitos.php#Ejercicios-de-circuitos-en-serie-y-paralelo" target="_blank" style="text-decoration: none;">Actividad: Circuitos en Serie y Paralelo</a></td>
                        <td style="text-align: center;"><a href="http://localhost/ova-login2/vista/leyesdekirchhoff.php#actividad" target="_blank" style="text-decoration: none;">Actividad: Cuestionario de Selección Múltiple</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ✅  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☑ </td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ✅ </td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☑ </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr class="wp-block-separator">
        <div class="convenciones" style="text-align: right;">
            ✅ &nbsp;&nbsp;&nbsp;&nbsp;Realizada <br>
            ☑  No realizada
        </div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?>
