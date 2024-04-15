<?php
$array = ["P1"=>"Jagan","P2"=>"Ram","P3"=>"Sunil","P4"=>"Dass"]; // object into json object

print_r (json_encode($array));

echo "<br>";
$array = ["Jagan","Ram","Sunil","Dass"]; // array into json array

print_r (json_encode($array));
?>

<br> 

<?php 
$array ='{"P1":"Jagan","P2":"Ram","P3":"Sunil","P4":"Dass"}';  // json object into json array

var_dump(json_decode($array));

echo "<br>";

$array3 = '{"P1": "1","P2": "2","P3": "3","P4": "4"}';  // same as above

$obj= json_decode($array3);

echo $obj->P1;    // accessing each key of the obj using ->
echo $obj->P2;
echo $obj->P3;

echo "<br>";
$array4 = '{"P1": "1","P2": "2","P3": "3","P4": "4"}';

$obj= json_decode($array4,true);   // convert into associative array

echo $obj["P1"] ."<br>";   

foreach($obj as $x=>$y){      // to print every array element use foreach loop
    echo $x ."=>".$y;
}

echo "<br>";

$array1 ='{"P1":"Jagan","P2":"Ram","P3":"Sunil","P4":"Dass"}';   // to convert json obj into associative

var_dump(json_decode($array1,true));

?>