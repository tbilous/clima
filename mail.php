<?php

$recepient = "chernyakovich.evgeniy@gmail.com";
$sitename = "Інтер'єр";


$content_rent = trim($_POST["subscribe"]);
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "Name: $name \nPhone: $phone \nEmail: $email \nOrder: $content_rent";

$pagetitle = "New order from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
