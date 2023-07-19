<?php

function generate_password($length, $multiple_characters)
{
    session_start();

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&/()=?^+-_.,;:@#';
    $password = '';

    if ($multiple_characters == 'on') {
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $password .= $characters[$index];
        }
    } else {
        for ($i = 0; $i < $length; $i++) {

            $index = rand(0, strlen($characters) - 1);

            while (str_contains($password, $characters[$index])) {
                $index = rand(0, strlen($characters) - 1);
            }

            $password .= $characters[$index];
        }
    }

    $_SESSION['password'] = $password;
}
