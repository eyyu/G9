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
				
            
                <form name="signupform" action="register.php" method="post" class="form-format">
						<h2 class="login">Sign Up</h2>
						<label for="firstname">First Name:</label><br><div id='signupform_firstname_errorloc'></div><input type="text" name="firstname" id="firstname"><br>
						<label for="lastname">Last Name:</label><br><div id='signupform_lastname_errorloc'></div><input type="text" name="lastname" id="lastname"><br>
						<label for="cemail">Email:</label><br><div id='signupform_email_errorloc'></div><input type="email" name="email" id="cemail"><br>
						<label for="cpass">Password:</label><br><div id='signupform_pass_errorloc'></div><input type="password" name="pass" id="cpass"><br>
						<label for="confirmpass">Confirm Password:</label><br><div id='signupform_confirmpass_errorloc'></div><input type="password" name="confirmpass" id="confirmpass"><br>
						<input type="submit" class="button" value="Submit">
				</form>
                <script type="text/javascript">
                    var signupformValidator  = new Validator("signupform");
                    signupformValidator.EnableOnPageErrorDisplay();
                    signupformValidator.EnableMsgsTogether();
                    signupformValidator.addValidation("firstname","req","Please enter your first name");
                    signupformValidator.addValidation("lastname","req","Please enter your last name");        
                    signupformValidator.addValidation("email","req","Please enter an email");
                    signupformValidator.addValidation("pass","req","Please enter a password");
                    signupformValidator.addValidation("pass","neelmnt=email","The password should not be the email");
                    signupformValidator.addValidation("confirmpass","req","Please confirm password");
                    signupformValidator.addValidation("confirmpass","eqelmnt=pass","The confirmed password is not same as password");           
                </script>                
			</div>
			
	</div>
	
<?php include 'includes/overall/footer.php'?>