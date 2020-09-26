<?php

session_start();

echo 'hello ' . $_SESSION['username'] . ' how are you ?<br>';
echo  ' your favourite food is' . $_SESSION['favfood'] . '<br>';

echo '<a href="page3.php">room number 3 </a>';
