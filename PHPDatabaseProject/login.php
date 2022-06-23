<?php

$email_address = htmlspecialchars(filter_input(INPUT_POST, "email_address"));
$password = htmlspecialchars(filter_input(INPUT_POST, "password"));
$password_hash = password_hash($password, PASSWORD_DEFAULT);

echo "Email address: $email_address - Password: $password";
echo "</br>Password hash: $password_hash";

include('views/login.php');
