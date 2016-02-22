<?php if($_SESSION['var'] == 2) : ?>
<?php    
$_SESSION['toedit']= $_GET['id'];

$tpl = erLhcoreClassTemplate::getInstance('lhfaq/edit.tpl.php');
    if ( isset($_POST['Cancel']) ) {
        
            erLhcoreClassModule::redirect('faq/departaments');
            exit;
    }

    if ( isset($_POST['Delete']) ) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lhc";
        $idee = $_POST['id'];
        $connection=mysql_connect ("localhost", $username, $password);
        if (!$connection) {
            die('Not connected : ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbname, $connection);
        if (!$db_selected) {
            die ('Can\'t use db : ' . mysql_error());
        }

        $query = sprintf("DELETE FROM lh_tips WHERE id= %d;", $idee);
        $result = mysql_query($query);
        erLhcoreClassModule::redirect('faq/departaments');
        exit;
    }


    if (isset($_POST['Update'])  )
    {
                $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lhc";
        $idee = $_POST['id'];
        $tips = $_POST['Name'];
        $dep = $_POST['dep'];                
        $connection=mysql_connect ("localhost", $username, $password);
        if (!$connection) {
            die('Not connected : ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbname, $connection);
        if (!$db_selected) {
            die ('Can\'t use db : ' . mysql_error());
        }


        $result = mysql_query("UPDATE lh_tips SET dept_id='$dep', tips='$tips' WHERE id='$idee'");
        erLhcoreClassModule::redirect('faq/departaments');
        exit;
    }


    $Result['content'] = $tpl->fetch();

?>
<?php endif;?>

<?php if($_SESSION['var'] == 3) : ?>
<?php    
$_SESSION['toedit']= $_GET['id'];

$tpl = erLhcoreClassTemplate::getInstance('lhfaq/edit.tpl.php');
    if ( isset($_POST['Cancel']) ) {
        
            erLhcoreClassModule::redirect('faq/departaments');
            exit;
    }

    if ( isset($_POST['Delete']) ) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lhc";
        $idee = $_POST['id'];
        $connection=mysql_connect ("localhost", $username, $password);
        if (!$connection) {
            die('Not connected : ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbname, $connection);
        if (!$db_selected) {
            die ('Can\'t use db : ' . mysql_error());
        }

        $query = sprintf("DELETE FROM lh_team WHERE id= %d;", $idee);
        $result = mysql_query($query);
        erLhcoreClassModule::redirect('faq/departaments');
        exit;
    }


    if (isset($_POST['Update'])  )
    {
                $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lhc";
        $idee = $_POST['id'];
        $team = $_POST['Name'];
        $email = $_POST['Email'];
        $dep = $_POST['dep'];                
        $connection=mysql_connect ("localhost", $username, $password);
        if (!$connection) {
            die('Not connected : ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbname, $connection);
        if (!$db_selected) {
            die ('Can\'t use db : ' . mysql_error());
        }


        $result = mysql_query("UPDATE lh_team SET dept_id='$dep', name='$team', email='$email' WHERE id='$idee'");
        erLhcoreClassModule::redirect('faq/departaments');
        exit;
    }


    $Result['content'] = $tpl->fetch();

?>
<?php endif;?>



