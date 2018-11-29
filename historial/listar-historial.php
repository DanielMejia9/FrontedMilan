<?php
	include("../start.php");
	include("../class/class.php");

  $conexion = new Conectar();
	$conectar = $conexion->conecta();;
  include("../controle/vSession.php");

  $id_cliente = $_SESSION["id"];
	$link = mysqli_connect("localhost", "root", "", "facturacion_milan");
	$query = mysqli_query($link ,"select * from tb_detalle_factura");
  while ($row = mysqli_fetch_array($query)) {
    $lista.='{
    	"codigo":"'.$row['codi_factu'].'",
    	"descripcion":"'.$row['descripcion'].'",
    	"producto":"'.$row['id_producto'].'",
    	"precio":"'.$row['precio'].'"
    },';
  }

  $lista = substr($lista,0, strlen($lista) - 1);
  echo '{"data":['.$lista.']}';

?>
