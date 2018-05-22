<?php
DEFINE('BASE_URL','http://localhost/portfolio/');
//DEFINE('BASE_URL','https://aqsmalhotra.com/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="This is the portfolio website designed by Aqs Malhotra">
  <meta name="author" content="Aqs Malhotra">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#00ABEE"/>
  <title>Aqs Malhotra - Web & UX Designer</title>

  <!--CSS LIBRARY, FRAMEWORK INCLUDED-->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css?v=1.2">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/responsive.css?v=1.1">
  <link rel="shortcut icon" href="images/content/favicon.png" type="image/x-icon">

  <!--JAVASCRIPT LIBRARY INCLUDED JQUERY, BOOSTRAP-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="<?php echo BASE_URL; ?>script/script.js?v=1.2"></script>
</head>
<body>

<div class="page-wrapper">
  <header>
  </header>

  <main>
      <div class="main-content" id="home">
        <div class="container-fluid">
          <div class="text-center">
            <img alt="Aqs Malhotra Logo" src="./images/content/logo.png" class="img-fluid rounded-circle" width="125" height="125" />
            <h1 class="portfolio-name">Aqs Malhotra</h1>
            <h2 class="portfolio-role">Web & UX Designer</h2>
            <ul class="social-section">
              <li><a href="https://www.facebook.com/aqs.malhotra" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Facebook" src="./images/social/social-icon1.png" /></a></li>
              <li><a href="https://github.com/aqsmalhotra/" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Github" src="./images/social/social-icon2.png" /></a></li>
              <li><a href="http://be.net/aqsm2011e41e" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Behance" src="./images/social/social-icon5.png" /></a></li>
              <li><a href="https://ca.linkedin.com/in/aqs-malhotra-381b7752" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra LinkedIn" src="./images/social/social-icon4.png" /></a></li>
              <li><a href="https://www.instagram.com/aqsmalhotra/" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Instagram" src="./images/social/social-icon3.png" /></a></li>
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
              <a class="cv-btn" href="#projects">View Projects</a>
              <a class="cv-btn" rel="noopener noreferrer" target="_blank" href="./uploads/resume.pdf">Download CV</a>
            </div>
          </div>

        </div>
      </div>

      <div class="main-nav">
        <ul>
          <li tooltip="Home" tooltip-position="right"><a href="#home"><img alt="Home Icon" src="./images/menu/home.png"></a></li>
          <li tooltip="Skills" tooltip-position="right"><a href="#skills"><img alt="Skills Icon" src="./images/menu/skills.png"></a></a></li>
          <li tooltip="Process" tooltip-position="right"><a href="#process"><img alt="Process Icon" src="./images/menu/process.png"></a></a></li>
          <li tooltip="Projects" tooltip-position="right"><a href="#projects"><img alt="Projects Icon" src="./images/menu/projects.png"></a></a></li>
          <li tooltip="Contact" tooltip-position="right"><a href="#contact"><img alt="Contact Icon" src="./images/menu/contact.png"></a></a></li>
        </ul>
      </div>
  </main>

  <section class="container-fluid" id="skills">
    <div class="text-center">
      <img alt="Skills Icon" src="./images/headers/skills.png" class="header-icon">
      <h3 class="animated infinite pulse" class="animated infinite pulse">Skills & Interests</h3>
    </div>
    <p class="mb-2">
      I possess a skill or two, apart from endlessly watching re-reruns of F.R.I.E.N.D.S. <img alt="Cats" src="./images/content/cat.png">
    </p>
    <div class="row text-center">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <span class="skill-set">Design</span>
        <ul class="list-unstyled skill-lists">
          <li>HTML5</li>
          <li>CSS3</li>
          <li>JavaScript</li>
          <li>WordPress CMS</li>
          <li>Adobe Photoshop</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <span class="skill-set">Prototyping</span>
        <ul class="list-unstyled skill-lists">
          <li>Balsamiq</li>
          <li>UXPin</li>
          <li>InVision</li>
          <li>Mockflow</li>
          <li>Marvel</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <span class="skill-set">Marketing</span>
        <ul class="list-unstyled skill-lists">
          <li>Google Adwords</li>
          <li>Google Analytics</li>
          <li>Google Webmaster</li>
          <li>WP Analytics</li>
          <li>Moz Analytics</li>
        </ul>
      </div>
      </div>
    <p class="pb-2">These are the <span class="highlight">tools of my trade</span>,
    some essential, some just for party tricks!</p>
  </section>

    <section class="container-fluid" id="process">
    <div class="text-center">
      <img alt="Process Icon" src="./images/headers/process.png" class="header-icon">
      <h3 class="animated infinite pulse">Design Process</h3>
    </div>
    <p class="mb-2">
    A web project, be it for a client or personal, needs to <span class="highlight">
    convey the objective clearly.</span> For me, an optimal step-by-step process
    is the way to be as opposed to simply
    <img alt="Wings" src="./images/content/wings.png"> "winging it".
    </p>
    <div class="row text-center text-uppercase process">
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 1" src="./images/process/icon1.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step I</span>
        <span class="d-block process-text">Ideation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 2" src="./images/process/icon2.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step II</span>
        <span class="d-block process-text">Tasks & Timeline</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 3" src="./images/process/icon3.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step III</span>
        <span class="d-block process-text">Wireframe & Mockup</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 4" src="./images/process/icon4.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step IV</span>
        <span class="d-block process-text">Content Creation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 5" src="./images/process/icon5.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step V</span>
        <span class="d-block process-text">Design Implementation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 6" src="./images/process/icon6.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step VI</span>
        <span class="d-block process-text">Testing</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 7" src="./images/process/icon7.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step VII</span>
        <span class="d-block process-text">Pre-Deployment Review</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img alt="Process Step 8" src="./images/process/icon8.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step VIII</span>
        <span class="d-block process-text">Deployment & Enjoy</span>
      </div>
    </div>
    <p class="mt-2 pb-2">This process works! Don't believe me? Check out my <span class="highlight">web projects</span> in the section below.</p>
  </section>

  <section class="container-fluid" id="projects">
    <div class="text-center">
      <img alt="Projects Icon" src="./images/headers/project.png" class="header-icon">
      <h3 class="animated infinite pulse">Projects</h3>
    </div>
    <p class="mb-2">
      Since I am less than an year old in the design industry, there is no big line-up of
      projects in my basket. But, with each project, I have tried to implement <span class="highlight">something innovative</span>.
    </p>

    <!-- Project #1 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img alt="Project Banner" src="./images/projects/site2.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 project-block">
        <span class="project-name">Dazzlin Star Island Amusement Park</span>
        <p>This is a college group project where I was the lead designer. This website is
        for a non-existent theme park in Toronto with numerous features, like
        ticket booking, parking, careers etc.</p>
        <a href="https://dazzlin.xyz/home" rel="noopener noreferrer" class="d-block pt-1 pb-2" target="_blank"><button type="button" class="btn btn-warning btn-web btn-sm"><i class="fas fa-globe"></i>&nbsp;&nbsp;EXPLORE WEBSITE</button></a>
        <a href="https://www.behance.net/gallery/65881955/Dazzlin-Star-Island" rel="noopener noreferrer" class="d-block pt-1 pb-2" target="_blank"><button type="button" class="btn btn-dark btn-web btn-sm"><i class="far fa-calendar-check"></i>&nbsp;&nbsp;VIEW WIREFRAMES</button></a>
      </div>
    </div>
    <!-- End -->

    <!-- Project #2 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img alt="Project Banner" src="./images/projects/site3.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 project-block">
        <span class="project-name">Stephen Alter</span>
        <p>The official website of <a href="https://en.wikipedia.org/wiki/Stephen_Alter" rel="noopener noreferrer"  target="_blank">Stephen Alter</a>,
          a renowned Indian Author, built with WordPress CMS. His lastest books and publications
          as well as links to purchase his books are present in this website.</p>
        <a href="http://stephenalter.net/" rel="noopener noreferrer" class="d-block pt-1 pb-2" target="_blank"><button type="button" class="btn btn-warning btn-web btn-sm"><i class="fas fa-globe"></i>&nbsp;&nbsp;EXPLORE WEBSITE</button></a>
        <a href="https://www.behance.net/gallery/50743029/stephenalter-webdesign-wireframe" rel="noopener noreferrer" class="d-block pt-1 pb-2" target="_blank"><button type="button" class="btn btn-dark btn-web btn-sm"><i class="far fa-calendar-check"></i>&nbsp;&nbsp;VIEW WIREFRAMES</button></a>
      </div>
    </div>
    <!-- End -->

    <!-- Project #3 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img alt="Project Banner" src="./images/projects/site4.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 project-block">
        <span class="project-name">Mussoorie Writers</span>
        <p>After the successful deployment of Stephen Alter's official website, I got
          hired again for another project - Mussoorie Writers. This website was also
          built with WordPress CMS and consists of posts, writings and information
          by renowned authors across the world.</p>

        <a href="http://mussooriewriters.com/" rel="noopener noreferrer" class="d-block pt-1 pb-2" target="_blank"><button type="button" class="btn btn-warning btn-web btn-sm"><i class="fas fa-globe"></i>&nbsp;&nbsp;EXPLORE WEBSITE</button></a>
        <a href="https://www.behance.net/gallery/50742371/mussooriewriters-communtiy-wireframe-webdesign" rel="noopener noreferrer" class="d-block pt-1 pb-2" target="_blank"><button type="button" class="btn btn-dark btn-web btn-sm"><i class="far fa-calendar-check"></i>&nbsp;&nbsp;VIEW WIREFRAMES</button></a>
      </div>
    </div>
    <!-- End -->

    <p class="mt-2 pb-2">
      Impressed? What are you waiting for then? Talk to me !!!
    </p>
