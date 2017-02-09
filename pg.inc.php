<?php
//abrir una conexión con la base de datos
function conectar($host, $db, $usuario, $contrasena){
return pg_connect("host=$host dbname=$db user=$usuario password=$contrasena);
}

//Crear una conexión
function cerrar_conexion($conexion){
pg_close($conexion);
}

//Ejecutar una consulta SQL sobre una conexión
function ejecutar _SQL($conexion, $cadena){
return pg_exec($conexion, $cadena);
}
//obtener un número de filas de un resultado
function numero_filas($resultado){
return pg_numrows($resultado);
}
$conexion=conectar("localhost","postgres", "tester", "123");
?>
