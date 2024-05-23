<?php
// Connection details
include "dbconnection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set parameters
    $chief_id = $_POST['chief_id'];
    $chief_name = $_POST['chief_name'];    
    $bio = $_POST['bio']; 
    $contact_info = $_POST['contact_info']; 

    // Prepare and bind the parameters
    $stmt = $connection->prepare("INSERT INTO chiefs (chief_id, chief_name, bio,contact_info) VALUES (?, ?, ? ,?)");
    $stmt->bind_param("isss", $chief_id, $chief_name, $bio, $contact_info);

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
$sql = "SELECT * FROM chiefs";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF CHIEFS  IN OUR SYSTEM</h4>
        <a href="cheifs_form.php" class="btn btn-primary" style="background-color: blue; border-radius: 8px; color:white; padding: 15px; margin-left: 10px; margin-top: 500px;">New Chief</a>
        <a href="home.php" class="btn btn-secondary" style="background-color: blue; border-radius: 8px; color:white; padding: 15px; margin-left: 10px; margin-top: 500px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
                <tr>
                    <th>chief_id</th>
                    <th>chief_name</th>
                    <th>bio</th>
                    <th>contact_info</th>
                    <th>Delete</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any rows in the result
                if ($result->num_rows > 0) {
                    // Output data for each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['chief_id'] . "</td>
                            <td>" . $row['chief_name'] . "</td>
                            <td>" . $row['bio'] . "</td>
                            <td>" . $row['contact_info'] . "</td>
                            <td><a style='padding: 4px;' href='chiefs_delete.php?chief_id={$row['chief_id']}'>Delete</a></td>
                            <td><a style='padding: 4px;' href='chiefs_edit.php?chief_id={$row['chief_id']}'>Edit</a></td> 
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
<div style="color: white;font-size: 25px;"><p>Connect with us on social media or social networkings:

  <a href="https://www.twitter.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF; padding: 10px; text-decoration: none;">TWITTER</a>
  <a href="https://www.facebook.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">FACEBOOK</a>
  <a href="https://www.instagram.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">INSTAGRAM</a>
</p></div>
    <footer><!-- Footer section -->
        <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
    </footer><!-- Footer section -->
</body>
</html>
