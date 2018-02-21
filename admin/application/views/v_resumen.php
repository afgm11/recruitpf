<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//var_dump($resudiario);

if ($resudiario!=""){
	 $dia33=0;
   $dia34=0;
   $dia52=0;
   $dia56=0;
   $dia61=0;
	foreach($resudiario as $rowus)
	{
		
		if ($rowus->tpdocumento==33){
		   $dia33=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==34){
		   $dia34=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==52){
		   $dia52=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==56){
		   $dia56=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==61){
		   $dia61=$rowus->ttdocu;
		}
	}
	
}else{
   $dia33=0;
   $dia34=0;
   $dia52=0;
   $dia56=0;
   $dia61=0;
}


//var_dump($resumensual);
if ($resumensual!=""){
	 $mes33=0;
   $mes34=0;
   $mes52=0;
   $mes56=0;
   $mes61=0;
	foreach($resumensual as $rowus)
	{
		if ($rowus->tpdocumento==33){
		   $mes33=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==34){
		   $mes34=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==52){
		   $mes52=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==56){
		   $mes56=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==61){
		   $mes61=$rowus->ttdocu;
		}
		
	}
	
}else{
  
   $mes33=0;
   $mes34=0;
   $mes52=0;
   $mes56=0;
   $mes61=0;
  
}



if ($resuanual!=""){
	 $agno33=0;
   $agno34=0;
   $agno52=0;
   $agno56=0;
   $agno61=0;
	foreach($resuanual as $rowus)
	{
		if ($rowus->tpdocumento==33){
		   $agno33=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==34){
		   $agno34=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==52){
		   $agno52=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==56){
		   $agno56=$rowus->ttdocu;
		}elseif ($rowus->tpdocumento==61){
		   $agno61=$rowus->ttdocu;
		}
		
	}
	
}else{
  
   $agno33=0;
   $agno34=0;
   $agno52=0;
   $agno56=0;
   $agno61=0;
  
}

if ($resudiario_pesos!=""){
	foreach($resudiario_pesos as $rowus)
	{
		$ttdiariopp=$rowus->monto_total;
	}
}else{
  $ttdiariopp=0;
}

if ($resumensual_pesos!=""){
	foreach($resumensual_pesos as $rowus)
	{
		$ttmensualpp=$rowus->monto_total;
	}
}else{
  $ttmensualpp=0;
}

if ($resuanual_pesos!=""){
	foreach($resuanual_pesos as $rowus)
	{
		$ttanualpp=$rowus->monto_total;
	}
}else{
  $ttanualpp=0;
}

?>


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
         </div>
 <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-orange">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url() ?>assets/dist/img/grafico1.png" alt="User Avatar">
                
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Resumen Diario</h3>
              <h5 class="widget-user-desc"><?php echo date("d-m-Y") ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
<li><a href="#">Total en $ <span class="pull-right badge bg-blue"><?php echo number_format($ttdiariopp)?></span></a></li>
<li><a href="#"># F. Afecta<span class="pull-right badge bg-green"><?php echo $dia33 ?></span></a></li>
<li><a href="#"># F. Exenta<span class="pull-right badge bg-green"><?php echo $dia34 ?></span></a></li>
<li><a href="#"># N. Credito<span class="pull-right badge bg-aqua"><?php echo $dia61 ?></span></a></li>
<li><a href="#"># N. Debito<span class="pull-right badge bg-aqua"><?php echo $dia56 ?></span></a></li>
<li><a href="#"># G. Despacho<span class="pull-right badge bg-yellow"><?php echo $dia52 ?></span></a></li>

 
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url() ?>assets/dist/img/grafico2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
               <h3 class="widget-user-username">Resumen Mensual</h3>
              <h5 class="widget-user-desc"><?php echo date("m-Y") ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
               <li><a href="#">Total en $ <span class="pull-right badge bg-blue"><?php echo number_format($ttmensualpp)?></span></a></li>
<li><a href="#"># F. Afecta<span class="pull-right badge bg-green"><?php echo $mes33 ?></span></a></li>
<li><a href="#"># F. Exenta<span class="pull-right badge bg-green"><?php echo $mes34 ?></span></a></li>
<li><a href="#"># N. Credito<span class="pull-right badge bg-aqua"><?php echo $mes61 ?></span></a></li>
<li><a href="#"># N. Debito<span class="pull-right badge bg-aqua"><?php echo $mes56 ?></span></a></li>
<li><a href="#"># G. Despacho<span class="pull-right badge bg-yellow"><?php echo $mes52 ?></span></a></li>

              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url() ?>assets/dist/img/grafico3.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Resumen Anual</h3>
              <h5 class="widget-user-desc"><?php echo date("Y") ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
               <li><a href="#">Total en $ <span class="pull-right badge bg-blue"><?php echo number_format($ttanualpp)?></span></a></li>
<li><a href="#"># F. Afecta<span class="pull-right badge bg-green"><?php echo $agno33 ?></span></a></li>
<li><a href="#"># F. Exenta<span class="pull-right badge bg-green"><?php echo $agno34 ?></span></a></li>
<li><a href="#"># N. Credito<span class="pull-right badge bg-aqua"><?php echo $agno61 ?></span></a></li>
<li><a href="#"># N. Debito<span class="pull-right badge bg-aqua"><?php echo $agno56 ?></span></a></li>
<li><a href="#"># G. Despacho<span class="pull-right badge bg-yellow"><?php echo $agno52 ?></span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
</section>
    </div>



