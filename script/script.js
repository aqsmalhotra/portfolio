$(function() {

  /* CUSTOM BUILT IN FUNC */
  //scroll to div function
  function scrollToDiv($div_name){
    $("html, body").delay(500).animate({
        scrollTop: $($div_name).offset().top
    }, 500);
  }
  /* END OF BUILT IN FUNC */









  //START YOUR OWN JQUERY SCRIPT here

  //fix the main nav position when user scroll beyond the header
  $(window).scroll(function(){
    //console.log($(window).scrollTop());
    if($(window).scrollTop() >= 102){
      $('.main-nav').addClass('fix-mode');
    }else{
      $('.main-nav').removeClass('fix-mode');
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
