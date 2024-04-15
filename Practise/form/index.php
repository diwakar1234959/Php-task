<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
    <script src="https://kit.fontawesome.com/bc0d876b43.js" crossorigin="anonymous"></script>


    <style>
        .main{
            border:2px solid black;
            margin:100px;
        }
        h2{
            text-align:center;  
        }
        .col{
            float:right;
            margin-right:40px;
        }
        </style>

</head>
<body style="margin:0";>
<div class=footer>
	</div>
<div class=main>
<div class="row">
                    
						<h2><b>Manage Users</b></h2>
					
                    <div class="col">
						<a href="cre.php" class="btn btn-success"><i class="material-icons"></i> <span>Add New User</span></a>
												
					</div>
                </div>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<!-- <span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span> -->
						</th>
						<th>ID</th>
                        <th>NAME</th>
						<th>GENDER</th>
						<th>PHONE NO</th>
						<th>DOB</th>
                        <th>CLASS</th>
						<th>HOBBIES</th>
						<th>LANGUAGE</th>
						<th>MARKS</th>
						<th>FILES</th>  
                    </tr>
                </thead>
				<tbody>
				
				<?php
                require_once "conn.php";
                $sql ="SELECT * FROM results";
				$result = $conn->query($sql);
					// $i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr>
				
					<td><?php //echo $i; ?></td>
                    <td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["gender"]; ?></td>
					<td><?php echo $row["no"]; ?></td>
					<td><?php echo $row["date"]; ?></td>
					<td><?php echo $row["class"]; ?></td>	
					<td><?php echo $row["hobbies"]; ?></td>
					<td><?php echo $row["lang"]; ?></td>
					<td><?php echo $row["marks"]; ?></td>
					<td><img src="uploads/<?php echo $row["files"];?>" alt="Uploaded Image" width=50px height=50px></td>
					<td>
        

						<a href="up.php?id=<?php echo $row["id"]; ?>" class="edit">
							<i class="material-icons update" data-toggle="tooltip" 
							title="Edit" style="color:green;"></i>
						</a><br>
						<a href="view.php?id=<?php echo $row["id"];?>"><i class="fa-solid fa-eye" title="View" style="color:#74C0FC;font-size:18px;"></i></a><br>
                        <a href="delete.php?id=<?php echo $row["id"];?>"><i class="fa-solid fa-trash" style="color: red;font-size:18px;"title ="Delete"></i>
                    </a>
                    </td>
				</tr>
				<?php
	
				}
				?>
				</tbody>
			</table>
            </div>
</body>
</html>