
<?php
function kino($MiFech) {
   for ($i=0 ; $i <= 10 ; $i++){
$inicio=strtotime($MiFech); 
$dias=($i*86400); 
$MiFecha= date("Y-m-d",$inicio+$dias);  

$fecha= substr($MiFecha,0,4)."/".substr($MiFecha,5,2)."/".substr($MiFecha,8,2);

$diaSem = strtotime($MiFecha);

	$eldiaes = date('N',($diaSem));

	if($eldiaes == 3)
	{
		return $MiFecha;
		break;
		
	}else if($eldiaes == 7){
		
		return $MiFecha;
		break;
		
	}
}
}
?>

<?php
function kinoUser($MiFech) {
   for ($i=0 ; $i <= 10 ; $i++){
$inicio=strtotime($MiFech); 
$dias=($i*86400); 
$MiFecha= date("Y-m-d",$inicio+$dias);  

$fecha= substr($MiFecha,0,4)."/".substr($MiFecha,5,2)."/".substr($MiFecha,8,2);

$diaSem = strtotime($MiFecha);

	$eldiaes = date('N',($diaSem));

	if($eldiaes == 3)
	{
		return $MiFecha;
		break;
		
	}else if($eldiaes == 7){
		
		return $MiFecha;
		break;
		
	}
}
}
?>

<?php

$datei=kino(date("Y-m-d"));

echo "Date now \t ".$datei."</br></br>";


$dateu=kinoUser($_POST['fecha']);

echo $dateu;
?>