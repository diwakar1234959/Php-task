<?php 
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "practise";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
else{
    echo "Connection done";
}

$stmt = $conn->prepare("INSERT INTO EMPLOYEE(id,firstname,lastname)VALUES(?,?,?)");
$stmt->bind_param("iss",$id,$firstname,$lastname);


$id = 6;
$firstname = "hshdh";
$lastname = "fsgrs";
$stmt->execute();



$id = 7;
$firstname = "ebrb";
$lastname = "ffber";
$stmt->execute();




$id =8 ;
$firstname = "sgbfbg";
$lastname = "bstg";
$stmt->execute();

echo "new record submitted successfully";

$stmt->close();
$conn->close();

?>