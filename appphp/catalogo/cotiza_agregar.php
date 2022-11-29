<?php

    session_start() ;
    $catalogo = $_SESSION["mem_catalogo"] ;
    $cotiza   = $_SESSION["mem_cotiza"]   ;

    $cotiza_pagnum = $_POST["pagnum"];
    $cotiza_detnum = $_POST["detnum"];
    $cotiza_codigo = $_POST["codigo"];
    $cotiza_pedido = $_POST["pedido"];
    $catalogo[$cotiza_detnum][6] = $cotiza_pedido ;
    $cotiza[] = array( $cotiza_codigo , $cotiza_pedido ) ;

    $_SESSION["mem_catalogo"] = $catalogo ;
    $_SESSION["mem_cotiza"]   = $cotiza ;

    header('Location: catalogo.php?pag=' . $cotiza_pagnum . '');

?>