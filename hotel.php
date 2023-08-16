<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>Hotel and Yatra</title>
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



  
<div class="heading" style="background:url(images/hotlbg.jpg)">
  <h1>Hotels and Resorts</h1>
</div>
<section class="packages">
  <h1 class="heading-title">Let's have a look!</h1>
      <div class="box-container">
      <div class="box">
        <div class="image">
          <a href="https://marriott.com"><img src="images/htl1.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>JW Mariott Walnut Grove Resort and Spa</h3><br>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Mussorie</span>
          <p style="color:brown; font-size: 2rem; font-weight: bold;">Rating - 4.5</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
        <a href="https://roseatehotels.com"><img src="images/htl2.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>The Roseate Ganges </h3>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Rishikesh</span>
          <p style="color:brown; font-size: 2rem; font-weight: bold;">Rating - 4.8</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href="https://agoda.com"><img src="images/htl3.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>The Manu Maharani</h3>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Nainital</span>
          <p style="color:brown; font-size: 2rem; font-weight: bold;">Rating - 4.7</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href="https://tripadvisor.com"><img src="images/htl5.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Yashail Hotel</h3>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Haridwar</span>
          <p style="color:brown; font-size: 2rem; font-weight: bold;">Rating - 4.0</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href="https://tajhotels.com"><img src="images/htl4.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Taj Corbett Resort and Spa</h3>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Ramnagar</span>
          <p style="color:brown; font-size: 2rem; font-weight: bold;">Rating - 4.6</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href="https://hyatt.com"><img src="images/htl6.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Hyatt Regency</h3>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Dehradun</span>
          <p style="color:brown; font-size: 2rem; font-weight: bold;">Rating - 5.0</p>
        </div>
      </div>
      
      
</div>
</section>


<section class="booking">
    <h1 class="heading-title">Book your Hotel!</h1>

    <form action="book_hotel.php" method="post" class="book-form" onsubmit="myFunction()">
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
                <span>Aadhar Number:</span>
                <input type="number" placeholder="enter aadhar number" name="aadhar">
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
                <span>Hotel Name:</span>
                <input type="text" placeholder="Hyatt Residency" name="hotel">
            </div>
            <div class="inputbox">
                <span>Room type :</span>
                <input type="checkbox" placeholder="select room" name="acroom">
                <label for="acroom"> AC Room-->2000/day</label><br><br>
                <input type="checkbox" placeholder="select room" name="nonacroom" >
                <label for="nonacroom">NON-AC Room-->1500/day</label>
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
</body>
</html>