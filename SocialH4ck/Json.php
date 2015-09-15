

<?php 
function json($unit) {

return json_encode($unit);


}


?>

<?php 
$countries = array(
    array("name"=>"Brazil","area"=>"22966","people"=>"334000","density"=>"14.54"),
    array("name"=>"Venezuela","area"=>"51100","people"=>"4726000","density"=>"92.49"),
	array("name"=>"Colombia","area"=>"52100","people"=>"4726000","density"=>"70.45")
);
$j_son=json($countries);
print_r($j_son);

?>
