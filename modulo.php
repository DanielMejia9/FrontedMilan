<?php
 error_reporting(E_ALL);
ini_set('display_errors', '1');

  include("start.php");
  include("controle/vSession.php");
  require_once("class/class.php");

//Valor para modiicar automicamente el menu lateral
$atras = 0;
$activeClass= 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<link rel="stylesheet" href="css/bootstrap.min.css">


<!-- Optional theme -->
<!--<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<!--script src="jscript/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script-->
<script src="jscript/bootstrap.min.js"></script>

<script type="text/javascript" src="jscript/push.min.js"></script>
<link rel="stylesheet" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<link href="css/style_menu.css" rel="stylesheet" type="text/css" />
<link href="css/dashboard.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="jscript/modernizr.custom.js"></script>
<script src="jscript/funciones.js"></script>

<title>Modulo</title>
</head>
<body>
    <?php 
        include("include/menu_top.php");
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
                include ("./include/sidebar.php");
            ?>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="fondo">
            <!--Div que contiene el tutilo de Acceso Directo
                <div style="background:rgb(245, 245, 245); text-align:left; padding: 5px 0px 0px 10px; height:40px; border-bottom: 1px  #C0C0C0 solid;border-radius: 0px;">
                    <span style="color: #003E55; font-weight:bold;font-size:14pt;">Acceso Directos </span>
                </div>-->
                <div class="row placeholders" >
                                
                </div>
                <div class="row placeholders">
                    <div class="row">
                        <div class="class="col-12">
                            <h2>Condiciones y Restricciones</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="class="col-md-11">
                            <p>
                               Para redimir los puntos el Socio de Milán B&C debe seguirnos en Facebook, e Instagram, etiquetar a 8 personas más en cada red social y llenar el formulario que se encuentra en www.milanbc.com . Los servicios del Plan de Puntos se realizarán de Lunes a Jueves de 9 AM a 1 PM, por cada servicio hasta el 50% del valor total podrá ser pagado con puntos. Bono por referidos. Por cada referido se sumaran 8 puntos a la cuenta del Socio de Milán B&C.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row placeholders">
                    <div class="row">
                        <div class="class="col-12">
                            <h2>Condiciones del Plan de Puntos</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="class="col-md-11">
                            <p>
                               El afiliado debería tener acceso a su historial, fotos antes y después de procedimientos, ofertas y promociones especiales, agendamiento de citas Deben estar cruzadas la información de facturación con la acumulación de puntos en cada cuenta, el colaborador que realizó el servicio o recomendó el producto
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
 </div>   	
</body>
</html>