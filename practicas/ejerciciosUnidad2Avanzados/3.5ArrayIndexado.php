<!-- Práctica 3.5. Haz un array indexado numéricamente que contenga las 
letras del abecedario en minúsculas. Luego recórrelo, y muéstralo por 
pantalla  cada  letra  del  array,  primero  en  minúsculas  y  luego  en 
mayúsculas. --> 
<?php 
$abecedario= array (0=>"a",1=>"b",2=>"c",3=>"d",4=>"e",5=>"f",6=>"g",7=>"h",8=>"i",9=>"j",10=>"k",11=>"l",12=>"ll",13=>"m",14=>"n",15=>"ñ",16=>"o",17=>"p",18=>"q",19=>"r",20=>"s",21=>"t",22=>"u",23=>"v",24=>"w",25=>"z");
for ($i=0; $i <count($abecedario) ; $i++) { 
	echo $abecedario[$i]." ";
}
?>
