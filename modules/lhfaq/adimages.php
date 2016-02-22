<?php    
          
$tpl = erLhcoreClassTemplate::getInstance( 'lhfaq/adimages.tpl.php');

$departmentParams = array();


$Result['content'] = $tpl->fetch();
$Result['path'] = array(
array('url' => erLhcoreClassDesign::baseurl('system/configuration'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departaments','System configuration')),
array('url' => erLhcoreClassDesign::baseurl('faq/departaments'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departaments','Tips')));

?>



