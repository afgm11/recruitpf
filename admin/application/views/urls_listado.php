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
                <tr>
                  <th >
                  <label for="exampleInputEmail1">Cod. Cliente</label>
                            <input type="text" name="idaccount" id="idaccount1" class="form-control" size="20" ><a onClick="buscarcliente(1)"><span class="fa fa-search"></span> Buscar Cliente</a>
                            <div id="datobus1"></div>
                  </th>
                  
                    <th >&nbsp;<a href="#"><i class="fa fa-fw fa-file-excel-o"></i>Descarga Excel</a></th>
                  
                  
                  
                </tr>
             
             
                <tr>
                  <th>Cod. Cliente</th>
                  <th>Mail Cliente</th>
                  <th>Url Corta</th>
                  <th>Url</th>
                  
                  
                </tr>
                <?php
				$contar=1;
				$contar=1;
				if ($listclientes!=""){
				foreach($listclientes as $rowus)
	 			 {
				
				?>
                <tr>
                  <td><?php echo $rowus->idcliente; ?> </td>
                  <td><?php echo $rowus->mailcliente; ?> </td>
                  <td ><a target="_blank" href="http://localhost/1mentha/pf/urls/index.php/acceso/?gt=<?php echo $rowus->urlcorta; ?>"><span class="fa fa-user-plus"></span></a></td>
                  <td><?php echo $rowus->url; ?> </td>
                  
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