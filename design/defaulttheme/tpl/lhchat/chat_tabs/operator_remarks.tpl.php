<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/operator_remarks_pre.tpl.php'));?>
<?php if ($operator_remarks_enabled == true) : ?>
<div id="remarks-status-<?php echo $chat->id?>" class="icon-pencil pb10 success-color"> Tips </div>
<?php

            $dom =  htmlspecialchars($chat->department);

           

            $conn = new mysqli("127.0.0.1", "root", "root", "lhc");  

            $result = $conn->query("SELECT name,tips FROM lh_departament;");

            while($rs = $result->fetch_array(MYSQLI_ASSOC)) {

                if($rs["name"] === $dom)
                {
                   

                    $tok = strtok($rs["tips"], ",");

                        while ($tok !== false) {

                            echo "<ul>
                                    
                                   <li>

                                        $tok<br />

                                   </li> 

                                </ul>";

                                        

                            $tok = strtok(",");
                        }
                }

            }

            $conn->close();


 ?>

<div>
</div>
<?php endif; ?>