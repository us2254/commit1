<?php include(erLhcoreClassDesign::designtpl('lhfront/online_chat_enabled_pre.tpl.php')); 

      
     
      


            $tpl = erLhcoreClassTemplate::getInstance( 'lhfaq/embedcode.tpl.php');

            $departmentParams = array();

            $items = array();
            $items = erLhcoreClassModelFaq::getListTips();

            $tpl->set('items',$items);
            
            $Result['content'] = $tpl->fetch();
            $Result['path'] = array(
            array('url' => erLhcoreClassDesign::baseurl('system/configuration'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/embedcode','System configuration')),
            array('url' => erLhcoreClassDesign::baseurl('faq/embedcode'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/embedcode','Tips')));



           
?>