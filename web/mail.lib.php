<?php
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
//sg2plcpnl0013.prod.sin2.secureserver.net
// $allowed_hosts = array('localhost');
// if (!isset($_SERVER['HTTP_HOST']) || !in_array($_SERVER['HTTP_HOST'], $allowed_hosts)) {
//     header($_SERVER['SERVER_PROTOCOL'].' 400 Bad Request');
//     echo "bad request"
//     exit;
// }
echo gethostname();

?>