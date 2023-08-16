let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};


window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop: true,
    spaceBetween: 20,
    grabCusrsor: true,
    autoHeight: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,

        },
        1024: {
            slidesPerView: 3,

        },
    },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;
loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')]
    for (var i = currentItem; i < currentItem + 3; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    };

}
$("#buton").click(function() {
    $("#box form").toggle("slow");
    return false;
});

function myFunction() {
    alert("YOUR FORM IS SUBMITTED");
}

// When the page loads, hide the registration form
document.querySelector(".register-form").style.display = "none";

// When the user clicks on the "Register" button, show the registration form
document.querySelector(".login-form button").addEventListener("click", function() {
    document.querySelector(".register-form").style.display = "block";
    document.querySelector(".login-form").style.display = "none";
});

// When the user clicks on the "Login" button, submit the login form
document.querySelector(".register-form button").addEventListener("click", function() {
    // Get the username and password from the form
    var username = document.querySelector("#username").value;
    var password = document.querySelector("#password").value;

    // Send an Ajax request to the server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/login");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(JSON.stringify({
        username: username,
        password: password
    }));

    // Handle the response
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Redirect the user to the home page
            window.location.href = "/";
        } else {
            // Show an error message
            alert("Invalid username or password");
        }
    };
});