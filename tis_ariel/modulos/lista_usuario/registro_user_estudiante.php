

<div class="col-md-4">
               <div style="font-size: 11px">
            <div class="alert alert-info" role="alert">
         <center>      
                <P><b>La mejor Prueba en linea y la educacion</b></P>
                </center>
                <p style="color: #111111">Servicio basado en wed profesional.La prueba es una maquina de hacer y facil de usar.La formacion y la evaluacion con graduadad en Exmanes instante</p>

</div>
</div>
<div class="well">

<div>Registro de usuario-Estudiante</div>
<form method="post" name="form_estudiante" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input type="text" name="nombre" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Apellido:</td>
      <td><input type="text" name="apellido" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input type="text" name="telefono" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Correo:</td>
      <td><input type="text" name="correo" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">User_contr:</td>
      <td><input type="text" name="user_contr" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Pass:</td>
      <td><input type="text" name="pass" value="" size="32" required></td>
    </tr>
    
    <tr valign="baseline" hidden="yes">
      <td nowrap align="right">Id_tipo_user:</td>
      <td><input type="text" name="id_tipo_user" value="1" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Registrar Estudiante">
      <a href="index.php">Cerrar</a>
      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form_estudiante">
</form>

</div>