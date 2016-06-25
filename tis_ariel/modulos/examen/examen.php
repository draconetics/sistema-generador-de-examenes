<?php require_once('../../Connections/tis_ariel.php'); ?>
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




$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO examen (titulo_examen, fecha_registro, hora_registro, hora_inicio, hora_fin, estado_examen, descripcion_examen) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['titulo_examen'], "text"),
                       GetSQLValueString(date('Y-m-d'), "date"),
                       GetSQLValueString(date('H:i:s'), "date"),
                       GetSQLValueString($_POST['hora_inicio'], "date"),
                       GetSQLValueString($_POST['hora_fin'], "date"),
                       GetSQLValueString($_POST['estado_examen'], "int"),
                       GetSQLValueString($_POST['descripcion_examen'], "text"));


  mysql_select_db($database_tis_ariel, $tis_ariel);
  $Result1 = mysql_query($insertSQL, $tis_ariel) or die(mysql_error());
  

  mysql_select_db($database_tis_ariel, $tis_ariel);
$query_obtener_envio = "SELECT MAX(id_examen) FROM examen";
$obtener_envio = mysql_query($query_obtener_envio, $tis_ariel) or die(mysql_error());
$row_obtener_envio = mysql_fetch_assoc($obtener_envio);
$totalRows_obtener_envio = mysql_num_rows($obtener_envio);
  
  
  $vsalu=$row_obtener_envio['MAX(id_examen)'];
  $insertGoTo = "examen.php?valu=0&dato=$vsalu";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));

}

$colname_obtener_examen = "-1";
if (isset($_GET['dato'])) {
  $colname_obtener_examen = $_GET['dato'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_obtener_examen = sprintf("SELECT * FROM examen WHERE id_examen = %s", GetSQLValueString($colname_obtener_examen, "int"));
$obtener_examen = mysql_query($query_obtener_examen, $tis_ariel) or die(mysql_error());
$row_obtener_examen = mysql_fetch_assoc($obtener_examen);
$totalRows_obtener_examen = mysql_num_rows($obtener_examen);


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO preguntas (id_examen, pregunta_descrip, tipo_pregunta) VALUES (%s, %s, %s)",
                       GetSQLValueString($_GET['dato'], "int"),
                       GetSQLValueString($_POST['pregunta_descrip'], "text"),
                       GetSQLValueString($_POST['tipo_pregunta'], "int"));

$obt_tipo_pregu=$_POST['tipo_pregunta'];
  mysql_select_db($database_tis_ariel, $tis_ariel);
  $Result1 = mysql_query($insertSQL, $tis_ariel) or die(mysql_error());
  
  mysql_select_db($database_tis_ariel, $tis_ariel);
$query_res_pregunta = "SELECT MAX(id_pregunta) FROM preguntas";
$res_pregunta = mysql_query($query_res_pregunta, $tis_ariel) or die(mysql_error());
$row_res_pregunta = mysql_fetch_assoc($res_pregunta);
$totalRows_res_pregunta = mysql_num_rows($res_pregunta);

  $vsalu1=$row_res_pregunta['MAX(id_pregunta)'];
  
  mysql_free_result($res_pregunta);
   //$vsalu1=$_GET['dato'];
     if($obt_tipo_pregu==3){
		 
		   $insertGoTo = "examen.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
		 
		 
		 }
		 else{
  $insertGoTo = "examen.php?respuesta=$vsalu1&acti=0";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
		 }
}

?>


<?php


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "registro_respuestas")) {
  $insertSQL = sprintf("INSERT INTO respuesta (respuesta_descrip, puntaje_respuesta, id_pregu,estado_respuesta) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['respuesta_descrip'], "text"),
                       GetSQLValueString($_POST['puntaje_respuesta'], "double"),
                       GetSQLValueString($_GET['respuesta'], "int"),
                       GetSQLValueString($_POST['estado_respuesta'], "int"));

  mysql_select_db($database_tis_ariel, $tis_ariel);
  $Result1 = mysql_query($insertSQL, $tis_ariel) or die(mysql_error());
 
  $insertGoTo = "examen.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));

}

$colname_pregunta_actual = "-1";
if (isset($_GET['respuesta'])) {
  $colname_pregunta_actual = $_GET['respuesta'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_pregunta_actual = sprintf("SELECT * FROM preguntas WHERE id_pregunta = %s", GetSQLValueString($colname_pregunta_actual, "int"));
$pregunta_actual = mysql_query($query_pregunta_actual, $tis_ariel) or die(mysql_error());
$row_pregunta_actual = mysql_fetch_assoc($pregunta_actual);
$totalRows_pregunta_actual = mysql_num_rows($pregunta_actual);
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../librerias_iu/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../librerias_iu/css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <link rel="stylesheet" href="../../librerias_iu/css/styles_menu.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../../librerias_iu/js/script.js"></script>
</head>

<body>


 <?php	
		if(isset($_GET['valu']))
			{
				
switch ($_GET['valu']) {
    case 0:
	  ?>
      <div class="row">
	  <div class="col-md-8">
	  <div style="height:480px; overflow: scroll;">
	  <?php include('resul_exman.php');?></div> 
      </div>
	  <div class="col-md-4"><?php include('pregunta.php'); ?></div>
	  </div>
	  <?php   
        break;    
    default:
 
}
			}	
				else{
					 include('regis_examen.php');
					
					}		
 ?>  


<?php

if(isset($obtener_envio))
			{
				mysql_free_result($obtener_envio);
			
			}
?>

  <!-- jQuery -->
    <script src="../../librerias_iu/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../librerias_iu/js/bootstrap.min.js"></script>


</body>
</html>