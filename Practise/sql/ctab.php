<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practise";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Concection failed".$conn->connect_error);
}
else{
    echo "Connection Successfull";
}
echo "<br>";    
    

 $sql = "CREATE TABLE EMPLOYEE(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30)NOT NULL,lastname VARCHAR(30)NOT NULL)";

 $sql = "INSERT INTO EMPLOYEE(id,firstname,lastname)VALUES(1,'lalith','kumar')";

 if($conn->query($sql)==TRUE){  
    echo "table created";
 }
 else{
    echo "table not created".$conn->error;
 }
//  $conn-close();
?>                                                                                                  