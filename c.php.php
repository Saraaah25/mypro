<?php

if(empty($_SESSION['counter'])) {

    $_SESSION['counter'] = 1;

} else {

    $_SESSION['counter']++;
}

echo '<div>you viewed this page ' . $_SESSION['counter'] . 'times</div>';