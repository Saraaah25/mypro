<?php 
session_start();

$_SESSION['name'] = 'sarah';

include 'c.php.php';

echo '<a href="about.php">About</a>';
