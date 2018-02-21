function crgoperador(){
var cargsel=document.getElementById("servicio1").selectedIndex;
var tpserv=document.getElementById("servicio1").options[cargsel].value;

if (tpserv!=""){
	ajax=nuevoAjax();
	ajax.open("GET", "seloperador.php?idservicio="+tpserv, true);

	ajax.onreadystatechange=function() 
		{ 
			var co=ajax.readyState;
		
			
			if (ajax.readyState==4){
				$('#operador1').material_select('destroy');
				document.getElementById("datoperador").innerHTML=ajax.responseText;
				$('#operador1').material_select();				
//	$('#recarga1').material_select();
			}
			
		}
	 ajax.send(null); 
}else{
alert("Debe elegir una Servicio");

}

}



function crgrecarga(){
var cargsel=document.getElementById("servicio1").selectedIndex;
var tpserv=document.getElementById("servicio1").options[cargsel].value;

var cargsel1=document.getElementById("operador1").selectedIndex;
var operador=document.getElementById("operador1").options[cargsel1].value;

	if (tpserv!=""){
		ajax=nuevoAjax();
		ajax.open("GET", "selblrecarga.php?servicio="+tpserv+"&operador="+operador, true);
	
		ajax.onreadystatechange=function() 
			{ 
				var co=ajax.readyState;
				
				
				if (ajax.readyState==4){
					$('#recarga1').material_select('destroy');
					document.getElementById("datrecarga").innerHTML=ajax.responseText;
				 $('#recarga1').material_select();	
				}
				
			}
		 ajax.send(null); 
	}else{
	alert("Debe elegir una Servicio");
	
	}

}




function valrut_1(valor)
{
var valor_a=document.getElementById('rutcliente1').value;

	if (valida_rut(valor_a)==false){
		document.getElementById("error21").innerHTML ="<div class='red-text'><p>Rut Inv&aacute;lido</p></div>";
		   document.getElementById("vlrut").value=1;

	}else{
		document.getElementById("error21").innerHTML ="";
		   document.getElementById("vlrut").value=0;

	}
}

function valida_mail(valor) {
	var valor=document.getElementById("mailcliente1").value;
 if (valor!=""){  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
   document.getElementById("error23").innerHTML ="";
   document.getElementById("vlmail").value=0;
	return (true)
  } else {
    document.getElementById("error23").innerHTML ="<divclass='red-text'><p>Debe ingresar email correctamente</p></div>";
   document.getElementById("vlmail").value=1;
	
	return (false);
  }
}
else
  return (true);
}


function valdatpaso1(){

var cargsel=document.getElementById("servicio1").selectedIndex;
var tpserv=document.getElementById("servicio1").options[cargsel].value;

var cargsel1=document.getElementById("operador1").selectedIndex;
var operador=document.getElementById("operador1").options[cargsel1].value;


var cargsel2=document.getElementById("recarga1").selectedIndex;
var recarga=document.getElementById("recarga1").options[cargsel2].value;

	if (tpserv==0){
		document.getElementById("error11").innerHTML ="<div class='callout callout-danger'><p>Debe seleccionar un Servicio</p></div>";

	}else{
		document.getElementById("error11").innerHTML ="";

		if (operador==0){
			document.getElementById("error12").innerHTML ="<div class='callout callout-danger'><p>Debe seleccionar un Operador</p></div>";

		}else{
			document.getElementById("error12").innerHTML ="";

			if (recarga==0){
				document.getElementById("error13").innerHTML ="<div class='callout callout-danger'><p>Debe seleccionar una Recarga</p></div>";
			
			}else{
				document.getElementById("error13").innerHTML ="";
				var t=document.frmps1;
				t.submit();
			}
		}
	}


}

