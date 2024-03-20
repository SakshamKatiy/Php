<?php
$marks = 80;
if($marks>=60 && $marks <= 100){
    echo 'first class';
}
elseif($marks>=50 && $marks<60){
    echo "second class";
}
elseif($marks>=40 && $marks<50){
    echo "pass";
}
elseif($marks>=0 && $marks<40){
    echo 'fail';
}

echo '<br>';
$age = 11;
$cond = $age>18? "you can vote":"you are not eligble";
echo ($cond);

echo '<br>';
echo "for loop";
echo '<br>';

for($a=0;$a<11;$a++){
echo 'working <br>';}

?>