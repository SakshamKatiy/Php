<?php
function sample()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
}
sample(3,4,6,5,"sak",null,true)
?>