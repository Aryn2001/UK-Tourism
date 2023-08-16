<?php

$connection = mysqli_connect('localhost','root','mysql2012','websitemajor');

if(isset($_POST['send'])){
    $guests = $_POST['guests'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    

    $request = "insert into book_cab(guests, name, phone) values('$guests', '$name','$phone')";

    mysqli_query($connection, $request);

    header('location:vehicle_book.php');
    
}else{
    echo 'something went wrong';
}

?>