<?php
copy('operator.php', 'operator_new.php');

if (!copy('operator.php', 'operator_new.php')) {
    echo "Sorry not copied";
} else {
    echo "file has been copied";
}

function copyme();