<?php
/**
 * Created by PhpStorm.
 * User: jorgequintero
 * Date: 3/31/18
 * Time: 12:48
 */

$addressee = "jorgequinterov2406@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$content = "Name: " . $name . "\nEmail: " . $email . "\nMobile: " . $mobile . "\n\n" . $message;
mail($addressee, $subject, $content);
header("Location:thanks.html");