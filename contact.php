<div align="center">
<?php
if(isset($_POST["submit"])){
	
	// Checking For Blank Fields..
	if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
		echo "Fill All Fields..";
	}else{
		$name=$_POST["vname"];
		// Check if the "Sender's Email" input field is filled out
		$email=$_POST['vemail'];
		// Sanitize E-mail Address
		$email =filter_var($email, FILTER_SANITIZE_EMAIL);
		// Validate E-mail Address
		$email= filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$email){
			echo "Invalid Sender's Email";
		}
		else{
			$subject = "(Enquiry From shravanpattiwar.gq) Name= [".$name."] " .$_POST['sub'];
			$message = $_POST['msg'];
			$headers = 'From:'. $email . "\r\n"; // Sender's Email
			$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
			// Message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap($message, 70);
			// Send Mail By PHP Mail Function
			mail("shravan9912@gmail.com", $subject, $message, $headers);
			echo "Your mail has been sent successfuly ! Thank you for your feedback";
		}
	}?>
	
	<script type="text/javascript">
	setTimeout(function () {
		   window.location.href= 'http://localhost/phpsp/Resume/Material%20CV%20_%20Resume%20%26%20vCard%20Preview%20-%20ThemeForest_files/ii.html#contact'; // the redirect goes here

		},2000);
</script>
<?php }
?>
</div>