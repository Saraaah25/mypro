<?php 
$str = "i love php too much because php is good and easy language";
echo $str;

$arr = str_split($str, 1);
echo "<pre>";
print_r ($arr);
echo "</pre>";

$arr = chunk_split($str, 3, "-");
ech $arr;

$str = explode (" ", $str);
echo "<pre>";
print_r ($str);
echo "</pre>";

$str = str_replace("php", "javascript", $str, $i);
echo "<pre>";
print_r ($str);
echo "</pre>";
echo "replacement count is $i" . "<br>";

$str = implode(" ", $str);
echo ($str);

$str = str_replace(array("is", "easy", "php"), "replaced", $str);
echo $str . "<br>";

$str = "sarah"; 

$repeat = str_repeat ($str, 20);
echo $repeat . "<br />";

$length = strlen($str); // it count the spaces between words
echo $length . "<br />";
if ($length > 10) {
  echo "sorry your name is larger than 10 letters please choose one smaller";
}

$shuffle = str_shuffle($str);
echo $shuffle . "<br />";

$str = "i will go at o'Clock";
echo $str. "<br />";
$skipped = addslashes($str);
echo $skipped . "<br />";

$clean = stripslashes($str);
echo $clean;

$str = "I love <b>php</b> go to <a href= 'php.net'>phph.net</a> to learn <i> php</i>";
echo $str . "<br />";
$stripped = strip_tags($str, "<b><i>"); // this cancel all tags except <b><i>
echo $stripped. "<br />";



$str = "Hello PHP I love small";
echo $str . "<br />";

$lower = strtolower($str);
echo $lower. "<br />";

$upper = strtoupper($str);
echo $upper . "<br />";

$first = lcfirst($str);
echo $first . "<br />";

$first2 = ucfirst($str);
echo $first2 . "<br />";

$firstofAll = ucwords($str);
echo $firstofAll . "<br />";

$str = " x0B i love php x0B "; // x0B count as one
echo var_dump ($str) . "<br />";
echo $str;

$trimmed = trim ($str); //without spaces
echo var_dump ($trimmed);

$trimmed = rtrim ($str);
echo var_dump ($trimmed);

$trimmed = ltrim ($str);
echo var_dump ($trimmed);

$str = "i love php so much";
$trimmed = trim ($str, "i lch");// we can use rtrim & ltrim here
echo var_dump ($trimmed);


$str = "i love php so much and although javascript";
echo $str;
$count = str_word_count ($str);
echo $count;

$count = str_word_count ($str, 0); //it will count words & doesn't count special character 
echo $count;

$count = str_word_count ($str,1); //it will print as array
echo "<pre>";
print_r ($count);
echo "<pre />";

$count = str_word_count ($str, 2); //it mark key as its position of letters
echo "<pre>";
print_r ($count);
echo "<pre />";

$count = str_word_count ($str, 2, "&"); //mark key as its position of letters even this special char&
echo "<pre>";
print_r ($count);
echo "<pre />";


$link = "name=sarah&age=29&year=1991&skill=5&exp=6";
parse_str($link);
echo $year;

$link = "name=sarah&age=29&year=1991&skill=5&exp=6";
parse_str($link, $myarray);
echo "<pre>";
print_r($myarray);
echo "</pre>";


$str = "hello i love php \n Although \n i love js";
echo nl2br($str, true); //equal nl2br$str

$str = "i love php so much because php is famous and cool language";
$pos = strpos($str, "php", 8); //case sensitive
echo $pos . "<br>";

$str = "i love php so much because php is famous and cool language";
$pos = stripos($str, "php", 8); //not case sensitive
echo $pos;

$str = "i love php so much because php is famous and cool language";
$pos = strrpos($str, "php", 8);// from right
echo $pos;

$str = "i love php so much because php is famous and cool language";
$pos = strripos($str, "php", 8); //not case sensitive
echo $pos;

$str = "i love php so much because php is cool";
$char = strstr($str, "php"); //fom php till the end of statement and it equal false
echo $char . "<br>"; //strstr=strchr

$char = strstr($str, "php", true);//print what is before php
echo $char . "<br>";

$char = stristr($str, "php", true);//not sensitive
echo $char . "<br>";

$str2 = "osama@elzero.info";
$char = strstr($str2, "@", true);
echo $char . "<br>";

$str2 = "osama@elzero.info";
$char = strstr($str2, "@", false);
echo $char . "<br>";
echo str_replace("@", "", $char); //it remove @

$str1 = "php";
$str2 = "php";
echo strcmp($str1, $str2);//print 0

$str1 = "phpphp";
$str2 = "php";
echo strcmp($str1, $str2); //print 3 (larger than str2)

$str1 = "php";
$str2 = "phpphp";
echo strcmp($str1, $str2); //print -3 (less than str2)

$str1 = "phpphp";
$str2 = "php";
echo strncmp($str1, $str2, 3);// compare the first 3 letters

$normal = "osama";
echo $normal . "<br />"; //print amaso
echo strrev($normal);

$str = "i love php so much because phph is famous and cool";
$piece = substr($str, 18, 12);// print from 18 and print only 12 letter
echo $piece;

$str = "i love php so much because phph is famous and cool";
$piece = substr($str, -6, 4);// print from the end of statement and count 4 from left
echo $piece;

$str = "i love php so much because phph is famous and cool";
$piece = substr($str, -7, -5);// print from the end and remove 5 letter from back
echo $piece;

$str = "i love php so much because php is cool and easy thats why php is the best";
$count = substr_count($str, "php", 10, 30); // start from 10 and count 30 and tell me how many php is here
echo $count;

$str1 = "hello osama";
$str2 = "osama";
echo substr_compare($str1, $str2, 0);

$str1 = "a osamazero";
$str2 = "osama";
echo substr_compare($str1, $str2, 2, 5);//from 2 and compare 5 letters

$str1 = "A osamaZero";
$str2 = "osama";
echo substr_compare($str1, $str2, 2, 5, true);//not sensitive and false sensitive


 