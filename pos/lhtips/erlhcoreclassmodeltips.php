<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_tips";
$def->class = "erLhcoreClassModelTips";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['tips'] = new ezcPersistentObjectProperty();
$def->properties['tips']->columnName   = 'tips';
$def->properties['tips']->propertyName = 'tips';
$def->properties['tips']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>