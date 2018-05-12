
<?php
DEFINE('BASE_URL','http://localhost/portfolio/');
?>
<meta name="author" content="AQS">
<meta charset="utf-8">
<title>Aqs Malhotra</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css?v=1.1">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/responsive.css?v=1.0">
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
<link rel="icon" href="images/logo.ico" type="image/x-icon">
<!--JAVASCRIPT LIBRARY INCLUDED JQUERY, BOOSTRAP-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>script/script.js?v=1.0"></script>
</head>
<body>

<div class="page-wrapper">
  <header>

      <div class="header-logo">
        <img src="./images/logo.svg" class="img-fluid"/> Aqs Malhotra
      </div>
      <div class="toggle-menu"><i class="ion-drag"></i></div>
      <div class="header-nav-wrapper">
        <div class="close-nav"><i class="ion-close"></i></div>
        <ul class="header-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <div class="header-nav-section">
            PLACE TEXT HERE
          </div>
        </ul>
      </div>

  </header>

  <main>
      <div class="main-content">
        <div class="container-fluid">
          <div class="text-center">
            <img src="./images/pic.png" class="img-fluid rounded-circle" width="150" height="150" />
            <h2 class="portfolio-name">Aqs Malhotra</h2>
            <span class="portfolio-role">Web & UX Designer</span>
            <ul class="social-section">
              <li><a href="https://www.facebook.com/aqs.malhotra" target="_blank"><img src="./images/social/social-icon1.png" /></a></li>
              <li><a href="https://github.com/aqsmalhotra/" target="_blank"><img src="./images/social/social-icon2.png" /></a></li>
              <li><a href="https://www.instagram.com/aqsmalhotra/" target="_blank"><img src="./images/social/social-icon3.png" /></a></li>
              <li><a href="https://ca.linkedin.com/in/aqs-malhotra-381b7752" target="_blank"><img src="./images/social/social-icon4.png" /></a></li>
            </ul>
            <div class="portfolio-text text-left">
              <p>
              Hi, I am Aqs Malhotra, a pocket-sized anime and sci-fi geek, also,
              a newbie Frontend and User Experience (UX) Designer. I worked as a
              digital marketer and blogger for over 3 years in India before finding
              my calling in the field of design.
              </p>
            </div>
            <div class="cv-block">
              <a class="cv-btn" target="_blank" href="#">View Projects</a>
              <a class="cv-btn" target="_blank" href="#">Download CV</a>
            </div>
          </div>

        </div>
      </div>
      <p class="mt-1">
      When I am not watching doggo <img src="./images/dog.png"> videos on instagram , I work on building
      wireframes and custom templates for websites and applications based on client's <img src="./images/devil.png"> insights and suggestions.
      </p>
      <div class="main-nav">
        <ul>
          <li><a href="#"><i class="ion-home"></i></a></li>
          <li><a href="#"><i class="ion-image"></i></a></li>
          <li><a href="#"><i class="ion-briefcase"></i></a></li>
          <li><a href="#"><i class="ion-quote"></i></a></li>
          <li><a href="#"><i class="ion-social-rss"></i></a></li>
          <li><a href="#"><i class="ion-ios-email-outline"></i></a></li>
        </ul>
      </div>
  </main>

  <section class="container-fluid">
    <div class="text-center">
      <img src="./images/headers/process.png" class="header-icon">
      <h3>Process - How does it work?</h3>
    </div>
    <p class="mb-2">
    A web project, be it for a client or personal, needs to <span class="highlight">
     convey the objective clearly.</span> A website visitor
    should be able to understand the website's purpose easily regardless of the page
    they land on.
    </p>
    <p>
    Hence, to ensure a successful design implementation, an optimal
    process is the way to be as opposed to "winging it".
    </p>
    <div class="row text-center text-uppercase process">
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon1.png" class="img-fluid" /></span>
        <span class="d-block">Step I</span>
        <span class="d-block process-text">Ideation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon2.png" class="img-fluid" /></span>
        <span class="d-block">Step II</span>
        <span class="d-block process-text">Tasks & Timeline</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon3.png" class="img-fluid" /></span>
        <span class="d-block">Step III</span>
        <span class="d-block process-text">Wireframe & Mockup</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon4.png" class="img-fluid" /></span>
        <span class="d-block">Step IV</span>
        <span class="d-block process-text">Content Creation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon5.png" class="img-fluid" /></span>
        <span class="d-block">Step V</span>
        <span class="d-block process-text">Design Implementation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon6.png" class="img-fluid" /></span>
        <span class="d-block">Step VI</span>
        <span class="d-block process-text">Testing</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon7.png" class="img-fluid" /></span>
        <span class="d-block">Step VII</span>
        <span class="d-block process-text">Pre-Deployment Review</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon8.png" class="img-fluid" /></span>
        <span class="d-block">Step VIII</span>
        <span class="d-block process-text">Deployment & Enjoy</span>
      </div>
    </div>
    <p class="mt-2">This process works! Don't believe me? Check out my web projects in the section below.</p>
  <div class="row">
    <div class="col-lg-12">
      <h3>Projects</h3>
    </div>
  </div>
</section>






  <footer>
    <div class="site-info">
      Aqs Malhotra @<?php echo Date("Y"); ?> All Rights Reserved
    </div>
  </footer>
</div>

</body>
</html>
