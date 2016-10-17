<?php
// Funcion principal para conectarse
function conexion(){
    global $DB_HOST;
    global $DB_USER;
    global $DB_PASSWORD;
    global $DB_NAME;
    
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'epiz_18744138_tienda_1';
    
    $mysqli = @new mysqli($DB_HOST,
                          $DB_USER,
                          $DB_PASSWORD,
                          $DB_NAME);
    if (mysqli_connect_errno()){
        //printf(error_db_connect());
        echo 'error al conectar';
        exit();
    }
    return $mysqli;    
        
}
/*
// Conectando, seleccionando la base de datos
echo 'Antes de entrar';
$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('tienda_1') or die('No se pudo seleccionar la base de datos');
echo 'Conectado a la base';

$query = 'SELECT * FROM producto';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

echo $result;
*/


/*
$dsn = 'mysql:host=localhost;dbname=tienda_1';
$user = 'root';
$password = '';
echo "Antes del try".'<br>';
 try{
     $pdo = new PDO ( $dsn,
                      $user,
                      $password
                    );
     echo 'Conexion correcta';
     
 }catch ( PDOException $e){
     echo 'Error al conectarnos '.$e->getMessage();
 }*/
?> 