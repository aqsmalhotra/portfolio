$(function() {

  //smooth scroll through href-attr tags
  $(document).on('click', 'a[href^="#"]', function(e) {
      var id = $(this).attr('href');
      var $id = $(id);
      if ($id.length === 0) {
          return;
      }
      e.preventDefault();
      var pos = $id.offset().top;
      $('body, html').animate({scrollTop: pos}, 800);
  });


  //fix the main nav position when user scroll beyond the header
  $(window).scroll(function(){

    if(!$('.main-nav').hasClass('mini-mode')){
      if($(window).scrollTop() > 102 ){
        $('.main-nav').addClass('fix-mode');
      }else{
        $('.main-nav').removeClass('fix-mode');
      }
    }

  });

  $(window).resize(function() {
    var w = $(window).width() + 15;
    if(w <= 980){
      $('.main-nav').removeClass('fix-mode').addClass('mini-mode');
    }else{
      $('.main-nav').removeClass('mini-mode');
    }
  });

  $(document).on('click', '.toggle-menu', function() { //toggle click action
    $('.close-nav').animate({
      'right': '300px',
    },500);

    $('ul.header-nav').animate({
      'right': '0',
    },500);
  });

  $(document).on('click', '.close-nav', function() { //close header nav action
    $('.close-nav').animate({
      'right': '-300px',
    },500);
    $('ul.header-nav').animate({
      'right': '-300px',
    },500);
  });

});
