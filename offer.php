<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">

<title>Offer</title>
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
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  padding:5px;
  border-radius: 5px;
}
@media screen and(max-width:500px) {
  .card{
    width: 100%;
  }
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.row .card img {
  border-radius: 5px 5px 0 0;
  object-fit: cover;
  height: 350px; 
}

.container {
  padding: 6px 24px;
}
.container h1{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 3rem;
  font-weight: bold;
  color: red;
}
.container p{
  font-size: 2rem;
  color: blue;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.container button{
  font-family: fantasy;
  color: black;
  background: greenyellow;
  padding:3px 8px;
  margin:4px;
  font-size: 25px;
  cursor: pointer;
  border: none;
  border-radius: 10px;
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


<div class="heading" style="background:url(images/ofrbg.jpg)">
  <h1>exciting offers</h1>
</div>




<section class="packages">
<div class="content home-offer">
<h3 style="font-size: 3rem;">Amazing offers and deals</h3>
</section>




<section>


<div class="card-container">
<div class="row">
<div class="card">
  <img src="images/ofr1.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h1><b>get up to 50% off on hotel booking</b></h1> 
    <p>Space to live your life</p>
    <a href="https://booking.com"><button>Avail now</button></a>  
  </div>
</div>
<div class="card">
  <img src="images/ofr2.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h1><b>get up to 20% off on tour booking</b></h1> 
    <p>exciting tour packages</p>
    <a href="https://makemytrip.com"><button>Avail now</button></a>  
  </div>
</div>
<div class="card">
  <img src="images/ofr3.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h1><b>special winter discount upto 20% off</b></h1> 
    <p>enjoy chilling winters with our homestays</p>
    <a href="https://trivago.com"><button>Avail now</button></a>  
  </div>
</div>
</div>

<div class="row">
<div class="card">
  <img src="images/ofr4.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h1><b>get upto 15% off on car booking</b></h1> 
    <p>book a good trip with us</p>
    <a href="https://cabbazar.com"><button>Avail now</button></a>  
  </div>
</div>
<div class="card">
  <img src="images/ofr5.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h1><b>get upto 8% off on booking bus</b></h1> 
    <p>book a good trip with us</p>
    <a href="https://bharattaxi.com"><button>Avail now</button></a>  
  </div>
</div>
<div class="card">
  <img src="images/ofr6.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h1><b>get upto 30% off on photographer booking</b></h1> 
    <p>get awesome clicks with us</p>
    <a href="https://appointy.com"><button>Avail now</button></a> 
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