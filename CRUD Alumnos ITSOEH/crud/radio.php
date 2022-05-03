<?PHP

$male_status = 'unchecked';
$female_status = 'unchecked';

if (isset($_POST['Submit1'])) {

$selected_radio = $_POST['sexo'];

if ($selected_radio = = 'M') {

$male_status = 'checked';

}
else if ($selected_radio = = 'F') {

$female_status = 'checked';

}

}

?>