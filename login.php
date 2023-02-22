<?php 

session_start();

$_SESSION['user'] = [
    'username' => 'admin',
    'email' => 'admin@boolean.it',
];  

header('Location: ./index.php');