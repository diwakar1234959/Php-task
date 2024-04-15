<?php

    require_once "conn.php";
    
    if(isset($_POST["submit"])){
      echo("hello");
      //die();
    //if(isset($_GET["id"]) && isset($_POST["fname"]) && isset($_POST["gender"]) && isset($_POST["no"]) && isset($_POST["date"]) && isset($_POST["grade"]) && isset($_POST["hobbies"]) && isset($_POST["lang"]) && isset($_POST["mark"]) && isset($_FILES["files"]["name"])){
        $id = $_GET['id'];
        $name = $_POST['fname'];
        $gender = $_POST['gender'];
        $no = $_POST['no'];
        $date = $_POST['date'];
        $grade = $_POST['grade'];
        $hobbies =implode(",",$_POST['hobbies']);
        $lang = implode(",",$_POST['lang']);
        $mark = $_POST['mark'];
         //$files = $_FILES['files'];
        $files =$_FILES["files"]["name"];
        // echo("hii");
        // die();
       
        
    


        $target_dir = "uploads/";
      if (is_dir($target_dir)) {
          echo "created";
         }
      else{
    echo "not created";
          }echo"<br>";
        
    
     $target_files = $target_dir . basename($_FILES["files"]["name"]);
     $uploadOk = 1;
     // echo"$target_files";
     $imageFileType = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));
    


    $check = getimagesize($_FILES["files"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  
  if ($uploadOk == 0) {
    echo "Sorry, your files was not uploaded.";
    $sql = "UPDATE results SET `name`= '$name',`gender`= '$gender', `no`= '$no', `date`= '$date', `class`= '$grade',`hobbies`= '$hobbies',`lang`= '$lang', `marks`= '$mark',`files`= '$files' WHERE id= $id";


        if ($conn->query($sql)==TRUE) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    
  
  } 
  else {
    $s = "SELECT files FROM results WHERE id=$id";
    $result = mysqli_query($conn,$s);
    $row = mysqli_fetch_assoc($result);
    $filesname = $row['files'];
    
    if (!files_exists($target_files)) {
    
      
    if (move_uploaded_files($_FILES["files"]["tmp_name"], $target_files)) {
      echo "The files ". htmlspecialchars( basename( $_FILES["files"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your files.";
    }

  }else{
    echo "success";
  }
  
  $files = $_FILES["files"]["name"];

        
        $sql = "UPDATE results SET `name`= '$name',`gender`= '$gender', `no`= '$no', `date`= '$date', `class`= '$grade',`hobbies`= '$hobbies',`lang`= '$lang', `marks`= '$mark',`files`= '$files' WHERE id= $id";


        if ($conn->query($sql)==TRUE) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    
    }
}
    //}
?>