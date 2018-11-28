<?php  
require_once("../class/class.php");
include("../start.php");
include ("../controle/vSession.php");

$puntos_asignados = trim($_POST["puntos"]);
$posteo = trim($_POST["posteo"]);
$id_cliente = $_SESSION["id"];

$link = mysqli_connect("localhost", "root", "", "facturacion_milan");
$result = mysqli_query($link, 'SELECT * FROM tb_regi_cli WHERE email=\''.$email.'\'');

?>