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
        include("../include/menu_top.php");
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
                include ("../include/sidebar.php");
            ?>
            <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 main">
                <div class="fondo">
                    <div class="row placeholders">
                         <a href="javascript: void(0);"onclick="window.open('http://www.facebook.com/sharer.php?u=https://milanbc.com','popup', 'toolbar=0, status=0, width=650, height=450');">
                            <img src="../images/facebook.png" alt="Compartir en Facebook" onclick="return ShareFacebook();" class="icon-social" />
                        </a>
                    </div>
                </div>
                <div class="row placeholders"></div>
                <div class="row placeholders"></div>
                <div class="row placeholders"></div>
                <div class="row placeholders"></div>      
            </div>
        </div>
    </div>
</body>
</html>