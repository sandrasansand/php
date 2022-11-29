<!-- Comprobar  si  un  NIF  es  válido.  Un  NIF  ha  de  constar 
exactamente de 8 números y una letra. Para comprobar si un carácter es un número o una letra se puede usar la función ord() que nos da el 
código  ASCII  de  dicho  carácter.  En  el  código  ASCII  los  números  se 
encuentran en las posiciones 48 a 57 y las letras en las posiciones 65 a 90 
(mayúsculas)  y  97  a  122  (minúsculas).  Una  vez  comprobado  que  es 
correcto  debe  mostrar  el  DNI  por  pantalla  con  la  última  letra  en 
mayúsculas,  independientemente  de  como  estuviera  en  el  dato  de 
entrada. 
Un ejemplo con llamadas a la función ord(): recibe un string como parametro  -->

<?php 
//primero recorro el array num y no lo muestro
// segundo compruebo numeros 48,57 es numeros if num es >=48 && <=57 muestro num con ord()..si se puede??
//recorro array letras   comrpruebo 65,90 es letra
// mayusculas 65,90
// minúsculas 97,122

// mostrar por pantalla la ultima letra en minuscula == longitud del array letras-1
//$nif= 8 numeros $numeros(rand(7));

DEFINE ("NUMERO_CARAC_NIF",8);
DEFINE ("NUMERO_LETRAS",26);

$nif=array();
for ($i=0; $i <NUMERO_CARAC_NIF ; $i++) { 
	
		$nif[$i]= rand(0,7);
	}
for ($i=0; $i <NUMERO_CARAC_NIF ; $i++) { 
	echo  $nif[$i];
}
	echo "<br>";


/*




$numeros =array (0,1,2,3,4,5,6,7,8,9);
$letras = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z');
$letras_mayusculas= array_map('strtoupper',$letras);
array_multisort($letras_mayusculas, SORT_DESC, SORT_STRING, $letras); //posicion[0]=Z


for ($i=0; $i <count($numeros) ; $i++) { 
	if ($numeros) {
		# code...
	}
	
}

$numeros= ord(6);



*/

 ?>