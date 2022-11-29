<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!-- <meta charset="UTF-8"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Autentificación PHP</title>
</head>
<body>
	<h1>Autentificación PHP</h1>
	<form action="control.php" method="POST">
		<table align="center" width="355" cellspacing="2" cellpadding="2" border="0" >
			<tr>
				<td colspan="2" align="center"


				bgcolor="#47C9EF"><span style="color:#4B4C4F"><b>Introduce tu clave de acceso</b>
				</td>	
			</tr>
			<tr>
				<td align="right">USUARIO:</td>
				<td><input type="text" name="usuario" size="8" maxlength="50"></td>
			</tr>
			<tr>
				<td align="right">PASSWORD:</td>
				<td><input type="password" name="contrasena" size="8" maxlength="50"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="entrar"></td>
				</tr>	
			</table>
		</form>
	</body>
	</html>