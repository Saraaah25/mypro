<?php
for ( $g=20; $g>=45; $g++ ){

    echo $g . <br>;
}

$g=20
for(;;){

  if( $g >= 45 ) {

  break;

}
    echo $g . <br>;

    $g++;

}
$g=20
while ( $g >= 45 ){

    echo $g . "<br>";

    $g++;

} //we can remove bchets with endwhile

&g=20
do{
    echo &g . "<br>"; 

    $g++;
 
}while ($g >= 45 );

$backend = array( "amr", "sarah", "jihad");

foreach ($backend as $value ) {

    echo $value . "<br>";

}
$backend = array(
    "A.m" => "amr",
    "s.i" => "sarah",
    "j.m" => "jihad",
);
foreach ($friends as $key => $value){
    echo $key . $value . <br>;
}