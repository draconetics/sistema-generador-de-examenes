
<?php

$colname_preguntas_11 = "-1";
if (isset($row_obtener_examen['id_examen'])) {
  $colname_preguntas_11 = $row_obtener_examen['id_examen'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_preguntas_11 = sprintf("SELECT * FROM preguntas WHERE id_examen = %s AND preguntas.id_pregu_sub=0  ORDER BY id_pregunta ASC", GetSQLValueString($colname_preguntas_11, "int"));
$preguntas_11 = mysql_query($query_preguntas_11, $tis_ariel) or die(mysql_error());
$row_preguntas_11 = mysql_fetch_assoc($preguntas_11);
$totalRows_preguntas_11 = mysql_num_rows($preguntas_11);


?>

<form>
<?php do { ?>
         <div class="row">
         <div class="col-md-12" >Fecha y hora de registro: <?php echo $row_obtener_examen['fecha_registro']; ?>-<?php echo $row_obtener_examen['hora_registro']; ?>
         </div>
        <center><div><h2>Examen: <?php echo $row_obtener_examen['titulo_examen']; ?>
        </h2>
        <a href="#" >Eliminar</a><a href="#" >Modificar</a>
        
        </div></center>
        
        
        
        
        <div >
         <div class="col-md-8 alert alert-success" role="alert">Descripcion:
         <?php echo $row_obtener_examen['descripcion_examen']; ?> <a href="#" >Modificar</a>
         </div>
         <div  class="col-md-4 alert  alert-warning" role="alert" >
         <p>Estado:<?php 
		          if($row_obtener_examen['estado_examen']==1){
					  echo "Habilidado";
					  }
					  else{
						   echo "No Habilidado";
						  }
		  ?> <a href="#" >Modificar</a></p>
         <p>Hora inicio:<?php echo $row_obtener_examen['hora_inicio']; ?><a href="#" >Modificar</a></p>
         <p>Hora fin:<?php echo $row_obtener_examen['hora_fin']; ?><a href="#" >Modificar</a></p>
         </div>
         
</div>
        
        </div>
 <?php 
  $contador=1;
 } while ($row_obtener_examen = mysql_fetch_assoc($obtener_examen)); ?>
   <?php do { ?>
        <?php if($row_preguntas_11['tipo_pregunta']==1)
		
		          {
					  ?> 
                      
                     <fieldset class="form-group">
    <label for="exampleInputEmail1">
	<span class="label label-default"><?php echo  $contador++;?></span>
	<?php 
	echo $row_preguntas_11['pregunta_descrip']; ?>
     <a href="#" >Modificar</a>
    </label>
    
        <?php 
		$colname_respuesta11 = "-1";
if (isset($row_preguntas_11['id_pregunta'])) {
  $colname_respuesta11 = $row_preguntas_11['id_pregunta'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_respuesta11 = sprintf("SELECT * FROM respuesta WHERE id_pregu = %s", GetSQLValueString($colname_respuesta11, "int"));
$respuesta11 = mysql_query($query_respuesta11, $tis_ariel) or die(mysql_error());
$row_respuesta11 = mysql_fetch_assoc($respuesta11);
$totalRows_respuesta11 = mysql_num_rows($respuesta11);
		
		
		do { ?>
  
     <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?php echo $row_respuesta11['respuesta_descrip']; ?>">
     
      <a href="#" >Modificar</a>
    <small class="text-muted">
    <?php if($row_respuesta11['estado_respuesta']==1){
		
		 ?>
         <div class="alert alert-info" role="alert">Respuesta valida</div>
         
        <?php 
		}
		
		else{
			
			?>
            <div class="alert alert-danger" role="alert">Respuesta no valida</div>
            <?php 
			}
		 ?>
    </small>

      
 
    <?php } while ($row_respuesta11 = mysql_fetch_assoc($respuesta11)); ?>
    
    
  </fieldset>
  
                     <?php 
					  }
					  else{
						  
						    if($row_preguntas_11['tipo_pregunta']==2){
								 ?> 
                     <fieldset class="form-group">
    <label for="exampleInputEmail1">
	<span class="label label-default"><?php echo  $contador++;?></span>
	<?php 
	
	echo $row_preguntas_11['pregunta_descrip']; ?>
     <a href="#" >Modificar</a>
    </label>
    </br>

          <?php 
		  //code inicio
		$colname_respuesta11 = "-1";
if (isset($row_preguntas_11['id_pregunta'])) {
  $colname_respuesta11 = $row_preguntas_11['id_pregunta'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_respuesta11 = sprintf("SELECT * FROM respuesta WHERE id_pregu = %s", GetSQLValueString($colname_respuesta11, "int"));
$respuesta11 = mysql_query($query_respuesta11, $tis_ariel) or die(mysql_error());
$row_respuesta11 = mysql_fetch_assoc($respuesta11);
$totalRows_respuesta11 = mysql_num_rows($respuesta11);
		
		
		do { ?>
  <label class="c-input c-radio">
  <input id="radio2" name="radio" type="radio">
  <span class="c-indicator"></span>
  
    <?php if($row_respuesta11['estado_respuesta']==1){
		
		 ?>
         <span style="color:#036">
         <?php echo $row_respuesta11['respuesta_descrip']; ?>
         </span>
          <a href="#" >Modificar</a>
        <?php 
		}
		else{
			
			 echo $row_respuesta11['respuesta_descrip']; 
			 
			?>
            
            <a href="#" >Modificar</a>
             <?php 
			 
			}
		 ?>
  
</label>
 

    <?php } while ($row_respuesta11 = mysql_fetch_assoc($respuesta11));
	//code fin 
	 ?>
    </br>
    <small class="text-muted">
    *Nota de color azul del texto son las respuesta validas
    </small>
  </fieldset>
                      
                     <?php 
								}
								
								else{
									 ?> 
                      
                        <fieldset class="form-group">
    <label for="exampleInputEmail1">
	<span class="label label-default"><?php echo  $contador++;?></span>
	<?php 
	
	echo $row_preguntas_11['pregunta_descrip']; ?> <a href="#" >Modificar</a></label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    <small class="text-muted">*Nota pregunta de llenado a criterio del estudiante</small>
  </fieldset>
                     <?php 
									
									}
							
						  }
		 ?>
      
       
     
     <?php } while ($row_preguntas_11 = mysql_fetch_assoc($preguntas_11)); ?>
 
   
</form>


<?php
mysql_free_result($preguntas_11);

mysql_free_result($respuesta11);
?>
