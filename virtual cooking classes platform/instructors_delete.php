<?php
$servername="localhost";
$username="root";
$password="";
$databasename="virtual_cooking_class";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
    die("connection failed.".$connection->connect_error);
}
if (isset($_GET["instructor_id"])) {
    $instructor_id = $connection->real_escape_string($_GET["instructor_id"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM instructors WHERE instructor_id = $instructor_id";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: instructors_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();


      
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting data: " . $stmt->error;
    }
}
?>
</body>
</html>
<?php

    $stmt->close();
else {
    echo "Product Id is not set.";
}

$connection->close();
?>
