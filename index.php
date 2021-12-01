<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Hrithik Bansal</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content= "width=device-width, user-scalable=no">
<?php
require('connection.php');
?>
<link rel="stylesheet" type="text/css" href="style.css">

<!-- <link rel="stylesheet" type="text/css" href="phone.css"> -->
<link rel="stylesheet" type="text/css" href="first.css">
<link rel="stylesheet" media="screen and (max-width:870px)" href="phone.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.4s;

}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #00ffff;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
 /*Content box*/
#example1 {
  
  width: 270px;
  height: 22px;
  padding: 20px;  
  border: 3px solid #00ffff;
  font-size: 1.3rem;
  font-family: "poppins-bold", sans-serif;
  text-align: center;
  margin: auto;
}
#about {
    padding-top: 12rem;
    padding-bottom: 15rem;
  }

ul#item li {
  display:inline;
}

a:link {
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}

img{
  border-radius: 100%;
}


</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact_form">Contact</a>
  </div>
</div>

<div style="background-color: black; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; right: 0px;">
<span style="font-size:30px; color: #00ffff; margin-left: 80px; cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<div> <br><br><br> 
  <h3 id="hrithik" align="center">@HRITHIK_BANSAL</h3>
<span>
  <h1 id="hello" align="center">Hello World!</h1>
</span>


<div style="color: #888888; line-height: 1.8; text-align: center; font-size: 1.4rem;">| WEB DEVELOPER |</div>

<br><br><br><br>
<a href="#about" style="text-decoration: none;">
<div id="example1" align="center" style="color: white; font-family: monospace; font-size: 1.4rem">MORE ABOUT ME &#8675;
</div>
</a>

<ul align="center" style="letter-spacing: 1.3rem; margin-top: 80px; ">
<a href="https://www.linkedin.com/in/hrithikban" target="_blank" style="text-decoration: none;">
  <i class="fa fa-linkedin" style="font-size:48px;color:#00ffff"></i>
</a>

<a href="https://github.com/hrithik1122" target="_blank" style="text-decoration: none;">
    <i class="fa fa-github" style="font-size:48px;color:#00ffff"></i>
</a>

<a href="mailto:connectwithhrithik@gmail.com" target="_blank" style="text-decoration: none;">
  <i class="fa fa-envelope" style="font-size:46px;color:#00ffff"></i>
</a>

</ul>
<br><br><br><br><br>
</div>


<section id="about" style="padding-top: 5rem;">
  <h1 align="center" style="font-family: poppins-bold; color: #00ffff; letter-spacing: 0.4rem;">ABOUT</h1>
  <h1 align="center" style="font-size: 2.0rem; color: #313131;">Let me introduce myself.</h1> 

<br><br><br>
<div>
  <img src="favicon.jpg" id="image">
  <p id="intro">
    Hi! I’m Hrithik Bansal. I’m a Web Developer. <br>I spend my valuable times everyday, experimenting with coding and inhaling a wide <br> variety of conceiving information through a few projects. <br>I tried all the technologies like HTML, CSS, PHP.

  I'm inquisitive and fond of working<br> with challenges that let me acquire new informations & stretch in a different direction.</p>
</div>

<br><br><br>
<br><br>
<div>
<ul id="browse">BROWSE</ul>


<ul id="skills">SKILLS</ul> 
</div>


<br>
<div> 
<!-- <ul style="font-size: 1.5rem; color:#000000; margin: 6.14rem 7rem 0 32rem; font-family: sans-serif; display: inline;"><a href="" target="_blank" style="color: #06c;"></a></ul> -->
<ul id="ht">HTML</ul>

<br><br>
<ul id="resume"><a href="" target="_blank" style="color: #06c;">Resume ></a></ul>
<ul id="cs">CSS</ul>
<br><br>


<ul id="project"><a href="https://github.com/hrithik1122?tab=repositories" target="_blank" style="color: #06c;">Projects ></a></ul>
<ul id="php">PHP</ul>
<br><br>
<ul id="empty"></ul>
<ul id="laravel">Laravel</ul>

<br><br>
<ul id="empty1"></ul>
<ul id="mysql">MySql</ul>
</div>


</section>
<br>


