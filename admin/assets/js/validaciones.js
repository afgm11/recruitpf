function nuevoAjax()
{ 
var xmlhttp=false; 
try 
	{ 	xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");	}
catch(e)
{ 
try
	{ xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");	} 
catch(E) { xmlhttp=false; }
}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp=new XMLHttpRequest(); } 
return xmlhttp; 
}

function solocar_num(x,y){
//onKeyPress="solocar_num(event.keyCode,String.fromCharCode(event.keyCode));"
  var txt="0123456789";
  if (txt.indexOf(y)!=-1)
    event.returnValue = true;
  else
    event.returnValue = false;
}

function solocar_textmail(x,y){
//onKeyPress="solocar_text(event.keyCode,String.fromCharCode(event.keyCode));"
var txt="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ @. 01234567890 -_ ÁÉÍÓÚ áéíóú";
  if (txt.indexOf(y)!=-1)
      event.returnValue = true;
  else
      event.returnValue = false;
}


function solocar_numtelefono(x,y){
//onKeyPress="solocar_numtelefono(event.keyCode,String.fromCharCode(event.keyCode));"
  var txt="01234567890 - /";
  if (txt.indexOf(y)!=-1)
    event.returnValue = true;
  else
    event.returnValue = false;
}


function novacio(x,y){
  if (x.value==""){
    alert("ERROR. Debe ingresar un"+y);
	x.focus();
	return(false);
  }
  else
    return(true);
}

function solocar_text(x,y){
//onKeyPress="solocar_text(event.keyCode,String.fromCharCode(event.keyCode));"
var txt="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  if (txt.indexOf(y)!=-1)
      event.returnValue = true;
  else
      event.returnValue = false;
}

function solocar_textnum(x,y){
//onKeyPress="solocar_text(event.keyCode,String.fromCharCode(event.keyCode));"
var txt="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ 0123456789";
  if (txt.indexOf(y)!=-1)
      event.returnValue = true;
  else
      event.returnValue = false;
}

function solocar_textorut(x,y){
//onKeyPress="solocar_textorut(event.keyCode,String.fromCharCode(event.keyCode));"
  var txt="0123456789 - k ";
  if (txt.indexOf(y)!=-1)
    event.returnValue = true;
  else
    event.returnValue = false;
}
//onKeyPress="solocar_rut(event.keyCode,this)"
function solocar_rut(x,y){
var cont=0;
var m=y.value;
var s=m.charAt(m.length-2);

if (s!="-"){
if ((x > 47 && x< 58) || (x==75) || (x==107)|| ((x==45) && (m.indexOf("-")==-1))) 
      event.returnValue = true;
else
      event.returnValue = false;
 }
 else
event.returnValue = false;
}

function format(input)
{
var num = input.value.replace(/\./g,'');
if(!isNaN(num)){
num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
num = num.split('').reverse().join('').replace(/^[\.]/,'');
input.value = num;
}
  
else{ alert('Solo se permiten numeros');
input.value = input.value.replace(/[^\d\.]*/g,'');
}
}



function solocar_rut(x,y){
var cont=0;
var m=y.value;
var s=m.charAt(m.length-2);

if (s!="-"){
if ((x > 47 && x< 58) || (x==75) || (x==107)|| ((x==45) && (m.indexOf("-")==-1))) 
      event.returnValue = true;
else
      event.returnValue = false;
 }
 else
event.returnValue = false;
}

function valida_rut(formulario)
{
var indice=formulario.indexOf("-");
if (indice==-1){
  //  alert("El numero de rut ingresado no es valido");
    return false;
}
rut=formulario.substring(0,indice);
Dv_brk=formulario.substring(indice+1);

var count=0;
var count2=0;
var factor=2;
var suma=0;
var sum=0;
var digito=0;
count2=rut.length - 1;

while(count < rut.length)
{

sum = factor * (parseInt(rut.substr(count2,1))); 
suma = suma + sum;
sum=0;

count = count + 1;
count2 = count2 - 1;
factor = factor + 1;

if(factor > 7)
	{
		factor=2; 
	} 

}

digito= 11 - (suma % 11)

if(digito==11)
{
	digito=0;
}

if(digito==10)
{
	digito="k";
}

	if (digito!=Dv_brk){
	 // alert("El numero de rut ingresado no es valido");
	  return false;
	return(digito==Dv_brk);
	//alert("Digito Verificador -->> "+digito);
	}else{
		return true;
	}
}

function formatNumber(num,prefix){
   prefix = prefix || '';
   num += '';
   var splitStr = num.split('.');
   var splitLeft = splitStr[0];
   var splitRight = splitStr.length > 1 ? '.' + splitStr[1] : '';
   var regx = /(\d+)(\d{3})/;
   while (regx.test(splitLeft)) {
      splitLeft = splitLeft.replace(regx, '$1' + ',' + '$2');
   }
   return prefix + splitLeft + splitRight;
}

function unformatNumber(num) {
   return num.replace(/([^0-9\.\-])/g,'')*1;
}