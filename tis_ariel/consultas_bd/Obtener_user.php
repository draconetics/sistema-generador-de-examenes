
<?php

$colname_user = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_user = $_SESSION['MM_Username'];
}
mysql_select_db($database_tis_ariel, $tis_ariel);
$query_user = sprintf("SELECT * FROM usuario WHERE user_contr = %s", GetSQLValueString($colname_user, "text"));
$user = mysql_query($query_user, $tis_ariel) or die(mysql_error());
$row_user = mysql_fetch_assoc($user);
$totalRows_user = mysql_num_rows($user);

mysql_free_result($user);
?>

