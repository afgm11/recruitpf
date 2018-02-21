<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
<script>
function validauser(val2){
var usuario=document.getElementById("username1").value;

	if (usuario!=""){
	
		ajax=nuevoAjax();
		
			ajax.open("GET", "<?php echo base_url();?>index.php/usuarios/validausuario?nuser="+usuario, true);
			
		   ajax.onreadystatechange=function() 
				{ 
					var co=ajax.readyState;
					
					if (ajax.readyState==4)
					{ 
						var datosZ = ajax.responseText;
				       
						
							if (datosZ=="0|0"){
								 document.getElementById("error2").innerHTML = '<p class="callout callout-danger">Usuario ya existe</p>';	
								 document.getElementById("exisusuario").value=0;
							}else{
								document.getElementById("error2").innerHTML = '';	
 							    document.getElementById("exisusuario").value=1;
							
							}
					}
				}
		ajax.send(null); 
	}else{
	document.getElementById("error2").innerHTML = '<p class="callout callout-danger">Cliente no existe</p>';	
	}


}

function seleccionar_todo(opsel){
var tpsel=opsel;
var canti=document.getElementById("cantida").value;
if (tpsel==1){
	for (var i=1; i<=canti; i++){
			document.getElementById("selpermiso_"+i).checked=true;
			
	}
}else{
	for (var i=1; i<=canti; i++){
			document.getElementById("selpermiso_"+i).checked=false;
			
	}

}
}

function marcaropc(tipo,opsel,opcpadre){
 var tpopcion=tipo;
 var opcionsel=opsel;
 var opcionpadre=opcpadre;

	 if (tpopcion==2){
		document.getElementById("selpermiso_"+opcionpadre).checked=true;
	 }
  if (tpopcion==1){
    var cntopcsel=document.getElementById("cantopciones_"+opcionsel).value;
	
	var prielem=parseInt(opcionsel)+1;
	var ultelem=parseInt(cntopcsel)+parseInt(opcionsel);
	
	for (var i=prielem; i<=ultelem; i++){
		document.getElementById("selpermiso_"+i).checked=false;
		
	}

	
	
  }
}


function valdatosguardar(val){
var valor_a=document.getElementById("nomcompleto1").value;
var valor_b=document.getElementById("username1").value;
var valor_c=document.getElementById("contraseña1").value;

	var valorc=document.getElementById("tpusuario1").selectedIndex;
	var valor_tpuser=document.getElementById("tpusuario1").options[valorc].value;
    var error=0;

	if(valor_a==""){
		 document.getElementById("error1").innerHTML ="<div class='callout callout-danger'><p>Debe ingresar nombre completo</p></div>";
		 error--;
	}else{
		document.getElementById("error1").innerHTML ="";
		error++;
	}


	if(valor_b==""){
		 document.getElementById("error2").innerHTML ="<div class='callout callout-danger text-red'><p>Debe ingresar nombre de usuario</p></div>";
		 error--;
	}else{
		
		var exisuser=document.getElementById("exisusuario").value;
		
		if (exisuser==0){
			 document.getElementById("error2").innerHTML = "<div class='callout callout-danger'><p>USUARIO YA EXISTE!</p></div>";
			  error--;
		}else{
			document.getElementById("error2").innerHTML ="";
			 error++;
		}
		
	}
	
	if(valor_tpuser==0){
		 document.getElementById("error4").innerHTML ="<div class='callout callout-danger'><p>Debe seleccionar un tipo de usuario</p></div>";
		 error--;
	}else{
		error++;
		document.getElementById("error4").innerHTML ="";
	}
	

	if(valor_c==""){
		 document.getElementById("error3").innerHTML ="<div class='callout callout-danger'><p>Debe ingresar contrase&ntilde;a usuario</p></div>";
		 error--;
	}else{
		error++;
		document.getElementById("error3").innerHTML ="";
	}
	
	var x=document.getElementById("cantida").value;
    var exissdoc=0;

	for (var i=1; i<=x; i++){
		if (document.getElementById("selpermiso_"+i).checked==true){
			exissdoc++;
			
		}
	}

	if(exissdoc!=0){
		 error++;
		document.getElementById("error5").innerHTML ="";
		
	}else{ 
	document.getElementById("error5").innerHTML ="<div class='callout callout-danger'><p>Debe Seleccionar por lo menos una funci&oacute;n</p></div>";
		error--;
	}
	

var t=document.frm;
	
	if ((error>=4)&&(valor_tpuser!=0)){
		
			//alert("ok");
		t.submit();

	}else{
		
	}


}

