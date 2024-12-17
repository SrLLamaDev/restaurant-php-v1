<?php
$servidor = "localhost";
$baseDatos = "restaurante";
$usuario = "root";
//$password = "";
$contrasenia = "";

try{
    //instruccion de conexion
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $contrasenia);
    //SHIELD
    //echo "conexion establecida";
}catch(Exception $error){
    echo $error ->getMessage();

}
?>
