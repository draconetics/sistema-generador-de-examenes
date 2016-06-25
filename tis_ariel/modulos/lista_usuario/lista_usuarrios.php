<?php require_once('Connections/tis_ariel.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if ((isset($_GET['eli_user'])) && ($_GET['eli_user'] != "")) {
  $deleteSQL = sprintf("DELETE FROM usuario WHERE idusuario=%s",
                       GetSQLValueString($_GET['eli_user'], "int"));

  mysql_select_db($database_tis_ariel, $tis_ariel);
  $Result1 = mysql_query($deleteSQL, $tis_ariel) or die(mysql_error());


}

mysql_select_db($database_tis_ariel, $tis_ariel);
$query_lista_usuario = "SELECT * FROM usuario ORDER BY apellido DESC";
$lista_usuario = mysql_query($query_lista_usuario, $tis_ariel) or die(mysql_error());
$row_lista_usuario = mysql_fetch_assoc($lista_usuario);
$totalRows_lista_usuario = mysql_num_rows($lista_usuario);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

  
 
 <?php if($row_lista_usuario['idusuario']){ ?>
 <a href="lista_usuarrios.php?crear=0">crear usuario</a>
 <?php	
				if(isset($_GET['crear']))
			{
				
switch ($_GET['crear']) {
    case 0:
           include('crear_user.php.');
        break;    
    default:
    
}

			}	
						
 ?>  
<table border="1">
  <tr>
    <td>idusuario</td>
    <td>nombre</td>
    <td>apellido</td>
    <td>pass</td>
    <td>correo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_lista_usuario['idusuario']; ?></td>
      <td><?php echo $row_lista_usuario['nombre']; ?></td>
      <td><?php echo $row_lista_usuario['apellido']; ?></td>
      <td><?php echo $row_lista_usuario['pass']; ?></td>
      <td><?php echo $row_lista_usuario['correo']; ?></td>
       <td><a href="lista_usuarrios.php?eli_user=<?php echo $row_lista_usuario['idusuario'];?>">Eliminar</a></td>
    </tr>
    <?php } while ($row_lista_usuario = mysql_fetch_assoc($lista_usuario)); ?>
</table>

 <?php } else{ ?>
        
 <?php include('crear_user.php.');}  ?>
</body>
</html>
<?php
mysql_free_result($lista_usuario);
?>
