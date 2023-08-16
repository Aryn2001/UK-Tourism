<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>About</title>
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


<div class="heading" style="background:url(images/adv4.jpg)">
  <h1>About Us</h1>
</div>

<!-- about section starts     -->

<section class="about">
  <div class="image">
    <img src="images/whyus.jpg" alt="">
  </div>  

  <div class="content">
    <h3>why choose us?</h3>
    <p>Our quality and service go hand in hand. We are license travel agency registered with ministry of Tourism and Culture India. Researching and organizing your own holiday and flight can be a stressful task. Let's do the work for you!</p>
    <p>Designed with you in mind, our paackages can be tailored or built completely from scratch to suit your needs.</p>
    <div class="icons-container">
      <div class="icons">
        <i class="fas fa-map"></i>
        <span>top destinations</span> 
      </div>
      <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <span>affordable price</span> 
      </div>
      <div class="icons">
        <i class="fas fa-headset"></i>
        <span>24/7 guide service</span> 
      </div>
    </div>
  </div>
</section>



<!-- about section ends     -->


<!-- review section starts     -->
<section class="reviews">
  <h1 class="heading-title">Review Section</h1>

  <div class="swiper reviews-slider">

    <div class="swiper wrapper">

      <div class="swiper-slider slide">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p>I have taken multiple trips with DreamDrifters and the experience has been truly amazing. They customize packages based on your interests and provide the best prices in the market.</p>
      <h3>John deo</h3>
      <span>traveller</span>
      <img src="images/reviw.jpg" alt="">
      
    </div>

    <div class="swiper-slider slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          
      </div>
      <p>A great trip organized by dream drifters to Auli. Will surely look forward for another trip in future.</p>
      <h3>Harry</h3>
      <span>traveller</span>
      
      <img src="images/reviw2.jpg" alt="">
    </div>

    <div class="swiper-slider slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
      </div>
      <p>Thanks dreamdrifters and shubham for such a wonderful trip...everything was planned perfectly as discussed.</p>
      <h3>Johnny</h3>
      <span>traveller</span>
      <img src="images/reviw3.jpg" alt="">
    </div>
    <div class="swiper-slider slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
      </div>
      <p>Best experience till date. Had been to valley of flowers and hemkund. The place itself is just awsome. Plus the travel went so smooth as all the arrangements were made for stay, food, trek shoes.</p>
      <h3>Michael</h3>
      <span>traveller</span>
      <img src="images/reviw4.jpg" alt="">
    </div>
    <div class="swiper-slider slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
      </div>
      <p>Though the stay not bein lavish, the services provided by the staff was extraordinary.. It was their efforts that want us to travel with them again..Thanks for making our trip the most memorable.</p>
      <h3>Steve</h3>
      <span>traveller</span>
      <img src="images/reviw5.jpg" alt="">
    </div>
    <div class="swiper-slider slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
      </div>
      <p>It was a nice trek for beginners...loved very moment. Keeping yourself boosted was the mantra . Best choice for young energetic to spent their time,money and energy.</p>
      <h3>Billy</h3>
      <span>traveller</span>
      <img src="images/reviw6.jpg" alt="">
    </div>
    </div>
    </div>
  
</section>
<section class="booking">
<h1 class="heading-title">Give your valuable feedback</h1>

<form action="feedback_form.php" method="post" class="book-form" onsubmit="myFunction()">
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
            <span>Rating(1-10)</span>
            <input type="number" placeholder="7" name="rating">
        </div>
        <div class="inputbox">
            <span>Comment:</span>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="write your feedback here..."></textarea>
        </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
</form>
</section>





<!-- about section ends     -->

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