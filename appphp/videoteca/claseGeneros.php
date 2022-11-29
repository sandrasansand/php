<?php
class claseGeneros{
    var $Ordenada = FALSE;
    function Cargar() {
        $conexion = mysqli_connect('localhost','root','','videoteca');
        if($conexion == FALSE){
            echo ('error de conexion');
            exit();
        }
        
        $conexion ->set_charset('utf-8');
        if ($this->Ordenada == TRUE) {
            
            $res = mysqli_query($conexion, 'SELECT * FROM genero ORDER BY nombre'); //mirar pq no deja ordenar por nombre
            
        }
        
        else {
            $res = mysqli_query($conexion, 'SELECT * FROM genero');
            
        }
        
        if ($res == FALSE) {
            echo ('error en la consulta'); //se queda aquí
            mysqli_close($conexion);
            exit();
            
        }
        $generos = '';
        while ($fila = mysqli_fetch_row($res)){
            $generos .='<tr>';
            $generos .=sprintf("<td>%u</td><td>%s</td><td>%s</td>",
                $fila [0],  $fila [1],  $fila [2]);
            $generos .= sprintf('</tr>');
            
        }
        mysqli_free_result($res);
        mysqli_close($conexion);
        
        return $generos;
        
        
        
        
        
    }
}
?>

