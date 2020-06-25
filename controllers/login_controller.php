<?php

    $hostname = "127.0.0.1";
    $hostuser = "root";
    $hostpass = "";
    $database = "univa";

    $connection = mysqli_connect($hostname, $hostuser, $hostpass, $database);

    if ($connection) {
        echo "You're connected";
    } else {
        echo "Sorry dude, you're NOT connected";
    }
    


    $user_email = $_GET['user_email'];
    $user_password = $_GET['user_password'];
    
    /*
    echo $user_email;
    echo $user_password;
    */

    if ($user_email == 'test@test.com' && $user_password == '123456'){
        echo "Welcome " .$user_email;
    }

    else{
        echo "User email or password incorrect";
    }
?>