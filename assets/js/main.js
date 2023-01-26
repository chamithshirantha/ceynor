
 var App = (function(window){
  "use strict";
  var _this = null;
  var cacheCollection = {}; 
  
  // if($("#skrollr-body").length > 0){
  //   skrollr.init({
  //   	smoothScrolling: false,
  //   	mobileDeceleration: 0.004
  //   });
  // }

  var wow = new WOW({
    animateClass: 'animated',
    offset:100,
    callback:function(box) {}
  });
  wow.init();
      
  return {
  	owlCarousel:null,
    init : function(){
      _this = this;  

      /* CUSTOM SELECT */
      this.CustomSelectBox();  

      /* BOAT TYPE */
      this.BoatType(); 

      /* TESTIMONIAL */  
      this.Testimonial();

      /* DATEPICKER */ 
      this.Datepicker();

      /* RANGE SLIDE */ 
      this.PriceRange();

      /* PRODUCT RELATED */ 
      this.RelatedProduct();

      /* OUR TEAM */ 
      this.OurTeam();

      /* HOME SLIDER */ 
      this.HomeSlider();

      $(window).load(function() {
        $("#y-loading").hide().delay(3000);
      });

      if ($('[data-toggle="tooltip"]').length > 0){$('[data-toggle="tooltip"]').tooltip();}
      if ($('.y-back_to_top').length > 0){
        $('.y-back_to_top').on('click', function(){  
          $(".y-line").height($(this).offset().top)
          $(".y-line").fadeIn();
          setTimeout(function(){ 
            $('html, body').animate({scrollTop : 0},800);  
            return false; 
          }, 500);
        }); 
      }

      if ($('.flexnav').length > 0){$(".flexnav").flexNav();}
      if ($('.responsive-tabs').length > 0){RESPONSIVEUI.responsiveTabs();}
      $(window).scroll(function() { 
        if ($('.y-back_to_top').length > 0){
          scroll = $('.y-back_to_top').scrollTop();
          $(".y-line").height($('.y-back_to_top').offset().top - scroll)
          if ($(document).scrollTop() > 500) {
              $('#y-back_to_top').fadeIn();
              $(".y-line").fadeIn();
              $(".header").addClass("y-sticky");
          } else {
              $('#y-back_to_top').fadeOut();
              $(".y-line").fadeOut();
              $(".header").removeClass("y-sticky");
          }
        }  
      });


      /* Counter */
      if ($('.y-counter').length > 0){$('.y-counter').counterUp({ delay: 100, time: 3000 });}
 
    },

    getObject: function(selector){
      if(typeof cacheCollection[selector] == "undefined"){
        cacheCollection[selector] = $(selector);
      }
      return cacheCollection[selector];
    },

    CustomSelectBox : function(){
    	$(".custom-select").each(function(){
            $(this).wrap("<span class='select-wrapper'></span>");
            $(this).after("<span class='holder'></span>");
        });
        $(".custom-select").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');
    },

    BoatType: function(){
    	this.owlCarousel = $('#y-boat_carousel');
    	this.owlCarousel.owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    dots: false,
        responsiveClass:true,
		    /*navText:["<i class='fa fa-anchor y-left'></i>","<i class='fa fa-anchor y-right'></i>"],*/
       navText: [ '<img class="arrow-left " src="assets/images/a.svg">','<img class="arrow-right " src="assets/images/a.svg">' ],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:4
		        }
		    }
		  }); 
    },

    HomeSlider : function(){
      var yvs = $('#y-home_slider'); 
      if (yvs.length > 0){ 
        yvs.bxSlider({ 
          controls: true
        });   
      }
    },

    Datepicker : function(){
     if ($('#y-check_in').length > 0){  
      $( "#y-check_in" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: 'mm-dd-yy',
        onClose: function( selectedDate ) {
          $( "#y-check_out" ).datepicker( "option", "minDate", selectedDate );
        }
      });
      $( "#y-check_out" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: 'mm-dd-yy',
        onClose: function( selectedDate ) {
          $( "#y-check_in" ).datepicker( "option", "maxDate", selectedDate );
        }
      });
     } 
    },

    Testimonial: function(){
      $('#y-client_testimonial_carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      }) 
    },

    OurTeam: function(){
      var Ourteam = $('#y-our_team_carousel');
      Ourteam.owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          dots: false,
          navText:["<i class='fa fa-anchor y-left'></i>","<i class='fa fa-anchor y-right'></i>"],
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:4
              }
          }
      }) 
      $('.y-right_anchor').click(function() { 
          Ourteam.trigger('next.owl.carousel');
      }) 
      $('.y-left_anchor').click(function() { 
          Ourteam.trigger('prev.owl.carousel', [300]);
      })
    },

    RelatedProduct: function(){
      var related_slide = $('#y-rel_item_slide');
      related_slide.owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          dots: false,
          navText:["<i class='fa fa-anchor y-left'></i>","<i class='fa fa-anchor y-right'></i>"],
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:4
              }
          }
      }) 
      $('.y-right_anchor').click(function() { 
          related_slide.trigger('next.owl.carousel');
      }) 
      $('.y-left_anchor').click(function() { 
          related_slide.trigger('prev.owl.carousel', [300]);
      })
    },
    PriceRange : function (){
      if ($('#y-price_range').length > 0){ 
        var slider = document.getElementById('y-price_range');
        noUiSlider.create(slider, {
          start: [250, 2000],
          connect: true,
          range: {
            'min': 0,
            'max': 2000
          }
        })
        var valueInput = document.getElementById('y-value_input'),
          valueSpan = document.getElementById('y-value_span');
        // When the slider value changes, update the input and span
        slider.noUiSlider.on('update', function( values, handle ) {
          if ( handle ) {
            valueInput.value = values[handle];
          } else {
            valueSpan.innerHTML = values[handle];
          }
        });
        // When the input changes, set the slider value
        valueInput.addEventListener('change', function(){
          slider.noUiSlider.set([null, this.value]);
        });
      }
    } 


  }
 
})(window);

/****** ANIMATION *****/
$(document).ready(function($) {
  App.init();
});