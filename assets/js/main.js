$(document).ready(function () {

  // runs fade code for homepage content
  // _toggle.init();

  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    // Start menu toggle
    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }

    // text slider
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });


  $('.autoplay').slick({
      accessibility: true,
      arrows: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
  });

  $('.carousel').carousel({
        interval: 4000 //changes the speed
    })

  function fadeMyContent() {
         
         $(".thecontent:first").fadeIn(2000).delay(100000).fadeOut(2000,
             function() {    
                     $(this).appendTo($(this).parent());   
                     fadeMyContent();    
             });


  }
  fadeMyContent();

  function fadeMyContent2() {
         
       $(".thecontent2:first").fadeIn(3000).delay(10000000).fadeOut(3000,
           function() {    
                   $(this).appendTo($(this).parent());   
                   fadeMyContent2();    
           });

  }
  fadeMyContent2();

  function fadeMyContent3() {
         
       $(".thecontent3:first").fadeIn(4000).delay(1000000).fadeOut(3000,
           function() {    
                   $(this).appendTo($(this).parent());   
                   fadeMyContent3();    
           });

  }
  fadeMyContent3();

  // instagram feed
  var feed = new Instafeed({
          get: 'user',
          userId: '2348630175',
          accessToken: '2348630175.5b9e1e6.d1353fcc3ded4c42a939b15069bf4bfe',
          links: true,
          limit: 12,
          sortBy: 'most-recent',
          resolution: 'low_resolution',
          template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2"><div class="photo-box"><div class="image-wrap"><img src="{{image}}"></div></div></div></div>'
  });
  feed.run();

});

$(window).scroll(function(){
  if($(document).scrollTop() > 0) {
      $('.logo').addClass('small');
  } else {
      $('.logo').removeClass('small');
  }
});

$('.single-case-study .scroll-dwn-button a').on('click', function() {
    $.smoothScroll({
      scrollTarget: '#case-study'
    });
    return false;
  });

$('.page-template-page-home .scroll-dwn-button a').on('click', function() {
    $.smoothScroll({
      scrollTarget: '#our-work'
    });
    return false;
  });

$('.page-template-page-aboutus .scroll-dwn-button a').on('click', function() {
    $.smoothScroll({
      scrollTarget: '#about-boxes'
    });
    return false;
  });

$('.single-work .scroll-dwn-button a').on('click', function() {
    $.smoothScroll({
      scrollTarget: '#our-work'
    });
    return false;
  });




    


