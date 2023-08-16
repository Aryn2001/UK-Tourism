<?php

$connection = mysqli_connect('localhost','root','mysql2012','websitemajor');


if(isset($_POST['send'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $regusername = $_POST['regusername'];
    $confirmpassword = $_POST['confirmpassword'];
    $regpassword = $_POST['regpassword'];
    $password = $_POST['password'];
   

    $request = "insert into login_form(username, email, regusername, confirmpassword, regpassword, password) values('$username','$email','$password','$confirmpassword','$regpassword','$regusername')";

    mysqli_query($connection, $request);

    header('location:login.php');
    
}else{
    echo 'something went wrong';
}

?>