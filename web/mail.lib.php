<?php

/**
 * Mail Function Info Block
 */
$officeMail='contactus@shreeistaparyaataka.com';
$fromMail='SHREE ISTA PARYATAKA <no-reply@dstonesgroup.com>';
$Cc='Cc: akkireddyrajesh@gmail.com';

/**
 * POST METHOD HANDLING BLOCK
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if($formData['formName']=='checkingAvailability'){
    checkingAvailability($_POST);
  }else{
  echo prepareMail($_POST);
}

}else{
  header('Location: /index.html');
}

function checkingAvailability($formData){
 return "success";
}



function prepareMail($formData) {
  $subject='News Letter Subscription';
  $message=null;
  if ($formData['formName']=='contactform') {

  $subject = "Feedback From Mr/Ms. ".$formData['fname'];
    
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
      <td>".$formData['fname']."</td>
    </tr>
    <tr>
      <td>Lastname</td>
      <td>".$formData['lname']."</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>".$formData['email']."</td>
  </tr>
  <tr>
  <td>Mobile</td>
  <td>".$formData['mobile']."</td>
</tr>
<tr>
<td>Feedback</td>
<td>".$formData['feedback']."</td>
</tr>
  </table>
    </body>
    </html>
    ";
  }elseif ($formData['formName']=='subscribe') {
    $message = "
    <html>
    <head>
    <title>Subscriber Details </title>
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
      <td>Email </td>
      <td>".$formData['email']."</td>
    </tr>
  </table>
    </body>
    </html>
    ";
  }
    if($message){
      $to=$GLOBALS['officeMail'];
      $from=$GLOBALS['fromMail'];
      sendMail($to, $from,$subject,$message);
      return "success";
    }else {
      return "fail";
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function sendMail($to,$from,$subject,$message) {
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: '.$from. "\r\n";//Ex: $from= "DSTONES GROUP <no-reply@dstonesgroup.com>"
    if($GLOBALS['cc']){
      $headers .= 'Cc: '.$GLOBALS['Cc']. "\r\n";
    }

    mail($to,$subject,$message,$headers);
  }
?>