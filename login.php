<?php

session_start();

include 'pg.inc.php';

//Si se ha rellenado anteriormente el formulario comprobar los datos
if (isset($POST["nombre"])){


	//sentencia SQL a ejecutar

	$sql="select * from almacen.usuarios where nombre="".
	$_POST["nombre"].
	""and contrasena="".
	$_POST[pwd."";
	$resultado=ejecutar_SQL($conexion,$sql);

	//Si hay filas los datos de acceso eran correctos
	if (numero_filas($resultado)!=0){

	//Obtener los datos del usuario logrado
	$fila=fila($resulatdo,0);

	//Almacena su id en los datos de sesión
	$_SESSION["usuario"]=$fila["id"];

	//Dar la bienvendia
	echo "<h3>Login OK</h3>
	Bienvenido,".$fila["desc"]."<br>
	Pulse <a href="producto.php" >aqu&iacute;</a>para continuar.";
	}
else	
	{
	echo "<h3>Login Fallido</h3>";
	}
}

//si no se ha iniciado la sesión mostrar un formulario de logon

if (! isset($_SESSION["usuario"])){
	print 'form method="POST" action="login.php">
		<table border="1">
			<tr>
			<td colspan="2">Introduzca sus datos de acceso</td>
			</tr>
			<tr><td>Nombre:&nbsp;</td>
			    <td>input type="text" name="nombre" id="nombre"></td>
			</tr>
		</table>
		input type="submit" value="Enviar">
	</form>';
}

?>
