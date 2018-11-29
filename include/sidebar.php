<?php 
  require_once("../class/class.php");

  $conecta = new Conectar();
  $con =  $conecta->conecta();
  $clie = new Cliente();

  $id_cliente = $_SESSION['id'];
  $puntos = $clie->ConsultaPuntos($id_cliente);

  $puntos = $clie->PuntajeCategoria();
?>
<div class="col-sm-3 col-md-3 sidebar">
<div class="row">
	<center>
		<h2>Ranking</h2>
	</center>
	
</div>
<div class="row">
	<div class="col-12">
		<center>	
			<ul class="list-ico">
				<?php 
					if ($puntos[0]['puntaje_cliente'] <= 5) { ?>
						<li><img src="../images/iron.jpg" width="30" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntos[0]['puntaje_cliente'] <= 10) { ?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntos[0]['puntaje_cliente'] <= 15) { ?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntos[0]['puntaje_cliente'] <= 20) { ?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30"  class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntos[0]['puntaje_cliente'] <= 30) { ?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30"  class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntos[0]['puntaje_cliente'] <= 50) { ?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30"  class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled" alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" alt="Diamond"></li>

					<?php } elseif($puntos[0]['puntaje_cliente'] <= 50) { ?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } ?>
			</ul>
		</center>
	</div>
</div>
<br>
<div class="row">
	<ul class="list">
		<li>Puntaje Acumulado: <?= $puntos[0]['puntaje_cliente'] ?> </li>
		<li>
			Puntaje para el siguiente nivel: 
		</li>
	</ul>
</div>
<br>
<div class="row">
	<center>
		<img src="../images/imagen.jpg" width="270">
	</center>
</div>
<div class="row">
	<div class="col-12">
		<center>	
			<ul class="list">
				<li>
					<a href="javascript: void(0);"onclick="window.open('http://www.facebook.com/sharer.php?u=https://milanbc.com','popup', 'toolbar=0, status=0, width=650, height=450');">
             <img src="../images/facebook_vintage.png" alt="Compartir en Facebook" onclick="return ShareFacebook();"  width="30" />
          </a>
				</li>
				<li><img src="../images/instagram_vintage.png" width="30" ></li>
			</ul>
		</center>
	</div>
</div>




</div>