<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
  foreach($listclientes as $rowus)
  {
      $idcuenta=$rowus->idcliente;
      $mail1=$rowus->mailcliente;
  }
					 
					 
?>
<script>
function val_form(){

var mail=document.getElementById("mailcliente2").value;

	if (mail!=""){
		 var t=document.frm;
			t.submit();	
	}else{
	 document.getElementById("mensaje").innerHTML="debe ingresar los datos";
	
	}


}

</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $nomopc ?>
        <small>&nbsp;</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home </li>
        <li><?php echo $nomopc ?></li>
        <li class="active"><?php echo $nomruta1 ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Modificar cliente</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" accept-charset="utf-8" name="frm" action="<?php echo base_url();?>index.php/clientes/modcliente">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cod cliente</label>
                  <?php echo $idcuenta  ?>
                </div>
              
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingrese Mail  cliente</label>
                  <input type="mail" class="form-control" name="mailcliente" id="mailcliente2" placeholder="Ingrese Mail 2 cliente" value="<?php echo $mail1  ?>">
     			  <input type="hidden" class="form-control" name="idcliente"  value="<?php echo $idcuenta  ?>">
                </div>
				
              <div class="box-footer">
                <button type="button" class="btn btn-primary" onClick="val_form()"> Guardar</button>
                &nbsp;&nbsp;&nbsp;
                 <a href="<?php echo base_url();?>index.php/clientes/listado" class="btn btn-primary" >Volver</a>

                 <div id="mensaje"></div>
              </div>
               </div>
            </form>
          </div>
          <!-- /.box -->

        

         

         
        
   
           
                
                

                

                
              
                <!-- Select multiple-->
                

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  