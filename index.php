<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">
<title>Home</title>
<!-- swiper css link -->
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
      <a href="#contactus">Contact Us</a>
      <a href="share.php">Share</a>
      <a href="login.php">SignUp</a>
    </nav>
    
    <div id="menu-btn" class="fas fa-bars">
      
  </div>
</section>
<!-- header section ends -->

<!-- homem section starts -->
<section class="swiper home">
  <div class="swiper home-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide" style="background:url(images/hm11.jpg)">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>travel around the Uttarakhand</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background:url(images/hm8.jpg)">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>discover the new places</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background:url(images/hm7.jpg)">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>make your tour worthwhile</h3>
          <a href="package.php" style="color:white; background-color: grey;" class="btn">discover more</a>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  
</section>

<!-- home section ends -->

<!-- service section starts -->

<section class="services">
  <h1 class="heading-title" style="background-color: lightgreen; text-shadow: 3px 4px 5px red; font-weight: bolder;">Welcome To DevbhoomiTravels</h1>
  <h1 class="heading-title">Our Services</h1>
  <div class="box-container">
    
    <div class="box">
      <a href="service.php"><img src="icons/adv.png" alt=""></a>
      <h3>adventure</h3>
    </div>
    <div class="box">
      <a href="railway.php"><img src="icons/train.png" alt=""></a>
      <h3>Train Booking</h3>
    </div>
    <div class="box">
      <a href="service.php"><img src="icons/trek.png" alt=""></a>
      <h3>trekking</h3>
    </div>
    <div class="box">
      <a href="service.php"><img src="icons/camping.png" alt=""></a>
      <h3>camping</h3>
    </div>
    <div class="box">
      <a href="service.php"><img src="icons/wld.png" alt=""></a>
      <h3>Wildlife</h3>
    </div>
    <div class="box">
      <a href="yatra_hotel.php"><img src="icons/4dham.png" alt=""></a>
      <h3>Chaardham Yatra</h3>
    </div>
    <div class="box">
      <a href="hotel.php"><img src="icons/htl.png" alt=""></a>
      <h3>Hotels Booking</h3>
    </div>
    <div class="box">
      <a href="vehicle_book.php"><img src="icons/vhicl.png" alt=""></a>
      <h3>Vehicle Booking</h3>
    </div>
    <div class="box">
      <a href="#photography"><img src="icons/photo.png" alt=""></a>
      <h3>High-Quality Photography</h3>
    </div>
    <div class="box">
      <a href="#culture"><img src="icons/cltr.png" alt=""></a>
      <h3>Uttarakhand Culture</h3>
    </div>
    <div class="box">
      <a href="#food"><img src="icons/food.png" alt=""></a>
      <h3>Special Authentic Dishes</h3>
    </div>
    <div class="box">
      <a href="hotel.php"><img src="icons/htl2.png" alt=""></a>
      <h3>Hotels</h3>
    </div>
    <div class="box">
      <a href="homestay.php"><img src="icons/hmstay.png" alt=""></a>
      <h3>Homestays</h3>
    </div>
    <div class="box">
      <a href="offer.php"><img src="icons/spclofr.png" alt=""></a>
      <h3>Offers</h3>
    </div>
    <div class="box">
      <a href="heritage.php"><img src="icons/heritage.png" alt=""></a>
      <h3>Heritage sites</h3>
    </div>
    <div class="box">
      <a href="roadtrip.php"><img src="icons/road.png" alt=""></a>
      <h3>Road Trips</h3>
    </div>
    <div class="box">
      <a href="shopping.php"><img src="icons/shop.png" alt=""></a>
      <h3>Shopping Places</h3>
    </div>
  </div>
  
</section>

<!-- video section starts -->

