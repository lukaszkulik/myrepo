<?
$db_host = "bodesign3d.nazwa.pl:3307";
$db_user = "bodesign3d_2"; 
$db_pass = "ALek1alek"; 
$db_database = "bodesign3d_2"; 

$db = mysql_connect($db_host, $db_user, $db_pass);
if (!$db)
 {
 die('blad polaczenia: ' . mysql_error());
 }
mysql_select_db($db_database, $db);
?>