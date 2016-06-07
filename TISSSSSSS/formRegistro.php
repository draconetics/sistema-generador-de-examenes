<html>
<head>
<title>Examen en linea</title>
</head>
<body background="imagenes/golf.jpg">
	<center><h1 style="color:000FF;">BIEN VENIDO AL REGISTRO </h1>
		<center><div class="ingreso">
	<center><h5>Ingrese sus datos de manera correcta..........</h5></center>
	<center><div class="ingreso">
		<table border="0" align="center" valign="middle">
<tr>
	<td rowspan=2>

<form method="post" action="registro.php">
     <fieldset>
     <legend style="font_size:20pt"><b>Registro</b></legend>

     <div class="form_group">
     <label style="font_size:14pt"><b>Ingrese tu nombre</b></label></br>
     <input type="text" name="nombre" class="form_control" style="border-radius:15px;" placeholder="ingresa tu nombre"/>
    </div><br>

    <div class="form_group">
    <label style="font_size:14pt"><b>Ingrese tu mail</b></label></br>
    <input type="text" name="apellido" class="form_control" style="border-radius:15px;" required placeholder="ingresa mail"/>
    </div><br/>

    <div class="form_group">
    <label style="font_size:14pt"><b>Ingrese tu password</b></label></br>
    <input type="text" name="password" class="form_control" style="border-radius:15px;" required placeholder="ingresa tu password"/>
    </div><br>

    <div class="form_group">
    <label style="font_size:14pt"><b>Ingresa tu correo</b></label></br>
    <input type="text" name="correo" class="form_control" style="border-radius:15px;" required placeholder="repita password"/>
    </div><br>

    <center><input style="color:000FF;" class="btn btn_danger" type="submit" name="submit" value="Registrarse"></center>
    </fieldset>
</form>

</body>
</html>