<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body><br><br>
    <a href="home.php" style="background-color: blue; border-radius: 8px; color:white; padding: 12px; "> Back Home</a><br>
    <div class="container">
        <h1 class="text-center"><u>Attendance Form</u></h1>
        <form action="attendees_table.php" method="POST">
            <div class="form-group">
                <label for="attendee_id">ID</label>
                <input type="number" class="form-control" name="tid" id="tid">
            </div>
            <div class="form-group">
                <label for="user_id">User Id</label>
                <select id="user_id" class="form-control">

                    <?php
                    include "dbconnection.php";
                    $sql="SELECT user_id  from users";
                    $result=$connection->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $user_id=$row['user_id'];
                           
                            echo "<option value=\"$user_id\"> $user_id </option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="class_id">Class Id</label>
                <select id="class_id" class="form-control">
                    <?php
                    include "dbconnection.php";
                    $sql="SELECT class_id  from classes";
                    $result=$connection->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $class_id=$row['class_id'];
                            echo "<option value=\"$class_id\"> $class_id </option>";
                        }
                    }
                    ?>
                    <div class="form-group">
                <label for="enroliment_date">enroliment_date</label>
                <input type="date" class="form-control" name="endate" id="enrodate">
            </div>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">INSERT</button>
        </form>
    </div>
    <footer class="text-center mt-5"><!-- Footer section -->
        <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
    </footer><!-- Footer section -->

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
