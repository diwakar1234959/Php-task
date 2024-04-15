< <?php
class fruit{                         // declaring of class
    public $name;
    public $color;


    function set_name($name){              // set keyword is used to set properties
        $this->name =$name; 
    }
    function get_name(){                 // get keyword is used to get the value
          return $this->name;
    }
    function set_color($color){
        $this->color =$color; 
    }
    function get_color(){
          return $this->color;
    }
}   
   $apple = new fruit();                          // object creation
   $banana = new fruit();
   $apple->set_name('Apple');                    // set the value
   $banana->set_name('Banana');
   $apple->set_color('Red');
   $banana->set_color('Yellow');

   echo $apple->get_name();                      // getting the value by echo
   echo "<br>";
   echo $banana->get_name();

echo "<br>";

    echo $apple->get_color();
    echo "<br>";
   echo $banana->get_color();


?> 

 <?php

class fruit1{
    public $name;

}
$apple1= new fruit1();

var_dump($apple1 instanceof fruit1);     // to check object is instance of class
$apple1->name = 1;

echo( $apple1->name);

?> 

<?php
class Fruit2{

    public $name;
    public $color;

    function __construct($name,$color){       // constructor is used to when obj is created it is called directly
        $this->name= $name;
        $this->color= $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

    $apple = new Fruit2("Apple","red");
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();



?> 

<?php

class Fruit3{

    public $name1;
    public $color2;

    function __construct($name1,$color1){
        $this->name1= $name1;
        $this->color1= $color1;
    }
    function __destruct(){                          // destruct function is print when at the end of the script
        echo" {$this->name1} {$this->color1}";
    }
}


    $apple = new Fruit3("apple","red");




?>