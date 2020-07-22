<?php

    $hostname = "127.0.0.1";
    $hostuser = "root";
    $hostpass = "";
    $database = "univa";

    $connection = mysqli_connect($hostname, $hostuser, $hostpass, $database);

    if ($connection) {
        //echo "You're connected";
        $sqlquery = "SELECT * FROM users";
        $result = mysqli_query($connection,$sqlquery);
        //var_dump($result);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                //echo "Id: ".$row['id']." - Name: ".$row['name'],"</br>";
                $user_email = $_GET['user_email'];
                $user_password = $_GET['user_password'];

                if($row['email'] == $user_email && $row['password'] == $user_password){
                    echo "Email and user found";
                }
            }
        }
        else {
            # code...
        }
        
    } else {
        echo "Sorry dude, you're NOT connected";
    }
    


    
    
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