</section>

<section class="container-fluid" id="contact">
    <div class="text-center">
      <img alt="Contact Icon" src="./images/headers/contact.png" class="header-icon">
      <h3 class="animated infinite pulse">Get in Touch</h3>
    </div>
      <p class="mb-2">
        Do you have a project in mind? Wish to <span class="highlight">collaborate or hire</span> me for a task?
        DM me and I'll get back to you ASAP!
      </p>
      <form id="contact-form" class="contact-form">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" class="form-control" placeholder="Ichigo Kurosaki" required="required" data-error="Please enter your full name">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" placeholder="ginichimaru@bleach.com" required="required" data-error="Please enter your email address">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label for="phone">Phone (optional)</label>
            <input id="phone" type="text" name="phone" class="form-control" placeholder="555-312-3241" data-error="Please enter your phone number">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input id="subject" type="text" name="subject" class="form-control" placeholder="Bleach Final Arc Discussion" required="required" data-error="Please enter the reason for messaging">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" placeholder="The most interesting i.e. 1000 Year Battle, never made it to Anime. Would you like to collaborate and create an online web series?" rows="4" required="required" data-error="OOPS, you forgot to enter the message!"></textarea>
                    <small>not more than 200 words.</small>
                    <div class="help-block with-errors"></div>
          </div>
          <div class="err-msg"></div>
          <div>
            <input type="submit" class="btn btn-success btn-web btn-sm" value="SEND NOW">
          </div>
        </div>
      </form>
      </div>
    <p class="mt-2 pb-2">
      I am currently working on launching a design blog. Stay tuned for daily
      updates from the world of digital design <img alt="caveman" src="./images/content/caveman.png"> and marketing.
    </p>
  </section>

  <footer>
    <ul class="social-section">
      <li><a href="https://www.facebook.com/aqs.malhotra" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Facebook" src="./images/footer/facebook-logo.png" /></a></li>
      <li><a href="https://github.com/aqsmalhotra/" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Github" src="./images/footer/github-logo.png" /></a></li>
      <li><a href="http://be.net/aqsm2011e41e" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Behance" src="./images/footer/behance-logo.png" /></a></li>
      <li><a href="https://ca.linkedin.com/in/aqs-malhotra-381b7752" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra LinkedIn" src="./images/footer/linkedin-logo.png" /></a></li>
      <li><a href="https://www.instagram.com/aqsmalhotra/" rel="noopener noreferrer" target="_blank"><img alt="Aqs Malhotra Instagram" src="./images/footer/instagram-logo.png" /></a></li>
    </ul>
    <div class="site-info">
      Aqs Malhotra @<?php echo Date("Y"); ?> All Rights Reserved
    </div>
  </footer>
</div>
<script>
  $(function() {
    $('#contact-form').on('submit', function() {
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var subject = $('#subject').val();
      var message = $('#message').val();

      $.ajax({
        method: 'post',
        url: 'ajax/request-send-mail.php',
        data: {name:name, email:email, phone:phone, subject:subject, message:message},
        success: function(data){
          $('#contact-form').html(data);
        }
      });
      return false;
    });
  });
</script>
</body>
</html>
