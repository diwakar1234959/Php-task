<!-- <?php    //$GLOBALS pr global

$x = 35;

function call($y){
    
    // $GLOBALS ['x'];
    // echo $GLOBALS['x'] + $y;
    global $x;
    echo $x+$y;

}
call(15);


?> -->

<!-- <?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?> -->

<!-- <!DOCTYPE html>
<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>



<?php 
if( $_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST['fname'];
    if (empty($name)){
        echo "Name is empty";
    }
    else{
        echo $name;
    }
}
?> -->
</body> 
</html>


<!-- <!DOCTYPE html>
<html>
    <body>
        <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
            <label for="name" >Name:</label>
            <input type="text" name= "fname" >
            <input type="submit">
</form>


<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $name = $_REQUEST['fname'];
    if(empty($name)){
        echo "Name is empty";
    }
    else{
        echo $name;
    }

}

?>
</body>
</html> -->

<?php
$string1 =" visit W3Schools";
$string2 ="/w3schools/i";

// var_dump($Wtring1);
// var_dump($string2);

 echo preg_match($string2,$string1) ."<br>";
 echo preg_match_all($string2,$string1) ."<br>";
 echo preg_replace($string2,"Microsoft",$string1);

?>
