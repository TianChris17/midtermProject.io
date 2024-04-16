<?php

    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: ./signUp.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="author" content="Christian Bernardino">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./CSS/signUp.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header-container">

        <header class="header-class">

            <div class="brand-container">
                <h1>Fashion Forward Apparel</h1>
            </div>

            <div class="nav-container">
                <nav>
                    <a href="./index.php">HOME</a>

                    <a href="./signIn.php">> SIGN IN</a>

                    <a href="./signUp.php">> SIGN UP</a>
                </nav>
            </div>
        </header>

    </div>

        <form action="./SERVER/registerDB.php" method="post">

            <fieldset>
                <legend>Sign up</legend>

                <label for="userName">
                    <input type="text" id="userName" name="UserName" placeholder="Username" autocomplete="off" required>
                </label>

                <label for="email">
                    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" required>
                </label>

                <label for="password">
                    <input type="password" id="password" name="password" placeholder="Password"  autocomplete="off" required>
                </label>

                <label for="confirmPass">
                    <input type="password" id="confirmPass" name="confirmPass" placeholder="Confirm password" autocomplete="off" required>
                </label>

                <button type="submit" name="submit">Register</button>

            </fieldset>

        </form>

    <div class="footer-container">

        <footer>

            <div class="address-section">

                <h3>ADDRESS</h3>
    
                <p>#213 Bangkok Ave. Bonifacio Global City, Fort Bonifacio Taguig City </p>
    
            </div>
    
            <div class="email-section">
    
                <h3>EMAIL</h3>
    
                <p>fashionForwardApparel@gmail.com</p>
    
            </div>
    
            <div class="telephone-section">
    
                <h3>TELEPHONE</h3>
    
                <p>(07) 111-701</p>
    
            </div>
    
            <div class="socmed-container">
    
                <img src="./images/facebook.png" alt="facebook icon">
    
                <img src="./images/instagram.png" alt="instagram icon">
                
                <img src="./images/tik-tok.png" alt="tiktok icon">
    
                <img src="./images/youtube.png" alt="youtube icon">
    
            </div>

        </footer>

        <div class="copyright-container">
    
            <p>Copyrights © 2024 Fashion Forward Apparel. All Rights Reserved.</p>

        </div>

    </div>
    
    
</body>
</html>