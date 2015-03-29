<?php
<<<<<<< HEAD
    $pass = strtolower($_POST["password"]);
    $email = strtolower($_POST["email"]);
 
    $format = $pass." ".$ln." ".$email;
=======
   
$dbhost = 'leiafang.webege.com';
$dbuser = 'a3722077_leia';
$dbpass = '7865380fh';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'INSERT INTO a3722077_form '.
       '(email, password) '.
       'VALUES ( "leiafang66@gmail.com", 123456, NOW())';

mysql_select_db('a3722077_form');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);

>>>>>>> c35b204080ba6a2cb0a0476b82007a34561888a5
?>

