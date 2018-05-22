<?php
//DEFINE('BASE_URL','https://aqsmalhotra.com/');
DEFINE('BASE_URL','localhost/portfolio');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="This is the portfolio website designed by Aqs Malhotra">
  <meta name="author" content="Aqs Malhotra">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#00ABEE"/>
  <title>Error 404 - Aqs Malhotra - Web & UX Designer</title>

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
            <h1 class="portfolio-name">Error 404</h1>
            <h2 class="portfolio-role pb-2">OOPs! ... you've entered the realm of Infinity Bae!</h2>
            <img alt="404 Image by Rosh Faizal" src="./images/content/thanos.jpg" class="img-fluid rounded-circle animated pulse infinite" width="275" height="275" />
          </div>
          <div class="cv-block mt-2">
            <a class="cv-btn" href="https://aqsmalhotra.com/"><i class="fas fa-home"></i>&nbsp;&nbsp;GO BACK HOME</a>
          </div>
        </div>
      </div>
    </div>
  </main>
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
</body>
</html>
