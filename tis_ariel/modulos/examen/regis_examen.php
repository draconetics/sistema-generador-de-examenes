

<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Titulo_examen:</td>
      <td><input type="text" name="titulo_examen" value="" size="32" required></td>
    </tr>
 
    <tr valign="baseline">
      <td nowrap align="right">Hora_inicio:</td>
      <td><input type="text" name="hora_inicio" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Hora_fin:</td>
      <td><input type="text" name="hora_fin" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Estado_examen:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="estado_examen" value="1" required>
            habilitar </td>
        </tr>
        <tr>
          <td><input type="radio" name="estado_examen" value="0" required >
            no habilitar</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descripcion_examen:</td>
      <td><input type="text" name="descripcion_examen" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Registrar"> <input name="Restablecer" type="reset"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
