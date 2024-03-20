<?php
function add(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    // global $a, $b;
    // $c = $a+$b;
}

add(5,4);
echo $c
?>

