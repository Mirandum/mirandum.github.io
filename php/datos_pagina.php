<?php
include('conexion.php');

$con = conexion();

//$resultado = $con->query("call obtener_categorias()");

$resultado = $con->query("SELECT * FROM categoria");

if(!$resultado){
	throw new Exception("******Error en la sentencia sql.********");
}
/*
if( mysql_num_rows($resultado) < 1){  
	echo "No cargo ningun dato";
}*/

$datos = array();


while ($row = $resultado -> fetch_assoc()){
    $datos[] = $row;
}

echo json_encode($datos);
?>