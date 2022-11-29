<!-- A continuación se muestra un formulario formado por algunos
de los tipos de campo descritos con anterioridad y se guarda en un archivo
llamado “encuesta.php” -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Encuesta</title>
</head>
<body>
<form name="encuesta" method="post" action="verificar.php">
NOMBRE <input type="text" name="nombre" size="43"><br>
<br>
NIVEL DE INTERNET<br>
bajo <input type="radio" name="nivel" value="bajo" checked>
medio <input type="radio" name="nivel" value="medio">
alto <input type="radio" name="nivel" value="alto"><br>
<br>
EXPERIENCIA PREVIA EN PROGRAMACIÓN<br>
Visual Basic <input type="checkbox" name="basic">
C/C++ <input type="checkbox" name="c_cplus">
Java <input type="checkbox" name="java"><br>
<br>
TU OPINIÓN SOBRE ESTE CURSO<br>
<textarea name="opinion" cols="40" rows="5"></textarea><br>
<br>
<input type="submit" value="Enviar">
<input type="reset" value="Borrar todo">
</form>
</body>
</html>
