<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pago Facil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/fonts/font-awesome.min.css">
  
  <!-- Ionicons -->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/fonts/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!--<a href="index2.html"><b>Admin</b>ZOCO DTE</a>-->
    
  <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" width="359" height="216"></div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar Datos</p>
    <script>
    function valdatos()
	{
    var nomuser=document.getElementById("username1").value;
	var nompass=document.getElementById("password1").value;
	
		if ((nomuser!="")&&(nompass!="")){
		 var t=document.frm;
			t.submit();
		
		}else{
		 
		  document.getElementById("mensaje").innerHTML="debe ingresar los datos";
		
		}
	
	
	}
    </script>   
    <form action="<?php echo base_url(); ?>index.php/login/valusuarios" method="post" accept-charset="utf-8" name="frm">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username1">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password1">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div id="mensaje">
         
		  <?php
		   if (isset($estado)){
			  if ($estado==1){
			  echo "Usuario o contraseña invalida";
			  
			  }
		  }
		 
		  
		  ?>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="button" class="btn btn-primary btn-block btn-flat" onClick="valdatos();">Ingreso</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

  <!--  <a href="#">Recordar Contraseña</a><br>-->
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
