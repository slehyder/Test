<?php
function cleanInput($input) {
 
  $search = array(
    '@<script [^>]*?>.*?@si',            
    '@< [/!]*?[^<>]*?>@si',            
    '@<style [^>]*?>.*?</style>@siU',    
    '@< ![sS]*?--[ tnr]*>@'         
  );
 
    $output = preg_replace($search, '', $input);
    return $output;
}
?>
<?php
function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}
?>
<?php
include("conexion.php");

$db=conectar();
$nom = sanitize($_POST['nom']);
$fecha = sanitize($_POST['fecha']);
$dire = sanitize($_POST['dire']);



$sql="INSERT INTO socialh4ck_test (nombre,fecha_nacimiento,direccion) VALUES ('".$nom."', '".$fecha."', '".$dire."')";
 		mysql_query($sql, $db) or die (mysql_error());
		 ?>
		  <script language="javascript">
 {
 alert('Registro confirmado');
 window.location="consult_Test.php";
 } 
 </script> 

