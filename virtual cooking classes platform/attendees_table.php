<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual cooking class System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; font-family: century; font-weight: bold;">VIRTUAL COOKING CLASS SYSTEM</h2>
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF STUDENTS IN OUR SYSTEM</h4>
        <a href="attendees_form.php" class="btn btn-primary" style="margin-top: 0px;">New Attendees</a>
        <a href="home.php" class="btn btn-secondary" style="margin-left: 1000px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
<?php
// Connection details
include "dbconnection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
 $stmt = $connection->prepare("INSERT INTO attendees (attendee_id, user_id, class_id, enroliment_date,) VALUES (?, ?, ?,?)");
$stmt->bind_param("iiid", $attendee_id, $user_id, $class_id, $enroliment_date );

// Set parameters
$attendee_id = $_POST['attendee_id'];
$user_id= $_POST['user_id'];    
$class_id = $_POST['class_id']; 
$enroliment_date = $_POST['enroliment_date']; 
// Execute the statement
if ($stmt->execute()) {
    echo "New record has been added successfully";
} else {
    echo "Error: " . $stmt->error;
}
    // Close the statement
    $stmt->close();

}
// SQL query to fetch data from the car table
$sql = "SELECT * FROM attendees";
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
            width: 80%;
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
    padding: 15px;
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
            <th>attendee_id</th>
            <th>user_id</th>
            <th>class_id</th>
            <th>enroliment_date</th>
            <th>Delete</th>
            <th>edit</th>
        </tr>
        <?php

        // Check if there are any cars
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $tid = $row['attendee_id']; // Fetch the car Id
                echo "<tr>
                    <td>" . $row['attendee_id'] . "</td>
                    <td>" . $row['user_id'] . "</td>
                    <td>" . $row['class_id'] . "</td>
                    <td>" . $row['enroliment_date'] . "</td>
                    <td><a style='padding:4px' href='attendees_delete.php?attendee_id={$row['attendee_id']}'>Delete</a></td>
                    <td><a style='padding:4px' href='attendees_edit.php?attendee_id={$row['attendee_id']}'>edit</a></td> 
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