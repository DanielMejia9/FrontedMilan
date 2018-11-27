<!DOCTYPE html>
<html lang="en">
<?php include("include/header.php") ?>
<?php $titlle ="Login" ?>
<title><?php echo $titlle ?></title>
<body class="login">   
<div class="container">
  
  <div class="row" id="pwd-container">
    
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form id="form_ing" name="form_ing" method="post" action="validar.php" role="login">
          <img src="images/logo.png" class="img-responsive" alt="" />
          <center>
            <label class="etiqueta">CLIENTES</label>
          </center>
          
          <input type="text" placeholder="email" size="15" id="email" name="email" class="form-control input-lg" />
          <input type="password" placeholder="Contraseña" id="password" name="password" size="15"  class="form-control input-lg"/>
          <input type="hidden" value="enviar" name="valor" id="valor" />
          
          <div class="pwstrength_viewport_progress"></div>
          
          <input type="submit" value="Entrar" id="btnEntrar" onclick="validarUser();" class="btn btn-lg btn btn-dark btn-block"  />
          
          
        </form>
        
        <div class="form-links">
         
        </div>
      </section>  
      </div> 
      <div class="col-md-4"></div>
  </div>
</div>
</body>
</html>