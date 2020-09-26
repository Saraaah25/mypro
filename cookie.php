<?php

setcookie("zero", "test", time() + 3600, "/");
// setcookie(name, value, expire, path, domain, secure, httponly)
/*
   name: name of the cookie
   value: content of the cookie
   expire:expiration date (3600 one hour) (86400 one day)
   secure: true or false


*/
if (count($_COOKIE) > 0) {

    sleep(5);

    echo " good the cookie is enable";

} else {
     
    "sorry the cookies is not enable";
}

$random = uniqid('script1_', TRUE);
echo $random . '<br>';
var_dump($random);

exit(); 

$name = "sarah";
echo $name;