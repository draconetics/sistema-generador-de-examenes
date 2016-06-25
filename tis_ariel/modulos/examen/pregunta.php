
<?php

$maxRows_lista_preguntas = 10;
$pageNum_lista_preguntas = 0;
if (isset($_GET['pageNum_lista_preguntas'])) {
  $pageNum_lista_preguntas = $_GET['pageNum_lista_preguntas'];
}
$startRow_lista_preguntas = $pageNum_lista_preguntas * $maxRows_lista_preguntas;

mysql_select_db($database_tis_ariel, $tis_ariel);
$query_lista_preguntas = "SELECT pregunta_descrip, tipo_pregunta FROM preguntas ORDER BY id_pregunta DESC";
$query_limit_lista_preguntas = sprintf("%s LIMIT %d, %d", $query_lista_preguntas, $startRow_lista_preguntas, $maxRows_lista_preguntas);
$lista_preguntas = mysql_query($query_limit_lista_preguntas, $tis_ariel) or die(mysql_error());
$row_lista_preguntas = mysql_fetch_assoc($lista_preguntas);

if (isset($_GET['totalRows_lista_preguntas'])) {
  $totalRows_lista_preguntas = $_GET['totalRows_lista_preguntas'];
} else {
  $all_lista_preguntas = mysql_query($query_lista_preguntas);
  $totalRows_lista_preguntas = mysql_num_rows($all_lista_preguntas);
}
$totalPages_lista_preguntas = ceil($totalRows_lista_preguntas/$maxRows_lista_preguntas)-1;
?>

    
     <?php	
		if(isset($_GET['acti']))
			{
				
switch ($_GET['acti']) {
    case 0:
           include('respuesta.php');
        break;    
    default:
 
}
			}	
				else{
					
					include('pregu.php');
					}		
 ?>
 
 <p>Lista de preguntas generados</p>
     <table border="1">
       <tr>
         <td>pregunta_descrip</td>
         <td>tipo_pregunta</td>
       </tr>
       <?php do { ?>
         <tr>
           <td><?php echo $row_lista_preguntas['pregunta_descrip']; ?></td>
           <td><?php echo $row_lista_preguntas['tipo_pregunta']; ?></td>
           <td><a href="#">Eliminar</a><a href="#">Modificar</a></td>
         </tr>
         <?php } while ($row_lista_preguntas = mysql_fetch_assoc($lista_preguntas)); ?>
     </table>
<?php
mysql_free_result($obtener_examen);

mysql_free_result($lista_preguntas);
?>
