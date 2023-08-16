<?php

$connection = mysqli_connect('localhost','root','mysql2012','websitemajor');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $photographer = $_POST['photographer'];

    $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving, photographer) values('$name','$email','$phone','$address','$location','$guests','$arrivals',' $leaving','$photographer')";

    mysqli_query($connection, $request);

    header('location:book.php');
    
}else{
    echo 'something went wrong';
}

?>