<section class="videos">
  
  <h1 class="heading-title">let's watch some videos of famous places</h1>
  <div class="container">
    <div class="heading">
      <div class="video-container">
        
        <div class="video">
          <div class="iframe-container">
          <a href="https://youtube.com"><iframe width="690" height="565" src="https://www.youtube.com/embed/UhE7GjQUi0k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a></div>
        </div>
        <div class="video">
          <div class="iframe-container">
          <a href="https://youtube.com"><iframe width="690" height="565" src="https://www.youtube.com/embed/rij3-zbYgtE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a></div>
        </div>
        <div class="video">
          <div class="iframe-container">
          <a href="https://youtube.com"><iframe width="690" height="565" src="https://www.youtube.com/embed/DWuveNWHnNI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a></div>
        </div>
        <div class="video">
          <div class="iframe-container">
          <a href="https://youtube.com"><iframe width="690" height="565" src="https://www.youtube.com/embed/_FRbZblrn8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a></div>
        </div>
        <div class="video">
          <div class="iframe-container">
          <a href="https://youtube.com"><iframe width="690" height="565" src="https://www.youtube.com/embed/LsQO27fAZCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a></div>
        </div>
        <div class="video">
          <div class="iframe-container">
          <a href="https://youtube.com"><iframe width="690" height="565" src="https://www.youtube.com/embed/OCKL5b2R8xM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- video section ends -->



<!-- home about section starts-->
<section class="home-about">
  <div class="image">
    <img src="images/new.png" alt="">
  </div>
  <div class="content">
    <h3>about us</h3>
    <p>‘DevBhoomi Travels’ “Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Organization Name’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. Through our exceptionally curated occasion bundles, we need to take you on an adventure.</p>
    <a href="about.php" class="btn">read more</a>
  </div>
  
</section>

<!-- home about section ends-->

<!-- home packages section starts-->

<section class="home-packages">
  <h1 class="heading-title">Our packages</h1>

  <div class="box-container">
  <div class="box">
    <div class="image">
    <a href="https://makemytrip.com"><img src="images/chopta.jpg" alt=""></a>
    </div>
    <div class="content">
      <h3>Chopta</h3>
      <p>Chopta is a picturesque hamlet which is still unexplored by travelers, is also famous as "Mini Switzerland of Uttarakhand". Wake up with cool salubrious breeze and chirping of birds in Chopta which is a far cry from the blaring horns of the cities and other hill stations, morning view from Chopta is invigorating when the crimson rays of sun kisses the snow-laden Himalayas. This hushed abode is enclosed by the dwindling pines, deodars, rhododendrons and other conifers that can be found in this region, which makes Chopta rich in flora and fauna.</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </div>

  <div class="box">
    <div class="image">
    <a href="https://makemytrip.com"><img src="images/nainital.jpg" alt=""></a>
    </div>
    <div class="content">
      <h3>Nainital</h3>
      <p>Nainital is famous for its scenic mountain views and is commonly known as the Lake District of India. Situated at an altitude of 1938 m, Nainital derives its name from Naini Lake, among the must include places in your Nainital tour packages. The highest point is Naina Peak or China Peak, with an elevation of 2,615 m. Nainital is surrounded by mountains on three sides and the town is spread around the beautiful Naini lake.</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </div>

  <div class="box">
    <div class="image">
    <a href="https://makemytrip.com"><img src="images/vof.jpg" alt=""></a>
    </div>
    <div class="content">
      <h3>Valley of flowers</h3>
      <p>Bestowed with the rare and exotic Himalayan flora, the Valley of Flowers is a bouquet of nature peacefully snuggled in the West Himalayan region of Uttarakhand. The trek of Valley of flowers goes through dense forests, along with Pushpawati river and can be reached by crossing many bridges, glaciers and waterfalls on the way. This glaring piece of nature is an Indian National Park and a UNESCO World Heritage Site exhibiting plush meadows blossomed with endemic alpine flowers and diverse fauna in this valley.</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </div>
</div>
<div class="load-more"> <a href="package.php" class="btn">load more</a></div>
</section>

<!-- home packages section ends-->


<!-- home offer section starts-->

<section class="home-offer">
  <div class="content">
    <h3>upto 50% off</h3>
    <p>Get the offer of 50% of more than 3 bookings.</p>
    <a href="offer.php" class="btn">offers</a>
  </div>
</section>  
<!-- home offer section ends-->

<!-- photography section ends-->


