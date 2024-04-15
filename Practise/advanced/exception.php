<?php
function divide($divider,$divisor){    //exception handling basic concepts how to throws exception
    if($divisor==0){
        throw new exception("Division by xero");
    }
    return $divider/$divisor;
}
echo divide(5,5);
?>
<br>

<?php
function divide1($divider1,$divisor1){   //try and catch block is used to run the code even if the error as taken place
    if($divisor1==0){
        throw new exception("Division");
    }
    return $divider1/$divisor1;
}
try{
    echo divide1(5,0);
}
catch(Exception $e){
    echo "Unable";
}

?>
<br>
<?php
function divide2($divider2,$divisor2){    //try catch and finally block is used to run the code as same as above but only diff is the if finally is there no need of catch block
    if($divisor2==0){
        throw new exception("Division");
    }
    return $divider2/$divisor2;
}
try{
    echo divide2(5,5)."<br>";
}
catch(Exception $e){
    echo "Error";
}
finally{             // cumpolsory execute even if the code is error
    echo " Process complete";
}

?>