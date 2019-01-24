<?php

    $to = "contact@nvest.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $name2 = $_REQUEST['name2'];
    $csubject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Plumber Master.";

    $logo = 'https://storage.googleapis.com/rc-cloud-5b94d89f645f0000013804a5/Xy8nAfJHR7sREqvNk%2Fuploads%2Fgg3kkmdhthuAdgbsFinitialuser%2Finitialuser%2FfThhzgCTjTiWrxtxA?GoogleAccessId=rocketchat-cloud-deployment%40rocket-chat.iam.gserviceaccount.com&Expires=1548323359&Signature=i1GTa%2BY7UMFGLv5y8rXbKfwDjDUUdkvT8KoCu%2Fv71iAroP2srDceKE9KdKYj23oSqf8y1AddIudYogmlgCx7H8NU4ABeKtuKjLYcZN9GxhDtGLapB%2BXhs75A%2FkGMaIxEml7jFCyXLg4H9N8aOSKEJebz330Z%2Fzb%2FzgW5%2FT23d8Wwn33GQ6khr8imPznFHKookPOP0QsPAtseVCfsGL%2FUcRlebWM8KlwVyH1sr8rEDJw%2Bp4LFi6eCLRdVtlKeD8Ste1w0op1dvtUVIlPpQEsI1qydx%2FXn5GMSLhR19yM6Safvb19gA0btio%2BCp77mz5pqeilizrQQ4QoJp%2B1kBb1iwQ%3D%3D&response-content-disposition=inline';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Bixcoin Master Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>