function valdatpaso2(){

var rtcliente=document.getElementById("rutcliente1").value;
var nrofono=document.getElementById("nrotelefono1").value;
var mailcliente=document.getElementById("mailcliente1").value;
var cptform=document.getElementById("captcha-form").value;
var capttext1=document.getElementById("captcha-text").value;

var vlrut=document.getElementById("vlrut").value;
var vlmail=document.getElementById("vlmail").value;
var vlmovil=document.getElementById("valmovil1").value;




	if ((vlrut==1)||(vlrut=="")){
		document.getElementById("error21").innerHTML ="<div class='red-text'><p>Debe Ingresar RUT o esta incorrecto</p></div>";

	}else{
		document.getElementById("error21").innerHTML ="";

		if (nrofono==""){
			document.getElementById("error22").innerHTML ="<div class='red-text'><p>Debe ingresar NRO de telefono</p></div>";

		}else{
			 if(vlmovil==1){
					//	document.getElementById("error22").innerHTML ="<div class='callout callout-danger'><p>Debe ingresar NRO de telefono</p></div>";
			
			}else{
				document.getElementById("error22").innerHTML ="";
	
				if (vlmail==""){
					document.getElementById("error23").innerHTML ="<div class='red-text'><p>Debe ingresar email correctamente</p></div>";
					
				}else if (vlmail==1){
					document.getElementById("error23").innerHTML ="<div class='red-text'><p>Debe ingresar email correctamente</p></div>";
				
				}else{
					if (cptform==capttext1){
						document.getElementById("error_captcha1").innerHTML ="";
						var t1=document.frmps2;
						t1.submit();
					}else{
						document.getElementById("error_captcha1").innerHTML ="<div class='red-text'><p>Código captcha incorrecto</p></div>";
					}
				}
			}
		}
	}


}



function pagarcompra(){

var datosestapa=document.getElementById("datetapa21").value;
	if (datosestapa!=""){
		document.getElementById("error31").innerHTML ="";
		var t2=document.frmps3;
		t2.submit();
	}else{
		document.getElementById("error31").innerHTML ="<div class='red-text'><p>Falta algun dato en el paso 1 o 2</p></div>";
	}

}


function mostraretapa(etp){
	
	if (etp==2){
		document.getElementById("rutcliente1").focus();
	}else if(etp==3){
		document.getElementById("btnpagar").focus();
	}else if(etp==4){
		document.getElementById("btnimprimir").focus();
	}


}

function validanromovil(operador,servicio){
var nromovil=document.getElementById("nrotelefono1").value;
	if (nromovil!=""){
		var ajax="";
	    ajax=nuevoAjax();
		ajax.open("GET","validanromovil.php?nromovil="+nromovil+"&operador="+operador+"&servicio="+servicio, true);
		ajax.onreadystatechange=function() 
			{ 
			
			  document.getElementById("error22").innerHTML ="";
				var co=ajax.readyState;
				
				if (ajax.readyState==4){
						var datosZ = ajax.responseText;
						var array_datos = datosZ.split("|");
						var datoA = array_datos[0];
						var datoB = array_datos[1];
						
					if (datoA=="001"){
					document.getElementById("error22").innerHTML ="<div class='red-text'><p>En blanco nro tel&eacute;fono</p></div>";
						document.getElementById("valmovil1").value=1;
					}else if (datoA=="002"){
					  document.getElementById("error22").innerHTML ="<div class='red-text'><p>Nro m&oacute;vil ingreso esta err&oacute;neo</p></div>";
					  document.getElementById("valmovil1").value=1;
					
					}else if (datoA=="100"){
					  document.getElementById("error22").innerHTML ="<div  class='red-text'><p>Operador elegido para recarga no corresponde al tel&eacute;fono, vaya a paso 1</p></div>";
					  document.getElementById("valmovil1").value=1;
					}else if(datoA=="000"){
					  
					  if(datoB=="NO VALIDO5"){
						document.getElementById("error22").innerHTML ="<div  class='red-text'><p>Nro m&oacute;vil ingresado no es valido</p></div>";
					  document.getElementById("valmovil1").value=1;
					  }else{
						  document.getElementById("valmovil1").value=0;
						  document.getElementById("error22").innerHTML ="";
					  }
					
					}
					
						
				}
				
			}
		 ajax.send(null);
	
	}else{
	   
	   document.getElementById("error22").innerHTML ="<div class='callout callout-danger'><p>Debe ingresar el nro de tel&eacute;fono</p></div>";
	   
	}


	
}