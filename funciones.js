function muestra_valor(val)
{
	var a= val.value;
	switch(a){
		case "Mano de Obra":
		document.getElementById('N/Parte').innerHTML=232; 		
		document.getElementById('area').innerHTML=7000;	
		document.getElementById('total').innerHTML=7000;
   break;
   case "Filtro de aceite motor":
   	document.getElementById('N/Parte').innerHTML=121;	
		document.getElementById('area').innerHTML=10800;	
		document.getElementById('total').innerHTML=10800;
	break;
	case "Filtro de linea":
		document.getElementById('N/Parte').innerHTML=245;		
		document.getElementById('area').innerHTML=11000;	
		document.getElementById('total').innerHTML=11000;
	break;	
   case "Filtro decantador":
   	document.getElementById('N/Parte').innerHTML=444;		
		document.getElementById('area').innerHTML=27100;	
		document.getElementById('total').innerHTML=27100;
	break;
	case "Balde aceite de motor":
		document.getElementById('N/Parte').innerHTML=555;		
		document.getElementById('area').innerHTML=42500;	
		document.getElementById('total').innerHTML=42500;	
	break;
}
}	
 function preciototal(val)
{
	var c =document.getElementById('total').innerHTML
	var b=val.value
	document.getElementById('total').innerHTML=c*b
	document.getElementById('grantotal').innerHTML=c*b
}

function muestra_valo(val)
{
	var a= val.value;
	switch(a){
		case "Mano de Obra":
		document.getElementById('N/Parte1').innerHTML=232; 		
		document.getElementById('area1').innerHTML=7000;	
		document.getElementById('total1').innerHTML=7000;
   break;
   case "Filtro de aceite motor":
   	document.getElementById('N/Parte1').innerHTML=121;	
		document.getElementById('area1').innerHTML=10800;	
		document.getElementById('total1').innerHTML=10800;
	break;
	case "Filtro de linea":
		document.getElementById('N/Parte1').innerHTML=245;		
		document.getElementById('area1').innerHTML=11000;	
		document.getElementById('total1').innerHTML=11000;
	break;	
   case "Filtro decantador":
   	document.getElementById('N/Parte1').innerHTML=444;		
		document.getElementById('area1').innerHTML=27100;	
		document.getElementById('total1').innerHTML=27100;
	break;
	case "Balde aceite de motor":
		document.getElementById('N/Parte1').innerHTML=555;		
		document.getElementById('area1').innerHTML=42500;	
		document.getElementById('total1').innerHTML=42500;	
	break;
}
}	
 function preciototal1(val)
{
	var c =document.getElementById('total1').innerHTML
	var b=val.value
	document.getElementById('total1').innerHTML=c*b
	 d= document.getElementById('total1').innerHTML
	 s= document.getElementById('grantotal').innerHTML
	 document.getElementById('grantotal').innerHTML= parseInt(s)+parseInt(d);
	
}	
