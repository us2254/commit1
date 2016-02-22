<?php
$data = json_decode(file_get_contents("php://input"));

?>
<script>
               
        <?php $re = erLhcoreClassChat::getPendingChats(); ?>
        <?php  $endre = end($re);  ?>
        var Id=   <?php echo $data->data;  ?>;
        angular.element(document.getElementById('cont')).scope().lhc.startChat( Id,'Visitor');
</script>