<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>

<?php

	$conexion=mysqli_connect('localhost','root','','login-php');

 ?>
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
        <h1><strong>Listado de Estudiantes</strong></h1>
        <div class="table-responsive">
            <table class="table table-striped">

                <thead>
                    <tr style="background: #333333; color: #ffffff; text-align: center; font-size: 16px;">
                        <th scope="col" style="text-align: center; vertical-align: middle;">Id</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Nombre</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Usuario</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Email</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Fecha de registro</th>
                        <th scope="col" style="text-align: center;"> Actividades <br> <a href="http://localhost/ova-login2/vista/leydeohm.php#actividad" target="_blank" style="text-decoration: none;">Ley Ohm</a> | <a href="http://localhost/ova-login2/vista/tiposdecircuitos.php#Ejercicios-de-circuitos-en-serie-y-paralelo" target="_blank" style="text-decoration: none;">Tipos Circuitos</a> | <a href="http://localhost/ova-login2/vista/leyesdekirchhoff.php#actividad" target="_blank" style="text-decoration: none;">Leyes Kirchhoff</a></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
            		$sql="SELECT * from usuarios";
            		$result=mysqli_query($conexion,$sql);

            		while($mostrar=mysqli_fetch_array($result)){
            		 ?>
            		<tr>
                        <?php if ($mostrar["privilegio"] == 2) {?>
                            <td style="text-align: center;"><?php echo $mostrar['id'] ?></td>
                			<td style="text-align: center;"><?php echo $mostrar['nombre'] ?></td>
                			<td style="text-align: center;"><?php echo $mostrar['usuario'] ?></td>
                			<td style="text-align: center;"><?php echo $mostrar['email'] ?></td>
                			<td style="text-align: center;"><?php echo $mostrar['fecha_registro'] ?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ✅  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☑ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☑ </td>
                        <?php } ?>
            		</tr>
            	<?php
            	}
            	 ?>
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
