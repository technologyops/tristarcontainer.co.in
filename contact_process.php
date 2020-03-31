<?php 
include("includes/mail_functions.php");
if(!empty($_POST))
{
$message.="<html><body><table cellpadding=10 border=0> <tr><td><font color=#333333><b>Enquiry Type </b></td><td><b>:</b></td><td><font color=#333333>&nbsp;&nbsp;".$_POST['enquirytype']."</font></td></tr>";
$message.="<tr><td><font color=#333333><b>Product of Interest </b></font></td><td><b>:</b></td><td><font color=#333333>&nbsp;&nbsp;".$_POST['productinterest']."</font></td></tr>";
$message.="<tr><td><font color=#333333><b>Name</b></font></td><td><b>:</b></td><td><font color=#333333>&nbsp;&nbsp;".$_POST['name']."</font></td></tr>";
$message.="<tr><td><font color=#333333><b>Contact Number </b></font></td><td><b>:</b></td><td><font color=#333333>&nbsp;&nbsp;".$_POST['phone']."</font></td></tr>";
$message.="<tr><td><font color=#333333><b>Country </b></font></td><td><b>:</b></td><td><font color=#333333>&nbsp;&nbsp;".$_POST['country ']."</font></td></tr>";
$message.="<tr><td><font color=#333333><b>Enquiry</b></font></td><td><b>:</b></td><td><font color=#333333>&nbsp;&nbsp;".$_POST['enquiry']."</font></td></tr>";  
$message.="</table></body></html>";
$mail['to']="surrendar.mayuri@gmail.com";
 
$mail['sub']="Tristar Enquiry Details";
$mail['message']=$message;

if(send_mail($mail)=='1')
{
?>
<script >      
    location.href="thanks.htm";
    </script>
    <?php
}
else
{
?>
<script > 
    location.href="failure.htm";
    </script>
<?php

}


}
?>