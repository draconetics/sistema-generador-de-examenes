<?php
$n=$_POST['nombre'];
$a=$_POST['apellido'];
$p=$_POST['password'];
$c=$_POST['correo'];

$conexion = mysql_connect("localhost","root","");
mysql_select_db("tis",$conexion);
$sql="insert into usuario(idusuario,nombre,apellido,pass,correo) values ('','$n','$a','$p','$c')";
mysql_query($sql);
echo '<script>alert("SE REGISTRO CON EXITO")</script>';
echo "<script>location.href='index.php'</script>";
?>