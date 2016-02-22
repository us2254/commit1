
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

        $query = sprintf("DELETE FROM lh_ads WHERE id= %d;", $idee);
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
        $name = $_POST['name'];
        
                        
        $connection=mysql_connect ("localhost", $username, $password);
        if (!$connection) {
            die('Not connected : ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbname, $connection);
        if (!$db_selected) {
            die ('Can\'t use db : ' . mysql_error());
        }


        $result = mysql_query("UPDATE lh_ads SET id='$idee', name='$name' WHERE id='$idee'");
        erLhcoreClassModule::redirect('faq/departaments');
        exit;
    }


    $Result['content'] = $tpl->fetch();

?>