<?php

include ("../start.php");
include ("../controle/vSession.php");

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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../jscript/bootstrap.min.js"></script>

<script type="text/javascript" src="../jscript/push.min.js"></script>
<link rel="stylesheet" href="../css/style.css"/>
<link rel="shortcut icon" href="../favicon.ico"/>
<link href="../css/style_menu.css" rel="stylesheet" type="text/css" />
<link href="../css/dashboard.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<script src="../jscript/modernizr.custom.js"></script>
<script src="../jscript/funciones.js"></script>

<title>Modulo</title>
</head>
<body>
    <?php 
        include("../include/menu_top_interno.php");
    ?>
    <div class="container-fluid">
        <div class="row">
            
                <?php
                    include ("../include/sidebar.php");
                 ?>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="fondo">
            <!--Div que contiene el tutilo de Acceso Directo
                <div style="background:rgb(245, 245, 245); text-align:left; padding: 5px 0px 0px 10px; height:40px; border-bottom: 1px  #C0C0C0 solid;border-radius: 0px;">
                    <span style="color: #003E55; font-weight:bold;font-size:14pt;">Acceso Directos </span>
                </div>-->
                <div class="row placeholders" >
                     <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1911714162230175&autoLogAppEvents=1';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" onclick="prueba()">Compartir</a></div>
                </div>
                <div class="row placeholders">
                    
                </div>
                <div class="row placeholders">
                    
                </div>
                <div class="row placeholders">
                   
                </div>
                <div class="row placeholders">
                
                </div>      
        </div>
    </div>
    </div>
 </div>   	
</body>
</html>