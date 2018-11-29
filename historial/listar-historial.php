<?php
	include("../start.php");
	include("../class/class.php");

  $conexion = new Conectar();
	$conectar = $conexion->conecta();;
  include("../controle/vSession.php");

  $lista = "";

  $id_cliente = $_SESSION["id"];
	$link = mysqli_connect("localhost", "root", "", "facturacion_milan");

	$query = mysqli_query($link ,"SELECT * 
                                FROM tb_tipo_consumo
																INNER JOIN tb_detalle_puntos
                                ON tb_tipo_consumo.id = tb_detalle_puntos.id_consumo
                                INNER JOIN tb_factura
                                ON tb_detalle_puntos.id_cliente = tb_factura.codi_clie
																INNER JOIN tb_detalle_factura
																ON tb_factura.codi_factu = tb_detalle_factura.codi_factu
																INNER JOIN tb_productos
																ON tb_detalle_factura.id_producto = tb_productos.id_producto
																WHERE tb_factura.codi_clie = $id_cliente");

  while ($row = mysqli_fetch_array($query)) {
    $lista.='{
    	"codigo":"'.$row['codi_factu'].'",
    	"consumo":"'.$row['tipo_consumo'].'",
      "descripcion":"'.$row['descripcion'].'",
    	"precio":"'.$row['precio'].'",
      "puntos":"'.$row['puntos_asignados'].'",
      "fecha":"'.date('d-m-Y', strtotime($row['fecha_asignacion'])).'"
    },';
  }

  $lista = substr($lista,0, strlen($lista) - 1);
  echo '{"data":['.$lista.']}';

?>
