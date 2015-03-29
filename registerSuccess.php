<?php include 'includes/overall/header.php'; ?>

	<!--third box-->
	
	
	<div id="content">
		
       
	<div id="sign-in">
		<form name="signinform" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" class="form-format">
			<h2 class="login">Log In</h2>
			<label for="email">Email:</label><br><div id='signinform_email_errorloc'></div>
			<input type="email" name="email" id="email" /><br>
			
			<label for="password">Password:</label><br><div id='signinform_password_errorloc'></div>
			<input type="password" name="password" id="password" /><br>
			
			<input type="submit" class="button" value="Login ">
			<a href="loginRegister.php">Register</a>
		</form>

    	<script type="text/javascript">
        	var frmvalidator = new Validator("signinform");
        	frmvalidator.EnableOnPageErrorDisplay();
        	frmvalidator.EnableMsgsTogether();
        	frmvalidator.addValidation("email","req","Please enter your email");   
        	frmvalidator.addValidation("password","req","Please enter your password"); 
                    
    	</script>
                
	</div>
			
			
			<div id="sign-up">
				
            
                <p>Congratulations!</p>  
                <p>You are now one of our members!</p>              
			</div>
			
	</div>
	
<?php include 'includes/overall/footer.php'?>