<?php
echo min(3,-3,5,2,7);
echo '<br>';
echo 'Floor:',floor(13.3);
echo '<br>';
echo 'Ceiling:', ceil(13.3);
echo '<br>';
echo 'Round:', round(13.3);
echo '<br>';
echo 'Absolute:', abs(13.3);
echo '<br>';
echo 'Random no. between:',rand(5,10);

echo '<br>';
$a = 90;
$b = deg2rad($a);
echo sin($b);

echo '<br>';

// Function overloading : The same function is used for different purposes based on the number of arguments inside the fuction.

// class MainClass{
//     Public function ShowTitle($p1){
//         echo "this is function 1";
//     }
//     public function ShowTitle($p1,$p2){
//         echo " this is overloading";
//     }

// }

// $obj = new MainClass;
// $obj -> ShowTitle("Hello");




// Function overriding : While in function overriding , the same name and same argument function is used in parent and child class respectively to change the behavior of parent class method.

class Base{
    function display(){
        echo "\nfunction declared";
    }
    function demo(){
        echo "\nBase class Function";
    }
}
class Derived extends Base{
    function demo(){
        echo "\nDerived class function!";
    }
}
$obj = new Base;
$obj -> demo();
echo '<br>';
$obj ->display();
$ob2 = new Derived;
echo '<br>';
$ob2 -> demo();
echo '<br>';
$ob2 -> display();


// Call a funtion by reference
echo '<br>';
function sample(&$str){
    $str.=  "this is sample";
}
$str1 = "changed by refrence";
sample($str1);
echo '<br>';

echo $str1;
echo '<br>';

// Encrypt of password
$password = "sam";
$hash = password_hash($password,PASSWORD_DEFAULT);
echo $hash;
echo '<br>';

// Sorting of array

// ascending order sorting
$sort = array("sak","karan","Sam");
sort($sort);

// descending order rsort();
// asort() ascending sorting in terms of value;
// ksort() ascending sorting in terms of key;
// arsort() descending sorting in terms of value;
// krsort() descending sorting in terms of key;


?>
