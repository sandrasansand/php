<?php

    session_start() ;

   if ( !isset($_GET["pag"]) ) {

      // se carga el catalogo en un array multidimensional
      echo "<script>alert('Catalogo iniciado.');</script>";

      $catalogo   = array() ;
      $indice     = array() ;
      $cotiza     = array() ;
      $linexpag   = 15 ;
      $total_pags = 0 ;
      $pagina     = 0 ;

      $filecsv  = 'catalogo.csv' ;
      $charlim  = ',' ;
      $cont_itm = 0 ;
      $cont_lin = 0 ;
      $cont_pag = 0 ;

      if( !file_exists($filecsv) || !is_readable($filecsv) ) {
         echo "<p>Cat&aacutelogo de productos no existe o no es leible</p>";
      }

      if (($handle = fopen($filecsv, 'r')) !== false) {
         while (($row = fgetcsv($handle, 1000, $charlim)) !== false ) {
            if ($cont_lin==0) {
               $indice[$cont_pag][0] = $cont_itm+1 ;
               $indice[$cont_pag][1] = 0 ;
            }
            $catalogo[] = $row ;
            $cont_lin++ ;
            $cont_itm++ ;
            if ($cont_lin==$linexpag) {
               $cont_lin = 0 ;
               $indice[$cont_pag][1] = $cont_itm ;
               $cont_pag++ ;
            }
         }
         $indice[$cont_pag][1] = $cont_itm ;
         fclose($handle);
      }

      $total_pags = count($indice) ;

      $_SESSION["mem_catalogo"]   = $catalogo ;
      $_SESSION["mem_indice"]     = $indice ;
      $_SESSION["mem_cotiza"]     = $cotiza ;
      $_SESSION["mem_linexpag"]   = $linexpag ;
      $_SESSION["mem_total_pags"] = $total_pags ;
      $_SESSION["mem_pagina"]     = $pagina ;

   }else{

      $catalogo   = $_SESSION["mem_catalogo"] ;
      $indice     = $_SESSION["mem_indice"]   ;
      $cotiza     = $_SESSION["mem_cotiza"]   ;
      $linexpag   = $_SESSION["mem_linexpag"] ;
      $total_pags = $_SESSION["mem_total_pags"] ;
      $pagina     = $_SESSION["mem_pagina"] ;

   }

?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
   <link rel="stylesheet" href="css/catalogo.css" />
	<title>Catálogo de productos MOTOREP</title>

</head>

 
<body>

   <div class="contenido">

      <div class="secc1">
         <img src="imagen/logo.png" />
      </div>

      <div class="secc3">
         <?php include 'catalogo_cargaitems.php';?>
      </div>

      <div class="secc2">
         <?php include 'catalogo_cargaindice.php';?>
      </div>

      <div class="secc4">
         <p><center>Derechos de copia reservados 2020</center></p>
      </div>

   </div>

</body>

</html>
