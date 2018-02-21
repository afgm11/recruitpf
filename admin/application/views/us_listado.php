<?php
('BASEPATH') OR exit('No direct script access allowed');
?>
  <script>
  function vermensaje(){
 document.getElementById("vermensaje1").style.display = 'none';
  }
  setTimeout("vermensaje()", 3000);
  </script>
  
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
    
    <?php
	
	if ($codmens!=""){
	
		if($codmens=="3"){
		?>   
		<div class="alert alert-danger alert-dismissible" id="vermensaje1" style='display:;'>
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fa fa-check"></i> Usuario eliminado con exito</h5>
		   
		</div>
	   <?php
		}elseif($codmens=="1"){
			?>   
		<div class="alert alert-success alert-dismissible" id="vermensaje1" style='display:;'>
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fa fa-check"></i> Usuario creado con exito </h5>
		   
		</div>
	   <?php
		}elseif($codmens=="2"){
			?>   
		<div class="alert alert-success alert-dismissible" id="vermensaje1" style='display:;'>
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fa fa-check"></i> Usuario modificado con exito </h5>
		   
		</div>
	   <?php
		}
	}
   ?>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">&nbsp;</h3>

              <div class="box-tools">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>nro</th>
                  <th>Nombre Completo</th>
                  <th>Username</th>
                  <th>Tipo usuarios</th>
                  <th>Estado</th>
                  <th>Modificar</th>
                  <th>activar/desactivar</th>
                  
                  
                </tr>
                <?php
				$contar=1;
				foreach($listusuarios as $rowus)
	 			 {
				 $estadouser=$rowus->estado;	 
				?>
                <tr>
                  <td><?php echo $contar; ?> </td>
                  <td><?php echo $rowus->nomcompleto; ?> </td>
                  
                  <td><?php echo $rowus->nuser; ?> </td>
                  <td><?php echo $rowus->tpuser; ?> </td>
					  <?php 
                          if ($estadouser==0){
                              $estado="activo";
                              $digestado="class='label label-success'";
                          }elseif ($estadouser==1){
                              $estado="inactivo";
                              $digestado="class='label label-warning'";
                          }
                      ?>
                  
                
                  <td><span <?php echo $digestado; ?>><?php echo $estado ?> </span></td>
                 
                 
                  <td ><a href="<?php echo base_url();?>index.php/usuarios/modusuario/?user=<?php echo $rowus->iduser?>"><span class="fa fa-user-plus"></span></a></td>
                  <?php 
				 if ($rowus->iduser==1){
				 ?>
                 <td>&nbsp;</td>
                 <?php
				 
				 }else{
				 ?>
                  <td ><a href="<?php echo base_url();?>index.php/usuarios/eliusuario/?user=<?php echo $rowus->iduser?>&estado=<?php echo $estadouser?>"><span class="fa fa-user-times"></span></a></td>
                 <?php
				 }
				 ?> 
                  
                  
                  
                </tr>
                <?php
				$contar++;
				}
				?>
              </table>
              <div class="box-footer clearfix">
             
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>