</script>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $nomruta1 ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/Usuarios/guardausuario" method="post" accept-charset="utf-8" name="frm">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre Completo</label>
                  <input type="text" class="form-control" name="nomcompleto" id="nomcompleto1" placeholder="Ingrese Nombre completo ">
                  <div id="error1"></div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de Usuario</label>
                  <input type="text" class="form-control" name="username"  id="username1" placeholder="Ingrese nombre de usuario" onChange="validauser(1)">
                  
                  <div id="existeusuario"></div>
                  <input type="hidden" id="exisusuario" value="0">
                  <div id="error2"></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="contrasegna" id="contraseña1" placeholder="Password">
             <div id="error3"></div>
                </div>
                
             
              <!-- /.box-body -->
				<div class="form-group">
                  <label>Tipo de Usuario</label>
                   
                  <select class="form-control" id="tpusuario1" name="tpusuario" >
					<option value="0" selected>Seleccionar Tipo Usuario</option>
                   <?php
				    foreach($tpusuarios as $rowtpuser)
				    {
				   ?>
                    <option value="<?php echo $rowtpuser->idtpusuario ?> "><?php echo $rowtpuser->nomtipo ?> </option>
                   <?php
				   	}
				   
				   ?>
                  </select>
                  <div id="error4"></div>
                </div>
                
                
                
                <!-- checkbox -->
                <div class="form-group">
                 <label>Permiso Usuario </label>
                <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th rowspan="2">&nbsp;</th>
                  <th rowspan="2">Opci&oacute;n</th>
                  <th rowspan="2">Sub opci&oacute;n</th>
                  <th>Seleccionar</th>
                </tr>
                <tr>
                  <th><a onclick="javascript:seleccionar_todo(1)" style="cursor:hand">Marcar todos</a> | <a onclick="seleccionar_todo(2);" style="cursor:hand"> Marcar ninguno</a></th>
                </tr>
 	               <?php
				  $x=1;
	  			  $x2=1;
				 
				 foreach($menuselec as $rowmenu1)
				  {
				 
					 if ($rowmenu1->tipo==1){
						
				   ?>
                    <tr style="background-color:#C4C3C3">
                    <td>&nbsp;</td>
                    
                     <td><?php echo $rowmenu1->titulo; ?></td>
                      <td>&nbsp;</td>
                     <td> 
                     <input type="hidden" name="idpagina<?php echo $x?>" id="idpagina<?php echo $x?>" value="<?php echo $rowmenu1->idopcsist ?>">
        <input type="checkbox" name="selpermiso<?php echo $x?>" id="selpermiso_<?php echo $x?>" onclick="marcaropc(1,<?php echo $x?>)" /></td>
                    </tr>
                    <?php
			   			$nropag=$rowmenu1->nropag;
			   	$m=$x;
				$h=1;
				 
				   foreach($menuselec as $rowmenu2)
		  		{   
				 
				    
	             if (($rowmenu2->nropag==$nropag)&&($rowmenu2->tipo==2)){
				   $m++;
				 	
					
			   ?>
                      <tr >
                    <td>&nbsp;</td>
                       <td>&nbsp;</td>
                     <td><?php echo $rowmenu2->titulo; ?></td>
                   
                     <td><input type="hidden" name="idpagina<?php echo $m?>" id="idpagina<?php echo $m?>" value="<?php echo $rowmenu2->idopcsist ?>">
        <input type="checkbox" name="selpermiso<?php echo $m?>" id="selpermiso_<?php echo $m?>"  /></td>
                    </tr>
                    
                    
                   <?php
					
					 }
					
				  if (($rowmenu2->nropag==$nropag)&&($rowmenu2->tipo==3)){
				   $m++;
				 	
					
			   ?>
                      <tr >
                    <td>&nbsp;</td>
                       <td>&nbsp;</td>
                     <td><?php echo $rowmenu2->titulo ?></td>
                   
                     <td><input type="hidden" name="idpagina<?php echo $m?>" id="idpagina<?php echo $m?>" value="<?php echo $rowmenu2->idopcsist ?>">
        <input type="checkbox" name="selpermiso<?php echo $m?>" id="selpermiso_<?php echo $m?>"  		
        /></td>
                    </tr>
                    
                    
                   <?php
					
					 }
				 }
					
					
					
		     	$x=$m;
				$x++;
			  }
	    
		}
		 
				   ?>
                  <input type="hidden" name="cantidad" id="cantida" value="<?php echo $x-1?>">    
                  
                  <tr>
                  <td colspan="5">
                  <div id="error5"></div>
                  </td>
                  </tr>
                </table>
                
                
                </div>
              <div class="box-footer">
                <button type="button" class="btn btn-primary" onClick="valdatosguardar(1)">Guardar</button>
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
  
  