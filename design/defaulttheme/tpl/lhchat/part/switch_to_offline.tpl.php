<?php if ($leaveamessage == true && (int)erLhcoreClassModelChatConfig::fetch('suggest_leave_msg')->current_value == 1) : ?>

<div id="offline-modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Domain is offline');?></h4>
        </div>
      
    </div>
    </div>
</div>

<script>
    function closeRevealForm() {
        $('#id_DepartamentID').find('option').removeAttr('selected');
        $('#id_DepartamentID').find("[data-attr-online='true']").attr('selected', 'selected');
    };
    $('#id_DepartamentID').change(function () {
        if ($(this).find('option:selected').attr('data-attr-online') == 'false') {
            $('#offline-modal').modal({ 'show': true, keyboard: false, backdrop: 'static' });
        };
    });
    $(document).ready(function () {
        if ($('#id_DepartamentID').find('option:selected').attr('data-attr-online') == 'false') {
            $('#offline-modal').modal({ 'show': true, keyboard: false, backdrop: 'static' });
        };
    });
</script>
<?php endif;?>
