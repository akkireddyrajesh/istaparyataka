<?php

 $host = "localhost"; /* Host name */
$user = "meat_mr"; /* User */
$password = "123456"; /* Password */
$dbname = "car_book"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
 
 
  $fname = $_REQUEST['fname'];
 $lname = $_REQUEST['lname'];
 
 $email = $_REQUEST['email'];
  $mobile = $_REQUEST['mobile'];
 
 $message = $_REQUEST['feedback'];
 
 $sql = "INSERT INTO  contact (name,lastname,email,phone,message)VALUES ('". $fname ."','". $lname ."','".$email."','".$mobile."','".$message."')";


  $subject = "Feedback From Mr/Ms. ".$fname;
         
     $message = "
    <html>
    <head>
    <title>New Feedback </title>
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    caption{padding-bottom:5px;}
    td{padding:2px;}
    </style>
    </head>
    <body>
    <table>
    <caption style='font-weight:bold'>New Feedback</caption>
    <tr>
      <td>Firstname</td>
      <td>".$fname."</td>
    </tr>
    <tr>
      <td>Lastname</td>
      <td>".$lname."</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>".$email."</td>
  </tr>
  <tr>
  <td>Mobile</td>
  <td>".$mobile."</td>
</tr>
<tr>
<td>Feedback</td>
<td>".$message."</td>
</tr>
  </table>
    </body>
    </html>
    ";
    
    
    $subject1 = "Thanks";
         
         $message = "<b>Thanks for contacting .</b>";
         
    
    $from = "prasadvenkatacbit@gmail.com";
         
         $header = "From:sales@shreeistaparyaataka.com \r\n";
         $header .= "Cc:sales@shreeistaparyaataka.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($from,$subject,$message,$header);
         $retval1 = mail ($email,$subject1,$message1,$header);
         
         if( $retval == true ) {
             $response =  "Message sent successfully...";
         }else {
             $response =  "Message could not be sent...";
         }



if(mysqli_query($con, $sql)){
   
} else{
    
}
   
   
      echo $response;
   die;
?>