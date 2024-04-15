<?php
function callback($item){
    return strlen($item);
}
echo "<pre>";
$str= ["apple","banana","cake","orange"];
$len = array_map("callback",$str);
print_r($len);
echo  "</pre>";

?> 

<br><br>

<?php 

echo "<pre>";
$str1= ["apple","banana","cake","orange"];
$len1 = array_map(function($item){
    return strlen($item);
}, $str1);
print_r($len1);


?>

<br><br>    

<?php


function one($int){
    return $int."1";
}

function two($int){
    return $int."2";
}

function call($int,$call){
    echo $call($int);
}

call(1,"one");
echo "<br>";
call(2,"two");
?>