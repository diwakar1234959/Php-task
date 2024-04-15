 <!-- <?php      // array declaring and accessing each array using for or for each loop
$array = [["no"=> 1,"Name"=>"Arun","Dept"=>"CSE"],
          ["no"=> 2,"Name"=>"Sam","Dept"=>"ECE"],
          ["no"=> 3,"Name"=>"Dass","Dept"=>"EEE"]
];          

$array1=array("volve","bmw","audi");
$array2=["safety","luxury","fastest"];


$arraylen=count($array);  // count the array length

for ($x=0;$x<$arraylen;$x++){
    echo $array[$x];
    echo "<br>";
}
echo "<br>";
foreach ($array as $x){
    echo $x;
    echo "<br>";
}

print_r(array_change_key_case($array,CASE_LOWER));

print_r($array); // array can be print using print_r function only or else we can use for or for each loop 

print_r(array_chunk($array,2,true));   // to divide the array into two (arrayname,separation count,preserve key)

$a=(array_column($array,"Dept"));      // to separate the columns of multidimenstional array into key and value pairs.
print_r($a);

$c=array_combine($array1,$array2);     // combining the two arrays into key and value pair
print_r($c);

$c= array_count_values($array1);       //  count the same values in the array
print_r($c);

$array3=array("feature"=>"safety","featu"=>"luxury","feat"=>"fastest");
$array4=array("fea"=>"safety","feat"=>"luxury","fet"=>"fastest","fe"=>"slowest"); 

$c=array_diff($array4,$array3);   // check and print the different pair of value in the array
print_r($c);                      // where array_diff_assoc function compare both key and values.

$array1=array_fill(3,4,"Rolls Royce");    // fill the array with the specified value.
print_r($array1);                         // array_fill_keys() in this we fill the arrays key only.


function array_call($var){
    return($var & 1);

}                   
$array=[1,2,1,3,2,4];
print_r(array_filter($array,"array_call"));

$result = array_flip($array3);
print_r($result);


$array = ["volvo"=>"brand",240 =>"speed","Fuel"=>"Diesel"];
print_r(array_keys($array));

if(array_key_exists("volvo",$array)){
    echo "It is correct";
}
else{
    echo "it is not correct";
} 

function call($v){
    return ($v*$v);               // array_map() using the call function
}
print_r(array_map("call",$array));

?> 

<?php
$car=array("volvo","bmw","audi");
echo "HI";
if(in_array("volvo",$car)){
    echo "correct";
}
else{
    echo"not correct";
}
?> -->

<?php

 echo "Study" .$_GET["subject"]."at" .$_GET["web"];
   
?>                                                      