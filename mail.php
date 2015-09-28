<?php

$recepient = "tbilous@gmail.com";
$sitename = "Climat System Ukraine";


$comment = trim($_POST["comment"]);
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "Name: $name \nPhone: $phone \nEmail: $email\nComment: $comment";

$pagetitle = "New request from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
