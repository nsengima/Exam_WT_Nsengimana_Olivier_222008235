<?php
// Connection details
include "dbconnection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set parameters
    $resource_id = $_POST['resource_id'];
       
    $class_id = $_POST['class_id']; 
$resource_name = $_POST['resource_name']; 
$resource_type= $_POST['resource_type']; 
$resource_url = $_POST['resource_url']; 

    // Prepare and bind the parameters
    $stmt = $connection->prepare("INSERT INTO resources (resource_id, class_id, resource_name, resource_type, resource_url) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisss", $resource_id, $class_id,$resource_name,$resource_type,$resource_url);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record has been added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// SQL query to fetch data from the revenue table
$sql = "SELECT * FROM resources";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>cooking System</title>
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

        footer {
            height: 50px;
            text-align: center;
            padding: 15px;
            color: white;
            background-color: blue;
        }
    </style> 
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; font-family: century; font-weight: bold;">VIRTUAL COOKING CLASS SYSTEM</h2>
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF RESOURCE IN OUR SYSTEM</h4>
        <a href="resources_form.php" class="btn btn-primary" style="background-color: blue; border-radius: 8px; color:white; padding: 15px; margin-left: 10px; margin-top: 500px;">New </a>
        <a href="home.php" class="btn btn-secondary"style="background-color: blue; border-radius: 8px; color:white; padding: 15px; margin-left: 10px; margin-top: 500px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
                <tr>
                    <th>resource_id</th>
                    
                    <th>class_id</th>
                    <th>resource_name</th>
                      <th>resource_type</th>
                       <th>resource_url</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any rows in the result
                if ($result->num_rows > 0) {
                    // Output data for each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['resource_id'] . "</td>
                            
                            <td>" . $row['class_id'] . "</td>
                            <td>" . $row['resource_name'] . "</td>
                            <td>" . $row['resource_type'] . "</td>
                            <td>" . $row['resource_url'] . "</td>
                            <td><a style='padding: 4px;' href='resources_delete.php?resource_id={$row['resource_id']}'>Delete</a></td>
                            <td><a style='padding: 4px;' href='resources_edit.php?resource_id={$row['resource_id']}'>Edit</a></td> 
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No data found</td></tr>";
                }
                // Close the database connection
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>

    <footer><!-- Footer section -->
        <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
    </footer><!-- Footer section -->
</body>
</html>
