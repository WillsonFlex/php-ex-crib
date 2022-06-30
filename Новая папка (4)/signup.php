<?php
    include ('./connect.php');

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."saltmegacream");

    if (isset($link)) {
        $request = "INSERT INTO User (email, password, role)
                    VALUES ('$email', '$password', '1')";
        $link->query($request);

        header('Location: /projects/login/login.php');
    }
    
?>