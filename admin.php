<?php
header("Content-type:text/html;charset=utf-8");
$host="localhost";
$sqluser="room";
$sqlpassword="hduroom";
session_start();
$con=mysql_connect("$host","$sqluser","$sqlpassword");
if(!$con)
{
	echo mysql_error();
}
mysql_select_db("room",$con);
?>
