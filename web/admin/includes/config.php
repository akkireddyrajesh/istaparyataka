<?php
$db_hostname='localhost';
$db_database='car_book';
$db_username='meat_mr';
$db_password='123456';
$db_server=mysqli_connect($db_hostname,$db_username,$db_password)
   or die("Unable to connect to MYSQL:" . mysql_error());
 mysqli_select_db($db_database)
  or die("Unable to connect to database:" .mysql_error());  

?>
