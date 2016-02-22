<div>

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

$query = sprintf("SELECT * FROM lh_tips WHERE dept_id= %d;", $chat->dep_id);

$result = mysql_query($query);


while ($row = mysql_fetch_assoc($result)){
    $tip = $row['tips'];
}
echo $tip;
?>
    </div>