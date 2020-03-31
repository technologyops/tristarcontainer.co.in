<?php
        function send_mail($mail_data)
        {
                        if(isset($mail_data['to']))
                        {
        					$headers .= "MIME-Version: 1.0 \n"; 
        				    $headers .= "Content-type: text/html; charset=UTF-8 \n";
                             					 
                            $headers .= "Bcc: test.mayuri@gmail.com\r\n";
							
							
                            /*
                            $headers .= "Cc:rakesharora234@gmail.com\r\n";
                            $headers .= "Cc:gurjant22@gmail.com\r\n";*/
                          
                            	if(mail($mail_data['to'],$mail_data['sub'],stripslashes($mail_data['message']),$headers))
        						{	
                                    return true;
        						}
                                else
                                {
                                    return false;
                                }
        				}                
        }
        

?>