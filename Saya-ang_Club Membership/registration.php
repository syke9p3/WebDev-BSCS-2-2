<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<h1>Register</h1>';
echo var_dump($_POST);

if (isset($GET['submit'])) {
    $first_name = $GET['first_name'];
    $last_name = $GET['last_name'];
    $email = $GET['email'];

    echo '<p><b>First Name:</b> ' . $first_name . '</p>';
    echo '<p><b>Last Name:</b> ' . $last_name . '</p>';
    echo '<p><b>Email:</b> ' . $email . '</p>';
}


?>