<?php

$connection = mysqli_connect('localhost','root','mysql2012','websitemajor');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $guests = $_POST['guests'];
    $date = $_POST['date'];
    

    $request = "insert into book_bus(name, phone, address, guests, date) values('$name','$phone','$address', '$guests', '$date')";

    mysqli_query($connection, $request);

    header('location:vehicle_book.php');
    
}else{
    echo 'something went wrong';
}

?>