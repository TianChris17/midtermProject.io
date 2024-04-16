<?php

    function validate()
    {
        if(isset($_POST["submit"]))
        {
            $userName = $_POST["UserName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPass"];

            $errors = array();

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            if(empty($userName) OR empty($email) OR empty($password) OR empty($confirmPassword))
            {
                die("All fields are required");
            }

            if(! filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                die("Email is not valid");
            }

            if(strlen($password) < 8)
            {
                die("Password must be at least 8 caharacter long");
            }

            if( ! preg_match("/[a-z]/i", $password))
            {
                die("Passwrod must contain at least one letter");
            }

            if( ! preg_match("/[0-9]/", $password))
            {
                die("Passwrod must contain at least one number");
            }

            if($password !== $confirmPassword)
            {
                die("Password doesn't match");
            }

            connectToDataBase();

            $sql = "SELECT * FROM register_db WHERE register_email = '$email'";
            $result = mysqli_query($GLOBALS["connect"], $sql);
            $rowCount = mysqli_num_rows($result);
            
            if($rowCount > 0)
            {
                die("Email already exist.");
            }

            if(count($errors) > 0)
            {
                foreach($errors as $error)
                {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            else
            {
                $sql = "INSERT INTO register_db (register_name, register_email, register_password) VALUES (?, ?, ?)";
                $stateMent = mysqli_stmt_init($GLOBALS["connect"]);
                $prepareStateMent = mysqli_stmt_prepare($stateMent, $sql);

                if($prepareStateMent)
                {
                    mysqli_stmt_bind_param($stateMent, "sss", $userName, $email, $password_hash);
                    mysqli_stmt_execute($stateMent);
                    header("Location: loginLink.php");
                    exit;
                }
                else
                {
                    die("Failed to registered");
                }
            }
        }
    }

    function connectToDataBase()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dataBaseName = "registerdb";

        $GLOBALS["connect"] = mysqli_connect($host, $username, $password, $dataBaseName);

        if(! $GLOBALS["connect"])
        {
            die("Failed to connect");
        }
    }

    connectToDataBase();
    validate();
?>