<?php

$pwdSignup = "Maaz";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Maaz";

if(password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are not the same!";
}

