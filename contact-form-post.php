<?php

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

// Mail Sent to
$to = "abhijeetk0589@gmail.com";

// From email
$headers = "From: no-reply@tectigon.co.in" . "\r\n" .

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Email Subject
$subject = "Enquery from website by $name";

// Email body text
$emailbody="<html>
<head>
<title>HTML email</title>
</head>
<body>
<table border='1'>
	<tr>
		<td>Name: </td>
		<td>$name</td>
	</tr>
	<tr>
		<td>Email: </td>
		<td>$email</td>
	</tr>
	<tr>
		<td>Mobile: </td>
		<td>$mobile</td>
	</tr>
	<tr>
		<td>Requirements: </td>
		<td>$message</td>
	</tr>
</table>
</body>
</html>";

mail($to,$subject,$emailbody,$headers);

echo "<script>
	alert('Thank You! Your Request is Received Successfully');
	window.location.href='https://www.tectigon.co.in';
	</script>";

?>