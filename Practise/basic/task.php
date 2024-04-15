<html>
    <!DOCTYPE html>
    <head>
        <title>TASK</title>
        <style>
        .body{

border: 2px solid black;
margin-left: 200px;
margin-right: 200px;
text-align: center;
margin-top: 100px;
background-color: bisque;

}
input:hover{
background-color: aqua;
}
.main{
margin: 10px;
}
button{
color: rgb(255,255,255);
background-color: black;
}
@media only screen and(max-width:300px) {
            .body{
                background-color: blue;
            }
        }
</style>
</head>
<body>
<?php 

echo '<div class="body">
<h1>Submission Form</h1>
<hr ><br>
<form class="main">
    <label for="name" value="name">Name:</label>
    <input type="text" class="name" name="fullname"><br><br>
    <label for="ID number" value="no">ID number:</label>
    <input type="number" class="no" name="IDno" min="0"><br><br>
    <label for="Gender" class="gender">Gender:</label>
    <input type="radio" class="gender" name="gender">
    <label for="gender" value="gender">Male</label>
    <input type="radio" class="gender" name="gender">
    <label for="gender" value="gender">Female</label><br><br>
    <label for="Comments" value="comments">Comments:</label>
    <textarea cols="5" rows="10" style="width: 100px;height: 50px;"></textarea><br><br>
    <button value="sumbit">SUMBIT</button>
</form>
</div>';


?>
</body>