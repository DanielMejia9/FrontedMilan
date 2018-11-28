 <?php
/*include("start.php");
require("conexion.php");*/
require_once("class/class.php");
include("start.php");
$conexion = new Conectar();
$conectar = $conexion->conecta();


function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}

	$esp = " ";

	
	
$password = md5(trim($_POST["password"]));
$email = trim($_POST["email"]);

$link = mysqli_connect("localhost", "root", "", "facturacion_milan");

$result = mysqli_query($link, 'SELECT * FROM tb_regi_cli WHERE email=\''.$email.'\'');

	//Si la consulta a la tabla user no devuelve nada, verificamos la consulta a la tabla clientes
	if($file = mysqli_fetch_array($result)) {
		if ($file["password"] == $password) {
			$_SESSION["username"] =$file['nomb_clie'].$esp.$file['ape_clie'].$esp;
			$_SESSION["id"] =$file['codi_clie'];
			/*$_SESSION["fecha"] = $row['fech_clie'];
			$_SESSION["direccion"] = $row['dire_clie'];
			$_SESSION["telefono1"] = $row['tele_clie'];
			$_SESSION["telefono1"] = $row['tele_clie_opci'];*/
			?>
			<SCRIPT LANGUAGE="javascript">
				location.href = "modulo.php";
			</SCRIPT>
			<?php
		}
	}
	else
	{
		?>
			<SCRIPT LANGUAGE="javascript">
				alert ("Verifique su cuenta y su contrase�a");
				location.href = "index.php";
			</SCRIPT>
		<?php	
	}
mysqli_free_result($result);
mysqli_close($link);
?>
