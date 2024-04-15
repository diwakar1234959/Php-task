<!DOCTYPE html>
<html lanh="en">
    <head>
        <style>
            .body{
    border: 2px solid black;
    text-align: center;
    margin-left: 300px;
    margin-right: 300px;
    margin-top:30px;
    padding: 10px;
    background-color: aliceblue;

}
.fm{
    font-size: larger;
    font-weight: 600;
    
    
}
h1{
    text-shadow: 2px 2px crimson ;
    
}
.submit{
    font-size:large;
    font-weight: bold;
    background-color: black;
    color: white;
}
section{
    margin-left:300px;
}
.file{
    border: 2px solid black;
    margin:50px;
  padding:10px;
}
img{
    align-items:left;
}
            </style>
        
</head>
    <body>
    <div class="body">
<h1>Update Form</h1><br>
<?php 
// print_r($hobbies);
                require_once "conn.php";
                $sql_query = "SELECT * FROM results WHERE id = ". $_GET["id"];
                // echo $sql_query;
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) { 
                        $id = $row['id'];
                        $name = $row['name'];
                        $gender = $row['gender'];
                        $no = $row['no'];
                        $date = $row['date'];
                        $grade = $row['class'];
                        $hobbies = explode(",",$row['hobbies']);
                        $lang = explode(",",$row['lang']);
                        $mark = $row['marks'];   
                        // $file = $row['files'];
            ?>
<form class="fm" action="up_data.php?id=<?php echo $id;?>" method="post"> 
    <label for="Fname">Full name:</label>
    <input type="text" class="fname" name="fname" value="<?php echo $name ?>" required><br><br>
    <label for="Gender">Gender:</label>
    <input type="radio" class="gender" name="gender" value="Male"<?php if($gender == "Male"){ echo "checked"; } ?> required>
    <label for= "male">Male</label>
    <input type="radio" class="gender" name="gender" value="Female"<?php if($gender == "Female"){ echo "checked"; } ?> required>
    <label for= "male">Female</label><br><br>
    <label for="number">Phone no:</label>
    <input type="tel" class="no" name="no" value="<?php echo $no ?>"><br><br>
    <label for ="date">DOB:</label>
    <input type="date" class="date" name="date" value="<?php echo $date ?>"  required><br><br>
    <label for="grade">GRADE:</label>
    <select class="grade" name="grade" required>
        <option value= "">Select a Grade</option> 
        <option value="Grade 6"<?php if($grade == "Grade 6"){ echo "Selected"; } ?> >Grade 6</option>
        <option value="Grade 7"<?php if($grade == "Grade 7"){ echo "Selected"; } ?> >Grade 7</option>
        <option value="Grade 8"<?php if($grade == "Grade 8"){ echo "Selected"; } ?> >Grade 8</option>
        <option value="Grade 9"<?php if($grade == "Grade 9"){ echo "Selected"; } ?> >Grade 9</option>
    </select><br><br>
    <label for="hobbies">Hobbies:</label>
    <select class="hobbies" name="hobbies[]" multiple>
        <option value="Cricket"<?php if(in_array("Cricket",$hobbies)){ echo "Selected"; } ?>>Cricket</option>
        <option value="Football"<?php if(in_array("Football",$hobbies)){ echo "Selected"; } ?>>Football</option>
        <option value="Gym"<?php if(in_array("Gym",$hobbies)){ echo "Selected"; } ?>>Gym</option>
        <option value="Books"<?php if(in_array("Books",$hobbies)){ echo "Selected"; } ?>>Books</option>
    </select><br><br>
    <label for="lang">Language:</label><br>
    <input type="checkbox" class="lang" name="lang[]" value="Tamil"<?php if(in_array("Tamil",$lang)){ echo "checked"; } ?> multiple>
    <label for="tamil">Tamil</label><br>
    <input type="checkbox" class="lang" name="lang[]" value="English"<?php if(in_array("English",$lang)){ echo "checked"; } ?> multiple>
    <label for="English">English</label><br>
    <input type="checkbox" class="lang" name="lang[]" value="Hindi"<?php if(in_array("Hindi",$lang)){ echo "checked"; } ?> multiple>
    <label for="Hindi">Hindi</label><br><br>
    
    <label for="marks">Marks:</label>
    <input type="number" id="mark" name="mark" value="<?php echo $mark ?>" required min="0"><br><br>
    <div class="file">
    <label for="file">Choose your file:</label><br>
    <img src="uploads/<?php echo $row["files"];?>" alt="Uploaded Image" width=50px height=50px><br>
    <input type="file" id="file" name="files" style="margin-left: 70px;" multiple><br><br>
                    </div>
    <input type="submit" name="submit" value="Submit" class="submit" ><br><br>      
</form>
<?php
                    }
                }
?>
</body>
    </html>
