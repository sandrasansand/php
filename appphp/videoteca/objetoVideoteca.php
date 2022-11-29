<?php
include 'conexionObjeto.php';
// $videoteca = new mysqli('localhost','root','','videoteca');      //creamos un ejemplar de la clase mysqli que llamamos $videoteca. Los parametros del constructor

// if($videoteca->errno!=0){					          //de la clase son el servidor,usuario,contraseña y nombreBD
//     echo('error en la conexion');                                    //utilizamos la propiedad errno de la clase para comprobar si ocurrió algún error
//     exit();
// }


$videoteca->set_charset('utf-8');

$resultado = $videoteca->query('SELECT * FROM genero');              //realizas la consulta llamando al método query() del ejemplar de la clase q estoy utilizando($videoteca)
//la $resultado es un ejemplar de la clase mysqli_result

if ($resultado == FALSE){
	echo('error en la consulta');
}else{

	while($fila =$resultado->fetch_row()){
		printf("(%u)%s-%s<br/>",$fila[0],$fila[1],$fila[2]);
        //printf("<br/>");
    	//print_r($resultado-> fetch_field());


	}

	printf('%s', gettype($resultado));
	printf("<br/>");
	printf("Registros encontrados: %s.<br/><br/>", $resultado ->num_rows);


    $resultado->close();     // desconexion
    
}

$videoteca->close(); 

?>



