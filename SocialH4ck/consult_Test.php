<?php  
include("conexion.php");
$db=conectar();


    $sql = "select * from socialh4ck_test";  
    $result = mysql_query($sql);  
    while ($consult = mysql_fetch_array($result)){
		
		print "Nombre :\t ".$consult['nombre']."-\t \t \t  Fecha de nacimiento :\t ".$consult['fecha_nacimiento']."\t\t \t - Direccion:\t ".$consult['direccion']."<br/>" ;
	
	 }
?>