<section id="contact_form">
  <div align="center">
  <h1 align="center" style="font-family: poppins-bold; color: #00ffff; letter-spacing: 0.4rem;">Contact</h1>
  <h1 align="center" style="font-size: 1.0rem; color: grey; line-height: 2.0; letter-spacing: 0.2rem;">Enter here your informations, I will receive the email and I'll give you a response as soon as possible.</h1>

  <div id="container">
  <h1>&bull; Keep in Touch &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
    <svg class="icon" viewBox="0 0 145.192 145.192">
      <path d="M126.82,32.694c-2.804,0-5.08,2.273-5.08,5.075v2.721c-1.462,0-2.646,1.185-2.646,2.647v1.995    c0,1.585,1.286,2.873,2.874,2.873h20.577c1.462,0,2.646-1.185,2.646-2.647v-3.041c0-1.009-0.816-1.825-1.823-1.825v-2.722    c0-2.802-2.276-5.075-5.079-5.075h-1.985v-3.829c0-3.816-3.095-6.912-6.913-6.912h-0.589h-20.45c0-2.67-2.164-4.835-4.833-4.835    H56.843c-2.67,0-4.835,2.165-4.835,4.835H34.356v-3.384h-9.563v3.384v1.178h-7.061v1.416c-2.67,0.27-10.17,1.424-13.882,5.972    c-1.773,2.17-2.44,4.791-1.983,7.793c0.463,3.043,1.271,6.346,2.128,9.841c2.354,9.616,5.024,20.515,0.549,28.077    C2.647,79.44-3.125,90.589,2.201,99.547c4.123,6.935,13.701,10.44,28.5,10.44c1.186,0,2.405-0.023,3.658-0.068v9.028h-0.296    c-2.516,0-4.558,2.039-4.558,4.558v4.566h100.04v-4.564c0-2.519-2.039-4.558-4.558-4.558h-0.297V84.631h0.297    c2.519,0,4.558-2.037,4.558-4.556v-0.009c0-2.516-2.039-4.556-4.556-4.556l-36.786-0.009V61.973c0-2.193-1.777-3.971-3.972-3.971    v-4.711h0.456c1.629,0,2.952-1.32,2.952-2.949h14.227V34.459h1.658c2.672,0,4.834-2.165,4.834-4.834h20.45v3.069H126.82z     M34.06,75.511c-2.518,0-4.558,2.04-4.558,4.556v0.009c0,2.519,2.042,4.556,4.558,4.556h0.296v24.12l-0.042-1.168    c-15.994,0.574-26.122-2.523-30.106-9.229C-0.464,90.5,4.822,80.347,6.55,77.423c4.964-8.382,2.173-19.774-0.29-29.825    c-0.843-3.442-1.639-6.696-2.088-9.638c-0.354-2.35,0.129-4.3,1.484-5.958c3.029-3.714,9.509-4.805,12.076-5.1v1.233h7.061v1.49    v2.684c-2.403,1.114-4.153,2.997-4.676,5.237H18.15c-0.584,0-1.056,0.474-1.056,1.056v0.83c0,0.584,0.475,1.056,1.056,1.056h1.984    c0.561,2.18,2.304,3.999,4.658,5.092v0.029c0,0-2.282,20.823,16.479,22.099v1.102c0,1.177,0.955,2.133,2.133,2.133h3.297    c1.178,0,2.133-0.956,2.133-2.133V50.135c0-1.177-0.955-2.132-2.133-2.132h-3.297c-1.178,0-2.133,0.955-2.133,2.132    c-1.575-0.235-5.532-1.17-6.635-4.547c2.36-1.092,4.109-2.913,4.669-5.097h1.308c0.722,0,1.309-0.584,1.309-1.308v-0.578    c0-0.584-0.475-1.056-1.056-1.056h-1.539c-0.542-2.332-2.416-4.271-4.968-5.363v-2.559h17.651c0,2.67,2.166,4.835,4.836,4.835 h2.392v15.88h13.639c0,1.629,1.321,2.949,2.951,2.949h0.899v4.711c-2.194,0-3.972,1.778-3.972,3.971v13.529L34.06,75.511z     M95.188,101.78c0,8.655-7.012,15.665-15.664,15.665c-8.653,0-15.667-7.01-15.667-15.665c0-8.647,7.014-15.664,15.667-15.664    C88.177,86.116,95.188,93.132,95.188,101.78z M97.189,45.669h-9.556c0-0.896-0.726-1.62-1.619-1.62H74.494    c-0.896,0-1.621,0.727-1.621,1.62h-8.967v-11.21h33.283V45.669z"></path>
      <path d="M70.865,101.78c0,4.774,3.886,8.657,8.66,8.657c4.774,0,8.657-3.883,8.657-8.657c0-4.773-3.883-8.656-8.657-8.656    C74.751,93.124,70.865,97.006,70.865,101.78z"></path>
    </svg>
  </div>

  <form action="database.php" method="post">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Name" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="Email" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="telephone"></label>
      <input type="text" placeholder="Phone Number" name="telephone" id="telephone_input" required>
    </div>
    <div class="subject">
      <label for="subject"></label>
      <!-- <input placeholder="Subject" name="subject" id="subject_input" required> -->
      <textarea name="subject" placeholder="Subject" id="message_input" required></textarea>
        <!-- <option disabled hidden selected>Subject line</option>
        <option>I'd like to start a project</option>
        <option>I'd like to ask a question</option>
        <option>I'd like to make a proposal</option>
        <option>Others</option> -->
      <!-- </select> -->
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" name="submit_it">
    </div>
  </form><!-- // End form -->
</div><!-- // End #container -->
<br>
</div>
</div>
</section>

</body>
</html>