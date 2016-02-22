<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/map_tab_pre.tpl.php'));?>
<?php if ($information_tab_map_tab_enabled == true) : ?>
<div role="tabpanel" class="tab-pane<?php if ($chatTabsOrderDefault == 'map_tab_tab') print ' active';?>" id="map-tab-chat-<?php echo $chat->id?>">
		<p><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Lead Routing.')?></p>

<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/form.tpl.php'));?>

</div>
<?php endif;?>
