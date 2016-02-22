<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhdepartament/new.tpl.php');
$Departament = new erLhcoreClassModelDepartament();

    

    

if ( isset($_POST['Cancel_departament']) ) {
    erLhcoreClassModule::redirect('departament/departaments');
    exit;
}

if (isset($_POST['Save_departament']))
{
    $Errors = erLhcoreClassDepartament::validateDepartment($Departament);
    
    if (count($Errors) == 0)
    {
        erLhcoreClassDepartament::getSession()->save($Departament);
        erLhcoreClassModule::redirect('departament/departaments');
        exit ;

    }  else {
        $tpl->set('errors',$Errors);
    }
}
if ( isset($_POST['Send_email']) ) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $comments = $_POST['Comments'];
    $online_userThis = $_POST['online_user'];
    $chatThis = $_POST['chat'];
    $ip = $_POST['IP'];
    $country = $_POST['Country'];
    $messages = erLhcoreClassChat::getChatMessages($chatThis);

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;

    $mail->Username = "sajawals93@gmail.com";
    $mail->Password = "impossibl";

    $mail->AddAddress("naumanzafar84@gmail.com");
    $mail->Subject = "Chat description";
    $mail->AddEmbeddedImage('LOGO.png', 'logo');

    ob_start();?>
<html>
<head>

</head>
<body class="bdy" style="max-width:600px;margin:0 auto 0 auto;background-color:#fff;font-family:Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;font-size:18px;font-weight:300;padding-top:24px;line-height:1.4 ; background-color:#90A6AB ; color:white ;       ">
    <div >
        <img style ="min-height: 50px; min-width: 50px; margin-left: auto; margin-right: auto; text-align: center; display: table-cell;vertical-align: middle " src='cid:logo'>

    </div>  
    
    <div style ="padding : 22px " >
        
        <div style ="font-size: 22px ; font-weight : bold" > <?php
    echo "Visitor Info" . "<br/>";
                                                             ?> </div>

        <div style ="font-size:18px ">
<?php 
    if( $name!= "" ){
        echo "Visitor Name : " . $name . "<br/>" ;
    }
    if( $email!= "" ){
        echo "Visitor Email : " . $email  . "<br/>";
    }
    if(  $phone!= ""  ){
        echo "Visitor Phone # : " . $phone . "<br/>";
    }
    if(  $comments!= ""  ){
        echo "Visitor Comments : " . $comments . "<br/>";
    }
?>
            </div>
        <div style ="font-size: 22px ;font-weight : bold" > <?php

           
            echo  "<br/>  <br/>" . "Chat Messages " . "<br/>";

                                        ?> </div>
        <div style ="font-size: 18px ; font-weight : bold">
        <?php $dur =     end($messages)[time] - $messages[0][time] ;
              echo " Total chat time : " . gmdate("H:i:s", $dur) . "<br/>" . "<br/>"; 
        ?>
            </div>
		<div style ="font-size: 18px ; background-color: #222E3A ; padding : 10px" >
			<?php
    
			$LastMessageID = 0;
    		 ?>
			<?php include(erLhcoreClassDesign::designtpl('lhchat/syncadmin.tpl.php'));?>
			<?php if (isset($msg)) {	$LastMessageID = $msg['id'];} ?>
			<?php if ($chat->user_status == 1) : ?>
			<?php include(erLhcoreClassDesign::designtpl('lhchat/userleftchat.tpl.php')); ?>
			<?php elseif ($chat->user_status == 0) : ?>
			<?php include(erLhcoreClassDesign::designtpl('lhchat/userjoined.tpl.php')); ?>
			<?php endif;?>
		</div>	
                <div style ="font-size: 22px ; font-weight : bold" > <?php
            echo   "<br/> <br/>"  ."Browsing Info";
            ?> </div>
		<div style ="font-size: 18px" >
			<?php
                echo "Current Page : " .  $online_userThis ;
                echo "<br/>" . "IP Address : " .  $ip ;
                echo "<br/>" . "Country : " .  $country ;
            ?>
            </div>
	</div>
</body>
</html>

    <?php $body = ob_get_clean();

    $mail->Body  = $body;
    $mail->IsHTML(true);
    $mail->Send();
?>
<script>
    alert("Email has been sent");
    close();
</script>
<?php
}
$tpl->set('departament',$Departament);

$Result['content'] = $tpl->fetch();

$Result['path'] = array(
array('url' => erLhcoreClassDesign::baseurl('system/configuration'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('department/new','System configuration')),
array('url' => erLhcoreClassDesign::baseurl('departament/departaments'),'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('department/new','Departments')),
array('title' => erTranslationClassLhTranslation::getInstance()->getTranslation('department/new','New department')),
)

?>