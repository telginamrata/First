<?php 
$result="";

	if(isset($_POST['submit']))
	{
		
		
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail -> IsSmtp();
		$mail->SMTPDebug=0;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='ssl';
		
		$mail->Host='smtp.gmail.com';
		$mail->Port=465;
		
			$mail->Username='inbound@transformanceforums.com';
		$mail->Password='Downto3@';
		
		$mail->setFrom($_POST['email']);
		$mail->addAddress('marketing@transformanceforums.com');
		$mail->addReplyTo($_POST['email']);
		
		$mail->isHTML(true);
		$mail->Subject='Landing Page Form for 11th Edition Executive Assistants Leadership Summit & Awards 2020';
		
		$mail->Body='<h2 align=center>
		
		<br>Name :'.$_POST['name'].'
		<br><br>Email: '.$_POST['email'].'
		<br><br>Mobile Number: '.$_POST['phone'].'
		<br><br>Company name: '.$_POST['company_name'].'
		<br><br>Designation: '.$_POST['designation'].'
		<br><br>City: '.$_POST['city'].'
		
		</h1>';
		
      
		if($mail->send())
		{
		echo "<script>
alert('Your registration is completed successfully. Thank You !');
window.location.href='LandingPage.html';
</script>";
			
		}
		else
		{
		  
		 echo "The message could not been sent!";	
		}
	}
?>