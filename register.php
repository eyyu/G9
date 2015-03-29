	        <?php
				$dbhost = 'mysql14.000webhost.com';
				$dbuser = 'a3722077_leia';
				$dbpass = '7865380fh';
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn ) {
  					die('Could not connect: ' . mysql_error());
				}
				
				//Function to sanitize values received from the form. Prevents SQL injection
				function clean($str) {
					$str = @trim($str);
					if(get_magic_quotes_gpc()) {
						$str = stripslashes($str);
					}
					return mysql_real_escape_string($str);
				}
				
				//Sanitize the POST values
				$fname = clean($_POST['firstname']);
				$lname = clean($_POST['lastname']);
				$email = clean($_POST['email']);
				$password = clean($_POST['pass']);
				$cpassword = clean($_POST['confirmpass']);
				$sql = "INSERT INTO users(first_name,last_name, email, password) VALUES('$fname','$lname','$email','".md5($_POST['pass'])."')";

				mysql_select_db('a3722077_lr');
				$retval = mysql_query( $sql, $conn );
				if(! $retval ) {
  					//die('http://leiafang.webege.com/G9_NEW%20copy%202/registerFail.php') . mysql_error();
  					header('Location: http://leiafang.webege.com/G9_NEW%20copy%202/registerFail.php');
				}
				else {
					header('Location: http://leiafang.webege.com/G9_NEW%20copy%202/registerSuccess.php');
				}
				mysql_close($conn);
			?>