<?php




include 'connection.php';

include "header.php";


?>


<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="brukernavn">Username</label>
                <input type="text" id="brukernavn" name="brukernavn" required>
            </div>
            <div class="form-group">
                <label for="passord">Password</label>
                <input type="password" id="passord" name="passord" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            
        </form>
        <a href="nybruker.php"><button>Ny? lag bruker</button></a>
    </div>
</body>
</html>
