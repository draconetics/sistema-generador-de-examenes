<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_tis_ariel = "localhost";
$database_tis_ariel = "tis_ariel";
$username_tis_ariel = "root";
$password_tis_ariel = "";
$tis_ariel = mysql_pconnect($hostname_tis_ariel, $username_tis_ariel, $password_tis_ariel) or trigger_error(mysql_error(),E_USER_ERROR); 
?>