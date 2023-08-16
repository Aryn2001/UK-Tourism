<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>booking  </title>
<!--swiper css link --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
    </nav>
    
    <div id="menu-btn" class="fas fa-bars">
      
  </div>
</section>
<!-- header section ends -->


<div class="heading" style="background:url(images/book.jpg)">
  <h1>Book now</h1>
</div>

<!-- booking section starts     -->

<section class="booking">
    <h1 class="heading-title">Book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form" onsubmit="myFunction()">
        <div class="flex">
            <div class="inputbox">
                <span>Name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>Email:</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputbox">
                <span>Phone:</span>
                <input type="number" placeholder="enter your phone" name="phone">
            </div>
            <div class="inputbox">
                <span>Address:</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputbox">
                <span>Where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputbox">
                <span>Arrivals:</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputbox">
                <span>Leaving :</span>
                <input type="date" name="leaving">
            </div>
            <div class="inputbox">
                <span>Photographer :</span>
                <input type="text" name="photographer" placeholder="Yes/No">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!-- booking section starts     -->








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
</body>
</html>