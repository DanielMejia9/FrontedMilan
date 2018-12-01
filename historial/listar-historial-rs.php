<?php
	include("../start.php");
  include("../controle/vSession.php");

  $lista = "";

  $id_cliente = $_SESSION["id"];
	$link = mysqli_connect("localhost", "factura_user", "Tsa5h34?","facturacion_milan");

	$query = mysqli_query($link, "SELECT * 
                                FROM tb_actividad_posteo
                                INNER JOIN tb_puntos_posteo
                                ON tb_actividad_posteo.id = tb_puntos_posteo.id_actividad
                                WHERE tb_puntos_posteo.id_cliente = $id_cliente");

  while ($row = mysqli_fetch_array($query)) {
    $lista.='{
    	"puntos":"'.$row['puntos_asignados'].'",
    	"actividad":"'.$row['actividad'].'",
      "fecha":"'.date('d-m-Y', strtotime($row['fecha_posteo'])).'"
    },';
  }

  $lista = substr($lista,0, strlen($lista) - 1);
  echo '{"data":['.$lista.']}';

?>
