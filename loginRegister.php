<!DOCTYPE html>
<html>
<head>
		<title>Hi F.I.V.E About</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="css/base.css">
        <script type="text/javascript"  
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js">
        </script>
        <script type="text/javascript" src="externalScript.js"></script>
            <script src="validator.js" type="text/javascript"></script>
</head>
<body>
	<div id="header">
		<div id="header-interior">
            <img src="images/hi5cover.jpg" width="1000" height="402" alt="HeaderPhoto" usemap="#signin">
               <map name="signin">
                   <area shape="rect" coords="805,15,975,73" href="loginRegister.php" alt="login">
               </map>
		</div>
		<div id="social-link">
		</div>
</div>	<div id="nav">
            <ul id="navbar">    <!--changed to list form-->
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="stigma.html">Stigma</a></li>
                <li><a href="toolkit.html">Tool Kit</a></li>
                <li><a href="pledge.html">Pledge</a></li>
                <li><a class="resources" href="resources.html">Resources</a></li>
                
            </ul>
</div>
	<!--third box-->
	
	
	<div id="content">
		
       
	<div id="sign-in">
		<form name="signinform" action="login.php" method="post" class="form-format">
			<h2 class="login">Log In</h2>
			<label for="email">Email:</label><br><div id='signinform_email_errorloc'></div>
			<input type="email" name="email" id="email" /><br>
			
			<label for="password">Password:</label><br><div id='signinform_password_errorloc'></div>
			<input type="password" name="password" id="password" /><br>
			
			<input type="submit" class="button" value="Login ">
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
                    signupformValidator.addValidation("cemail","req","Please enter an email");
                    signupformValidator.addValidation("cpass","req","Please enter a password");
                    signupformValidator.addValidation("cpass","neelmnt=email","The password should not be the email");
                    signupformValidator.addValidation("confirmpass","req","Please confirm password");
                    signupformValidator.addValidation("confirmpass","eqelmnt=pass","The confirmed password is not same as password");           
                </script>                
			</div>
			
	</div>
	
<div id="footer">
        <div class="site-map">
            <ul>
                <li><h4>SITE MAP</h4></li>
                <li><a class="sitemap" href="index.php">Home</a></li>
                <li><a class="sitemap" href="loginRegister.php">Log in/Sign up</a></li>
                <li><a class="sitemap" href="about.html">About</a></li>
                <li><a class="sitemap" href="toolkit.html">Tool kit</a></li>
                <li><a class="sitemap" href="pledge.html">Pledge</a></li>
                <li><a class="sitemap" href="resources.html">Resources</a></li>
                <li><a class="sitemap" href="stigma.html">Stigma</a></li>
            </ul>
        </div>
        <div class="connect">
            <ul >
                <li><h4>CONNECT WITH US</h4><li>
                <li><a class="sitemap" href="https://twitter.com/SFUHCS">Twitter</a></li>
                <li><a class="sitemap" href="https://www.pinterest.com/SimonFraserHCS/the-dish/">Pinterest</a></li>
                <li><a class="sitemap" href="https://www.facebook.com/SFUHealthandCounselling">Facebook</a></li>
                <li><a class="sitemap" href="https://www.youtube.com/user/SFUhcs">YouTube</a></li>
            </ul>
        </div>
        <div class="contact">
            <ul>
                <li><h4>CONTACT US</h4></li>
                <li class="sitemap"><a class="sitemap" href="mailto:hcs_feedback@sfu.ca">Email:hcs_feedback@sfu.ca</a></li>
                <li class="sitemap"><a class="sitemap" href="tel:778-829-8206">Phone:778-782-4615</a></li>
                <li><a class="sitemap" href="http://www.sfu.ca/">SFU</a></li>
                <li><a class="sitemap" href="http://www.bcit.ca/">BCIT</a></li>
                <li><a class="sitemap" href="http://hi-fivemovement.tumblr.com/">Tumblr</a></li>
            </ul>
        </div>
        <div class="terms">
            <p>Terms and Conditions &copy; Simon Fraser University</p>
        </div>
</div></body>
</html>