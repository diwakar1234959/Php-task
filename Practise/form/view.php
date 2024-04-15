<?php
                require_once "conn.php";
                
                if(isset($_GET["id"])) {

                    $id =  $_GET["id"];
                    $sql ="SELECT * FROM results WHERE id = '$id'";
                    $result = $conn->query($sql);
					
                    if($result->num_rows > 0) {
                        // Fetch data and display it
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $gender = $row['gender'];
                            $no = $row['no'];
                            $date = $row['date'];
                            $grade = $row['class'];
                            $hobbies = explode(",",$row['hobbies']);
                            $lang = explode(",",$row['lang']);
                            $mark = $row['marks'];   
                            $file = $row['files'];
				?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<title>View</title>
<style>
    body {
    background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #4ca2cd, #67B26F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}
.student-profile .card {
    border-radius: 10px;
}
.student-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}
.student-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
}
.student-profile .card p {
    font-size: 16px;
    color: #000;
}
.student-profile .table th,
.student-profile .table td {
    font-size: 14px;
    padding: 5px 10px;
    color: #000;
}
    </style>
</head>
<body>
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="uploads/<?php echo $row["files"];?>" alt="student dp">
            <h3><?php echo $row["name"]; ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">ID:</strong><?php echo $row["id"]; ?></p>
            <p class="mb-0"><strong class="pr-1">Class:</strong><?php echo $row["class"]; ?></p>
            <p class="mb-0"><strong class="pr-1">DOB:</strong><?php echo $row["date"]; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $row["gender"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Hobbies</th>
                <td width="2%">:</td>
                <td><?php echo $row["hobbies"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Languages Known</th>
                <td width="2%">:</td>
                <td><?php echo $row["lang"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Marks</th>
                <td width="2%">:</td>
                <td><?php echo $row["marks"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Phone No</th>
                <td width="2%">:</td>
                <td><?php echo $row["no"]; ?></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>This Portal Provides information about the student in the database.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
    </html>
    <?php
}
                    }else{
                        echo "No data found for the provided ID.";
                    }
                }else{
                    echo "No ID provided.";
                }
?>