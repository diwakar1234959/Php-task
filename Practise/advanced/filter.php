<html>
    <head>

    <style>
        table, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 2px;
}
    
    </style>

</head>  

<body>
    <table>
<tr>
    <td>Filter name</td>
    <td>Filter ID</td>
</tr>
<?php
foreach(filter_list() as $id=>$filter){                            // filter list method is use to list what php extension offers
       echo '<tr><td>' . $filter .'<td>'.filter_id($filter). '</tr>'; 
}
?>
</table>


</body>
</html>

<br>

<?php
$str="<h1>Hello Everyone</h1>";                     // filter the string using the filter_var function
echo filter_var($str,FILTER_SANITIZE_STRING);
?>

<br><br>

<?php
$int = 1100;

if(!filter_var($int,FILTER_VALIDATE_INT)=== false){   // it is use to validate the int using filtervar function and validate
    echo "Integer is valid";
}
else{
    echo "Integer is not valid";
}
?>

<br><br>
<?php
$int = 0;

if(filter_var($int,FILTER_VALIDATE_INT)== 0 || !filter_var($int,FILTER_VALIDATE_INT)=== false){   // it is use to validate the int is 0 using filtervar function and validate
    echo "Integer is valid";
}
else{
    echo "Integer is not valid";
}
?>

<br><br>

<?php
$email="fkdn@gmail.com";

if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false){  // check the email
    echo "Email is correct";
}
else{
    echo "Email is not correct";
}


?>

<br><br>

<?php
$IP="172.0.0.1";

if(!filter_var($IP,FILTER_VALIDATE_IP)===false){     // check the ip
    echo "IP is correct";
}
else{
    echo "IP is not correct";
}


?>


<br><br>

<?php

$url= "http://localhost/PRactise/advanced/filter.php  ";

$s=filter_var($url,FILTER_SANITIZE_URL);

echo $s;


?>