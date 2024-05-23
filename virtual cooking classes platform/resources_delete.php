<?php
$servername="localhost";
$username="root";
$password="";
$databasename="virtual_cooking_class";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
    die("connection failed.".$connection->connect_error);
}
if (isset($_GET["resource_id"])) {
    $resource_id = $connection->real_escape_string($_GET["resource_id"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM resources WHERE resource_id = $resource_id";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: resources_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>
