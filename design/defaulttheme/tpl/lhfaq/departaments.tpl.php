<?php if($_SESSION['var'] == 2) : ?>

<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','Tips');?></h1>

<table class="table" cellpadding="0" cellspacing="0">
<thead>
<tr>
    <th width="1%">ID</th>
    <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','Tips');?></th>
    <th width="1%">&nbsp;</th>
</tr>
</thead>

<?php 
$servername = "localhost";
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

$query = sprintf("SELECT * FROM lh_tips");

$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)): ?>
         <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["tips"]?></td>

        <?php echo '<td><a class="btn btn-default btn-xs" href=" ' .  erLhcoreClassDesign::baseurl('faq/edit') . '?id=' . $row['id'] . '">Edit</a></td>';?>
    </tr>
   
<?php 
endwhile;
?>
</table>

<?php if (isset($pages)) : ?>
    <?php include(erLhcoreClassDesign::designtpl('lhkernel/paginator.tpl.php')); ?>
<?php endif;?>

<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhfaq','create')) : ?>
<a class="btn btn-default" href="<?php echo erLhcoreClassDesign::baseurl('faq/new')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','New tip');?></a>
<?php endif;?>
<?php endif;?>




<?php if($_SESSION['var'] == 3) : ?>

<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','Tips');?></h1>

<table class="table" cellpadding="0" cellspacing="0">
<thead>
<tr>
    <th width="1%">ID</th>
    <th width="1%">Name</th>
    <th >Email</th>
    <th >Dept_id</th>
</tr>
</thead>

<?php 
$servername = "localhost";
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

$query = sprintf("SELECT * FROM lh_team");

$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)): ?>
         <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["name"]?></td>
        <td><?php echo $row["email"]?></td>
         <td><?php echo $row["dept_id"]?></td>
        <?php echo '<td><a class="btn btn-default btn-xs" href=" ' .  erLhcoreClassDesign::baseurl('faq/edit') . '?id=' . $row['id'] . '">Edit</a></td>';?>
    </tr>
<?php 
endwhile;
?>
</table>

<?php if (isset($pages)) : ?>
    <?php include(erLhcoreClassDesign::designtpl('lhkernel/paginator.tpl.php')); ?>
<?php endif;?>

<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhfaq','create')) : ?>
<a class="btn btn-default" href="<?php echo erLhcoreClassDesign::baseurl('faq/new')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','New tip');?></a>
<?php endif;?>
<?php endif;?>




<?php if($_SESSION['var'] == 4) : ?>

<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/ads','Ads');?></h1>

<table class="table" cellpadding="0" cellspacing="0">
<thead>
<tr>
    <th width="1%">ID</th>
    <th>Web Name</th>
    <th>Web Url</th>
    
</tr>
</thead>

<?php 
$servername = "localhost";
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

$query = sprintf("SELECT * FROM lh_webnames");

$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)): ?>
         <tr>
        <td><?php echo $row["id"]?></td>
        <td><a class="btn btn-default" href="<?php echo erLhcoreClassDesign::baseurl('faq/ads')?>"><?php echo $row["name"]?></a></td>
        <td><?php echo $row["url"]?></td>
        
        <?php echo '<td><a class="btn btn-default btn-xs" href=" ' .  erLhcoreClassDesign::baseurl('faq/editweb') . '?id=' . $row['id'] . '">Edit</a></td>';?>
    </tr>
<?php 
endwhile;
?>
</table>

<?php if (isset($pages)) : ?>
    <?php include(erLhcoreClassDesign::designtpl('lhkernel/paginator.tpl.php')); ?>
<?php endif;?>

<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhfaq','create')) : ?>
<a class="btn btn-default" href="<?php echo erLhcoreClassDesign::baseurl('faq/newweb')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/departments','New Web');?></a>
<?php endif;?>



<?php endif; ?>
