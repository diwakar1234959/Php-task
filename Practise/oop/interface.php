<?php
 interface interfacename{
    public function sound();

    }
    class cat implements interfacename{
        public function sound(){
        echo "meow";
    }
}   
 $animal = new cat();
 $animal->sound();
?>

<?php
interface interfacename1{
    public function sound();

    }
    class cat1 implements interfacename1{
        public function sound(){
        echo "meow";
    }
}   

class dog implements interfacename1{
    public function sound(){
    echo "bark";
}
}   

class cow implements interfacename1{
    public function sound(){
    echo "moww";
}
}   


$cat = new cat1();
$dog = new dog();
$cow = new cow();

$animals=array($cat,$dog,$cow);

foreach($animals as $animal){
    print_r($animal->sound());
}
?>