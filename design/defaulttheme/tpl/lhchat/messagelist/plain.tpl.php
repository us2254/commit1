<?php foreach ($messages as $msg ) : ?>
[<?php echo date(erLhcoreClassModule::$dateDateHourFormat,$msg->time);?>]
 [<?php echo $msg->user_id == 0 ? htmlspecialchars($chat->nick) : htmlspecialchars($msg->name_support) ?>] 
 <?php echo htmlspecialchars($msg->msg),"\n"?>
 <?php endforeach; 

?>
