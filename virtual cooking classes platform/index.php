<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Virtual Cooking Classn platform</title>
<style>
  body{
   background-image: url('./images/phot8.webp');
   background-repeat: no-repeat;
   background-size: cover;
  }
  .overlay {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
    z-index: 1;
  }

  .container {
    position: relative;
    z-index: 2;
  }

  h1 {
    font-size: 3rem;
    margin-bottom: 20px;
  }

  p {
    font-size: 1.2rem;
    margin-bottom: 30px;
  }

  .btn {
    display: inline-block;
    padding: 30px 75px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2rem;
    text-decoration: none;
    color: white; 
    background-color: gray; 
    transition: background-color 0.3s ease;
  }

  .btn-login:hover {
    background-color: LightSeaGreen; 
    box-shadow: 2px;

  }

  .btn-register {
    background-color: gray; 
    margin-left: 20px;
  }

  .btn-register:hover {
    background-color:LightSeaGreen; 
  }
</style>
</head>
<body>
<div class="overlay">
  <div class="container">
    <h1 style="color: #FF00FF;">VIRTUAL COOKING CLASS PLATFORM</h1>
    <p style="font-family:century; font-size: 25px; color: black;"><b><h2>All course are available on our website</h2></b></p>

    <a href="login.html" class="btn btn-login"> USER LOGIN</a>
    <a href="admin.html" class="btn btn-register">ADMIN LOGIN</a>
  </div>
</div>

</body> 
</html>