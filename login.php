<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'header.inc';

echo "<p>Welcome, " . htmlspecialchars($_SESSION['user']) . "</p>";

include 'footer.inc';
?>