<?php

$host="mysql14.000webhost.com"; // Host name
$username="a3722077_leia"; // Mysql username
$password="7865380fh"; // Mysql password
$db_name="a3722077_lr"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['pass'];

// To protect MySQL injection (more detail about MySQL injection)
// $email = stripslashes($email);
// $password = stripslashes($password);
// $email = mysql_real_escape_string($email);
// $password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count != 1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("email");
session_register("password");
header("location: index.php");
}
else {
header("location: loginRegister.php");
}
?>