<section class="packages">
  <a name="photography">
    <div class="heading" style="background:url(images/photobg.jpg)">
      <h1>Let's Click!</h1>
    </div>  
    <br>
    <div class="content home-offer">
      <h3 style="font-size: 3rem;">Get the best memories with our photography</h3>
      <br>
      <p style="font-size:large; background-color: lightblue; line-height: 1.9;">With our experienced photographer, you are sure to get the best photography experience with beautiful memories to last a lifetime. Our photographer will help you capture the most precious moments of your special day in the most stunning and pleasant way. Our team of experts will be there to guide and assist you in every step of the way. From the initial consultation to the completion of the shoot, you can rely on us too.</p>
    </div>
    <br>
    <br>
    
    <div>
      <h1 style="font-size: 4rem; color: brown; text-shadow: 2px 3px 5px yellow;">Some Click's by Our Photographer</h1>
    </div>
    

<div class="card-container">
<div class="row">
<div class="card">
  <img src="images/phot1.jpg" alt="Card image">
  <div class="card-text">
    <h2>auli</h2>
    <p></p>
  </div>
</div>
<div class="card">
  <img src="images/almr.jpg" alt="Card image">
  <div class="card-text">
    <h2>Almora</h2>
    <p></p>
  </div>
</div>
<div class="card">
  <img src="images/phot3.jpg" alt="Card image">
  <div class="card-text">
    <h2>kausani</h2>
    <p></p>
  </div>
</div>
</div>

<div class="row">
<div class="card">
  <img src="images/mnli.jpg" alt="Card image">
  <div class="card-text">
    <h2>Manali</h2>
    <p></p>
  </div>
</div>
<div class="card">
  <img src="images/hrdr.jpg" alt="Card image">
  <div class="card-text">
    <h2>haridwar</h2>
    <p></p>
  </div>
</div>
<div class="card">
  <img src="images/phot6.jpg" alt="Card image">
  <div class="card-text">
    <h2>Rishikesh</h2>
    <p></p>
  </div>
</div>
</div>
</div>


<!--     
    <div class="box-container">
    <div class="box">
        <div class="image">
          <img src="images/phot1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Auli</h3>
          <p></p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/phot2.jpg" alt="">
        </div>
        <div class="content">
          <h3>Jageshwar Temple Almora</h3>
          <p></p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/phot3.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kasauni</h3>
          <p></p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/phot4.jpg" alt="">
        </div>
        <div class="content">
          <h3>Manali</h3>
          <p></p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/phot5.jpg" alt="">
        </div>
        <div class="content">
          <h3>Haridwar</h3>
          <p></p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/phot6.jpg" alt="">
        </div>
        <div class="content">
          <h3>Rishikesh</h3>
          <p></p>
        </div>
      </div>
      </div>   -->

</section>  

<section class="culture">
  <a name="culture">
<div class="heading" style="background:url(images/cltr.jpg)">
  <h1>Our Culture</h1>
