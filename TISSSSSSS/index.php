<html>
<head>
	<title>Examen en linea</title>
</head>
<body background="imagenes/golf.jpg">

	<center><h1 style="color:000FF;">BIEN VENIDO A LA PLATAFORMA DE EXAMEN EN LINEA... </h1><br/>
	<center><h5>Por favor ingrese correo y password en el siguiente recuadro para poder ingresar al sistema..........</h5></center>
   
   <form action="validarDocente.php" method="post">
	<legend style="font_size:5pt"><b>Maestro logearse o registrarse</b></legend><br/>

	    <div>
		<b>Correo:</b><br/>
		<input class="form-group has-success" style="border-radius:15px;" type="text" name="mail" required placeholder="ingresa mail"><br/><br/>
		<b>Password:</b><br/>
	    <input style="border-radius:15px" type="password" name="pass"required placeholder="ingresa password"><br/><br/>
	    <center><input style="color:000FF;" class="btn btn-primary" type="submit" value="Aceptar"></center><br/>
	    <a href="formRegistro.php">Registrarse</a><br/>
	    </div>
   </form><br/>


   <form action="validarEstudiante.php" method="post">
	<legend style="font_size:10pt"><b>Tienes codigo de estudiante?.... ingresa aqui</b></legend><br/>

	    <div>
        <b>Codigo:</b><br/>
	    <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"><br/><br/>
        <center><input style="color:000FF;" class="btn btn-primary" type="submit" value="Iniciar"></center><br/><br/>
        </div>
   </form>


</body>
</html>