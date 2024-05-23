<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual cooking class platform</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; font-family: century; font-weight: bold;">VIRTUAL COOKING CLASS MANAGEMENT SYSTEM</h2>
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF ORDER IN OUR SYSTEM</h4>
        <a href="schedule_form.php" class="btn btn-primary" style="margin-top: 0px;">Add New</a>
        <a href="home.php" class="btn btn-secondary" style="margin-left: 1000px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
<?php
// Connection details
include "dbconnection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
 $stmt = $connection->prepare("INSERT INTO schedule (schedule_id, class_id, session_date, start_time, end_time) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iiddd", $schedule_id, $class_id, $session_date, $start_time,  $end_time);

// Set parameters
$schedule_id = $_POST['schedule_id'];
$class_id = $_POST['class_id'];    
$session_date = $_POST['session_date'];
$start_date = $_POST['start_time'];
$end_date = $_POST['end_time']; 


// Execute the statement
if ($stmt->execute()) {
    echo "New record has been added successfully";
} else {
    echo "Error: " . $stmt->error;
}
    // Close the statement
    $stmt->close();

}
// SQL query to fetch data from the agent table
$sql = "SELECT * FROM schedule";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
    <center><h2></h2></center>
    <table border="5">
        <table border="8">
        <tr>
            <th>schedule_id</th>
            <th>class_id</th>
            <th>session_date</th>
            <th>start_time</th>
            <th>end_time</th>
            
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php

        // Check if there are any agent
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $agid = $row['schedule_id']; // Fetch the car Id
                echo "<tr>
                    <td>" . $row['schedule_id'] . "</td>
                    <td>" . $row['class_id'] . "</td>
                    <td>" . $row['session_date'] . "</td>
                    <td>" . $row['start_time'] . "</td>
                    <td>" . $row['end_time'] . "</td>
                    
             <td><a style='padding:4px' href='schedule_delete.php?schedule_id={$row['schedule_id']}'>Delete</a></td>
                <td><a style='padding:4px' href='schedule_edit.php?schedule_id={$row['schedule_id']}'>edit</a></td> 
                </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No data found</td></tr>";
        }
        // Close the database connection
        $connection->close();
        ?>
    </table>
</body>
</html>

</section>
  
<footer><!-- Footer section -->
            <p>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
        </center></footer><!-- Footer section -->
    </body>
    </html>