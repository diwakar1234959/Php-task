<html>
    <head>
        <style>
            h1{
                text-align:center;
                padding:20px;
            }
            section {
                margin-top: 20px;
                margin-left: 600px;
            }
            table,th,td{
    border: 2px solid black;
    border-collapse: collapse;
}
            </style>
</head>
<body>
    <h1>RESULT TABLE</h1>
<section style="margin: 50px,0;">
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Mark</th>
</tr>   
            </thead>
            <tbody>
                <?php
                require_once "conn.php";
                $sql_query = "SELECT * FROM results";
                if($result = $conn->query($sql_query)){
                    while ($row =$result->fetch_assoc()){
                        $id = $row['id'];
                        $fname = $row['name'];
                        $grade = $row['class'];
                        $mark = $row['marks'];
                    
                
                ?>
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $fname;?></td>
                        <td><?php echo $grade;?></td>
                        <td><?php echo $mark;?></td>
                    </tr>

                    <?php
                    }
                    
                }
                    ?>
</tbody>
        </table>
    </div>
</section>

</body>
    </html>