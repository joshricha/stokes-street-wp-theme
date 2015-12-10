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
          get: 'tagged',
          clientId: 'a783ec894f4c4547a4158215883c7cf9',
          tagName: 'nationalpark',
          links: true,
          limit: 12,
          sortBy: 'most-recent',
          resolution: 'standard_resolution',
          template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2"><div class="photo-box"><div class="image-wrap"><img src="{{image}}"></div></div></div></div>'
  });
  feed.run();

});





    


