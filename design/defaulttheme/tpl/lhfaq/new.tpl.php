<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/new','New Web');?></h1>

<?php if (isset($errors)) : ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<form id="myform" name="myform" action="<?php echo erLhcoreClassDesign::baseurl('faq/new')?>" method="post">

<div  class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Ad name');?></label>

    <input type="text" class="form-control" name="name" />
 

    <div class="btn-group" role="group" aria-label="...">

		<input type="submit" class="btn btn-default" name="Cancel" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Cancel');?>"/>
		<input type="submit" class="btn btn-default" name="Save" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Save');?>"/>
	</div>
	
</form>

