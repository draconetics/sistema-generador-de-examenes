<div class="well">
<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">  
    <tr valign="baseline">
      <td nowrap colspan="2"> <div>Pregunta:</div>
      
      <textarea name="pregunta_descrip" cols="40" rows="5" required></textarea>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo_pregunta:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="tipo_pregunta" value="1"required >
            Cuadro de texto </td>
        </tr>
        <tr>
          <td><input type="radio" name="tipo_pregunta" value="2"required >
		  Grupo Opciones
            </td>
        </tr>
        
         
        <tr>
          <td><input type="radio" name="tipo_pregunta" value="3" required>
            Area de texto</td>
        </tr>
       
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Aceptar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
</div>