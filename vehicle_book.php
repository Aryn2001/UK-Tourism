<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>Vehicle booking</title>
<!--swiper css link --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


<!-- bootstrap link -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
  <!-- header section starts --> 
  <section class="header">
    <a href="index.php" class="logo">DevbhoomiTravels</a>
    <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
      <a href="login.php">SignUp</a>
    </nav>
    
    <div id="menu-btn" class="fas fa-bars">
      
  </div>
</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/bookbg4.jpg)">
  <h1>Book with us!</h1>
</div>


<!-- yatra section starts     -->
<section class="packages">
  <h1 class="heading-title">Let's Book a Safe Drive</h1> 
  <div class="box-container">
  <div class="box">
        <div class="image">
          <img src="images/car6.jpg" alt="">
        </div>
        <div class="content">
          <h3>Bus</h3>
          <p>25-30 person</p>
        </div>
  </div>
  <div class="box">
        <div class="image">
          <img src="images/car5.jpg" alt="">
        </div>
        <div class="content">
          <h3>Mini Bus</h3>
          <p>18-24 person</p>
        </div>
  </div>
  <div class="box">
        <div class="image">
          <img src="images/car4.jpg" alt="">
        </div>
        <div class="content">
          <h3>Cab</h3>
          <p>5-6 person</p>
        </div>
  </div>
  <div class="box">
        <div class="image">
          <img src="images/car3.jpg" alt="">
        </div>
        <div class="content">
          <h3>Traveller Bus</h3>
          <p>10-16 person</p>
        </div>
  </div>
  <div class="box">
        <div class="image">
          <img src="images/car2.jpg" alt="">
        </div>
        <div class="content">
          <h3>Scorpio</h3>
          <p>7-8 person</p>
        </div>
  </div>
  <div class="box">
        <div class="image">
          <img src="images/car1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Bolero</h3>
          <p>7-8 person</p>
        </div>
  </div>
  </div> 
  
</section>     

<br>
<section class="booking">
  <h1 class="heading-title">Book your Bus</h1>
  
  <form action="book_bus.php" method="post" class="book-form" onsubmit="myFunction()">
    <div class="flex">
      <div class="inputbox">
        <span>Name:</span>
        <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputbox">
        <span>Phone: </span>
        <input type="number" placeholder="enter your phone" name="phone">
      </div>
      <div class="inputbox">
        <span>Address:</span>
        <input type="text" placeholder="enter your address" name="address">
      </div>
            <div class="inputbox">
              <span>how many :</span>
              <input type="number" placeholder="number of passengers" name="guests">
            </div>
            <div class="inputbox">
              <span>Date:</span>
              <input type="date" placeholder="enter date" name="date">
            </div>
            <div class="inputbox">
              <span>Arrival Time:</span>
                <input type="time" name="arrivals">
            </div>
            <div class="inputbox">
                <span>Departure Time :</span>
                <input type="time" name="departure">
            </div>
            
        </div>
        
        <input type="submit" value="submit" class="btn" name="send">
    </form>
    <br>
    <h1 class="heading-title">Book your Cab</h1>
    
    <form action="book_cab.php" method="post" class="book-form">
        <div class="flex">
            
            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="number of passengers" name="guests">
            </div>
            <div class="inputbox">
                <span>Name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>Phone: </span>
                <input type="number" placeholder="enter your phone" name="phone">
            </div>
            <div class="inputbox">
                <span>Car type :</span>
                <input type="checkbox" placeholder="select room" name="deluxe">
                <label for="deluxe"> Deluxe-->2000/day</label>
                <input type="checkbox" placeholder="select room" name="semideluxe" >
                <label for="semideluxe">Semi-Deluxe-->1500/day</label>
                <input type="checkbox" placeholder="select room" name="average" >
                <label for="average">Average-->1000/day</label>
            </div>
        </div>
        
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>


<!-- footer section starts     -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
      <a href=""><i class="fas fa-angle-right"></i>home</a>
      <a href=""><i class="fas fa-angle-right"></i>about</a>
      <a href=""><i class="fas fa-angle-right"></i>package</a>
      <a href=""><i class="fas fa-angle-right"></i>book</a>
    </div>

    <div class="box">
      <h3>Extra links</h3>
      <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
      <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
      <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
      <a href="#"><i class="fas fa-angle-right"></i>Terms of use </a>
    </div>

    <div class="box">
      <h3>Contact info</h3>
      <a href="#"><i class="fas fa-phone"></i>+91 9876554321</a>
      <a href="#"><i class="fas fa-phone"></i>+91 9876554321</a>
      <a href="https://gmail.com"><i class="fas fa-envelope"></i>dbtravels12@gmail.com</a>
      <a href="https://google.com/maps"><i class="fas fa-map"></i>Haridwar, India - 249407</a>
    </div>
    
    
    <div class="box">
      <h3>Follow Us</h3>
      <a href="https://facebook.com"><i class="fab fa-facebook-f"></i> facebook </a>
      <a href="https://instagram.com"><i class="fab fa-instagram"></i> instagram </a>
      <a href="https://twitter.com"><i class="fab fa-twitter"></i> twitter </a>
      <a href="https://linkedin.com"><i class="fab fa-linkedin"></i> linkedin </a>
    </div>
  </div>
</section>




<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- localjs -->

<script src="script.js"></script>

<!-- bootstrap js link -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>