<?php

session_start(); // start or resume session

$_SESSION['username'] = 'sarah';

$_SESSION['favfood'] = 'pizza';

echo '<a href="page2.php">Room number 2</a>';

