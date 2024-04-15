<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn =new mysqli($servername,$username,$password);    // using mysqli object oriented method

  if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
  }
  else{
    echo "Connected Successfully";
  }
?>


<?php 

$servername ="localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password);   // using mysqli procedural method

if(!$conn){
  die("Conncetion failed:".mysqli_connect_error());
}
else{
  echo "Connceted Successfully";
}
?>

<?php
$servername="localhost";
$username= "root";
$password= "";

try{
  $conn = new PDO("mysql:host=$servername;",$username,$password);

  $conn->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>

