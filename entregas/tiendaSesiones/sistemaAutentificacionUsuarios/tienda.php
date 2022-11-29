<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head> 
<body> 
<form action="verCarrito.php" method="post"> 
<input type="hidden" name="agregar"> 
<table border="1"> 
<tr>
    <th>Referencia</th>
    <th>Descripción</th> 
    <th>Precio</th>

  </tr>

   <tr>
    <td>Ref1</td>
    <td>Descripción del artículo 1</td>
    <td>5</td>
<td><input type="submit" name="Ref1" id="button" value="comprar"></td>
   </tr>
</tr>
  <tr>
    <td>Ref2</td>
    <td>Descripción del artículo 2</td>
    <td>3</td>
<td><input type="submit" name="Ref2" id="button2" value="comprar"></td> 
  </tr> 
<tr>
    <td>Ref3</td>
    <td>Descripción del artículo 3</td>
    <td>2</td>
<td><input type="submit" name="Ref3" id="button3" value="comprar"></td> 
</tr> 

</table> 
</form>
