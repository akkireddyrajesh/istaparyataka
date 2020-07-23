<?php

$hostname=gethostname();
$source = $destination = $date = "";
$ip_server = $_SERVER['SERVER_ADDR']; 
$ip_visitor =  $_SERVER['REMOTE_ADDR']; 
// if()
echo $ip_server.'\n';
echo $ip_visitor;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $source = test_input($_POST["source"]);
//   $destination = test_input($_POST["destination"]);
//   $date = test_input($_POST["date"]);
// echo $hostname;
// echo $ip_server;
// echo $ip_visitor;
// print_r($_POST);
}else{
  echo "fail";
}

prepareMail();


function prepareMail() {
    $to = "akkireddyrajesh@gmail.com";
    $subject = "HTML email";
    
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <contactus@shreeistaparyaataka.com>' . "\r\n";
    // $headers .= 'Cc: a@example.com' . "\r\n";
    
    // mail($to,$subject,$message,$headers);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>