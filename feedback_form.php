<?php

$connection = mysqli_connect('localhost','root','mysql2012','websitemajor');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    

    $request = "insert into feedback_form(name, email, rating, comment) values('$name','$email',$rating,'$comment')";

    mysqli_query($connection, $request);

    header('location:about.php');
    
}else{
    echo 'something went wrong';
}

?>