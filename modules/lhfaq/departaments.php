<?php include(erLhcoreClassDesign::designtpl('lhfront/online_chat_enabled_pre.tpl.php')); 

      
     
      
           if($_POST['inpu'] == 2){
               
           $_SESSION['var'] = 2;
           }
           if($_POST['inpu'] == 3){
               
               $_SESSION['var'] = 3;
           }
           if($_POST['inpu'] == 4){
               
               $_SESSION['var'] = 4;
           }
            $tpl = erLhcoreClassTemplate::getInstance( 'lhfaq/departaments.tpl.php');

            $departmentParams = array();

            
            $Result['content'] = $tpl->fetch();
            $Result['path'] = array(
            array('url' => erLhcoreClassDesign::baseurl('system/configuration'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departaments','System configuration')),
            array('url' => erLhcoreClassDesign::baseurl('faq/departaments'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departaments','Tips')));

            

           
?>