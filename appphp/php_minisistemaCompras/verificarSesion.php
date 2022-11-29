<?
  session_start();
  if(!isset($_SESSION['carrito']) || !isset($_SESSION['catalogo'])){
    include_once("cabecera.php");
    include_once("sesionNoiniciada.php");
    die("");
  }
?>