</div><br>  
  <div class="content home-offer">
    <h3 style="font-size: 3rem;">Know about the culture of our Devbhoomi</h3><br>
    <p style="font-size:large; background-color: lightblue; line-height: 1.9;">Garhwali is the main language spoken here that has a number of dialects too including Jaunsari, Marchi, Jadhi and Sailani. Garhwal is inhabited by people belonging to a number of ethnic groups and castes.</p>
    
    <p style="font-size:large; background-color: lightblue; line-height: 1.9;">The people of Kumaon speak 13 dialects including Kumaiya, Gangola, Soryali, Sirali, Askoti, Danpuriya, Johari, Chaugarkhyali, Majh Kumaiya, Khasparjia, Pachhai and Rauchaubhaisi. This group of languages is known as the group of Central Pahari languages. Kumaon is also rich in its folk literature which comprises myths, heroes, heroines, bravery, Gods, Goddesses and the characters drawn from Ramayana and Mahabharatha</p>
    
    <p style="font-size:large; background-color: lightblue; line-height: 1.9;">The lives of the people of Uttarakhand are filled with a lot of music and dance. Dancing is considered to form a major part of their traditions. Some of the folk dances include: Barada Nati is the popular dance of Jaunsar Bhawar area in Dehradun district Langvir Nritya is an acrobatic dance form performed by the men Pandav Nritya is the narration of Mahabharatha in the form of music and dance Dhurang & Dhuring are popular folk dances of the bhotiya tribals</p>
    <!-- <a href="book.php" class="btn">book now</a> -->
  </div>

  <br>
    <br>

    <div>
      <h1 style="font-size: 4rem; color: brown; text-shadow: 2px 3px 5px yellow;">Tradition and Culture of Garhwal and Kumaon with some festivals</h1>
    </div>
    <div class="box-container">
    <div class="box">
        <div class="image">
          <img src="images/cltr1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Bhotia Culture</h3>
          <p>The Bhotia is an agricultural cum pastoral community of Mongoloid ethnicity. They reside in the higher altitude of the state where the climate is frigid. They weave woollen yarn and stitch their woollen clothes. The traditional dress of the women comprises of a skirt, shirt, waistcoat, and a coat. Their necks, ears and nose are usually adorned with beads, rings, and nose rings made of gold or silver. The men typically wear trousers and over it a loose gown tied around the waist with a woollen cloth called patta and a woollen cap.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Garhwal</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/cltr2.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kumaoni Attire</h3>
          <p>In Kumaon region, married women wear big naths made from gold covering their entire cheek, hansuli, black beaded necklace or chareu, bichuye (toe rings) made from silver, and sindoor. These were considered mandatory. A woman adorned in the traditional jewellery (Pithoragarh)</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Kumaon</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/cltr3.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kumbh Mela</h3>
          <p>Kumbh Mela is one of the biggest and the most popular festival of Uttarakhand. It is the largest congregation of pilgrims globally, which involves taking a dip in the river Ganga to rid of one's sins. This mela is a 3-month long festival and takes place once in every four years rotating between Allahabad, Haridwar, Ujjain, and Nasik, i.e., only once in 12 years in any one place.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Haridwar</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/cltr4.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kanwar Yatra</h3>
          <p>The onset of the Hindu month of Shravan (July) marks the commencement of the 'Kanwar Yatra' sacred pilgrimage journey. During the month-long yatra, millions of devotees of Lord Shiva from all over the country make a journey to the banks of the River Ganga (cities like Haridwar, Gangotri, Gaumukh, etc) and carry back sacred water from the river to a Shiva temple. The dedication of the devotees is such that they even carry their deity on a 'Kanwar' and travel to the holy river bare feet. Large camps and gatherings can be seen in Haridwar.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Haridwar</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/cltr5.jpg" alt="">
        </div>
        <div class="content">
          <h3>Nanda Devi Raj Jat Yatra</h3>
          <p>Also known as the 'Himalayan Mahakumbh', this festival of Uttarakhand marks commemoration to Goddess Nanda Devi wherein devotees from both the Garhwal and Kumaon regions come together to be a part of the sacred yatra. Held for three weeks and being organized once every twelve years, the Nanda Devi Raj Jat Yatra which spans over 280 km takes almost 22 days to complete. During this yatra, all sections of the society take part- dalits play drums, thakurs blow bhankauras, and brahmins take care of ceremonial parasols.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Kumaon</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/cltr6.jpg" alt="">
        </div>
        <div class="content">
          <h3>Cultural Heritage of Uttarakhand</h3>
          <p>Uttarakhand’s people are proud of their culture and Heritage. It houses people from many sub-groups and ethnic groups together under one roof, which is the beauty of the State of Uttarakhand. This paper talks about Uttarakhand people’s culture, beliefs, and traditions. Traditions, religions, fairs, festivals, folk dances, music are what separate these people from the rest of the crowd.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Garhwal</span>
        </div>
      </div>
      </div>

</section>

<section class="packages">
  <a name="food">
<div class="heading" style="background:url(images/foodbg.jpg)">
  <h1>Our Food</h1>
