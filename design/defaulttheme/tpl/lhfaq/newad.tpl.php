<?php if($_SESSION['var'] == 2) : ?>
<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Edit Tip');?></h1>

<div class="form-group">
<form action="<?php echo erLhcoreClassDesign::baseurl('faq/edit')?>" method="post">
<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "lhc";

$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db($dbname, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

$query = sprintf("SELECT * FROM lh_tips WHERE id= %d;", $_SESSION['toedit']);
$result = mysql_query($query);
$row = mysql_fetch_assoc($result)
?>
<label>Tips</label>
<input type="text" class="form-control" name="Name"  value="<?php echo $row['tips']?>" />
<input style="display:none " class="form-control" name="id"  value="<?php echo $row['id']?>" />
<?php 
$query = sprintf("SELECT * FROM lh_departament");
$result = mysql_query($query);

?>

    
<div role="tabpanel" class="tab-pane" id="design">
			<div class="form-group">
				<label>Add Tip</label>
		 <select name="dep"  class="form-control">

					<option value="0">Select</option>
                <?php 



                while ($row = mysql_fetch_assoc($result)):
                        ?>
                        <option value="<?php echo $row["id"] ?>"> <?php echo $row["name"] ?> </option>

                <?php 

                endwhile;



                ?>
        	    </select>
			</div>
		</div>


</div>
	
    <div class="btn-group" role="group" aria-label="...">
		<input type="submit" class="btn btn-default" name="Update" value="Update"/>
		<input type="submit" class="btn btn-default" name="Cancel" value="Cancel"/>
        <input type="submit" class="btn btn-danger" name="Delete" onclick="return confirm('<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/departments','Are you sure?');?>    ')" value="Delete" />
	</div>
	</form>

<?php endif; ?>










<?php if($_SESSION['var'] == 3) : ?>
<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Edit Tip');?></h1>

<div class="form-group">
<form action="<?php echo erLhcoreClassDesign::baseurl('faq/edit')?>" method="post">
<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "lhc";

$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db($dbname, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

$query = sprintf("SELECT * FROM lh_team WHERE id= %d;", $_SESSION['toedit']);
$result = mysql_query($query);
$row = mysql_fetch_assoc($result)
?>
<label>Tips</label>
<input type="text" class="form-control" name="Name"  value="<?php echo $row['name']?>" />
<input type="text" class="form-control" name="Email"  value="<?php echo $row['email']?>" />
<input style="display:none " class="form-control" name="id"  value="<?php echo $row['id']?>" />
<?php 
$query = sprintf("SELECT * FROM lh_departament");
$result = mysql_query($query);

?>

    
<div role="tabpanel" class="tab-pane" id="design">
			<div class="form-group">
				<label>Add Tip</label>
		 <select name="dep"  class="form-control">

					<option value="0">Select</option>
                <?php 



                while ($row = mysql_fetch_assoc($result)):
                        ?>
                        <option value="<?php echo $row["id"] ?>"> <?php echo $row["name"] ?> </option>

                <?php 

                endwhile;



                ?>
        	    </select>
			</div>
		</div>


</div>
	
    <div class="btn-group" role="group" aria-label="...">
		<input type="submit" class="btn btn-default" name="Update" value="Update"/>
		<input type="submit" class="btn btn-default" name="Cancel" value="Cancel"/>
        <input type="submit" class="btn btn-danger" name="Delete" onclick="return confirm('<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/departments','Are you sure?');?>    ')" value="Delete" />
	</div>
	</form>

<?php endif; ?>


//////////////////////////


<?php if($_SESSION['var'] == 4) : ?>
<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('department/edit','Edit ad');?></h1>

<div class="form-group">
<form action="<?php echo erLhcoreClassDesign::baseurl('faq/edit')?>" method="post">
<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "lhc";

$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db($dbname, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

$query = sprintf("SELECT * FROM lh_ads WHERE id= %d;", $_SESSION['toedit']);
$result = mysql_query($query);
$row = mysql_fetch_assoc($result)
?>
<label>Ad </label>
<input type="text" class="form-control" name="name"  value="<?php echo $row['name']?>" />

</div>
	
    <div class="btn-group" role="group" aria-label="...">
		<input type="submit" class="btn btn-default" name="Update" value="Update"/>
		<input type="submit" class="btn btn-default" name="Cancel" value="Cancel"/>
        <input type="submit" class="btn btn-danger" name="Delete" onclick="return confirm('<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','Are you sure?');?>')" value="Delete" />
	</div>
	</form>

<?php endif; ?>