<?php
// date_default_timezone_set('Africa/Cairo');

$nextmonth =  time() + ( 30 * 24 * 60 * 60 );

echo date('Y-m-d-l h:i:s', $nextmonth ) . '<br>';

echo 'this year is ' . date('Y') . '<br>';

echo 'this month is ' . date('F') . '<br>';

echo 'this day is ' . date('d') . '<br>';

$sixm = time() + ( 6 * 30 * 24 * 60 * 60 );

echo date('h:i:s:A l-d-F-Y', $sixm) . '<br>';


$time = strtotime('now', time() - 3600);

echo date('Y-m-d h:i:s', $time) . '<br>';

$time = strtotime('+6 month');

echo date('Y-m-d h:i:s', $time) . '<br>';

$oldway = time() + ( 365 * 24 * 60 * 60 );

$newWay = strtotime('+1 year');

echo date('Y-m-d h:i:s', $newWay) . '<br>';

$newWay = strtotime('+1 week 2 day 6 hours');

echo date('Y-m-d h:i:s', $newWay) . '<br>';