</div><br>
  <div class="content home-offer">
    <h3 style="font-size: 3rem;">Special authentic dishes of Uttarakhand</h3><br>
    <p style="font-size:large; background-color: lightblue; line-height: 1.9;">Uttarakhand Cuisine proffers a highly tempting blend of the piquant spices with their ultra-fine aromatic flavours. While having a joyful trip to the famous hill stations of Uttarakhand, you will eventually be welcomed with the aromatic flavours of the famous Panch Phoron plus rest spices in recipes you taste and feel their presence in the traditional food of Uttarakhand that have attained global popularity.</p>
    
    <br>
    <br>

    <div>
      <h1 style="font-size: 4rem; color: brown; text-shadow: 2px 3px 5px yellow;">Some famous foods with their places</h1>
    </div><br>
    <div class="box-container">
    <div class="box">
        <div class="image">
          <img src="images/fd1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Lassi & Kulhar Wala Milk</h3>
          <p>There is no denying that Haridwar has the best quality milk & milk food items, and that’s why trying them during your trip is a must. From lassi to hot frothy milk served in earthen (kulhar) pots, you can savour anything. To ensure that you have the best experience, do tell the bhaiya if you’d like them to serve it to you as salty, sweet, or mix.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place:</h2><span style="font-size:3.5rem; color:blue;">Moti Bazar</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href="https://www.kalsangrestaurants.com"><img src="images/fd2.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Katlama</h3>
          <p>As well as the bustling balti triangle and the various Desi restaurants, katlama is also a part of the list. With several takeaways and restaurants to choose from, there is a katlama for everyone. They are good for large family gatherings and dinner parties as a quick starter or snack.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Dehradun</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href=""><img src="images/fd3.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Phaanu</h3>
          <p>This appetizing dish may take a little more time to cook than others, but once it is ready all the time and effort will be worth it. Phaanu also spelled as ‘Phanu’ is prepared by mixing different lentils that are soaked overnight. This soupy dish, when served with freshly cooked white rice, makes a perfect luncheon for winter season.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Garhwal</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href=""><img src="images/fd4.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Aloo Ke Gutke</h3>
          <p>This palatable dish comes from Kumaon but is equally popular in Garhwal region as well. Every house of Uttarakhand has a unique way of making it and mind it every version of it, is amazing. For making Aloo ke Gutke, you only need a few ingredients namely boiled potatoes, jakhiya (Cleme Viscosa), red chillies and coriander leaves to garnish it.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Kumaon</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href=""><img src="images/fd5.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Bal Mithai</h3>
          <p>Bal Mithai (Sweet) is one of the most famous sweets of Uttarakhand and native people love to eat it after their meals. It is a dark brown Fedge-like sweet made with roasted khoya and white sugar balls covered it from all sides that give it a crunchy feel. It is a speciality of the Almora district in Uttarakhand.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Lansdowne</span>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <a href=""><img src="images/fd6.jpg" alt=""></a>
        </div>
        <div class="content">
          <h3>Kafuli</h3>
          <p>This dish is a boon for all the diet-conscious people out there. Yes, it is actually that nutritious. Kafuli is a famous food of Uttarakhand prepared of Spinach and fenugreek leaves. This exotic dish is prepared in an iron kadhai and complemented by hot steaming rice. It is the most nourishing and health-conscious dish you will come across in the state.</p>
          <h2 style="color:red; font:bold; font-size: 2.5rem; background-color: lightblue;">Place</h2><span style="font-size:3.5rem; color:blue;">Garhwal</span>
        </div>
      </div>
      </div> 
   
</section>  


<!-- photography   section ends-->








<!-- footer section starts -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick links</h3>
      <a href=""><i class="fas fa-angle-right"></i>home</a>
      <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
      <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
      <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
    </div>

    <div class="box">
      <h3>Extra links</h3>
      <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
      <a href="about.php"><i class="fas fa-angle-right"></i>About Us</a>
      <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
      <a href="#"><i class="fas fa-angle-right"></i>Terms of use </a>
    </div>

    <div class="box">
      
    <a name="contactus"></a><h3>Contact info</h3>
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


<!-- footer section ends -->


<!-- swiper js link -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>



</body>
</html>