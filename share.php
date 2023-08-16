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
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #ff7d7d;

    }
    .share-btn {
    position: relative;
    border: none;
    background: #fff;
    color: orange;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    font-size: 30px;
    padding-top: 2.5px;
    padding-right: 4px;
    cursor: pointer;
} 
.share-options{
    position: absolute;
    bottom: 50%;
    left: 50%;
    width: auto;
    height: auto;
    transform: scale(0);
    transform-origin: bottom left;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    background: rgba(15, 15, 15, 0.5);
    color:#fff;
    padding:20px;
    font-family: 'roboto';
    transition: .5s;
    transition-delay: .5s;

}
.share-options.active{
    transform: scale(1);
    transition-delay: 0s;

}
.title{
    opacity: 0;
    transition: .5s;
    transition-delay: 0s;
    font-size: 20px;
    text-transform: capitalize;
    border-bottom: 1px solid #fff;
    width:fit-content;
    padding: 0 20px 3px 0;
}
.social-media{
    opacity: 0;
    transition: .5s;
    transition-delay: 0s;
    width: 250px;
    height: 120px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin: 10px 0;
}
.social-media-btn{
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #000;
    color: #fff;
    line-height: 50px;
    font-size: 25px;
    cursor: pointer;
    margin: 0 5px;
    text-align: center;
}
.social-media-btn:nth-child(1){
    background: #FFA654;
}
.social-media-btn:nth-child(2){
background: greenyellow;
}
.social-media-btn:nth-child(3){
background: #060333;
}
.social-media-btn:nth-child(4){
background: #745FB8;
}
.social-media-btn:nth-child(5){
background: #1C2EC9;
}
.social-media-btn:nth-child(6){
background: #1F9191;
}
.link-container{
    opacity: 0;
    transition: .5s;
    transition-delay: 0s;
    width: 100%;
    position: relative;
    height: 40px;
    display: flex;
    align-items: center;
    border-radius: 40px;
    background-color: #fff;
    overflow: hidden;
    padding: 0 10px;
}
.link{
    width:80%;
    height: 100%;
    line-height: 40px;
    color: #000;
}
.copy-btn{
    position: absolute;
    right:0;
    cursor: pointer;
    background: #000;
    color: #fff;
    border: none;
    height: 100%;
    width: 30%;
    text-transform: capitalize;
    font-size: 16px ;
}
.share-options.active .title,
.share-options.active .social-media,
.share-options.active .link-container{
    opacity: 1;
    transition: .5s;
    transition-delay: .5s;
}
</style>


</head>
<body>


  

<div class="contaner">
    <button class="share-btn">
      <i class="fas fa-share-alt"></i>
    </button>
    <div class="share-options"><p class="title">share</p>
        <div class="social-media">
            <button class="social-media-btn"><i class="far fa-folder-open "></i></button>
            <button class="social-media-btn"><i class="fab fa-whatsapp"></i></button>
            <button class="social-media-btn"><i class="fab fa-instagram "></i></button>
            <button class="social-media-btn"><i class="fab fa-facebook "></i></button>
            <button class="social-media-btn"><i class="fab fa-linkedin "></i></button>
            <button class="social-media-btn"><i class="fab fa-twitter "></i></button>
        </div>
        <div class="link-container">
            <p class="link">https://example.com/share</p>
            <button class="copy-btn">copy</button>
        </div>
    </div>
  </div>




<!-- swiper js link -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    const shareBtn = document.querySelector('.share-btn');
    const shareOptions = document.querySelector('.share-options');

    shareBtn.addEventListener('click',()=>{
        shareOptions.classList.toggle('active');
    })

</script>



</body>
</html>  