<?php

$Module = array( "name" => "Departments configuration");

$ViewList = array();

$ViewList['departaments'] = array(
    'script' => 'departaments.php',
    'params' => array(),
    'functions' => array( 'list' )
    );

$ViewList['new'] = array(
    'script' => 'new.php',
    'params' => array(),
    'functions' => array( 'create' )
);

$ViewList['edit'] = array(
    'script' => 'edit.php',
    'params' => array('departament_id'),
    'functions' => array( 'edit' )
);

$ViewList['newweb'] = array(
    'script' => 'newweb.php',
    'params' => array(),
    'functions' => array( 'create' )
);

$ViewList['editweb'] = array(
    'script' => 'editweb.php',
    'params' => array(),
    'functions' => array( 'create' )
);

$ViewList['ads'] = array(
    'script' => 'ads.php',
    'params' => array(),
    'functions' => array( 'create' )
);

$ViewList['adimages'] = array(
    'script' => 'adimages.php',
    'params' => array(),
    'functions' => array( 'create' )
);

$ViewList['view'] = array(
		'params' => array('id'),
		'functions' => array( 'manage_faq' )
);

$FunctionList['list'] = array('explain' => 'Access to list departments');
$FunctionList['create'] = array('explain' => 'Permission to create a new department');
$FunctionList['edit'] = array('explain' => 'Permission to edit department');
$FunctionList['delete'] = array('explain' => 'Permission to delete department');
$FunctionList['selfedit'] = array('explain' => 'Allow user to choose his departments');
$FunctionList['actworkflow'] = array('explain' => 'Allow user to change transfer workflow');
$FunctionList['actautoassignment'] = array('explain' => 'Allow user to change auto assignment');
$FunctionList['manageall'] = array('explain' => 'Allow user to manage all departments, not only assigned to him');

?>