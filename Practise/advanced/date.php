<?php
require('C:\xampp\htdocs\Practise\reference\form.php');  // include and require include()--continue the program when error raise
?>

<?php
echo "Today date is ". date("d/m/Y");   //to find the current date
echo "<br>";
echo "Today is ".date("l") .'<br>';     //to find the current day
echo date("Y") ."<br>"; 

echo date("h:i:sa")."<br>";    // to get current server time

date_default_timezone_set("Asia/Kolkata");   //to get the current time using time zone format
echo date("H:i:sa") ."<br>";

$d =  mktime(11,07,45,3,15,2024);     //to set month and time using variables
echo date("Y-m-d h:i:sa", $d)."<br>";

$date = strtotime("11:33am March 15 2024");
echo date("Y-m-d h:i:sa",$date)."<br>";

$date1 = strtotime("next day");            // php in built date functions
echo date("Y-m-d h:i:sa",$date1)."<br>";
$date2 = strtotime("next sunday");
echo date("Y-m-d h:i:sa",$date2)."<br>";
$date3 = strtotime("+3 Months");
echo date("Y-m-d h:i:sa",$date3)."<br>";


?>
