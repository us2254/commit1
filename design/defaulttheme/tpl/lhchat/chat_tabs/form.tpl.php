<form action="<?php echo erLhcoreClassDesign::baseurl('faq/view')?>" method="post">
<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Name');?></label>
    <input type="text" id="txt" class="form-control" name="Name"  value="" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','E-mail');?></label>
    <input type="text" id="txt1" class="form-control" name="Email"  value="" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Phone');?></label>
    <input type="text" id="txt2" class="form-control" name="Phone"  value="" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Comments');?></label>
    <input type="text" id="txt3" class="form-control" name="Comments"  value="" />

</div>
<div class="form-group" style="display : none">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Comments');?></label>
    <input type="text" id="txt4" class="form-control" name="chat"  value=" <?php echo $chat->id ?>" />

</div>
<div class="form-group" style="display : none">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Comments');?></label>
    <input type="text" id="txt5" class="form-control" name="online_user"  value=" <?php echo $online_user->current_page  ?> " />

</div>

<div class="form-group" style="display : none">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Comments');?></label>
    <input type="text" id="txt6" class="form-control" name="Country"  value=" <?php echo $chat->country_name  ?> " />

</div>







<div class="form-group" style="display : none">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('lhchat/chat_tabs','Comments');?></label>
    <input type="text" id="txt7" class="form-control" name="IP"  value=" <?php echo $chat->ip; ?> " />

</div>

<?php 

            $servername = "localhost";
            $username = "root";
            $password = "";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            $val = $chat->dep_id;
            $val = mysql_real_escape_string($val);
            $sql = "SELECT * FROM lh_team WHERE dept_id= $val";
        $result = $conn->query($sql);
       

        $conn->close(); 
                             
?> 
    
<div role="tabpanel" class="tab-pane" id="design">
			<div class="form-group">
				<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/htmlcode','Team')?></label>
                <select name="toSend" class="form-control">
					<option value="0">Select</option>
                <?php 
                $val = 1;

                if ($result->num_rows > 0) {
                    
                // output data of each row

                while ($row = $result->fetch_assoc()):
                        $abc =  $row["name"];
                        ?>
                        <option value="<?php echo $row["email"] ?>"> <?php echo $abc ?> </option>

                <?php 
                    $val++;
                endwhile;


                } else {
                    echo "0 results";
                }

                ?>
        	    </select>
			</div>
		</div>



<div class="btn-group" role="group" aria-label="...">

         <input type="submit" class="btn btn-default" name="Send_email" value="Submit"/>
</div>
</form>
