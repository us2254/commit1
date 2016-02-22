
<div class="panel panel-default panel-dashboard">
	<div class="panel-heading">
		<a href="<?php echo erLhcoreClassDesign::baseurl('chat/pendingchats')?>"><i class="icon-chat chat-pending"></i> <?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/titles/pending_chats.tpl.php'));?> ({{pending_chats.list.length}}{{pending_chats.list.length == lhc.limitp ? '+' : ''}})</a>
	</div>
	<div>  

          <?php $optinsPanel = array('panelid' => 'pendingd','limitid' => 'limitp'); ?>
	      <?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/parts/options.tpl.php'));?>

	    <?php echo but::$setting_button_clicked;?>
        <?php $tempp = $currentUser->getUserData(); ?> 
        <div id="angularvalue4"  > <?php echo $tempp->id ?> </div> 
        <div id=""  >{{lhc.getLimitAssign()}}</div>
        <div id=""  >{{lhc.getLimitChat()}}</div>
          <div class="panel-list" ng-if="pending_chats.list.length > 0 ">

			<table class="table table-condensed mb0 table-small table-fixed">
				<thead>
					<tr>
						<th width="60%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Visitor')?>" class="icon-user"></i></th>
						<th width="20%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Wait time')?>" class="icon-clock"></i></th>
						<th width="20%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Department')?>" class="icon-home"></i></th>
					    
                    </tr>
				</thead>
                <div ng-repeat="chat in pending_chats.list">

                <div id="angularvalue1"  >{{chat.id}}</div>

                          
                   <?php //$re = erLhcoreClassChat::getPendingChats(); ?>
                   <?php  //$endre = end($re);  ?>                
           <script>

               setTimeout(function () {
               
                   var user = document.getElementById('angularvalue4').innerText;
                   var chat = document.getElementById('angularvalue1').innerText;
                   //var Id=   <?php //echo $endre->id;  ?>;
                   angular.element(document.getElementById('cont')).scope().lhc.startChat(chat, 'Visitor');
               }, 200);
           </script>
               </div>
        <?php// $re = erLhcoreClassChat::getPendingChats() ?>
        <?php// $endre = end($re) ?>
<!--        <div >{{lhc.startChat( <?php //echo $endre->id ;?> , <?php //echo $endre->nick ?>  )}}</div>-->

                  <!-- angular.element(  document.getElementById('cont')).scope().lhc.startChat( value,'Visitor');-->
                <?php //$re = erLhcoreClassChat::getPendingChats() ?>
                <?php //$endre = end($re) ?>
                <?php
                    /*echo"<script language='javascript'>
                        lhc.startChat( 200 , 'Visitor')
                    </script>
                    ";*/
                ?>
<!--                <div ng-if="pending_chats.list.length == 1">
                    {{chat = pending_chats.list[0]}}
                    {{chat.id}}
                    {{chat.nick}}
                        <div >{{lhc.startChat(chat.id,chat.nick)}}</div>
                   
                </div>-->
<!--				<tr ng-repeat="chat in pending_chats.list track by chat.id">
					<td>
						<div data-chat-id="{{chat.id}}" data-toggle="popover" data-placement="top" class="abbr-list" >
                            <a ng-click="lhc.startChat(chat.id,chat.nick)" title="{{chat.nick}}"> {{chat.nick}} </a>
						</div>
						
						<div id="popover-title-{{chat.id}}" class="hide">
						  {{chat.nick}} [{{chat.id}}]
						</div>
						
						<div id="popover-content-{{chat.id}}" class="hide">
						    {{chat.time_created_front}}<br/>
							<i class='icon-user'></i> {{chat.plain_user_name ? chat.plain_user_name : '-'}}<br />
							<i class='icon-home'></i> {{chat.department_name}}
						</div>*[
						
					</td>

				</tr>-->
			</table>
		</div>
		
		<div ng-if="clicki == 1" class="m10 alert alert-info"><i class="icon-search"></i> 
        <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Pending chats');?>...
            
		</div>
		
	</div>
</div>
