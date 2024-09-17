<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>St. Francis of Assisi Chaplaincy</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="images/st_francis" type="image/x-icon" />
  </head>
  <body>
    <div class="container">
      
      <!-- Creating a Nav Bar -->
      <div class="nav_bar_container">
        <div class="logo">
                <img src="images/st_francis" alt="">
        </div>
        <div class="navigation">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Prayers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
        </div>
      </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/st_francis" style="width: 100%; height: 50vh">
  <div class="text">Image 1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
   <img src="images/st_francis" style="width: 100%; height: 50vh">
  <div class="text">image 2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
    <img src="images/st_francis" style="width: 100%; height: 50vh">
  <div class="text">image 3</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
 


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>





      <div class="welcoming_verse">
        <div class="the_verse">
          <h4>
            I am the door. If anyone enters by me, <br />
            He will be saved and will go in and out and find pasture
          </h4>
          <button id="verse">John 10:9</button>
        </div>
      </div>
      <div class="leaders_images">
        <div class="leader_one" id="leader_1"></div>
        <div class="leader_one" id="leader_2"></div>
        <div class="leader_one" id="leader_3"></div>
      </div>

      <div class="upcoming_event">
        <h2>Upcoming-events</h2>
        <div class="upcoming-events">
          <div class="event">
            <h3>Event Title 1</h3>
            <p>Date: October 10, 2024</p>
            <p>Location: City Conference Hall</p>
            <a href="#" class="event-link">Learn more</a>
          </div>

          <div class="event">
            <h3>Event Title 2</h3>
            <p>Date: November 15, 2024</p>
            <p>Location: Downtown Plaza</p>
            <a href="#" class="event-link">Learn more</a>
          </div>
        </div>
      </div>

      <div class="container">

        <h1 id="the_lords">greet </h1>
        <p id="greeting">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. A, assumenda voluptatem aut iure amet neque beatae praesentium officia ab laudantium ex, dolorem voluptas saepe. Ipsam dignissimos nulla quis labore voluptates?

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quam aperiam illum possimus, fuga iure. Doloremque delectus praesentium labore dolorum mollitia ad assumenda ratione fugit optio ex, rem sed rerum.

          Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, alias, non placeat cupiditate quia minus facilis omnis beatae delectus id, totam ullam ratione voluptatum ab! Commodi eaque deleniti saepe illum.
        </p>
        <button id="greet" onclick="document.getElementById('the_lords').innerHTML='Good evening'">Say your today's Greeting</button>
      </div>
      <div class="footer_container">
        <div class="ft_container">
          <h2>Services</h2>
          <hr />
          <p>Eucharist</p>
          <p>Offering</p>
          <p>Offering</p>
          <p>Offering</p>
        </div>
        <div class="ft_container">
          <h2>Prayers</h2>
          <hr />
          <p>Eucharist</p>
          <p>Offering</p>
          <p>Offering</p>
          <p>Offering</p>
        </div>
        <div class="ft_container">
          <h2>Services</h2>
          <hr />
          <p>Eucharist</p>
          <p>Offering</p>
          <p>Offering</p>
          <p>Offering</p>
        </div>
       <!-- <div class="ft_container">
          <h2>Services</h2>
          <hr />
          <p>Eucharist</p>
          <p>Offering</p>
          <p>Offering</p>
          <p>Offering</p>
        </div>-->
      </div>

      <div class="copy_right">
        <h3>Copy_right reserved @ <b> 2024 | God Loves You Brethren</b></h3>
      </div>
    </div>
  </body>
</html>
