<?php
// class fruit{
// public $name;
// public $color;

// public function __construct($name,$color){
//     $this->name =$name;
//     $this->color = $color;
// }
// public function intro(){
//     echo "{$this->name} {$this->color}";
// }

// }

// class strawberry extends fruit{     // inheritance is used to access the property and method of parent class using extends keyword    
//     public function message(){
//         echo "am i a fruit";
//     }
// }

// $straw = new strawberry("Strawberry","Pink");
// $straw->message();
// echo"<br>";
// $straw->intro();
?>

<?php
// class fruit{
//     public $name;
//     public $color;
    
//     public function __construct($name,$color){
//         $this->name =$name;
//         $this->color = $color;
//     }
//     protected function intro(){   // protected can be exectued outside of the class
//         echo "{$this->name} {$this->color}";
//     }
    
//     }
    
//     class strawberry extends fruit{
//         public function message(){
//             echo "am i a fruit";
//             echo"<br>";
//             $this->intro();
//         }
        
//     }
    
//     $straw = new strawberry("Strawberry","Pink");
//     $straw->message();
?>

<?php
class fruit{
    public $name;
    public $color;
    
    public function __construct($name,$color){
        $this->name =$name;
        $this->color = $color;
    }
    public function intro(){        // using final keyword we can prevent the overriding
        echo "{$this->name} {$this->color}";
    }
    
    }
    
    class strawberry extends fruit{
        public $weight;
        public function __construct($name,$color,$weight){
            $this->name =$name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function intro(){
            echo "{$this->name}{$this->color}{$this->weight}";
        }
        
    }
    
    $straw = new strawberry("Strawberry","Pink",50);
    $straw->intro();

?>
