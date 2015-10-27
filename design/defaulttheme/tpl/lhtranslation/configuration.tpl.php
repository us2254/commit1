<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/departments','Tips');?></h1>

<table class="table" cellpadding="0" cellspacing="0">
<thead>
<tr>
    <th width="1%">ID</th>
    <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/departments','Name');?></th>
    <th width="1%">&nbsp;</th>
</tr>
</thead>

<?php
           $domval = 0;

           $conn = new mysqli("127.0.0.1", "root", "root", "lhc");  

           $result = $conn->query("SELECT id,name,tips FROM lh_departament");
?>

<?php	while($rs = $result->fetch_array(MYSQLI_ASSOC)) { ?>

            <tr>
                <td><?php echo $rs["id"] ?></td>
                <td><?php  echo($rs["name"]);?></td>
                <td nowrap><a class="btn btn-default btn-xs" href="<?php echo erLhcoreClassDesign::baseurl('departament/edit')?>/<?php echo $rs["id"] ?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/departments','Edit Tips');?></a></td>
            </tr>
           
			<?php }
?>
</table>

<?php if (isset($pages)) : ?>
    <?php include(erLhcoreClassDesign::designtpl('lhkernel/paginator.tpl.php')); ?>
<?php endif;?>