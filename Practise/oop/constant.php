<?php
//  class constant{
//     const LEAVING = "THANK YOU FOR COMING";    //const is used in the case not the value cannot be changed
//  }
//  echo constant::LEAVING;  // scope resolution operator(::) is used for that
?>

<?php
 class constant{
    const LEAVING = "THANK YOU FOR COMING";

    public function bye(){
       echo self::LEAVING;     // in case of accessing within the class we can use self 
        
    }
 }
 $goodbye = new constant();
$goodbye->bye();
 
?>
