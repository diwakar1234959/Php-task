<?php     // create cookies / retrive

$cookie_name = "user";
$cookie_value = "david billa";
setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");  //86400 = 1day

if(!isset($_COOKIE[$cookie_name])){
    echo $cookie_name;
}
else{
    echo $cookie_name ."<br>";
    echo $_COOKIE[$cookie_name];
}
?>

<?php

echo "<br>";
setcookie("user","",time() - 3600);   //delete the cookie

echo "cokkie is deleted";                   
?>

<?php
setcookie("test_cookie","test",time() + 3600,'/');
 echo "<br>";   
if(count($_COOKIE)>0){
    echo "Cookies are enabled";
}
else{
    echo "Cookies are disabled";
}


?>