<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Centro de Estetica Isis</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar como Esteticien</p>

    <form  method="post">
      <div class="form-group has-feedback">
        <input type="texto" class="form-control" name="usuario-Ing" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="clave-Ing"placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
   <?php
   $ingreso = new EsteticienC();//clase de ingreso Esteticien
   $ingreso -> IngresarEsteticienC();//que ejecute esta función.

   

    

 