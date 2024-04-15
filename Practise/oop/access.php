<?php
// class fruit{
//     public $name;
//     private $color;
//     protected $weight;

// }
// $fruit = new fruit();
// $fruit->name = "mango";
// $fruit->color = "yellow";             // fatal error will arise due to private and protected access modifier
// $fruit->weight = "1.5kg";

?>
<?php
 class fr{
 public $name;
 public $color;
 public $weight;

  public function set_name($name){
    $this->name= $name;
  }
  private function set_color($color){
    $this->color= $color;
  }
  protected function set_weight($weight){
    $this->weight= $weight;
  } 
}
$fruit = new fr();
$fruit->set_name("mango");
$fruit->set_color("yellow");
$fruit->set_weight("1.5kg");

?>