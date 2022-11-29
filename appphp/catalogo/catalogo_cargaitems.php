<?php

    # si hemos recibido por get el numero de pagina...
    if( isset($_GET["pag"]) && is_numeric($_GET["pag"]) ) {
       $pagina=$_GET["pag"];
    }

       $item_ini = $indice[$pagina][0]-1 ;
       $item_fin = $indice[$pagina][1]-1 ;

       echo "<table>";

       echo "<tr>";
       echo "<th>Foto</th>";
       echo "<th>C&oacutedigo</th>";
       echo "<th>Alm.</th>";
       echo "<th>Producto</th>";
       echo "<th>Modelo</th>";
       echo "<th>Marca</th>";
       echo "<th>Unids.</th>";
       echo "</tr>";

       # Hacemos un bucle para recorrer las lineas del array catalogo que corresponden a la pagina
       for ( $deta = $item_ini ; $deta <= $item_fin ; $deta++ )
       {
          $unid_cotiz = $catalogo[$deta][6] ;
          $codi_produ = $catalogo[$deta][0] ;
          $codi_empre = $catalogo[$deta][1] ;
          echo "<tr>";

          echo "<td><center><img src='fotos/".rtrim($catalogo[$deta][5])."' width='140' height='70'></center></td>";  // FOTO
          echo "<td>".$catalogo[$deta][0]."</td>";                   // CODIGO
          echo "<td><center>".$catalogo[$deta][1]."</center></td>";  // EMPRESA
          echo "<td>".utf8_encode($catalogo[$deta][2])."</td>";      // PRODUCTO
          echo "<td>".$catalogo[$deta][3]."</td>";                   // MODELO
          echo "<td>".$catalogo[$deta][4]."</td>";                   // MARCA
          // PEDIDO
          echo "<td><center>
                <form action='cotiza_agregar.php' method='post'>
                   <input type='hidden' name='pagnum' value='".$pagina."'>
                   <input type='hidden' name='detnum' value='".$deta."'>
                   <input type='hidden' name='codigo' value='".$codi_produ.$codi_empre."'>
                   <input type='number' name='pedido' size='8' maxlength='5' min='0' max='9000' value='".$unid_cotiz."'>
                   <input type='submit' value='Agregar'>
                </form>
                </center></td>" ;

          echo "</tr>";
       }

       echo "</table>";

?>