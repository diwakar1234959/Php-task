<?php
class sta{
    protected static function stas(){
             return  "Hello world";
    }
}
class stat extends sta{
    public $name;
    public function __construct(){
        $this->name = parent::stas();
    }
}
$obj= new stat();
echo $obj->name;

?>

<?php 
class ap{
public static $value= 1.2442;

public function api(){
    echo self::$value;
}
}
$obj = new ap();
$obj->api();
   
?>