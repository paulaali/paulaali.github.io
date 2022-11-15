<?php

	if(isset($_POST['submit'])) {

		$to = "gdoummene@gmail.com";
		$from = $_REQUEST['email'];
		$name = $_REQUEST['name'];
		$subject = $_REQUEST['subject'];
		$number = $_REQUEST['number'];
		$message = $_REQUEST['message'];

	$headers = "From: $from";
		$headers = "From: " . $from . "\r\n";
		$headers .= "Reply-To: ". $from . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$subject = "You have a message from your Bitmap Photography.";

	$logo = 'img/log.png';
	$link = '#';

		$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
		$body .= "<table style='width: 100%;'>";
		$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
		$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
		$body .= "</td></tr></thead><tbody><tr>";
		$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
		$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
		$body .= "</tr>";
		$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
		$body .= "<tr><td></td></tr>";
		$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
		$body .= "</tbody></table>";
		$body .= "</body></html>";

			if ($result1 && $result2) {
				$success = "Your Message was sent Successfully!";
				}
			else {
					$failed = "Sorry! Message was not sent, Try again Later.";
				}
		$send2 = mail($fromEmail, $subject2, $message2, $headers2);
	$send = mail($to, $subject, $body, $headers);

	}
 
?>