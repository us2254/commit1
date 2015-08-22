<?php 

$filter = array('filter' => array('disabled' => 0, 'hidden' => 0));

if (isset($input_data->departament_id_array)){
	$filter['filterin']['id'] = $input_data->departament_id_array;
}

$departments = erLhcoreClassModelDepartament::getList($filter);

// Show only if there are more than 1 department
if (count($departments) > 1) : $hasExtraField = true;?>

<?php if (isset($input_data->departament_id_array)) : foreach ($input_data->departament_id_array as $definedDep) : ?>
<input type="hidden" name="DepartmentIDDefined[]" value="<?php echo $definedDep?>" />
<?php endforeach;endif;?>

 <?php endif; ?>