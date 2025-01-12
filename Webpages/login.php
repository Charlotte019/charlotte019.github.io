<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");

    if ($username == "Docent" && $password == "p0rSt3nd3Nfolio!") 
    {
        header("Location: portfolio.html");
        exit;
    } 
    
    else 
    {
        $error = "Wrong password or username";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="../img/saturn.png">
</head>
<body>
    <main>
        <img src="../img/space.jpg" alt="backgroundImage" class="bgimg">
    </main>
    <div class="main2">

        <div class="titleContent">
            <div class="titleBlobUp"></div>
            <h1 class="titleContentUp">Portfolio</h1>
            <div class="titleBlobDown"></div>
            <h3 class="titleContentDown">Login Page</h3>
        </div>

    <header>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>

                <li>
                    <a href="projects.html">Projecten</a>
                </li>

                <li>
                    <a href="login.php">Portfolio</a>
                </li>
            </ul>
    </header>

    <div class="barOne"></div>

    <div class="login">
        <h1 class="loginTitle"> Login</h1>

        <div class="purpleBarUp"></div>

        <div class="loginContent">
            <form action="login.php" method="POST" class="loginForm">

                <label for="uName">Username:</label>
                <input type="text" name="username" id="uName">

                <label for="pw">Password:</label>
                <input type="password" name="password" id="pw">

                <input type="submit" name="login" value="Login">
                
            </form>

            <?php
            if (isset($error)) 
            {
                echo "<p>$error</p>";
            }
            ?>

        </div>
        <div class="purpleBarDown"></div>
    </div>

    <footer></footer>

    </div>
</body>
</html>