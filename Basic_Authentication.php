<?php

define("USERNAME", "munna");
define("PASSWORD", "9876543210");

    echo "Type Your Username: ";
        $username = readline();
    echo "Type Your Password: ";
        $password = readline();

if ($username === USERNAME && $password === PASSWORD) {
    echo "Login Successful";
}elseif ($username !== USERNAME && $password !== PASSWORD) {
    echo "Username & Password is wrong";
}elseif ($username !== USERNAME) {
    echo "Username is wrong";
}elseif ($password !== PASSWORD) {
    echo "Password is wrong";
}
