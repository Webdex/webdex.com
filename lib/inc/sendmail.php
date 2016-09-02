<?php

extract($_POST);

if (isset($submit)) {
$to = 'webdex908@gmail.com';
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .="From: ".$email."(".$name.")";
$body = "<html><body>$message</body></html>";
$subject = "$subject";

//Sends mail to me, with elements created above
mail ($to, $subject, $body, $header);
}

if (isset($url)) {
	header('Location: http://www.web-dex.com?msg=mailsent#contactanchor');
}
?>