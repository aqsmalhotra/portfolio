
<?php
DEFINE('BASE_URL','http://localhost/portfolio/');
?>
<meta name="author" content="AQS">
<meta charset="utf-8">
<title>Aqs Malhotra</title>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css?v=1.2">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/responsive.css?v=1.1">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--JAVASCRIPT LIBRARY INCLUDED JQUERY, BOOSTRAP-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>script/script.js?v=1.2"></script>

<!--
<script>
$(function() {
  $(window).scroll(function(){
    var w = $(window).scrollTop();
    var s = $('#skills-block').offset().top;
    if(w >= s){
      $('.highlight').addClass('highlighted');
    }
  });
});
</script>
-->
</head>
<body>

<div class="page-wrapper">
  <header>
<!--
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
-->
  </header>

  <main>
      <div class="main-content" id="home">
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
              <a class="cv-btn" href="#projects">View Projects</a>
              <a class="cv-btn" target="_blank" href="./uploads/resume.pdf">Download CV</a>
            </div>
          </div>

        </div>
      </div>
      <div class="main-nav">
        <ul>
          <li tooltip="Home" tooltip-position="right"><a href="#home"><img src="./images/menu/home.png"></a></li>
          <li tooltip="Skills" tooltip-position="right"><a href="#skills"><img src="./images/menu/skills.png"></a></a></li>
          <li tooltip="Process" tooltip-position="right"><a href="#process"><img src="./images/menu/process.png"></a></a></li>
          <li tooltip="Projects" tooltip-position="right"><a href="#projects"><img src="./images/menu/projects.png"></a></a></li>
          <li tooltip="Contact" tooltip-position="right"><a href="#contact"><img src="./images/menu/contact.png"></a></a></li>
        </ul>
      </div>
  </main>

  <section class="container-fluid" id="skills">
    <div class="text-center">
      <img src="./images/headers/skills.png" class="header-icon">
      <h3>Skills & Interests</h3>
    </div>
    <p class="mb-2">
      I possess a skill or two, apart from endlessly watching re-reruns of F.R.I.E.N.D.S. <img src="./images/cat.png">
    </p>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <span class="font-weight-bold text-uppercase">Web Design</span>
        <ul class="list-unstyled">
          <li>HTML5</li>
          <li>CSS3</li>
          <li>SASS/LESS</li>
          <li>JavaScript</li>
          <li>WordPress</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <span class="font-weight-bold text-uppercase">Wireframing</span>
        <ul class="list-unstyled">
          <li>Balsamiq</li>
          <li>UXPin</li>
          <li>InVision</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <span class="font-weight-bold text-uppercase">Digital Marketing</span>
        <ul class="list-unstyled">
          <li>Google Adwords</li>
          <li>Google Analytics</li>
          <li>Buffer</li>
          <li>Canva</li>
          <li>MS Office</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <span class="font-weight-bold text-uppercase">Auxiliary</span>
        <ul class="list-unstyled">
          <li>Trekking</li>
          <li>Whiskey Pong</li>
          <li>Food Wars! Cooking</li>
          <li>Arcade Gaming</li>
        </ul>
      </div>
    </div>
    <p class="pb-2">These are the <span class="highlight">tools of my trade</span>,
    some essential, some just for party tricks!</p>
  </section>

    <section class="container-fluid" id="process">
    <div class="text-center">
      <img src="./images/headers/process.png" class="header-icon">
      <h3>Process - How does it work?</h3>
    </div>
    <p class="mb-2">
    A web project, be it for a client or personal, needs to <span class="highlight">
    convey the objective clearly.</span> For me, an optimal step-by-step process
    is the way to be as opposed to simply
    <img src="./images/wings.png"> "winging it".
    </p>
    <div class="row text-center text-uppercase process">
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon1.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step I</span>
        <span class="d-block process-text">Ideation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon2.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step II</span>
        <span class="d-block process-text">Tasks & Timeline</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon3.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step III</span>
        <span class="d-block process-text">Wireframe & Mockup</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon4.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step IV</span>
        <span class="d-block process-text">Content Creation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon5.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step V</span>
        <span class="d-block process-text">Design Implementation</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon6.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step VI</span>
        <span class="d-block process-text">Testing</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon7.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step VII</span>
        <span class="d-block process-text">Pre-Deployment Review</span>
      </div>
      <div class="col-lg-3 mt-2 mb-2">
        <span class="d-block"><img src="./images/process/icon8.png" class="img-fluid" /></span>
        <span class="d-block process-head">Step VIII</span>
        <span class="d-block process-text">Deployment & Enjoy</span>
      </div>
    </div>
    <p class="mt-2 pb-2">This process works! Don't believe me? Check out my <span class="highlight">web projects</span> in the section below.</p>
  </section>

  <section class="container-fluid" id="projects">
    <div class="text-center">
      <img src="./images/headers/project.png" class="header-icon">
      <h3>Projects</h3>
    </div>
    <p class="mb-2">
      Since I am less than an year old in the design industry, there is no big line-up of
      projects in my basket. But, with each project, I have tried to implement <span class="highlight">something innovative</span>.
    </p>

    <!-- Project #1 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img src="./images/projects/site1.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12">
        <h4 class="project-name">Hotel Saffron</h4>
        <p>Built with Custom CSS, Bootstrap and minimal PHP, this single-page
          design was made to ensure more people can visit and access the website without
          compromising speed and quality.
        </p>
        <a href="" class="d-block pt-1 pb-1" target="_blank"><button type="button" class="btn btn-success btn-sm" style="box-shadow:-3px 3px #28a64561;">EXPLORE WEBSITE</button></a>
        <a href="" class="d-block pt-1 pb-1" target="_blank"><button type="button" class="btn btn-danger btn-sm" style="box-shadow:-3px 3px #28a64561;">VIEW SOURCE CODE</button></a>
      </div>
    </div>
    <!-- End -->

    <!-- Project #2 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img src="./images/projects/site2.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12">
        <h4 class="project-name">Dazzlin Star Island Amusement Park</h4>
        <p>This is a college group project where I was the lead designer. This website is
        for a non-existent theme park in Toronto with numerous features, like
        ticket booking, parking, careers etc.</p>
        <a href="" class="d-block pt-1 pb-1" target="_blank"><button type="button" class="btn btn-success btn-sm" style="box-shadow:-3px 3px #28a64561;">EXPLORE WEBSITE</button></a>
        <a href="" class="d-block pt-1 pb-1" target="_blank"><button type="button" class="btn btn-danger btn-sm" style="box-shadow:-3px 3px #28a64561;">VIEW SOURCE CODE</button></a>
      </div>
    </div>
    <!-- End -->

    <!-- Project #3 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img src="./images/projects/site3.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12">
        <h4 class="project-name">Stephen Alter</h4>
        <p>The official website of <a href="https://en.wikipedia.org/wiki/Stephen_Alter" target="_blank">Stephen Alter</a>,
          a renowned Indian Author, built with WordPress CMS. His lastest books and publications
          as well as links to purchase his books are present in this website.</p>
        <a href="" class="d-block pt-1 pb-1" target="_blank"><button type="button" class="btn btn-success btn-sm" style="box-shadow:-3px 3px #28a64561;">EXPLORE WEBSITE</button></a>
      </div>
    </div>
    <!-- End -->

    <!-- Project #4 -->
    <!-- Start -->
    <div class="row project">
      <div class="col-lg-5 col-md-5 col-sm-12 text-center">
        <img src="./images/projects/site4.png" class="img-fluid">
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12">
        <h4 class="project-name">Mussoorie Writers</h4>
        <p>After the successful deployment of Stephen Alter's official website, I got
          hired again for another project - Mussoorie Writers. This website was also
          built with WordPress CMS and consists of posts, writings and information
          by renowned authors across the world.</p>
        <a href="" class="d-block pt-1 pb-1" target="_blank"><button type="button" class="btn btn-success btn-sm" style="box-shadow:-3px 3px #28a64561;">EXPLORE WEBSITE</button></a>
      </div>
    </div>
    <!-- End -->

    <p class="mt-2 pb-2">
      Impressed? What are you waiting for then? Talk to me !!!
    </p>
</section>

<section class="container-fluid" id="contact">
    <div class="text-center">
      <img src="./images/headers/contact.png" class="header-icon">
      <h3>Get in Touch</h3>
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
            <input type="submit" class="btn btn-success" value="SUBMIT">
          </div>
        </div>
      </form>
      </div>
      <!--
      <div class="row text-center">
        <div class="col-lg-4 col-md-4 col-sm-12">
          1
          <p>(647)-739-5138</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          2
          <p>admin@aqsmalhotra.com</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          3
          <p>(647)-739-5138</p>
        </div>
      </div>
    -->
    <p class="mt-2 pb-2">
      I am currently working on launching a design blog. Stay tuned for daily
      updates from the world of digital design <img src="./images/caveman.png"> and marketing.
    </p>
  </section>

  <footer>
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
