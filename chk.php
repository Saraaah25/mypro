<?php

  $input = $_POST['test'];

  $opt = array(

    'options' => array(
         'min_range' => 1,
         'max_range' => 999

    ),
    'flags' => FILTER_FLAG_IPV4

    );

 if (filter_var($string, FILTER_VALIDATE_INT) !== FALSE ) {

    echo 'Good the' . $input . 'is from 1-999';

 } else {

    echo 'sorry the' . $input . 'must be between 1-999';

 }
  

 
 if (filter_var($string, FILTER_VALIDATE_IP,  FILTER_FLAG_IPV4 ) !== FALSE ) {

    echo 'Good the' . $input . 'is IP version 4';

 } else {

    echo 'sorry the' . $input . 'is not IP version 4';
