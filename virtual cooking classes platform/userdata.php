<?php  
$servername="localhost";
$username="root";
$password="";
$databasename="virtual_cooking_class";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
    die("connection failed.".$connection->connect_error);
}

$connection->select_db($databasename);

$sql = "INSERT INTO users (user_id, username, email, password,role)
VALUES ('$_POST[user_id]', '$_POST[username]', '$_POST[email]', '$_POST[password]','$_POST[role]')";

if ($connection->query($sql) === TRUE) {
    echo " data inserted successfully<br>";
    header("location:index.php");
} else {
    echo "Error inserting sample data: " . $connection->error;
}

// Close connection
$connection->close();
?>