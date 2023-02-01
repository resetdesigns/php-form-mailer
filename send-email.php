<?php

$name = isset($_POST["name"]) ? $_POST["name"]: "Name not set";
$email = isset($_POST["email"]) ? $_POST["email"]: "test@test.com";
$message = isset($_POST["message"]) ? $_POST["message"]: "Msg not set";

require "../../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'relay-hosting.secureserver.net';
$mail->SMTPAuth = true;
$mail->Port = 25;

$mail->Username = "ewb8gf668kqu";
$mail->Password = "wZ2pWJbU2GgY2Bx";

$mail->setFrom("eagleclaw@kungfuusa.com", "Website Form Submission");
// $mail->addAddress("eagleclaw@kungfuusa.com", "Website Form Submission");
$mail->addAddress("hello@josephvillajin.com", "Joseph Villajin");
// $mail->addAddress("hello@resetdesigns.com", "Website Form Submission");
// $mail->addAddress("reset1418@yahoo.com", "Website Form Submission");

// Content
$mail->isHTML(true);
$mail->Body = $message;

$mail->send();

header("Location: sent.html");