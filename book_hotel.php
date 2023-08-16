<?php

$connection = mysqli_connect('localhost','root','mysql2012','websitemajor');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $hotel = $_POST['hotel'];
    $hotelname = $_POST['hotelname'];

    $request = "insert into book_hotel(name, email, phone, address, aadhar, guests, arrivals, leaving, hotel, hotelname) values('$name','$email','$phone','$address','$aadhar','$guests','$arrivals',' $leaving','$hotel','$hotelname')";

    mysqli_query($connection, $request);

    header('location:hotel.php');
    
}else{
    echo 'something went wrong';
}

?>