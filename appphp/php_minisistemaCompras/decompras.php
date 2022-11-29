<? include_once("verificarSesion.php");
 include_once("cabecera.php"); ?>

<body>
 <?
   $accione="";
   if(isset($_POST['acc'])){
     if($acc=="Iniciarcompras" && $_POST['cli']!=""){
       $_SESSION['clientazo']=$_POST['cli'];
     }
     else if($acc=="Iniciar compras" && $_POST['cli']==""){
       echo "Atencion!!!!!! Nombre de cliente invalido!<br>";
       $accione="index.php";
     }
   }
 ?>
 Seleccione la opcion que desea realizar
 <form method="post" action="<?echo $accione?>">
 <input type="submit" name="acc" value="Ver catalogo de productos">
 <input type="submit" name="acc" value="Ver contenido del carrito">
 </form>
 <?
   if(isset($_POST['acc'])){
     if($acc=="Ver catalogo de productos") require("catalogo.php");
     else if($acc=="Ver contenido del carrito") require("carrito.php");
     else if($acc=="Agregar al carrito"){
       $bandera=false;
       $desc = "*";
       $suma=0;
       foreach($HTTP_POST_VARS as $clave => $valor){
         if(strncasecmp($clave,"p",1)==0 || $bandera){
           if($desc!="*"){
             for($j=0;$j<sizeof($catalogo);$j++){
               list($id,$name,$existencias,$preu) = explode(":",$catalogo[$j]);
               if($name==$desc){
                 $suma+=$valor;
                 $existencias-=$valor;
                 $carrito[]=$id.":".$desc.":".$valor.":".$clientazo.":".$preu;
                 $catalogo[$j]=$id.":".$desc.":".$existencias.":".$preu;
                 break;
               }
             }
             //echo "$clave = $desc _ $valor <br>";
           }
           $bandera=!$bandera;
           if(strncasecmp($clave,"p",1)==0) $desc = $valor;
           else $desc = "*";
         }
       }
       echo "<p>Se han agregado $suma articulos al carrito</p>";
     }
     else if($acc=="Eliminar seleccionados"){
       foreach($HTTP_POST_VARS as $clave => $valor){
         if(strncasecmp($clave,"d",1)==0)
           $carrito[$valor]="null:null:null:null:null";
       }
       echo "<p>Se han eliminado los articulos del carrito</p>";
     }
     else if($acc=="Facturar todo") require("facturar.php");
   }
 ?>
</body>
</html>