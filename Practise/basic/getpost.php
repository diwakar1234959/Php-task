<!-- <html>
    <body>

    <a href="getpost.php?subject=microsoft&web=web">Get Link</a>
</body>
    </html>

<?php 


 echo "Study" .$_GET["subject"]."at" .$_GET["web"];
   
?> -->

<html>
    <body>
    <?php 
    $name = $Id = $gender = $text = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test($_POST["fullname"]);
        $Id = test($_POST["IDno"]);
        $gender = test($_POST["gender"]);
        $text = test($_POST["text"]);
    }
    function test($data){
        // $data =trim($data);
        return $data;
        
    }
    ?>


        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name" value="name">Name:</label>
        <input type="text" class="name" name="fullname"><br><br>
        <label for="ID number" value="no">ID number:</label>
        <input type="number" class="no" name="IDno" min="0"><br><br>
        <label for="Gender" class="gender">Gender:</label>
        <input type="radio" class="gender" name="gender" value="male"   >
        <label for="gender" value="male">Male</label>
        <input type="radio" class="gender" name="gender" value="female">
        <label for="gender" value="female">Female</label><br><br>
        <label for="Comments" value="comments">Comments:</label>
        <textarea cols="5" rows="10" name="text" style="width: 100px;height: 50px;"></textarea><br><br>
        <button value="sumbit">SUMBIT</button>



        <?php
echo $name;
echo"<br>";
echo $Id;
echo"<br>";
echo $gender;
echo"<br>";
echo $text;
echo"<br>";
?>
</body>
    </html>

    
