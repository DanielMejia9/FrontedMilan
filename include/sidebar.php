<?php 
  //require_once("../class/class.php");

  $conecta = new Conectar();
  $con =  $conecta->conecta();
  $clie = new Cliente();

  $id_cliente = $_SESSION['id'];
  $puntos = $clie->ConsultaPuntos($id_cliente);

  if(isset($puntos[0]['puntaje_cliente'])) {
  	$puntaje_acumulado = $puntos[0]['puntaje_cliente'];
  }
  else {
  	$puntaje_acumulado = 0;
  }
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
					if ($puntaje_acumulado <= 5) { 
							$sigui_categoria = "Bronce";
							$categoria = $clie->PuntajeCategoria($sigui_categoria);
							$proxi_categoria = $categoria[0]['nombre_categoria'];
							$puntaje_prox_cat = $categoria[0]['puntaje_categoria'];

							$puntaje_sigui_cat = $puntaje_prox_cat - $puntaje_acumulado;
						?>
						<li><img src="../images/iron.jpg" width="30" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntaje_acumulado <= 10) { 
							$sigui_categoria = "Silver";
							$categoria = $clie->PuntajeCategoria($sigui_categoria);
							$proxi_categoria = $categoria[0]['nombre_categoria'];
							$puntaje_prox_cat = $categoria[0]['puntaje_categoria'];

							$puntaje_sigui_cat = $puntaje_prox_cat - $puntaje_acumulado;
						?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntaje_acumulado <= 15) { 
							$sigui_categoria = "Gold";
							$categoria = $clie->PuntajeCategoria($sigui_categoria);
							$proxi_categoria = $categoria[0]['nombre_categoria'];
							$puntaje_prox_cat = $categoria[0]['puntaje_categoria'];

							$puntaje_sigui_cat = $puntaje_prox_cat - $puntaje_acumulado;
						?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30" class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntaje_acumulado <= 20) { 
							$sigui_categoria = "Platinum";
							$categoria = $clie->PuntajeCategoria($sigui_categoria);
							$proxi_categoria = $categoria[0]['nombre_categoria'];
							$puntaje_prox_cat = $categoria[0]['puntaje_categoria'];

							$puntaje_sigui_cat = $puntaje_prox_cat - $puntaje_acumulado;
						?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30"  class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled"  alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntaje_acumulado <= 30) {
							$sigui_categoria = "Diamond";
							$categoria = $clie->PuntajeCategoria($sigui_categoria);
							$proxi_categoria = $categoria[0]['nombre_categoria'];
							$puntaje_prox_cat = $categoria[0]['puntaje_categoria'];

							$puntaje_sigui_cat = $puntaje_prox_cat - $puntaje_acumulado;
						?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30"  class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" class="disabled" alt="Diamond"></li>

					<?php } elseif($puntaje_acumulado >= 50) { 
							$proxi_categoria = "Diamond";
							$puntaje_sigui_cat = $puntaje_acumulado;
						?>
						<li><img src="../images/iron.jpg" width="30" class="disabled" alt="New"></li>
						<li><img src="../images/bronce.jpg" width="30"  class="disabled" alt="Bronce"></li>
						<li><img src="../images/silver.jpg" width="30" class="disabled" alt="Silver"></li>
						<li><img src="../images/gold.jpg" width="30" class="disabled" alt="Gold"></li>
						<li><img src="../images/platinum.jpg" width="30" class="disabled" alt="Platinum"></li>
						<li><img src="../images/diamond.jpg" width="30" alt="Diamond"></li>

					<?php } else { 
							$proxi_categoria = "New";
							$puntaje_sigui_cat = $puntaje_acumulado;
						?>
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
		<li>Puntaje Acumulado: <?=  $puntaje_acumulado ?> </li>
		<li>Puntaje para el siguiente nivel: <?= $puntaje_sigui_cat.' ('.$proxi_categoria.')' ?></li>
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
		<div class="content-instagram">	
			<ul class="list" style="margin-left: 100px;">
				<li>
					<a href="javascript: void(0);"onclick="window.open('http://www.facebook.com/sharer.php?u=https://milanbc.com','popup', 'toolbar=0, status=0, width=650, height=450');">
             <img src="../images/facebook_vintage.png" alt="Siguenos en Facebook" title="Siguenos en Facebook" onclick="return ShareFacebook();"  width="30" />
          </a>
				</li>
				<li>
					<a href="javascript: void(0);"onclick="window.open('https://www.instagram.com/milanbeautycare/','popup', 'toolbar=0, status=0, width=650, height=450');">
             <img src="../images/instagram_vintage.png" alt="Siguenos en Instagram" title="Siguenos en Instagram" onclick="return FollowInstagram();" width="30" />
          </a>
        </li>
			</ul>
		</div>
	</div>
</div>




</div>