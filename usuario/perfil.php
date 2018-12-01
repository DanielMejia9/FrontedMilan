<?php 
 error_reporting(E_ALL);
ini_set('display_errors', '1');

  include("../start.php");
  include("../controle/vSession.php");
  require_once("../class/class.php");

  $conecta = new Conectar();
  $con =  $conecta->conecta();
  $clie = new Cliente();

  if(isset($_POST["guardar"]) and $_POST["guardar"]=="si")
    {
      $id_perfil = $_SESSION['id'];
      $clie->EditarPerfil($_POST["nombre"],$_POST["apellido"],$_POST["cedula"],$_POST["datepicker"],$_POST["direccion"],$_POST["telefono"],$_POST["telefono1"],$_POST['password'],$id_perfil);
      exit;
    }
  else {
    $id_perfil = $_SESSION['id'];
    $perfil = $clie->BuscarPerfil($id_perfil);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../jscript/bootstrap.min.js"></script>

<script type="text/javascript" src="jscript/push.min.js"></script>
<link rel="stylesheet" href="../css/style.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<link href="../css/style_menu.css" rel="stylesheet" type="text/css" />
<link href="../css/dashboard.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="../jscript/modernizr.custom.js"></script>
<script src="../jscript/jquery.ui.datepicker.js"></script>
<script  type="application/javascript" src="../jscript/funciones.js"></script>


<title>Perfil de Usuario</title>
</head>

<body>
  <?php 
    include("../include/menu_top.php");
  ?>

  <div class="container-fluid">
    <div class="row">
      <?php
        include ("../include/sidebar.php");
      ?>
      <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 main">
        <div class="fondo">

          <div class="row placeholders" ></div>

          <div class="row placeholders">
            <div class="row">
              <div class="col-12">
                <div style="background:rgb(245, 245, 245); text-align:left; padding: 5px 0px 0px 0px; height:40px; border-bottom: 1px  #C0C0C0 solid;border-radius: 0px;">
                  <span style="color: #333333; font-weight:bold;font-size:14pt;padding: 0 0 0 10px;">Datos del Cliente</span>
                </div>
              </div>
            </div>
          </div>            
          
          <br><br>
          
          <div class="row placeholders">
            <div class="row">
              <div class="col-12">
                <form name="form_perfil" id="form_perfil" action="perfil.php" method="post" autocomplete="off">
                  <div class="row placeholders">
                  <div class="col-md-3">
                    <label>Nombre del Cliente: </label>
                    <input type="text" name="nombre" id="nombre"  maxlength="250" value="<?= $perfil[0]['nomb_clie'] ?>" size="50" class="form-control" />
                  </div>
                  <div class="col-md-3">
                    <label>Apellido del Cliente: </label>
                    <input type="text" name="apellido" id="apellido"  maxlength="250" value="<?= $perfil[0]['ape_clie'] ?>" size="50" class="form-control" />
                  </div>
                  <div class="col-md-3">
                    <label>Cédula:</label>
                    <input type="text" name="cedula" id="cedula" readonly size="10" value="<?= $perfil[0]['cedula'] ?>" class="form-control"/>
                  </div>
                    <div class="col-md-3">
                      <label>Fecha: </label>
                      <input type="text" name="datepicker" id="datepicker" maxlength="10" size="6" value="<?= $perfil[0]['fech_clie'] ?>" class="demo form-control"/>
                    </div>
                  </div>
                  <br /> 
                  <div class="row placeholders">
                    <div class="col-md-12">
                      <label>Dirección</label>
                      <input type="text" name="direccion" id="direccion" maxlength="200" size="61" value="<?= $perfil[0]['dire_clie'] ?>" class="form-control"/>
                    </div>
                  </div>  
                  <br />
                  <div class="row placeholders">
                    <div class="col-md-6">
                      <label>Telefonos:</label>
                      <input type="text" name="telefono"  id="telefono" maxlength="14" size="10" value="<?= $perfil[0]['tele_clie'] ?>" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                      <label>Telefonos(opcional):</label>
                      <input type="text" name="telefono1" id="telefono1" maxlength="14" size="10" value="<?= $perfil[0]['tele_clie_opci'] ?>" class="form-control"/>
                    </div>
                  </div>
                  <br />
                  <div class="row placeholders">
                    <div class="col-md-6">
                      <label>Correo electronico:</label>
                      <input type="email" name="email"  id="email" size="10" readonly value="<?= $perfil[0]['email'] ?>" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                      <label>Contraseña:</label>
                      <input type="text" name="password"  id="password" maxlength="14" size="10" class="form-control"/>
                    </div>
                  </div> 
                  <br />
                  <div class="row placeholders">
                    <div class="col-md-3 col-md-offset-3">
                      <input  type="hidden" name="guardar" id="guardar"  value="si" />
                      <a class="btn btn-primary" name="volver" onclick="window.location='perfil.php'"/>Volver</a>
                    </div>
                    <div class="col-md-3">
                      <a class="btn btn-primary" name="username" onclick="validaReg();"/>Actualizar perfil</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
   </div>   	
</body>
</html>