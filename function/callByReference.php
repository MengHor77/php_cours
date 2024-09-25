<?php

 $n1 = "hello";
 $n2 = &$n1;
echo $n2 . "</br>";
?>


<?php
function function_name(&$old){
    $old = "old funtion ";
    echo $old ;
}
$new = "new function";
echo function_name($new)  . "</br>" ; // output old function 
echo $new ;   // output new function 

?>