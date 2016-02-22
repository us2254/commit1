<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Tips');?></label>
    <input type="text" class="form-control" id="tip" name="tip"   />


   <div class="col-md-6">
					<div class="form-group">
						<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/htmlcode','Department')?></label> <select id="DepartmentID" class="form-control">
							<option value="0"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/htmlcode','Any');?></option>
			<?php foreach (erLhcoreClassModelDepartament::getList($departmentParams) as $departament) : ?>
			    <option value="<?php echo $departament->id?>"><?php echo htmlspecialchars($departament->name)?></option>
			<?php endforeach; ?>
		</select>
					</div>
				</div>
</div>