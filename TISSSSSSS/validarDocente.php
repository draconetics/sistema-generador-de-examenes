<?php
require("connect_db.php");
$username=$_POST['mail'];
$pass=$_POST['pass'];

$result=mysql_query("select * from usuario where correo='$username' and pass='$pass'");
$row=mysql_fetch_array($result);
if ($row['correo']==$username && $row['pass']==$pass) {
	echo '<script>alert("BIENBENIDO")</script>';
    echo "<script>location.href='admin.php'</script>";

}else{
	echo '<script>alert("ERROR DE CONTRASEÑA")</script>';
    echo "<script>location.href='index.php'</script>";
}