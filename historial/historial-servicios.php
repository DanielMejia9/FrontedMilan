<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include("../start.php");
    include("../controle/vSession.php");
    require_once("../class/class.php");
    //Valor para modiicar automicamente el menu lateral
    $atras = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script src="../jscript/jquery.dataTables.min.js"></script>
<script src="../jscript/dataTables.bootstrap.min.js"></script>
<script src="../jscript/bootstrap.min.js"></script>
<script src="listar-historial.js"></script>


<script type="text/javascript" src="../jscript/push.min.js"></script>
<link rel="stylesheet" href="../css/style.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<link href="../css/style_menu.css" rel="stylesheet" type="text/css" />
<link href="../css/dashboard.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<script src="../jscript/modernizr.custom.js"></script>

<title>Modulo</title>
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
                    <div class="row placeholders" >
                                    
                    </div>
                    <div class="row placeholders">
                        <div class="row">
                            <div class="class="col-12">
                                <h2>Historial de Consumo de Servicios en MilanBC</h2>
                        </div>
                    </div>
                    <div class="row placeholders">
                        <div class="row">
                            <div class="class="col-12">
                                <table class="table table-bordered table-hover" id="listar-historial">
                                    <thead>
                                        <tr>
                                            <th>Código de Factura</th>
                                            <th>Tipo de Consumo</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Puntos Asignados</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>