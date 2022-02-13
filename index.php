<?php 
require('connection.php');
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Hrithik Bansal</title>

	<meta name="description" content="">  
	<meta name="author" content="">
  <meta name="viewport" content= "width=device-width, user-scalable=no">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto:400,700&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     
   <link rel="stylesheet" href="css/card.css">  



   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-K822ZSBEC7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K822ZSBEC7');
</script>

   <!-- favicons
	================================================== -->
	<link rel="icon" href="favicon.jpg">

<style>
	
	@import url(https://fonts.googleapis.com/css?family=Khula:700);
/*body {
  background: #111;
}*/
.hidden {
  opacity:0;
}
.console-container1 {
 
  font-family:Khula;
  font-size:4em;
  text-align:center;
  height:200px;
  width:600px;
  display:block;
  position:absolute;
  color:white;
  top:0px;
  bottom:0;
  left:0;
  right:0;
  margin:auto;
}
.console-underscore {
   display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}
</style>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">Menu</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#experience" title="">Experience</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Projects</a></li>
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>@HRITHIK_BANSAL</h5>
	   			<!-- <h1>HELLO WORLD!</h1> -->


<!-- <p class="intro-position"> -->
						<h3>
	   				<div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
	   				</h3>
	   			<!-- </p> -->


<script>

	   				// function([string1, string2],target id,[color1,color2])    
 consoleText(['Web Developer','Designer'], 'text',['white','white','white']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
	   			
</script>

<br>
	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   <ul class="intro-social">

   <li><a href="https://www.linkedin.com/in/hrithikban" target="_blank"><i class="fa fa-linkedin"></i></a></li>
   <li><a href="https://github.com/hrithik1122" target="_blank"><i class="fa fa-github"></i></a></li>
   <li><a href="mailto:connectwithhrithik@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
   
   </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">
   				<img src="favicon.jpg" alt="Profile Picture">

   				<p class="lead">Hi! I'm Hrithik Bansal, currently working as a Web Developer.
   				Persuing Bachelor of Technology degree in CSE from the Jaypee University of Engineering & Technology,Guna.<br>
					I spend my valuable times everyday, experimenting with coding and inhaling a wide 
					variety of conceiving information through a few projects. 
					I tried all the technologies like HTML, CSS, PHP and beginner level experience in React JS.<br>
					I'm inquisitive and fond of working
					with challenges that let me acquire new informations & stretch in a different direction.</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<span style="font-size: 1.5rem;">Here are my details.</span>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Hrithik Bansal</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>June 19, 2000</span>
   				</li>

   				<li>
   					<strong >Resume</strong>
   					<br>
   					<a href="img/HrithikResume.pdf">
   						<i class='fa fa-file-text-o' style="font-size: 30px; color: black;"></i>
   					</a>
   				</li>

   				<li>
   					<strong>Education</strong>
   					<p style="font-size: 1.5rem;"><span style="color: #343a40; font-size: 1.6rem;">Jaypee University Of Engineering & Technology,Guna</span>Bachelor Of Technology (CSE) <span style="color: #bd5d38;">2019-2023</span></p>	
   				</li>
   				<!-- <li>
   					<strong>Email:</strong>
   					<span>connectwithhrithik@gmail.com</span>
   				</li> -->

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
			<br>	
				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>Html5</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>Css</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>Php</strong>
				   </li>
				   <li>
				   	<div class="progress percent50"><span>50%</span></div>
				   	<strong>Java Script</strong>
				   </li>
				   <!-- <li>
				   	<div class="progress percent60"><span>60%</span></div>
				   	<strong>Node Js</strong>
				   </li> -->
      
				</ul> <!-- /skill-bars -->	

				<h3>AREA OF INTEREST</h3>	
				<ul>
				<li>
				   	<strong>Database management system</strong>
				</li>
				<li>
				   	<strong>Python (Beginner)</strong>
				</li>
			</ul>

   		</div>

   	</div>

   </section> <!-- /process-->   


<section id="experience">
	<br>
<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Experience</h5>

   		</div> 
   	</div> <!-- /section-intro -->

<body data-theme="dark">
  <main class="padding-y-xl">

    <div class="container max-width-adaptive-md margin-bottom-lg">
      <ul class="stack-cards js-stack-cards">
        <li data-theme="default" class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item">
          <div class="grid">
            <div class="col-6 flex items-center height-100%">
              <div class="text-component padding-md ">
               <h3>Software Developer Intern</h3>
                <p>
                	<a style="color: black;" href="https://www.iiysoftware.com/" target="_blank"><span>IIY SOFTWARE Pvt Ltd</span></a>
                	<br>
                	<span style="color: #bd5d38;">08 Dec 2021 - Present</span>
                	<br>
                Implemented a dynamic, interactive UI website with various functionalities.
              </p>
              </div>
            </div>

            <div class="col-6 height-100%">
            	<p style="text-align: center;"><a href="https://www.iiysoftware.com/" target="_blank"><img src="img/iiysoftware.jpg"></a>
            	</p>
              <!-- <img class="block width-100% height-100% object-cover" src="img/img-2.jpg" alt="Image description"> -->
            </div>
          </div>
        </li>
      
        <li data-theme="default" class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item">
          <div class="grid">
            <div class="col-6 flex items-center height-100%">
              <div class="text-component padding-md ">
                <h3>Python Intern</h3>
                <p>
                	<a style="color: black;" href="http://www.twowaits.in" target="_blank"><span>Twowaits Technologies Pvt Ltd</span></a>
                	<br>
                	<span style="color: #bd5d38;">01 Nov 2021 - 31 Nov 2021</span>
                	<br>
                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. -->
              </p>
              </div>
            </div>

            <div class="col-6 height-100%">
            	<p style="text-align: center;"><a href="http://www.twowaits.in" target="_blank"><img src="img/twowaits.jpg"></a></p>
              <!-- <img class="block width-100% height-100% object-cover" src="img/img-2.jpg" alt="Image description"> -->
            </div>
          </div>
        </li>
        <li data-theme="default" class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item">
          <div class="grid">
            <div class="col-6 flex items-center height-100%">
              <div class="text-component padding-md ">
                <h3>Backend Intern</h3>
                <p>
                	<a style="color: black;" href="https://digimonk.in/" target="_blank"><span>Digimonk Technologies Pvt Ltd</span></a>
                	<br>
                	<span style="color: #bd5d38;">01 June 2021 - 21 Sept 2021</span>
                	<br>
                Worked as backend developer which takes me towards intermediate level in Php. <!-- Build complete login web app from very scratch and integrated with the frontend. -->
              </p>
              </div>
            </div>

            <div class="col-6 height-100%">
              <p style="text-align: center; margin-top: 50px;"><a href="https://digimonk.in/" target="_blank"><img src="img/digimonk.jpg"></a></p>
            </div>
          </div>
        </li>

      </ul>
    </div>
  
</main>
<script src="js/scripts.js"></script>
</section>

	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Projects</h5>
   			<h1>Check Out Some of My Projects.</h1>

   			<p class="lead"></p>

   		

				 <p style="text-align:left;">
   				<strong style="font-size: 2.3rem;">✓ Right to MBBS</strong>
          <br>
   				<span style=" margin-left: 25px; letter-spacing: 10px;">
   					<!-- <a href="#">
              <img src="img/github.png">
   					</a> -->
   					<a href="http://consultingservices.epizy.com/" target="_blank">
              <img src="img/worldwide3.png">
   					</a>
            </span>
   					<a href="http://consultingservices.epizy.com/" target="_blank">
   						<img src="img1/img1.png">
   					</a>
   				<span align="left" style="color: #585d62; font-size: 1.8rem;"><br>Dynamic, Interactive user interface website having several components with various functionalities, Admin dashboard.</span>
				</p>


         <p style="text-align:left;">
          <strong style="font-size: 2.3rem;">✓ Quizilla</strong>
          <br>
          <span style=" margin-left: 25px; letter-spacing: 10px;">
<!--             <a href="#">
              <img src="img/github.png">
            </a> -->
            <a href="https://hrithik1122.github.io/quizilla.github.io/" target="_blank">
              <img src="img/worldwide3.png">
            </a>
            <a href="https://hrithik1122.github.io/quizilla.github.io/" target="_blank" >
              <img src="img1/img2.png">
            </a>
          </span>
          <span align="left" style="color: #585d62; font-size: 1.8rem;"><br>Quiz web application, using (Text-to-Speech) API for listening questions, added a Excel sheet that records student details and result.</span>
        </p>

   		</div>   		
   	</div> <!-- /section-intro--> 
	</section> <!-- /portfolio --> 

<br>
	
   <!-- contact
   ================================================== -->

	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1></h1>

   			<p class="lead"></p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
			<form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="name" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="email" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="subject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="message" id="contactMessage" placeholder="Message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform" name="submit_it">SUBMIT</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> 

         </div> <!-- /col-twelve -->
   		
     	</div> <!-- /contact-info -->



   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>


</body>

</html>