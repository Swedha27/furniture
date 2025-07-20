<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>FurniHome - All In One</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>

    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: #fff0f5;
}

.container {
  max-width: 1300px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}

.navbar {
  display: flex;
  align-items: center;
  padding: 20px;
}

nav {
  flex: 1;
  text-align: right;
}

nav ul {
  list-style: none;
  display: inline-block;
}

nav ul li {
  display: inline-block;
  margin: 0 20px;
}

a {
  text-decoration: none;
  color: #333;
}

.header {
  background: radial-gradient(circle at top left, #ffd6e8, #ffc1da);
}

.row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}

.col-2 {
  flex-basis: 50%;
  min-width: 300px;
  text-align: center;
}

.col-2 img {
  max-width: 100%;
  padding: 50px 0;
}

.btn {
  display: inline-block;
  background: linear-gradient(to right, #ff5fa2, #ff3e6c);
  color: #fff;
  padding: 10px 30px;
  border-radius: 30px;
  margin-top: 20px;
  transition: 0.3s ease;
}

.btn:hover {
  background: linear-gradient(to right, #ff3e6c, #ff5fa2);
}

.categories,
.offer,
.testimonial,
.brands {
  margin: 50px 0;
}

.title {
  text-align: center;
  margin: 30px 0;
  font-size: 30px;
  color: #cc2a72;
}

.col-3 img,
.col-4 img {
  width: 100%;
  border-radius: 10px;
}

.col-4 {
  flex-basis: 23%;
  padding: 10px;
  margin-bottom: 30px;
  background: linear-gradient(to bottom, #fff, #ffe4ec);
  box-shadow: 0 0 5px rgba(255, 105, 180, 0.2);
  text-align: center;
}

.rating {
  color: #ff69b4;
}

.footer {
  background: linear-gradient(to right, #ff3e6c, #ff5fa2);
  color: #fff;
  font-size: 14px;
  padding: 60px 0 20px;
}

.footer h3 {
  color: #fff;
  margin-bottom: 20px;
}

.footer .row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer ul {
  list-style: none;
}

.app-logo img {
  width: 120px;
  margin-right: 10px;
}

hr {
  border: none;
  height: 1px;
  background: #ffc1da;
  margin: 20px 0;
}

.menu-icon {
  width: 28px;
  margin-left: 20px;
  display: none;
}

@media(max-width: 800px) {
  nav ul {
    position: absolute;
    top: 60px;
    left: 0;
    background: linear-gradient(to right, #ff5fa2, #ff3e6c);
    width: 100%;
    display: none;
  }

  .menu-icon {
    display: block;
    cursor: pointer;
  }
}

.form-container {
max-width: 400px;
margin: 40px auto;
padding: 20px;
border: 1px solid #ddd;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0,0,0,0.1);
background: #fff9fb;
}
.form-container input, .form-container button, .form-container textarea {
width: 100%;
padding: 10px;
margin: 10px 0;
}
.form-container button {
background: #ff3e6c;
color: white;
border: none;
cursor: pointer;
}
.gradient-divider {
height: 4px;
background: linear-gradient(to right, #ff8aba, #ff3e6c);
border: none;
margin: 20px 0;
}
#scrollTopBtn {
display: none;
position: fixed;
bottom: 20px;
right: 30px;
z-index: 99;
font-size: 18px;
border: none;
outline: none;
background-color: #ff3e6c;
color: white;
cursor: pointer;
padding: 10px 15px;
border-radius: 10px;
}

#scrollTopBtn:hover {
background-color: #d82d5e;
}


.bubbles {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 0;
overflow: hidden;
pointer-events: none;
}

.bubbles span {
position: absolute;
bottom: -150px;
width: 20px;
height: 20px;
background: rgba(255, 62, 108, 0.6);
border-radius: 50%;
animation: rise 10s infinite ease-in;
}

.bubbles span:nth-child(1) {
left: 10%;
animation-delay: 0s;
width: 10px;
height: 10px;
}
.bubbles span:nth-child(2) {
left: 20%;
animation-delay: 1s;
}
.bubbles span:nth-child(3) {
left: 30%;
animation-delay: 2s;
}
.bubbles span:nth-child(4) {
left: 40%;
animation-delay: 0.5s;
}
.bubbles span:nth-child(5) {
left: 50%;
animation-delay: 1.5s;
}
.bubbles span:nth-child(6) {
left: 60%;
animation-delay: 2.5s;
width: 15px;
height: 15px;
}
.bubbles span:nth-child(7) {
left: 70%;
animation-delay: 3.5s;
}
.bubbles span:nth-child(8) {
left: 80%;
animation-delay: 4.5s;
}
.bubbles span:nth-child(9) {
left: 90%;
animation-delay: 5.5s;
}
.bubbles span:nth-child(10) {
left: 95%;
animation-delay: 6s;
width: 12px;
height: 12px;
}

@keyframes rise {
0% {
transform: translateY(0) translateX(0) scale(1);
opacity: 0.8;
}
50% {
transform: translateY(-500px) translateX(30px) scale(1.1);
opacity: 0.6;
}
100% {
transform: translateY(-1000px) translateX(-30px) scale(1.2);
opacity: 0;
}
}

</style>
</head>
<body>
<div class="bubbles">
<span></span><span></span><span></span><span></span><span></span>
<span></span><span></span><span></span><span></span><span></span>
</div>

<div class="container">
<div class="navbar" data-aos="fade-down">
<div class="logo">
<h1>FurniHome</h1>
</div>
<nav>
<ul id="MenuItems">
<li><a href="#">Home</a></li>
<li><a href="#products">Products</a></li>

<li><a href="#contact">Contact</a></li>
<li><a href="#account">Account</a></li>
</ul>
</nav>
<img src="{{ asset('images/menu.jpg') }}" class="menu-icon" onclick="toggleMenu()">

</div>
</div>


<div class="header" data-aos="fade-up">
<div class="container">
<div class="row">
<div class="col-2">
<h1>Upgrade Your Home<br>with Premium Furniture</h1>
<p>Explore our exclusive collection of modern and classic designs that elevate your lifestyle.</p>
<a href="#products" class="btn">Explore Now →</a>
</div>
<div class="col-2">
<img src="{{ asset('images/fur_Showcase.webp') }}" alt="Furniture Showcase">

</div>
</div>
</div>
</div>


<div class="categories" id="products" data-aos="zoom-in-up">
<div class="container">
<h2 class="title">Featured Collections</h2>
<div class="row">
<div class="col-4">
<img src="{{ asset('images/sofa.webp') }}" alt="Furniture Showcase">

<h4>Luxury Sofas</h4>
</div>
<div class="col-4">
<img src="{{ asset('images/dining.webp') }}" alt="Furniture Showcase">

<h4>Dining Sets</h4>
</div>
<div class="col-4">
<img src="{{ asset('images/recliner.webp') }}" alt="Furniture Showcase">

<h4>Recliners</h4>
</div>
</div>
</div>
</div>

<div class="offer" data-aos="flip-right">
<div class="container">
<div class="row">
<div class="col-2">
<img src="{{ asset('images/offer_offer.avif') }}" alt="Furniture Showcase">

</div>
<div class="col-2">
<p>Exclusively Available on FurniHome</p>
<h1>Modern Lounge Chair</h1>
<small>Premium comfort and elegance combined in one iconic design.</small>
<br>
<a href="#products" class="btn">Buy Now →</a>
</div>
</div>
</div>
</div>


<div class="testimonial" data-aos="flip-right">
<div class="container">
<h2 class="title">Why Choose Us</h2>
<div class="row">
<div class="col-4">
<h4>🚚 Free Delivery</h4>
<p>We offer free doorstep delivery for all purchases.</p>
</div>
<div class="col-4">
<h4>🔄 Easy Returns</h4>
<p>7-day hassle-free return policy on all items.</p>
</div>
<div class="col-4">
<h4>✅ Quality Assurance</h4>
<p>Premium quality checks to ensure durability and safety.</p>
</div>
</div>
</div>
</div>


<div class="gradient-divider" data-aos="flip-right"></div>


<div class="container" id="contact" data-aos="fade-up">
<h2 class="title">Contact Us</h2>
<div class="form-container">
<form>
<input type="text" placeholder="Your Name" required>
<input type="email" placeholder="Your Email" required>
<textarea rows="4" placeholder="Your Message" required></textarea>
<button type="submit">Send Message</button>
</form>
</div>
</div>


<div class="container" id="account" data-aos="flip-left">
<h2 class="title">Login </h2>
<div class="form-container">
<form>
<input type="text" placeholder="Username" required>
<input type="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

</div>
</div>

<div class="footer" data-aos="fade-up">
<div class="container">
<div class="row">
<div class="footer-col-1">
<h3>Download Our App</h3>
<p>Download App for Android and iOS mobile phone.</p>
<div class="app-logo">
<img src="{{ asset('images/google.png') }}" alt="Furniture Showcase">

</div>
</div>
<div class="footer-col-2">
<h3>FurniHome</h3>
<p>Your comfort, our priority. Bringing you the best of furniture.</p>
</div>
<div class="footer-col-3">
<h3>Links</h3>
<ul>
<li><a href="#products">Products</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="#account">Account</a></li>
</ul>
</div>
</div>
<hr />
<p class="copyright">© 2025 FurniHome</p>
</div>
</div>

<button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">↑</button>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();


const scrollBtn = document.getElementById("scrollTopBtn");

window.onscroll = function () {
if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
scrollBtn.style.display = "block";
} else {
scrollBtn.style.display = "none";
}
};

function scrollToTop() {
window.scrollTo({ top: 0, behavior: 'smooth' });
}


var MenuItems = document.getElementById("MenuItems");
function toggleMenu() {
MenuItems.style.display = MenuItems.style.display === "block" ? "none" : "block";
}
</script>


</body>
</html>