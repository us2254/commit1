<div class="message-row response">
    <div class="msg-date"><?php echo $msg->time_front?></div>
    <span class="usr-tit vis-tit"><?php echo htmlspecialchars($chat->nick)?></span>
    <?php echo erLhcoreClassBBCode::make_clickable(htmlspecialchars($msg->msg))?></div>