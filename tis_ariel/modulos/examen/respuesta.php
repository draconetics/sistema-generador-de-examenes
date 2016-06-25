
<?php
$maxRows_lista_respuesta = 10;
$pageNum_lista_respuesta = 0;
if (isset($_GET['pageNum_lista_respuesta'])) {
  $pageNum_lista_respuesta = $_GET['pageNum_lista_respuesta'];
}
$startRow_lista_respuesta = $pageNum_lista_respuesta * $maxRows_lista_respuesta;

$colname_lista_respuesta = "-1";
if (isset($_GET['respuesta'])) {
  $colname_lista_respuesta = $_GET['respuesta'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_lista_respuesta = sprintf("SELECT * FROM respuesta WHERE id_pregu = %s ORDER BY id_respuesta ASC", GetSQLValueString($colname_lista_respuesta, "int"));
$query_limit_lista_respuesta = sprintf("%s LIMIT %d, %d", $query_lista_respuesta, $startRow_lista_respuesta, $maxRows_lista_respuesta);
$lista_respuesta = mysql_query($query_limit_lista_respuesta, $tis_ariel) or die(mysql_error());
$row_lista_respuesta = mysql_fetch_assoc($lista_respuesta);

if (isset($_GET['totalRows_lista_respuesta'])) {
  $totalRows_lista_respuesta = $_GET['totalRows_lista_respuesta'];
} else {
  $all_lista_respuesta = mysql_query($query_lista_respuesta);
  $totalRows_lista_respuesta = mysql_num_rows($all_lista_respuesta);
}
$totalPages_lista_respuesta = ceil($totalRows_lista_respuesta/$maxRows_lista_respuesta)-1;
?>
<div><h4>Pregunta actual selecionada</h4></div>

  <?php do { ?>
     <div class="well">
     <p><span style="color:#036"><strong>Descripcion: </strong></span><?php echo $row_pregunta_actual['pregunta_descrip']; ?>
      <a href="#" >Modificar</a>
     </p>
      <p><span style="color:#036"><strong>Tipo: </strong></span><?php 
	  
	  if($row_pregunta_actual['tipo_pregunta']==1){
		    echo "Cuadro de texto";
		  }
		  else{
			  
			     echo " Grupo Opciones";
			  } 

	  ?>
       <a href="#" >Modificar</a>
      </p>
       </div>
    
    <?php } while ($row_pregunta_actual = mysql_fetch_assoc($pregunta_actual)); ?>

<form method="post" name="registro_respuestas" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Respuesta_descrip:</td>
      <td><input type="text" name="respuesta_descrip" value="" size="32"required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Puntaje_respuesta:</td>
      <td><input type="text" name="puntaje_respuesta" value="" size="32"required></td>
    </tr>
  
  <tr valign="baseline">
      <td nowrap align="right">Estado Respuesta:</td>
      <td>
        <p>
          <label>
            <input type="radio" name="estado_respuesta" value="1" id="estado111_0"required>
            valido</label>
          <br>
          <label>
            <input type="radio" name="estado_respuesta" value="0" id="estado111_1"required>
            no valido</label>
          <br>
      </p></td>
    </tr>

   
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Aceptar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="registro_respuestas">
</form>
<p>lista de respuesta generados de acuerdo a pregunta</p>
<?php echo $row_lista_respuesta['respuesta_descrip']; ?>
<table border="1">
  <tr>
    <td>id_respuesta</td>
    <td>respuesta_descrip</td>
    <td>puntaje_respuesta</td>
    <td>id_pregu</td>
    <td>estado_respuesta</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_lista_respuesta['id_respuesta']; ?></td>
      <td><?php echo $row_lista_respuesta['respuesta_descrip']; ?></td>
      <td><?php echo $row_lista_respuesta['puntaje_respuesta']; ?></td>
      <td><?php echo $row_lista_respuesta['id_pregu']; ?></td>
      <td><?php echo $row_lista_respuesta['estado_respuesta']; ?></td>
       <td><a href="#">Eliminar</a><a href="#">Modificar</a></td>
    </tr>
    <?php } while ($row_lista_respuesta = mysql_fetch_assoc($lista_respuesta)); ?>
</table>

<?php
mysql_free_result($pregunta_actual);

mysql_free_result($lista_respuesta);
?>
