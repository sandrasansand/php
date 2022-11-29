 <?php include 'conecta.php'; ?>
 <?php include 'plantilla/head.php'; ?> 

<style type="text/css">

#pidoDatos {
margin: 15%;
border:0px solid black;
padding: 15px 20px;
background: #FFFFCC;
width: 170px;
height: 250px;
border-radius: 5px 5px 5px 5px;
-moz-border-radius: 5px 5px 5px 5px;
-webkit-border-radius: 5px 5px 5px 5px;
box-shadow: 5px 2px 30px #000000;
-webkit-box-shadow:5px 2px 30px #000000;
-moz-box-shadow:5px 2px 30px #000000;
word-wrap:break-word;
}
.btn{
	text-decoration: none;
    padding: 8px;
    font-weight: 200;
    font-size: 12px;
    color: #ffffff;
    background-color: #22275D;
    border-radius: 4px;
    border: 1px solid #0016b0;
}
 .btn:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
</style>
</head>

<body>
<div id="pidoDatos">
<form name="form1" id="form1" method="post" action="login.php">
 
<label for="user">Usuario:</label>
<input type="text" name="user" id="user">
<label for="pass">Pasword:</label>
<input type="text" name="pass" id="pass"><br></br>
<input type="submit" name="entrar" value="Entrar" class="btn"/>
<a href="formRegistro.php" > <input type="button" name="boton" value="Registro" class="btn" /> </a> 
    
</form>
   </div> 
<?php include 'plantilla/footer.php'; ?>