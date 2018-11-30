<?php  
require_once("../class/class.php");
include("../start.php");
include ("../controle/vSession.php");

$puntos_asignados = trim($_POST["puntos"]);
$fecha = date("Y-m-d");
$id_cliente = $_SESSION["id"];
$actividad = "Seguir pagina pagina MilanBC en Facebook";

$link = mysqli_connect("localhost", "root", "", "facturacion_milan");
$query = mysqli_query($link, "SELECT * 
															FROM tb_puntos_posteo
															WHERE id_cliente = $id_cliente");
$row_puntos_posteo = mysqli_num_rows($query);

//Consultamos si ya el cliente posee puntos
  $consultar = mysqli_query($link, "SELECT * FROM tb_puntaje_cliente WHERE codi_cliente = $id_cliente ");
  $row_puntos_acumulados = mysqli_num_rows($consultar);
  //Validamos que el cliente no tenga punto en las tables puntaje_cliente y puntos_posteo
  if ($row_puntos_acumulados == 0 && $row_puntos_posteo == 0) 
  {
  	mysqli_query($link, "INSERT INTO tb_puntos_posteo (id_cliente,puntos_asignados,actividad,fecha_posteo)
																VALUES ('$id_cliente','$puntos_asignados','$actividad','$fecha')");

  	mysqli_query($link, "INSERT INTO tb_puntaje_cliente (codi_cliente,puntaje_cliente)
														    VALUES ('$id_cliente','$puntos_asignados')");
  }
  //Validamos si ya tiene puntos acumulados y no no tiene posteos
  elseif ($row_puntos_acumulados > 0 && $row_puntos_posteo == 0) 
  {
    mysqli_query($link, "INSERT INTO tb_puntos_posteo (id_cliente,puntos_asignados,actividad,fecha_posteo)
																VALUES ('$id_cliente','$puntos_asignados','$actividad','$fecha')");

    mysqli_query($link, "update tb_puntaje_cliente set puntaje_cliente = puntaje_cliente + '".$puntos_asignados."' where codi_cliente = $id_cliente");
  }


?>