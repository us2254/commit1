<?php if ($is_activated == true || $is_proactive_based == true) : ?>
    <?php if ($chat->status == erLhcoreClassModelChat::STATUS_ACTIVE_CHAT && ($user = $chat->user) !== false) : ?>
    	<?php include_once(erLhcoreClassDesign::designtpl('lhchat/part/operator_profile.tpl.php'));?>
    <?php elseif ($is_proactive_based == true) : ?>
    <h4>
    	<?php if ($theme !== false  && $theme->support_joined != '') : ?>
    	   <?php echo htmlspecialchars($theme->support_joined)?>
    	<?php else : ?>
    	   <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/checkchatstatus','A support staff member has joined this chat'); ?>
    	<?php endif;?>
    </h4>
    <?php endif;?>
    <?php elseif ($is_closed == true) : ?>
    <h4>	
    	<?php if ($theme !== false  && $theme->support_closed != '') : ?>
    	   <?php echo htmlspecialchars($theme->support_closed)?>
    	<?php else : ?>
    	   <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/checkchatstatus','A support staff member has closed this chat'); ?>
    	<?php endif; ?>	
    </h4>
    <?php elseif ($is_online == true) : ?>
     
<!--second chat window-->
    <div class="operator-info float-break">
	    <div class="pull-left pr5">

     		    <i class="icon-user icon-assistant"></i>

         </div>
         <div class="pl10">
	        <div><strong>La haola wala</strong>
            <?php if ($theme !== false && $theme->logo_image_url != '') : ?>
                <img class="pull-right"src="<?php echo $theme->logo_image_url?>" alt="" />
            <?php endif;?>
          </div>
	

	        <?php if (!isset($hideThumbs) || $hideThumbs == false) : ?>
     	    <i  class="icon-thumbs-up"></i>
     	    <i  class="icon-thumbs-down"></i>

     	    <?php endif;?>

         </div>
    </div>
<!--end of second chat window-->

   
    <?php else : ?>
    <h4>
    <?php if ($theme !== false  && $theme->noonline_operators != '') : ?>
    	   <?php echo htmlspecialchars($theme->noonline_operators)?>
    	<?php else : ?>
            <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/checkchatstatus','At this moment there are no logged in support staff members, but you can leave your messages'); ?>
        <?php endif;?>
    </h4>
<?php endif; ?>

