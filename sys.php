<?php
$name = 'sarah';

if (is_dir($name)) {

    rmdir($name);

    echo 'the directory' . $name . 'is deleted';

} else {
    
    echo 'there is no directory with this name' . $name;

}


