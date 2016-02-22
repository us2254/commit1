<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('faq/ads','images');?></h1>

<table class="table" cellpadding="0" cellspacing="0">
<thead>
<tr>
    <th width="1%">ID</th>
    <th>Image</th>
    <th>time</th>
    <th>url</th>
    
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

$query = sprintf("SELECT * FROM lh_adimages");

$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)): ?>
         <tr>
        <td><?php echo $row["time"]?></td>
        <td><?php echo $row["url"]?></td>
        
        <?php echo '<td><a class="btn btn-default btn-xs" href=" ' .  erLhcoreClassDesign::baseurl('faq/edit') . '?id=' . $row['id'] . '">Edit</a></td>';?>
    </tr>
<?php 
endwhile;
?>
</table>

<?php if (isset($pages)) : ?>
    <?php include(erLhcoreClassDesign::designtpl('lhkernel/paginator.tpl.php')); ?>
<?php endif;?>
