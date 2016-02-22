<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhfaq/new.tpl.php');
$Departament = new erLhcoreClassModelDepartament();

if ( isset($_POST['Cancel_departament']) ) {
    erLhcoreClassModule::redirect('faq/departaments');
    exit;
}

if (isset($_POST['Save']))
{
                                 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lhc";

$as= $_POST['name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO lh_ads (name) VALUES ('$as')";
$result = $conn->query($sql)
or die ("Error querying database");

$conn->close();                                                          
                                
        erLhcoreClassModule::redirect('faq/departaments');
        exit ;   
}

$tpl->set('faq',$Departament);

$Result['content'] = $tpl->fetch();

$Result['path'] = array(
array('url' => erLhcoreClassDesign::baseurl('system/configuration'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/new','System configuration')),
array('url' => erLhcoreClassDesign::baseurl('faq/departaments'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/new','Tips')),
array('title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/new','New tips')),
)

?>