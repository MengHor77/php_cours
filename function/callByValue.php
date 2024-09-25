<?php  
function function_name($old) {
    $old = "old";
    echo  $old . " function" . "<br/>";
}

$new = "new function";

echo function_name($new); // output : old funtion 

echo $new ; // out put : new funtion 

?>
