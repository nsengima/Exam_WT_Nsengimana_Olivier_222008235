<?php
$servername="localhost";
$username="root";
$password="";
$databasename="virtual_cooking_class";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
    die("connection failed.".$connection->connect_error);
}
if (isset($_GET["class_id"])) {
    $class_id = $connection->real_escape_string($_GET["class_id"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM classes WHERE class_id = $class_id";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: classes_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>
