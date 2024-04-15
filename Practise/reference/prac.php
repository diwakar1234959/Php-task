<?php
// echo getcwd();
// echo closedir()
// $dir ="/Practise/";                  //directory topic
// if (is_dir($dir)){
//     if ($dh = opendir($dir)){
//       while (($file = readdir($dh)) !== false){
//         echo "filename:" . $Practise . "<br>";
//       }
//       closedir($dh);
//     }
//   }



// var_dump(is_countable([1, 2, 3])); // bool(true)
// echo"<br>";
// var_dump(is_countable(new ArrayIterator(['foo', 'bar', 'baz']))); // bool(true)\
// echo "<br>";
// var_dump(is_countable(new ArrayIterator())); // bool(true)
// echo"<br>";
// var_dump(is_countable(new stdClass())); // bool(false)


$str="Hello world is, the start";     // explode is used to separate the string
// print_r(explode(",",$str));
$str1 = ["arrat","atta","Attat"];
echo implode(",",$str);
?>
