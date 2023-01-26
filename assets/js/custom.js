

  $(window).scroll(function() {    

      var scroll = $(window).scrollTop();

      if (scroll >= 100) {

          $(".header-home-2, .header-home-1, .header-home-4 ").addClass("header-scrolled");
          $(".navbar").addClass("navbar-scrolled");
          $(".menu-2").addClass("menu-2-scrolled");
          $(".menu-1").addClass("menu-1-scrolled");

            

      } else {

          $(".header-home-2, .header-home-1").removeClass("header-scrolled");
          $(".navbar").removeClass("navbar-scrolled");
          $(".menu-2").removeClass("menu-2-scrolled");
          $(".menu-1").removeClass("menu-1-scrolled"); 
      }

  });


$(window).on('load', function () {
       $("#y-loading").fadeOut().delay(3000);
 });




function openNav() {
  document.getElementById("mySidenav").style.width = "330px";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}




$(document).ready(function() {
	


if ($(window).width() > 768) {
/*    $(".dropdown .dropdown-toggle ").on("click", function(e){
        e.preventDefault();
        var thisURL = $(this).attr("href");
        if(thisURL != "#")
        {
            window.location.href = thisURL;
        }
        return false;      
    });*/
}
else {
    //  $(".dropdown .dropdown-toggle ").on("click", function(e){
    //     e.preventDefault();
    //     var thisURL = $(this).attr("href");
    //     if(thisURL != "#")
    //     {
    //         window.location.href = thisURL;
    //     }
    //     return false;      
    // });

    // $(".nav-item.dropdown ").on("click", function(e){
        
    //     $(this)..children(".dropdown-menu").addClass("show");   
    // });    
      

}


/*main for label*/
$( ".thm-form .form-control" ).each(function( index ) {

      if($(this).val()=='')
  { 
    $(this).closest(".field").removeClass("active");
  }else{
    $(this).closest(".field").addClass("active");
  }
});



  $(".thm-form .form-control").focus(function(event){
   // $(this).closest(".field").removeClass("active");
      if($(this).val()=='')
  {
    $(this).closest(".field").addClass("active");
    
  }else{
      
    $(this).closest(".field").addClass("active");
  }


    });

 $(".thm-form .form-control").focusout(function(event){
  if($(this).val() !='')
  {
    $(this).closest(".field").addClass("active");
  }else{
    $(this).closest(".field").removeClass("active");
  }

     
  
    });
 /*end main for label*/

/*	var window_h = $(window).height();

	$(".header-home").css("height",window_h);*/	


if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}


/*$('html').mousemove(function(e){
         var wx = $(window).width();
        var wy = $(window).height();
       
        var x = wx;

        var y = wy;
        
        var newx = x - wx/2;
        var newy = y - wy/2;*/
        
        /*$('span').text(newx + ", " + newy);*/
        
        /*$(this).children('div').each(function(){*/
    /*      $(".main-tilt div").each(function(){
            var speed = $(this).attr('data-speed');
            if($(this).attr('data-revert')) speed *= -1;
            TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
            
        });
        
    });*/


var wow = new WOW({
    animateClass: 'animated',
    offset:100,
    callback:function(box) {}
  });
  wow.init();



/*window.onscroll = function() {myFunction()};

var header = document.getElementById("lower_header");
var sticky = header.offsetTop;
var header_h = $("#lower_header").height();

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    $(".light_header").css("margin-bottom",header_h+"px");
  } else {
    header.classList.remove("sticky");
    $(".light_header").css("margin-bottom",0+"px");
  }
}*/


	$(".col-toggler-2").click(function(){
    	$(".menu-2").toggleClass("nav-open")
      $(".menu-1").toggleClass("nav-open")
	}); 

  
    $(".searchclick").click(function(){
      $(".nav-search-form").toggleClass("search-open");

         $(".searchclick").children(".ti-").toggleClass("svg-search").toggleClass("ti-close"); 
         
     /*  $(".searchclick").children(".fas").removeClass("fa-times").addClass("fa-search");*/
  });






  $(".login_but").click(function(){
      $(".nav-search-form").toggleClass("search-open");

    
         $(".searchclick").children(".ti-").toggleClass("svg-search").toggleClass("ti-close"); 
         
     /*  $(".searchclick").children(".fas").removeClass("fa-times").addClass("fa-search");*/
  });  
    

	 // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('.no_scroll_f')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


  	


              var owl = $('.owl-carousel-2');
              owl.owlCarousel({
                loop: true,
                nav: true,
                rtl: false,
                autoplay:false,
                margin: 15,
              autoplayTimeout:2000,
                smartSpeed: 3000,
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 3
                  },
                  960: {
                    items: 4
                  },
                  1200: {
                    items: 5
                  }
                }
              });
              /*owl.on('mousewheel', '.owl-stage', function(e) {
                if (e.deltaY > 0) {
                  owl.trigger('next.owl');
                } else {
                  owl.trigger('prev.owl');
                }
                e.preventDefault();
              });*/
        
	

		var owl = $('.owl-carousel-3');
              owl.owlCarousel({
              	center:true,
                loop: true,
                items:4,
                nav: true,
                 navText: [ '<img class="arrow-left " src="assets/images/a.svg">','<img class="arrow-right " src="assets/images/a.svg">' ],
                autoplay:false,
                margin: 0,
                /*autoplayTimeout:2000,*/
                smartSpeed: 800,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  960: {
                    items: 2
                  },
                  1200: {
                    items: 4
                  }
                }
              });


               var owl = $('.charter-carousel');
              owl.owlCarousel({
                loop: true,
                nav: true,
                center:true,
                rtl: false,
                autoplay:false,
                navText: [ '<img class="arrow-left " src="assets/images/a.svg">','<img class="arrow-right " src="assets/images/a.svg">' ],
                margin: 15,
                dotsData: true,
                 autoplayTimeout:2000,
                smartSpeed: 900,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  960: {
                    items: 3
                  },
                  1200: {
                    items: 4
                  }
                }
              });

              var owl = $('.charter-carousel-2');
              owl.owlCarousel({
                loop: true,
                nav: true,
                center:true,
                rtl: false,
                autoplay:false,
                navText: [ '<img class="arrow-left " src="assets/images/a.svg">','<img class="arrow-right " src="assets/images/a.svg">' ],
                margin: 15,
                /*dotsData: true,*/
                 autoplayTimeout:2000,
                smartSpeed: 900,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  960: {
                    items: 2
                  },
                  1200: {
                    items: 2
                  }
                }
              });





              var owl = $('.testimonail_slider');
              owl.owlCarousel({
                loop: true,
                nav: false,
                center:false,
                rtl: false,
                autoplay:false,
                margin: 15,
                 autoplayTimeout:2000,
                smartSpeed: 900,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  960: {
                    items: 1
                  },
                  1200: {
                    items: 1
                  }
                }
              });

              var owl = $('.header-home-3');
              owl.owlCarousel({
                loop: true,
                nav: false,
                center:false,
                rtl: false,
                autoplay:true,
                margin: 0,
                animateOut: 'fadeOut',
                
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  960: {
                    items: 1
                  },
                  1200: {
                    items: 1
                  }
                }
              });


              var owl = $('.single-yacht');
              owl.owlCarousel({
                loop: true,
                nav: true,
                center:false,
                rtl: false,
                autoplay:true,
                navText: [ '<img class="arrow-left " src="assets/images/a.svg">','<img class="arrow-right " src="assets/images/a.svg">' ],
                margin: 0,
                animateOut: 'fadeOut',
                
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  960: {
                    items: 1
                  },
                  1200: {
                    items: 1
                  }
                }
              });

              
              

              $('.my-paroller').paroller();
              $('.jumbotron').paroller(); 
              $('.my-element').paroller(); 
              $('.thm-h-3-big').paroller();     

			 
		    
        $(".header-home").mousemove(function(event){
     var compass_inner =$(".compass_inner");
     var x =(compass_inner.offset().left) + (compass_inner.width() / 2);
     var y =(compass_inner.offset().top) +(compass_inner.height() / 2);
     var rad = Math.atan2(event.pageX - x, event.pageY - y);
     var rot = (rad * (180 / Math.PI) * -1) + 180;
     compass_inner.css({
      '-webkit-transform': 'rotate(' + rot + 'deg)',
      '-moz-transform': 'rotate(' + rot + 'deg)',
      '-ms-transform': 'rotate(' + rot + 'deg)',
      'transform': 'rotate(' + rot + 'deg)'
    });
   });



	// Pretty simple huh?


