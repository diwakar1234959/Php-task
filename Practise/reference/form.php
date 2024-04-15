<html>
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
.error{
    color:red;
}
</style>

</head>
    <body>
    <?php 
$fname = $lname = $email = $phno = $website = $gender = $dob = $address = $file = $qual = $spec = "";
$fnameerr = $lnameerr = $emailerr = $phnoerr = $websiteerr = $gendererr = $doberr = $addresserr = $fileerr = $qualerr = $specerr = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST["fname"])){
    $fnameerr =" first name is required";
}
    else{
        $fname = test_input($_POST["fname"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
            $fnameerr ="only letter and white space";
        }
    }

if(empty($_POST["lname"])){
    $lnameerr = "lastname is required";
}
    else{
        $lname =test_input($_POST["lname"]);
    }

if(empty($_POST["email"])){
    $emailerr = "email is required";
}
    else{
        $email =test_input($_POST["email"]);
    }

if(empty($_POST["phno"])){
    $phnoerr = "phone number is required";
}
    else{
        $phno =test_input($_POST["phno"]);
    }

if(empty($_POST["website"])){
    $websiteerr = "";
}
    else{
        $website =test_input($_POST["website"]);
    }

if(empty($_POST["gender"])){
    $gendererr = "gender is required";
}
    else{
        $gender =test_input($_POST["gender"]);
    }

if(empty($_POST["dob"])){
    $doberr = "";
}
    else{
        $dob =test_input($_POST["dob"]);
    }

    if(empty($_POST["qual"])){
        $qualerr = "qualification is required";
    }
        else{
            $qual =test_input($_POST["qual"]);
        }    
        if(empty($_POST["spec"])){
            $specerr = "specification is required";
        }
            else{
                $spec =test_input($_POST["spec"]);
            }


if(empty($_POST["address"])){
    $addresserr = "address is required";
}
    else{
        $address =test_input($_POST["address"]);
    }

if(empty($_POST["file"])){
    $fileerr = "";
}
    else{
        $file =test_input($_POST["file"]);
    }

}
function test_input($data){
    $data =trim($data);
    $data =htmlspecialchars($data);

    return $data;
}
?>









    
<div class="body">
<h1>Employee Appication</h1><br>
<form class="fm" method="post" action="form.php"> 
    <label for="Fname">First name:</label>
    <input type="text" class="fname" name="fname" required>
    <span class="error">* <?php echo $fnameerr;?></span><br><br>
    <label for="Fname">Last name:</label>
    <input type="text" class="fname" name="lname" required>
    <span class="error">* <?php echo $lnameerr;?></span><br><br>
    <label for="email">Email:</label>
    <input type="email" class="email" name="email" required><br><br>
    <label for="number" class="phno" name="phno">Phone number:</label>
    <input type="tel" maxlength="10" size="10" name="phno"><br><br>
    <label type="website">Portfolio Website:</label>
    <input type="text" class="website" name="website">
    <span class="error">* <?php echo $websiteerr;?></span><br><br>
    <label for="gender">Gender:</label>
    <input type="radio" class="gender" name="gender" value="male">
    <label for="Male">Male</label>
    <input type="radio" class="gender" name="gender" value="female">
    <label for="Male">Female</label>
    <input type="radio" class="gender" name="gender" value="others">
    <label for="Male">Others</label><br><br>
    <label for="date">DOB:</label>
    <input type="date" class="date" name="dob"><br><br>
    <label for="qualification">Qualification:</label>
    <select>
        <option value="B.E" name="qual">B.E</option>
        <option value="B.tech" name="qual">B.tech</option>
        <option value="B.sc" name="qual">B.sc</option>
        <option value="BCA" name="qual">BCA</option>
    </select><br><br>
    <label for="specialization">Specialization:</label><br>
    <input type="checkbox" value="Computer Science" id="cse"  value="cse" name="spec">
    <label for="cse">Computer Science</label><br>
    <input type="checkbox" value="Electrical Electronic" id="eee" value="eee" name="spec">
    <label for="cse">Electrical Electronic</label><br>
    <input type="checkbox" value="Information Tecgnology" id="it" value="it" name="spec">
    <label for="cse">Information Tecgnology</label><br><br>
    <label for="address">Address:</label>
    <textarea cols="15" rows="5" name="address"></textarea><br><br>
    <label for="file">Choose your file:</label>
    <input type="file" id="file" name="file" multiple><br><br>
    <input type="submit" name="submit" value="Submit" class="submit">
</form>


<?php
echo "<br>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo "$email";
echo "<br>";
echo "$phno";
echo "<br>";
echo "$website";
echo "<br>";
echo "$gender";
echo "<br>";
echo "$dob";
echo "<br>";
echo "$address";
echo "<br>";
echo "$file";
echo "<br>";
echo "$spec";
echo "<br>";
echo "$qual";
?>


</body>
    </html>



