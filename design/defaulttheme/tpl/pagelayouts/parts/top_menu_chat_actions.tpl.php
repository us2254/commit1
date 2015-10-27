<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/top_menu_chat_actions_pre.tpl.php'));?>
<?php if ($parts_top_menu_chat_actions_enabled == true) : ?>

<li><a href="<?php echo erLhcoreClassDesign::baseurl('chat/lists')?>" ><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Archives');?></a></li>
<?php endif;?>
