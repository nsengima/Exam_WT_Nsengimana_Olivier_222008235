<?php
include('dbconnection.php');

// Check if Product_Id is set
if (isset($_REQUEST['attendee_id'])) {
  $attendee_id = $_REQUEST['attendee_id'];

  // Prepare statement with parameterized query to prevent SQL injection (security improvement)
  $stmt = $connection->prepare("SELECT * FROM attendees WHERE attendee_id=?");
  $stmt->bind_param("i", $attendee_id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $x = $row['attendee_id'];
    $y = $row['user_id'];
    $z = $row['class_id'];
    $w = $row['enroliment_date'];
  } else {
    echo "no one   found.";
  }
}

$stmt->close(); // Close the statement after use

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update attendees</title>
 <!-- JavaScript validation and content load for update or modify data-->
    <script>
        function confirmUpdate() {
            return confirm('Are you sure you want to update this record?');
        }
    </script>
</head>
<body><center>
    <!-- Update attendees form -->
    <h2><u>Update Form of attendees</u></h2>
    <form method="POST" onsubmit="return confirmUpdate();">
    <label for="user_id"> user id:</label>
    <input type="text" name="user_id" value="<?php echo isset($y) ? $y : ''; ?>">
    <br><br>

    <label for="class_id">class_id:</label>
    <input type="number" name="class_id" value="<?php echo isset($z) ? $z : ''; ?>">
    <br><br>

    <label for="enroliment_date">enroliment_date:</label>
    <input type="text" name="enroliment_date" value="<?php echo isset($w) ? $w : ''; ?>">
    <br><br>
    <input type="submit" name="up" value="Update">

  </form>
</body>
</html>

<?php
if (isset($_POST['up'])) {
  // Retrieve updated values from form
  $user_id = $_POST['user_id'];
  $class_id = $_POST['class_id'];
  $enroliment_date = $_POST['enroliment_date'];

  // Update the product in the database (prepared statement again for security)
  $stmt = $connection->prepare("UPDATE attendees SET user_id=?, class_id=?, enroliment_date=? WHERE attendee_id=?");
  $stmt->bind_param("iisi", $user_id, $class_id, $enroliment_date, $attendee_id);
  $stmt->execute();

  // Redirect to product.php
  header('Location: attendees_table.php');
  exit(); // Ensure no other content is sent after redirection
}

// Close the connection (important to close after use)
mysqli_close($connection);
?>