/*
  var scene2 = document.getElementById('scene2');
  var parallax = new Parallax(scene2);*/

	 /*$('#f-scene').parallax();*/

/*var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene, {
  relativeInput: true
});*/






/*var imgValue = $(".inner-img").attr("src");
alert("ddd")
$(".main-tilt").css('background','url('+imgValue+')');
$(".main-tilt").css('background','red');*/




/*var iScrollPos = $('.instagram-sec').offset().top;


$(window).scroll(function () {
    var iCurScrollPos = $(this).scrollTop();
    if (iCurScrollPos > iScrollPos) {
        $(".owl-carousel-2 .owl-prev").trigger("click");
    } else {
             $(".owl-carousel-2 .owl-next").trigger("click");
    }
});*/

/*owl-prev*/

$('.main-tilt').tilt({
    maxTilt:        -15,
perspective:    1000,   // Transform perspective, the lower the more extreme the tilt gets.
/*easing:         "cubic-bezier(.03,.98,.52,.99)", */   // Easing on enter/exit.
scale:          1,      // 2 = 200%, 1.5 = 150%, etc..
speed:          100,    // Speed of the enter/exit transition.
transition:     true,   // Set a transition on enter/exit.
disableAxis:    null,   // What axis should be disabled. Can be X or Y.
reset:          true,   // If the tilt effect has to be reset on exit.
glare:          true,  // Enables glare effect
maxGlare:       0.5     // From 0 - 1.
});








 



});



