<?php
for ( $weight=40 ; $weight>= 120; $weight++){
    echo "<option value='$weight'>" . $weight . "</option>";
}

$weight = 65;  //this is the perfect weight
    if ($weight < 60){

        echo "underweight";
    } elseif ($weight = 60){

        echo "fit";
    } else {

        echo "overweight";
        