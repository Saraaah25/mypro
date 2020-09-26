<?php

$pagename= "osama";

include "global.php"; //print what in pagename file in this page
include_once "global.php"; //one time only
echo $pagename;

 
require"global.php";//the same of include but if there is an error you cant complete
require_once "global.php";


$browser = "Google Chrome";

switch($browser) {
  case "firefox": //and i can put more than case
  echo "Your favorite Browse is firefox";
  break;
  
  case "Google Chrome":
  echo "Your favorite Browse is Google chrome this is the best";
  break;
  
  case "opera":
  echo "Your favorite Browse is opera";
  break;
  
  default:
  echo "Your favorite Browse is not here";

}


$file = 'globals.php';
if (file_exists($file)) {
  echo 'good the file [' . $file . ' ] is found';
  file_put_contents($file, 'added with php file put contents but i created it with php');
} else {
  echo 'sorry the file [ ' . $file . ' ] is not found';
  file_put_contents($file, 'created it with php');
}


$file = 'globals.php';
if (is_writable($file)) {
  echo 'good the file [' . $file . ' ] is writable';
  file_put_contents($file, 'the file is writable');
} else {
  echo 'sorry the file [ ' . $file . ' ] is not writable';
  file_put_contents($file, 'created by php');
}

$name = "sarah";

mkdir($name);

echo 'the directory' . $name . 'is created';

copy('operator.php', 'operator_new.php');

if (!copy('operator.php', 'operator_new.php')) {
    echo "Sorry not copied";
} else {
    echo "file has been copied";
}

function copyme();
