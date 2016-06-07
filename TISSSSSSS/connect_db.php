<?php
$link=mysql_connect("localhost","root","");
if($link)
{
	mysql_select_db("tis",$link);
}
?>