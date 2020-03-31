<?php
$Email="surrendar.mayuri@gmail.com";
//Signup mail
if(isset($Email))
	{
		$flag = 0;
	 
if (strlen($Email))
	{
 

$bodymess.="<html><body><table cellpadding=10 border=0><tr><td><font color=#333333>Name</td><td><b>:</b></td><td><font color=#333333><b>".$_POST['name']."</b></font></td></tr>";
$bodymess.="<tr><td><font color=#333333>Location</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['location']."</b></font></td></tr>";
$bodymess.="<tr><td><font color=#333333>Position Apply For</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['position']."</b></font></td></tr>";  
$bodymess.="<tr><td><font color=#333333>Roles</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['roles']."</b></font></td></tr>";
$bodymess.="<tr><td><font color=#333333>Mobile Number</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['mobile']."</b></font></td></tr>";
$bodymess.="<tr><td><font color=#333333>Phone Number</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['phone']."</b></font></td></tr>"; 
$bodymess.="<tr><td><font color=#333333>Email Id</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['email']."</b></font></td></tr>";
$bodymess.="<tr><td><font color=#333333>Experience</font></td><td><b>:</b></td><td><font color=#333333><b>".$_POST['expmini']."&nbsp;Year &nbsp;&nbsp;&nbsp;".$_POST['expmax']."&nbsp;Months </b></font></td></tr>"; 
$bodymess.="</table></body></html>";
	}
	else
	{
		$error = "One or more of the required fields were found to be empty. Please fill them up";	
		$flag = 1;
	}
	if ($flag == 0)
		{
			include "include/class.phpmailer.php";
			$inst = new PHPMailer;
			$mail = new PHPMailer();
			$mail->From     = "$Email";
			$mail->FromName = "TriStar Submit Resume";
			$mail->AddAddress("surrendar.mayuri@gmail.com"); 
			$mail->AddBcc("test.mayuri@gmail.com"); 
			$mail->WordWrap = 50;                              // set word wrap
			$mail->AddAttachment($_FILES['resume']['tmp_name'],$_FILES['resume']['name']);
			$mail->Subject  ="TriStar";
			$mail->IsHTML(true);
			$mail->Body     =  $bodymess;
			
			if(!$mail->Send())
				{
					$flag=1;
					$error = "Your form was not submitted due to an internal error.";
				}
		}	
		
}

			if (!isset($flag) || ($flag == 1))
			{
				if ($flag == 1)
				{
					print $error; 
					header("Location:failure.htm");
				}
			}
			else
			{
				 header("Location:thanks.htm");
				ob_flush();
			}
//mail end
?>