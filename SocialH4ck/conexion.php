<?php

function conectar(){

$db = mysql_connect("localhost","root","");
mysql_select_db("prueba",$db);

return $db;}

?>
