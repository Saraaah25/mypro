<?php

foreach ( filter_list() as $filter ) {

    echo $filter . '<br>';

}

?>
 <form action="chk.php" method="post">
     <h3>enter your pin code: only numbers allowed</h3>       
     <input type="text" name="test" >
     <input type="submit" value ="send" >

</form>