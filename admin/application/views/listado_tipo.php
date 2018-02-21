<?php
('BASEPATH') OR exit('No direct script access allowed');
?>
  


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
			<h5><i class="icon fa fa-check"></i> Cliente modificado con exito </h5>
		   
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
             
        
               
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <thead>
              <td><a href="<?php echo base_url();?>index.php/categoriatipo/nuevotipo"><span class="fa fa-user-plus"></span> Nueva Categoria</a></td>
              <thead>
                <tr>
                  <th>Cod Tipo</th>
                  <th>Nombre Tipo</th>
                  <th>Nombre Categoria</th>
                  <th>Estado</th>
                  <th>Modificar</th>
                  <th>Activar/Desactivar</th>

                </tr>
                <?php
				$contar=1;
				$contar=1;
				if ($listtipos!=""){
				foreach($listtipos as $rowus)
	 			 {
				
				?>
                <tr>
                  <td><?php echo $rowus->idtipo; ?> </td>
                  <td><?php echo $rowus->nomtipo; ?> </td>
                  <td><?php echo $rowus->nomcategoria; ?> </td>
                  <td><?php 
                  if($rowus->estado==0){
                    echo "<span class='fa fa-check' style=color:#14a03c;'></span>";
                  }else{
                    echo "<span class='fa fa-times' style=color:#c5210c;'></span>";
                  } ?> </td>
                  <td ><a href="<?php echo base_url();?>index.php/categoriatipo/modcategoria/?idcat=<?php echo $rowus->idtipo?>"><span class="fa fa-wrench"></span></a></td>
                  <td ><a href="<?php echo base_url();?>index.php/categoriatipo/elicategoria/?idcat=<?php echo $rowus->idtipo?>"><span class="fa fa-trash-o"></span></a></td>
                
                  
                  
                </tr>
              
				<?php
				$contar++;
				 }
				}else{
					?>
                    <td colspan="7">Sin resultados</td>
                    <?php
				
				}
				?>
              </table>
              <div class="box-footer clearfix">
              &nbsp;
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