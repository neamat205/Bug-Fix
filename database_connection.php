<?php
$connect = mysqli_connect('localhost', 'root', '', 'inventory');






session_start();

// Register session variables (deprecated)

$_SESSION['type'] = 'master';
$_SESSION['user_id'] = 'john_smith@example.com';
