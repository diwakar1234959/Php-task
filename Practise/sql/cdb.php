<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
//  $conn = new mysqli($servername,$username,$password);

//  if($conn->connect_error){
//     die("Connecton failed:".$conn->connect_error);
//  }
//  else{
//     echo "Connected Successfully";
//  }

//  $sql = "CREATE DATABASE mydb3";   // creating the database using object method
//  if($conn->query($sql)==TRUE){
//     echo "Database is created";
//  }
//  else{
//     echo "Database is not created" . $conn->error;
//  }
//  $conn->close();

?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = mysqli_connect($servername,$username,$password);

// if(!$conn){
//     die("Connection failed:".mysqli_connect_error());
// }
// else{
//    echo "Connected Successfully";
// }
// $sql = "CREATE DATABASE mydb1";
// if(mysqli_query($conn,$sql)){
//    echo "Database is created";
// }
// else{
//    echo "Database is not created". mysqli_error($conn);
// }
// mysqli_close($conn);
?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = mysqli_connect($servername,$username,$password);

// if(!$conn){
//    die("Connection Failed".mysqli_connect_error());
// }
// else{
//    echo "Connected Successfully";
// }

// $sql = "CREATE DATABASE my";

// if(mysqli_query($conn,$sql)){
//    echo "Database created";
// }
// else{
//    echo "Database not created".mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
   die("Connection Failed".$conn->connect_error);
}
else{
   echo "Connected Successfully";
}

$sql = "CREATE DATABASE myd1";

if($conn->query($sql)==TRUE){
   echo "Database created";
}
else{
   echo "Database not created".mysqli_error($conn);
}
$conn->close();
?>