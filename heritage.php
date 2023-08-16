<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>Heritage</title>
<!--swiper css link --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<style>
  
.card-container{
  flex-wrap: wrap;
  display: flex;
  justify-content: space-between;
}

.row {
  width: 100%;
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}
.card {
  width: 475px;
  padding: 10px;
  height: 400px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.card:hover img {
  transform: scale(1.2);
}

.card-text {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  transition: transform 0.5s ease;
  transform: translateY(100%);
}

.card:hover .card-text {
  transform: translateY(0);
}

.card-text h3 {
  margin: 0;
  font-size: 24px;
  font-weight: bold;
}

.card-text p {
  margin: 10px 0 0;
  font-size: 16px;
}

</style>


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


<div class="heading" style="background:url(images/hrtgbg.jpg)">
  <h1>Heritage Sites</h1>
</div>




<section class="packages">
<div class="content home-offer">
<h3 style="font-size: 3rem;">amazing heritage sites</h3>
</section>




<section>

<div class="card-container">
<div class="row">
<div class="card">
  <img src="images/hrtg1.jpg" alt="Card image">
  <div class="card-text">
    <h2>Katarmal Sun Temple, Almora</h2>
    <p>The main deity of the Sun temple in Katarmal is called Burhadita or Vraddhaditya (the old Sun God). The idols of Shiva-Parvati and Lakshmi-Narayana are also found in this temple.</p>
  </div>
</div>
<div class="card">
  <img src="images/hrtg2.jpg" alt="Card image">
  <div class="card-text">
    <h2>Baijnath, Bagheshwar</h2>
    <p>A beautiful ancient town tucked in the eastern half of the Garhwal Himalayas, Baijnath is popular for the Baijnath Temple and other ancient temples.</p>
    
  </div>
</div>
<div class="card">
  <img src="images/hrtg3.jpg" alt="Card image">
  <div class="card-text">
    <h2>Pithoragarh Fort, Pithoragarh</h2>
    <p>Pithoragarh Fort is one of the most sought after historical places in Uttarakhand. Located in the proximity to the place, this fort affords spectacular views of the Kali Kumaon.</p>
  </div>
</div>
</div>

<div class="row">
<div class="card">
  <img src="images/hrtg4.jpg" alt="Card image">
  <div class="card-text">
    <h2>Kalsi</h2>
    <p>A small village in the Dehradun district of Uttarakhand, Kalsi is known as the gateway to the Jaunsar-Bawar tribal region.</p>
  </div>
</div>
<div class="card">
  <img src="images/hrtg5.jpg" alt="Card image">
  <div class="card-text">
    <h2>Ghuddauda</h2>
    <p>Ghuddauda in Uttarakhand is a historical destination known for horse racing during the British Raj. Grand races were conducted in a large field here that attracted people from all around the region. </p>
  </div>
</div>
<div class="card">
  <img src="images/hrtg6.jpg" alt="Card image">
  <div class="card-text">
    <h2>Mahasur Devta Temple</h2>
    <p>This is one of the best monuments of Uttarakhand and is located in Hanol. Hanol is considered amongst the most popular villages of Uttarakhand and is established around Tons River.</p>
  </div>
</div>
</div>
</div>
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