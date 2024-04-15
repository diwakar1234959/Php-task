<!-- <?php // basic array declaration and print 
$array =array(1,"String",["name","value"],true);
echo $array[3];
?> -->


<!-- <?php // indexed array
$array=array("volvo","bmw","audi");
$array[0]="swift";
var_dump($array);
echo "<br> $array[0] <br>";
foreach($array as $a){
    echo "$a <br>";
}
?> -->

<!-- <?php //associative array

$array = array(" <br> Name"=>"Diwakar <br>","Dept"=>"CSE <br>","Degree"=>"BE <br>","Company"=>"Fronseye <br>");
echo var_dump($array); // display array
echo $array["Company"]; //print index of particular array
$array["Name"]="DK <br>";// changing the array element

foreach($array as $a=>$b){ // to print each and every element of the array
    echo "$a=>$b";
}
?> -->

<!-- <?php // create and access array
$array=["<br> Name"=>"Diwakar <br>",
        "Dept"=>"CSE <br>",
        "Degree"=>"BE <br>",
        "Company"=>"Fronseye <br>"
    ];
    echo $array["<br> Name"];
echo var_dump($array);
 
$array1=[];
$array1["brand"]= "volvo";
$array1["bran"]="bmw";
echo var_dump($array1);



function myfunction(){
    echo "This is my time!!";
}
$array2= ["Datatype"=>"String","data"=>1,"dataty"=>myfunction()];
// $array2_push($array2,"dat","damn");

$array2 +=["dat"=>"damn"];
  echo $array2["dat"];
 

?> -->

<?php

$array = array(array("vovlo",23,34), // multidimentional array  
         array("bmw",21,34),
         array("audi",20,30),
);

for($row=0;$row<3;$row++){
echo "<th>Head</th>";
    echo'<table style="border: 2px solid black;border-collapse: collapse ;">';
    for($col=0;$col<3;$col++){
        
        echo '<td style="border: 2px solid black;border-collapse: collapse ;">'.$array[$row][$col].'</td>';
    }
    echo"</table>";
}

function myfunction1(){
    echo "This is my time!!";
}
// myfunction1();

$array2= ["Datatype"=>"String","data"=>1,"dataty"=> "myfunction1"];
// // $array2_push($array2,"dat","damn");

// // $array2 +=["dat"=>"damn","da" => "damm"];

// var_dump($array2)

echo "<pre>";
   call_user_func($array2["dataty"]);
?>  
