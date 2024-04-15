<?php

echo readfile("webdic.txt")."<br>";  // open adn read the file but it is not a better way
 
echo "<br><br>";

$file = fopen("webdic.txt","r+")or die("unable to open");   //to open file we use fopen function 
echo fread($file,filesize("webdic.txt"));                   //to read file we use fread function 
fclose($file);

echo "<br><br>";

$myfile = fopen("webdic.txt","r")or die("unable to open");
echo fgets($myfile);
fclose($myfile);

echo"<br><br>";

$myfile1 = fopen("webdic.txt","r")or die("unable to open");
while(!feof($myfile1)){
    echo fgets($myfile1)."<br>";
}
fclose($myfile1);

$myfile2 = fopen("webdic.txt","r")or die("unable to open");
while(!feof($myfile2)){
    echo fgetc($myfile2)."<br>";    
}
fclose($myfile2);


$file1 = fopen("newtext.txt","a")or die("unable to open");    // create and write and update file using 
$txt = "mickey mouse";
fwrite($file1,$txt);
$txt1 = "donald duck";
fwrite($file1,$txt1);
fclose($file1);
    
?> 
