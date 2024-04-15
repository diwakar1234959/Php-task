<?php


require_once "conn.php";
// echo $_POST["submit"];
if(isset($_POST["submit"])){ 
  
    $name = $_POST["fname"];
    $gender = $_POST["gender"];
    $no = $_POST["no"];
    $date = $_POST["date"];
    $grade = $_POST["grade"];
    $hobbies =implode(",",$_POST["hobbies"]);
    // echo "$hobbies";  
    $lang = implode(",",$_POST["lang"]);
    $mark = $_POST["mark"];

    // $files = $_FILES['file']['name'];

    // print_r($_FILES["file"]["name"]);
    // print_r($_POST);
    // die("msg");

    
    // $total_files = count($_FILES['files']['name']); to count the uploaded files

    // $last_uploaded_file_index = $total_files - 1;
    $target_dir = "uploads/";
      if (is_dir($target_dir)) {
          echo "created";
         }
      else{
    echo "not created";
          }echo"<br>";
     $target_file = $target_dir . basename($_FILES["file"]["name"]);
     $uploadOk = 1;
    // echo"$target_file";
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    


    $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  
  } else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  
  $files = $_FILES["file"]["name"];

    if(!$name== "" && !$gender=="" && !$no=="" && !$date=="" && !$grade=="" && !$hobbies=="" && !$lang=="" && !$mark=="" && !$files==""){
        $sql = "INSERT INTO results(`name`,`gender`,`no`,`date`,`class`,`hobbies`,`lang`,`marks`,`files`)VALUES ('$name','$gender','$no','$date','$grade','$hobbies','$lang','$mark','$files')";

        if($conn->query($sql)==TRUE){
            header("location:index.php");
        }
        else{
            echo "Something went wrong".$conn->error;
        }
    }else{
        echo "Field Cannot be empty";   
    }
}
?>