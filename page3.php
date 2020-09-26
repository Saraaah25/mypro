<?php

session_start();

echo 'heloo ' . $_SESSION['username'] . ' you  are in room 3 <br>';

echo '<a href="logout.php">Exit';
