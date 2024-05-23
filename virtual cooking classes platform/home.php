<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css" title="style1" media="screen,tv,print,handheld"/>
    <title>Virtual cooking class platform</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-image: url('./images/photo2.avif');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        label{
            font-family: century;
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
            width: 140px;
            background-color: white;
        }
        h1{
            font-size: 24px;
            text-align: center;
            font-family: century;
            font-weight: bold;
            color: black;
        }
        .contain{
            background-color: ghostwhite;
            width: 500px;
            margin-top: 90px;
        }
    </style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul>
                    <!-- Navigation links -->
                    <li><a href="home.php">Home</a></li>
                     <li><a href="services.php">Our Services</a></li>
                    <li><a href="about us.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                     <li class="dropdown"><!-- Dropdown menu --> <a href="#">Forms</a>
                        <div class="dropdown-content">
                           
                            <a href="schedule_form.php">Schedule Form</a>
                            <a href="resources_form.php">Resources Form</a>
                            <a href="recipes_form.php">Recipes Form</a>
                            <a href="payments_form.php">Payments Form</a>   
                            <a href="instructors_form.php">Instructor Form</a> 
                            <a href="classes_form.php">Class Form</a>
                            <a href="chiefs_form.php">Chiefs Form</a>
                            <a href="attendees_form.php"> Attendees Form</a>
                        </div>
                    </li>
                    <li class="dropdown"><!-- Dropdown menu --> <a href="#">Tables</a>
                        <div class="dropdown-content">
                            
                            <a href="schedule_table.php">Schedule  Table</a>
                            <a href="resources_table.php">Resources Table</a>
                            <a href="recipes_table.php">Recipes Table</a>
                            <a href="payments_table.php">Payment Table</a>   
                            <a href="instructors_table.php">Instructor Table</a> 
                            <a href="classes_table.php">classes Table</a>
                            <a href="chiefs_table.php">Chiefs Table</a>
                            <a href="attendees_table.php">Attendees Table</a>    
                        </div>
                    </li>
                    
                    <li class="dropdown"><!-- Dropdown menu --> <a href="#">Setting</a>
                        <div class="dropdown-content">
                            <a href="register.php">Register</a> 
                             <a href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <!-- Search bar -->
<form action="searchdata.php" method="GET" class="search-bar" style="margin-left: 1150px;  margin-top:-50px;">
    <input type="search" name="query" placeholder="search here!" style="width: 300px;padding: 10px;border-radius: 15px;">&nbsp;&nbsp;&nbsp;<button type="submit" style="background-color: Fuchsia; color:white; width: 100px;padding: 10px;">search</button>
</form>
<div class="containerr">
    <h2>Empowering Connections, Building Better life to our members</h2>
    <p>"Welcome to our platform where cooking become moments of joy! <br>Find trusted helpers for your to-do, from cooking class. <br>Say goodbye to unbalanced diet, and hello to suitable food and drink. <br>Get started now and let us simplify your life, one vietual cooking class at a time. <br>Your well-being is our priority!"</p>
</div><br><br>
<div style="color: white;font-size: 25px;"><p>Connect with us on social media or social networkings:

  <a href="https://www.twitter.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF; padding: 10px; text-decoration: none;">TWITTER</a>
  <a href="https://www.facebook.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">FACEBOOK</a>
  <a href="https://www.instagram.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">INSTAGRAM</a>
</p></div>
<footer>
    <p>Art by IT OLIVIER  &copy;  BIT LEVEL TWO &reg; 2024</p>
</footer>
</body>
</html>


