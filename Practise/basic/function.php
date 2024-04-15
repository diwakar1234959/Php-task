<!-- <?php  // creating a function 
function myfunction(){
    echo "This is my time!!";
}
$string = "Damn it";
myfunction($string);   // to call  a function
echo $string;
?> -->

<!-- <?php  // creating a function and assign arguments
function myfunction1($string,$num){
    echo "$string,$num";
}
$string = "Damn it";
myfunction1("dsgm",1);
myfunction1("dsgm",1);
myfunction1("dsgm",1);

?> -->

<!-- <?php

function myfunction2($arg=10){   // default arguments 
    echo $arg."<br>";
}
myfunction2(350);
myfunction2(10);
myfunction2();

?> -->

<!-- <?php
function add($x,$y){    // returning function 
            //  $x= 10;
            //  $y=20;
             $z = $x + $y;
             return $z;
}
print_r(add(5,4));

?> -->

<!-- <?php declare(strict_types=1); // strict types makes code check annd must declare in the first line of php code

function php(&$x) : int{  //  passing arguments by reference  and checking datatype using : 
    $x+=10;
    return $x;
}
$num = 20;
php($num);  
echo $num;                                                  

?> -->