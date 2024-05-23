<?php 
//call the file that contain database connection
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $instructor_id = $_GET["instructor_id"];

    // Read the row of the selected product from the database
    $sql = "SELECT * FROM instructors WHERE instructor_id=$instructor_id";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $expertise_area = $row["expertise_area"];
        
    } else {
        header("location: instructors_table.php");
        exit;
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $instructor_id = $_POST["instructor_id"];
    $expertise_area = $_POST["expertise_area"];
    

    if (empty($instructor_id) || empty($expertise_area) ) {
        echo "All feild are required!";
    }else {
        $sql = "UPDATE instructors SET instructor_id='$instructor_id', expertise_area='$expertise_area' WHERE instructor_id='$instructor_id'";
    }
    if ($connection->query($sql) === TRUE) {
        echo " information updated successfully";
        header("location:instructors_table.php");
    }else {
        echo "Error updating record: " . $connection->error;
    
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script>
        function confirmUpdate() {
            return confirm('Do you want to update this record!');
        }
    </script>
   <style>
        h2{
            font-family:Castellar;
            color: darkblue;
        }
        label{
            font-family: elephant;
            font-size: 20px;
        }
        .sb{
            font-family:Georgia;
            padding: 10px;
            border-color: blue;
            background-color: skyblue;
            width: 200px;
            margin-top: 5px;
            border-radius: 12px;
            font-weight: bold;
            color: blue;

        }

        .input{
            width: 350px;
            height: 35px;
            border-radius: 12px;
            border-color: green;
        }
        footer{
    height: 50px;
    text-align: center;
    padding: 25px;
    color: white;
    background-color: blue;
}

    </style> 
</head>
<body>
<center>
    
    <h2>VIRYUAL COOKING CLASS </h2>
    <h3 style="color:green;">UPDATE INSTRUCTOR HERE</h3>
   <!-- section that contain form that help to update manager information-->
    <form method="POST" onsubmit="return confirmUpdate();">
    <label>Instructor Id</label><br>
    <input type="number" name="instructor_id" readonly class="input" value="<?php echo $instructor_id; ?>"><br>
     <label>expertise_area</label><br>
    <input type="text" name="expertise_area"  class="input" value="<?php echo $expertise_area; ?>"><br>
   
    <input type="submit" name="submit" value="Update" class="sb"> 
</form>

</section>
</center>
        <footer><!-- Footer section -->
            <p><h1>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</h1></p><!-- Copyright and trademark notice -->
        </footer><!-- Footer section -->
    </body>
    </html>