<?php
   
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

?>

