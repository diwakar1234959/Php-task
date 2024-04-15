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
.file-input-background {
            margin-left:188px;
            margin-right:100px;
            width: 200px;
            height: 100px;
            background-size: cover;
            background-position: center;
            cursor: pointer; /* Add cursor pointer to indicate clickability */
            border: 1px solid none; /* Add border for visual clarity */
        }
            </style>
        
</head>
    <body>
        
        
    
    <div class="body">
    <?php 
    require_once('conn.php');
    $sql = "SELECT hobbies_name FROM hobbies";
    
    $result = mysqli_query($conn,$sql);

    

    while($row = mysqli_fetch_assoc($result)){
        $options[] = $row;
    }


// echo '<pre>';
//     print_r($options); 
// echo'</pre>';

mysqli_close($conn);

    ?>
          
            
<h1>Student Form</h1><br>
<form class="fm" method="post" action="adddata.php" enctype="multipart/form-data"> 
    <label for="Fname">Full name:</label>
    <input type="text" class="fname" name="fname" required><br><br>
    <label for="Gender">Gender:</label>
    <input type="radio" class="gender" name="gender" value="Male" required>
    <label for= "male">Male</label>
    <input type="radio" class="gender" name="gender" value="Female"required>
    <label for= "male">Female</label><br><br>
    <label for="number">Phone no:</label>
    <input type="tel" class="no" name="no"><br><br>
    <label for ="date">DOB:</label>
    <input type="date" class="date" name="date" required><br><br>
    <label for="grade">GRADE:</label>
    <select class="grade" name="grade" required>
        <option value= "">Select a Grade</option> 
        <option value="Grade 6" >Grade 6</option>
        <option value="Grade 7" >Grade 7</option>
        <option value="Grade 8" >Grade 8</option>
        <option value="Grade 9" >Grade 9</option>
    </select><br><br>
    <label for="hobbies">Hobbies:</label>
    <select class="hobbies" name="hobbies[]" multiple>
    <?php  foreach($options as $option):?>
        <option value="<?php echo $option['hobbies_name'];?>"><?php echo $option['hobbies_name'];?></option>
    <?php endforeach; ?>
    </select><br><br>
    <label for="lang">Language:</label><br>
    <input type="checkbox" class="lang" name="lang[]" value="Tamil" multiple>
    <label for="tamil">Tamil</label><br>
    <input type="checkbox" class="lang" name="lang[]" value="English" multiple>
    <label for="English">English</label><br>
    <input type="checkbox" class="lang" name="lang[]" value="Hindi" multiple>
    <label for="Hindi">Hindi</label><br><br>
    <label for="marks">Marks:</label>
    <input type="number" id="mark" name="mark" required min="0"><br><br>
    <label for="file">Choose your file:</label>
    <input type="file" id="fileInput" name="file" hidden><br><br>
    <div id="fileInputBackground" class="file-input-background"></div><br><br>
    <input type="submit" name="submit" value="Submit" class="submit" ><br><br>   
</form>

            </div>
            
            <script>
        document.addEventListener('DOMContentLoaded', function() {
            var fileInput = document.getElementById('fileInput');
            var fileInputBackground = document.getElementById('fileInputBackground');

            fileInputBackground.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function() {
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        fileInputBackground.style.backgroundImage = "url('" + e.target.result + "')";
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                }
            });
        });
    </script>
</body>
    </html>
