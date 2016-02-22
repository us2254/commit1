<?php include(erLhcoreClassDesign::designtpl('lhchat/customer_user_settings/user_file_upload.tpl.php'));?>

		


<?php if ( isset($chat) && isset($fileData['active_user_upload']) && $fileData['active_user_upload'] == true ) : ?>
<script>
lhinst.addFileUserUpload({ft_msg:'<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('files/files','Not an accepted file type')?>',fs_msg:'<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('files/files','Filesize is too big')?>',hash:'<?php echo $chat->hash?>',chat_id:'<?php echo $chat->id?>',fs:<?php echo $fileData['fs_max']*1024?>,ft_us:/(\.|\/)(<?php echo $fileData['ft_us']?>)$/i});
</script>
<?php endif;?>