<?php
    # realizamos la paginación
    if( $total_pags > 0 )
    {
       echo "<ul>";
       # inicio
       if($pagina==0)
          echo "<li> << Ant. </li>";
            else
          echo "<li><a href='".$_SERVER["PHP_SELF"]."?pag=".($pagina-1)."'> << Ant. </a></li>";
 
       # final
       if( $pagina==$total_pags-1 )
          echo "<li> Sig. >> </li>";
       else
          echo "<li><a href='".$_SERVER["PHP_SELF"]."?pag=".($pagina+1)."'> Sig. >> </a></li>";

       for( $i=0 ; $i<$total_pags ; $i++ )
       {
          if( $i==$pagina )
             # esta es la pagina en la que nos encontramos actualmente
             echo "<li><a href='#' class='active'>Pag.".($i+1)."</li>";
          else
             echo "<li><a href='".$_SERVER["PHP_SELF"]."?pag=".$i."'>Pag.".($i+1)."</a></li>";
       }
       echo "</ul>";
    }
?>
