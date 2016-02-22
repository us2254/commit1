<?php    

    $tpl = erLhcoreClassTemplate::getInstance('lhfaq/list.tpl.php');

    $Departament = erLhcoreClassFaq::getSessionTips()->load( 'erLhcoreClassModelFaq', (int)$Params['departament_id'] );

    $userDepartments = true;

    /**
     * Append user departments filter
     * */
    
    if ( isset($_POST['Cancel_departament']) ) {
        
            erLhcoreClassModule::redirect('faq/embedcode');
            exit;
    }

    if ( isset($_POST['Delete_departament']) ) {

        if (!isset($_POST['csfr_token']) || !$currentUser->validateCSFRToken($_POST['csfr_token']) || !$currentUser->hasAccessTo('lhfaq','delete') || !$Departament->can_delete) {
            erLhcoreClassModule::redirect('faq/embedcode');
            exit;
        }

        $Departament->removeThis();
        erLhcoreClassModule::redirect('faq/embedcode');
        exit;
    }


    if (isset($_POST['Update_departament']) || isset($_POST['Save_departament'])  )
    {
        if (!isset($_POST['csfr_token']) || !$currentUser->validateCSFRToken($_POST['csfr_token'])) {
            erLhcoreClassModule::redirect('faq/embedcode');
            exit;
        }
        
        $Errors = erLhcoreClassFaq::validateDepartmentTips($Departament);
        
        if (count($Errors) == 0)
        {    	
            erLhcoreClassFaq::getSessionTips()->update($Departament);

            if (isset($_POST['Save_departament'])) {
                erLhcoreClassModule::redirect('faq/embedcode');
                exit;
            } else {
                $tpl->set('updated',true);
            }

        }  else {
            $tpl->set('errors',$Errors);
        }
    }

    $tpl->set('faq',$Departament);
    $tpl->set('currentUser',$currentUser);
    $tpl->set('limitDepartments',$userDepartments !== true ? array('filterin' => array('id' => $userDepartments)) : array());

    $Result['content'] = $tpl->fetch();

    $Result['path'] = array(
    array('url' => erLhcoreClassDesign::baseurl('system/configuration'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/list','System configuration')),
    array('url' => erLhcoreClassDesign::baseurl('faq/embedcode'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/list','embedcode')),
    array('title' => erTranslationClassLhTranslation::getInstance()->getTranslation('faq/list','Edit a tip').' - '.$Departament->name),);

    

?>