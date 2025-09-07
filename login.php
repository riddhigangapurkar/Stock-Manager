<?php
if ($_POST) {
    include('database/connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    
   $query = 'SELECT * FROM users WHERE users.email=''.$username.'"AND users.password="'.$password . '"';

    
   $stmt = $conn->prepare($query);
   $stmt->execute();
   var_dump($stmt->rowCount());
   die;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockManager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="loginBody">
    <div class="container">
    <div class="loginHeader">
        <h1>IM</h1>
        <h3>INVENTORY MANAGER</h3>
    </div>
    <div class="loginBody">
        <form action="login.html" method="GET">
            <div class="loginInputsContainer">
            <label for="username">username</label>
            <input placeholder=" Enter Username" name="username" type="text">
            </div>

             <div class="loginInputsContainer">
            <label for="password">Password</label>
            <input placeholder="Enter Password" name="password" type="password">
            </div>
            
            <div class="loginButtonContainer">
                <button type="login">Login</button>
            </div>

        </form>
    </div>
    </div>
</body>
</html>