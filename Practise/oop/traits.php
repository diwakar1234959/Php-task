<?php

 trait msg1{
    public function message(){
        echo "OOP is fun";
    }
 }
 trait msg2{
    public function message1(){
        echo"OOP make code reusablity";
    }
 }

 class msg{
    use msg1;
 }
 class msgs{
    use msg1,msg2;
 }

$obj= new msg();
$obj->message();
echo "<br>";
$obj1= new msgs();
$obj1->message1(); 
echo"<br>";
$obj1->message();
?>