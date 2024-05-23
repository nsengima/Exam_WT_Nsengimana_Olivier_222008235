
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registration Form</title>
     <style>
        body{
               background-image: url('./images/photo7.webp');
              background-repeat: no-repeat;
              background-size: cover;
     

        }
        label{
            font-family:Imprint MT Shadow;
            font-weight: bold;
            font-size: 20px;
        }
        h2{
             font-family: Imprint MT Shadow;
            font-weight: bold;
            font-size:36px;
            color: white;

        }
        button{
            padding: 10px;
            width: 100px;
            background-color: gray;
        }
        h1{
            font-size: 30px;
            text-align: center;
            font-family: Imprint MT Shadow;
            font-weight: lighter;
            color: black;
        }
        .contain{
            background-color: gold;
            width: 300px;
            margin-top: 70px;
        }

    </style>
</head>
<body>


<div class="container">
    <h3 class="text-center mt-5 mb-4"><i>REGISTER NOW IN VIRTUAL COOK</i></h3>
    <form action="userdata.php" method="POST">
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="fname" name="firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lname" name="lastname">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="dob" required>
            
        </div>
    </div>
    <div class="form-group row">
            <label for="Password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">role</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dob" name="dob" required>
            </div>
        </div>
        
        
        <button type="submit" class="btn btn-primary">INSERT</button>
            <a href="index.php" class="btn btn-secondary" style="margin-left: 100px;">BACK </a>
       <a href="login.html" class="btn btn-secondary" style="margin-left: 100px;"> LOGIN</a>
    </form>
</div>

<footer class="bg-light text-center py-3">
    <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group>
</footer>

<!-- Bootstrap JavaScript and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
