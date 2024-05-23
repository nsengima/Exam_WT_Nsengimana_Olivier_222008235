<?php
$servername="localhost";
$username="root";
$password="";
$databasename="virtual_cooking_class";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
    die("connection failed.".$connection->connect_error);
}
if (isset($_GET["recipe_id"])) {
    $recipe_id = $connection->real_escape_string($_GET["recipe_id"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM recipes WHERE recipe_id = $recipe_id";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: recipes_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>
