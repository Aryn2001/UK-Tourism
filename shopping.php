<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>Train</title>
<!--swiper css link --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<style>
  /* .card {
  width: 300px;
  height: 400px;
  position: relative;
  overflow: hidden;
}

.card img {
  width: 100%;
  height: 100%;
  transition: transform 0.5s ease;
}

.card:hover img {
  transform: scale(1.2);
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.5s ease;
  background-color: rgba(0, 0, 0, 0.5);
}

.card:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
} */


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
      <a href="login.php">SignUp</a>
    </nav>
    
    <div id="menu-btn" class="fas fa-bars">
      
  </div>
</section>
<!-- header section ends -->




<div class="heading" style="background:url(images/shpbg.jpg)">
  <h1>best shopping places </h1>
</div>




<section class="packages">
<div class="content home-offer">
<h3 style="font-size: 3rem;">some of the best shoping markets around uttarakhand</h3>
</section>



<section>

<!-- <div class="card">
  <img src="images/adv1.jpg" alt="Card image">
  <div class="overlay">
    <div class="text">Hover Text</div>
  </div>
  <p>helloooo</p>
</div> -->

<div class="card-container">
<div class="row">
<div class="card">
  <img src="images/shp1.jpg" alt="Card image">
  <div class="card-text">
    <h3>Ringaal Handicraft</h3>
    <p>Created by the Ringaal people of the Kumaon Region in Uttarakhand, this handicraft is an ancient art in the state. Ringaal handicraft is made using the bamboo which can be found in the state in abundance. The popular Ringaal items are baskets, kitchen utility items, mats, and furniture.</p>
  </div>
</div>
<div class="card">
  <img src="images/shp2.jpg" alt="Card image">
  <div class="card-text">
    <h3>Tibetan Market</h3>
    <p>Tibetan Market is one great market that is run by natives of Tibet. You can find some amazing variety of bags, scarves, shawls, ethnic dresses, mufflers, trinkets and even watches. The best thing about this market is that it is pretty affordable.</p>
  </div>
</div>
<div class="card">
  <img src="images/shp3.jpg" alt="Card image">
  <div class="card-text">
    <h3>Auli</h3>
    <p>However, there are a few local shops and markets in Auli where you can buy essential items, winter clothing, and souvenirs. The Joshimath town, which is about 16 km from Auli, has a more extensive market area and offers a wider variety of goods.</p>
  </div>
</div>
</div>

<div class="row">
<div class="card">
  <img src="images/rishikesh.jpg" alt="Card image">
  <div class="card-text">
    <h3>Rishikesh</h3>
    <p>There is no better place to begin your shopping escapade in Rishikesh than at the Laxman Jhula Market. Home to many local stores, at this market expect to find many pooja essentials and religious items.</p>
  </div>
</div>
<div class="card">
  <img src="images/shop5.jpg" alt="Card image">
  <div class="card-text">
    <h3>Dehradun</h3>
    <p>One of the most economical places in the city, Paltan Bazaar is famous for Basmati rice, which also is one of the most popular things to buy in Dehradun.</p>
  </div>
</div>
<div class="card">
  <img src="images/shp6.jpg" alt="Card image">
  <div class="card-text">
    <h3>Pacific Mall</h3>
    <p>Pacific Mall is Dehradun’s beloved shopping, dining and lifestyle destination. Back in 2013, it was the beginning of this revolutionary project which later evolved into the prime shopping complex in Uttarakhand.</p>
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