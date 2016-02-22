<?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_tabs_content/chat_pre.tpl.php'));?>
 <?php  include(erLhcoreClassDesign::designtpl('lhfront/online_chat_enabled_pre.tpl.php')); 
       ?>
<?php if ($system_configuration_tabs_content_chat_enabled == true && $currentUser->hasAccessTo('lhchat','use')) : ?>
<div role="tabpanel" class="tab-pane" id="chatconfiguration">
		<div class="row">
			<div class="col-md-6">
                    <a   href="<?php echo erLhcoreClassDesign::designtpl('lhfaq/embedcode.tpl.php')?>"> 
                       
                    </a>
				<ul>

                    <form id="form1" method="post" action="<?php echo erLhcoreClassDesign::baseurl('departament/departaments')?>"> 
                        <input hidden="true" name="inpu" value="1"/>
                    </form>
                  


                    <form id="form3" method="post" action="<?php echo erLhcoreClassDesign::baseurl('faq/departaments')?>">
                        <input hidden="true" name="inpu" value="3" />
                    </form>

                     <form id="form4" method="post" action="<?php echo erLhcoreClassDesign::baseurl('faq/departaments')?>">
                        <input hidden="true" name="inpu" value="4" />
                    </form>

        		    <?php if ($currentUser->hasAccessTo('lhdepartament','list')) : ?>
        		    <li><a id = "depid" ><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Domains');?></a></li>
        		    <?php endif; ?>

        		    <li><a id="tipsid">Tips</a></li>
                    <li><a id="teamid">Team</a></li>
                    <li><a id="adid">Ads</a></li>
        		   
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/blockusers.tpl.php'));?>
        		    
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/chat_configuration.tpl.php'));?>
        				    
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/administrategeoconfig.tpl.php'));?>
        		    
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/geoadjustment.tpl.php'));?>
        			
        			<?php if ($currentUser->hasAccessTo('lhchat','administrateconfig')) : ?>
        		    <li><a href="<?php echo erLhcoreClassDesign::baseurl('chat/syncandsoundesetting')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Synchronization and sound settings');?></a></li>
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/start_chat_form_settings.tpl.php'));?>
        		    
        		    <?php endif;?>
        		    		    
         			
                    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/cannedmsg.tpl.php'));?>
                   
        		    <?php if ($currentUser->hasAccessTo('lhabstract','use')) : ?>
        
        		   		<?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/proactive.tpl.php'));?>	
        
        			    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/autoresponder.tpl.php'));?>
        	    
        		    <?php endif; ?>
        
                    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/xmpp.tpl.php'));?>
        	
        	        <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/chat_list.tpl.php'));?>
        
        		    <?php if ($currentUser->hasAccessTo('lhchatarchive','archive')) : ?>
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/chat_archive.tpl.php'));?>
        		    <?php endif; ?>
        			
        			<?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/statistic.tpl.php'));?>
        		    
        		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/maintenance.tpl.php'));?>
        		    						    
        		</ul>
			</div>
			<div class="col-md-6">
    		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/files.tpl.php'));?>
    		    <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/theming.tpl.php'));?>
    		</div>
		</div>
	</div>
<?php endif;?>
    
    
<script>

    var tips = document.getElementById("tipsid");
    var dep = document.getElementById("depid");
    var team = document.getElementById("teamid");
    var ad = document.getElementById("adid");
    var click = 0;


    dep.onclick = function () {

        $('#form1').submit();
    }
    tips.onclick = function () {
        $('#form2').submit();
    }
    team.onclick = function () {
        $('#form3').submit();
    }
    ad.onclick = function () {

        $('#form4').submit();
    }


</script>