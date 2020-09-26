<?php

session_start();

echo 'hello ' .  $_SESSION['name'] . ' how are you ?';

include 'c.php.php';

echo '<a href="counter.php">Home</a>';