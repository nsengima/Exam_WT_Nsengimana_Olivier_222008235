
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- JavaScript validation and content load for update or modify data-->
    <script>
        function confirmInsert() {
            return confirm('Are you sure you want to Insert this record?');
        }
    </script>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <a href="home.php" style="background-color: blue; border-radius: 8px; color:white; padding: 15px; margin-left: 10px; margin-top: 500px;"> Back Home</a><br>
    <div class="container">
        <h1 class="text-center"><u>Schedule Form</u></h1>
        <form action="schedule_table.php" method="POST"  onsubmit="return confirmInsert();">
            <div class="form-group">
                <label for="schedule_id">Schedule ID</label>
                <input type="number" class="form-control" name="schedule_id" uid="schedule_id">
            </div>
            <div class="form-group">
                <label for="class_id">class id</label>
                <input type="number" class="form-control" name="class_id" id="class_id">
            </div>
             <div class="form-group">
                <label for="session_date">session date</label>
                <input type="date" class="form-control" name="session_date" id="session_date">
            </div>
           
             <div class="form-group">
                <label for="start_time">start time</label>
                <input type="date" class="form-control" name="start_time" id="start_time">
            </div>
             <div class="form-group">
                <label for="end_time">end time</label>
                <input type="date" class="form-control" name="end_time" id="end_time">
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
