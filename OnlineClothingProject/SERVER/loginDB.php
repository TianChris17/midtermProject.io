<?php

    function signingAccount()
    {
        if(isset($_POST["login-bttn"]))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];

            require_once "./registerDB.php";
            $sql = "SELECT * FROM register_db WHERE register_email = '$email'";
            $result = mysqli_query($GLOBALS["connect"], $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user)
            {
                if(password_verify($password, $user["register_password"]))
                {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: ../indexDuplicate.php");
                    die();
                }
                else{
                    die("Password doesn't match");
                }
            }
            else
            {
                die("Email doesn't exist.");
            }
        }
    }

    signingAccount();
?>