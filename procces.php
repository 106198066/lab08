<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == 'JoudKhalal' && $password == '106198066') {

    $_SESSION['user'] = $username;

    header('Location: welcome.php');
    exit();

} else {

    header('Location: login.php?error=1');
    exit();

}
?>