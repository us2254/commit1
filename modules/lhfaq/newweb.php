<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhfaq/newweb.tpl.php');
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

$name= $_POST['name'];
$url = $_POST['url'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO lh_webnames (name, url) VALUES ('$name' , '$url')";
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
array('url' => erLhcoreClassDesign::baseurl('faq/departaments'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/new','Web')),
array('title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/new','New web')),
)

?>