<?php
// $servername = "localhost";
// $username ="root";
// $password = "";
// $dbname = "practise";

// $conn = new mysqli($servername,$username,$password,$dbname);

// if($conn->connect_error){
//     die("connection failed".$conn->connect_error);
// }
// else{
//     echo "connection success";
// }
// $sql  = "SELECT * FROM EMPLOYEE";
// $result =$conn->query($sql);

// if($result->num_rows>0){
//     while ($row = $result->fetch_assoc()){
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// }
// else{
//     echo "0";
// }
// $conn->close();
?>

<html>
    <head>
        <style>
            table, th, td {
    border: 1px solid black;
}

            </style>
</head>
    <body>

</body>
    </html>

<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "practise";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
else{
    echo "connection success";
}
$sql  = "SELECT * FROM EMPLOYEE Where lastname='kumar'order by firstname";  x //where clause to used and order by to used
$result =$conn->query($sql);

if($result->num_rows>0){
    echo "<table><tr><th>ID</th><th>Name</th></tr><table>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
 
    }
    
echo "</table>";
}
else{
    echo "0";
}
$conn->close();


// $result = $conn->query($sql);
// if($result->num_rows()>0){       // procedure to select data from db
//     while ($row = $result-fetch_assoc()){

//     }
}
?>