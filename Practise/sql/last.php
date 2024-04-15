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

$sql = "INSERT INTO EMPLOYEE(id,firstname,lastname)VALUES(3,'la','kumar');";
$sql .= "INSERT INTO EMPLOYEE(id,firstname,lastname)VALUES(4,'l','kumar');";
$sql .= "INSERT INTO EMPLOYEE(id,firstname,lastname)VALUES(5,'li','kumar')";

if($conn->multi_query($sql)==TRUE){                //multiple query adding we use multi_query
    $last_id= $conn->insert_id;
    echo " new record added  ".$last_id;
}
else{
    echo    $sql."no record added" .$conn->error;
}
?>