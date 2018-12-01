<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

	include("../start.php");
	include("../controle/vSession.php");

  $lista = "";

  $id_cliente = $_SESSION["id"];
	$link = mysqli_connect("localhost", "factura_user", "Tsa5h34?","facturacion_milan");

	$query = mysqli_query($link, "SELECT * 
                                FROM tb_categorias_productos
                                INNER JOIN tb_productos
																ON tb_categorias_productos.id_categoria = tb_productos.id_categoria
                                INNER JOIN tb_detalle_puntos
                                on tb_productos.id_producto = tb_detalle_puntos.id_servicio
																WHERE tb_detalle_puntos.id_cliente = $id_cliente");

  while ($file = mysqli_fetch_array($query)) {
    $lista.='{
      "categoria":"'.$file['categoria'].'",
    	"servicio":"'.$file['descripcion_producto'].'",
      "puntos":"'.$file['puntos_asignados'].'",
      "fecha":"'.date('d-m-Y', strtotime($file['fecha_asignacion'])).'"
    },';
  }

  $lista = substr($lista,0, strlen($lista) - 1);
  echo '{"data":['.$lista.']}';

?>
