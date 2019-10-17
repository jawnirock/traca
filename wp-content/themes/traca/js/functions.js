/* global screenReaderText */
/* global jQuery */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function($){
    
    $(document).ready(function() {
        $(".icon-menu").click(function(){
            $(".traca-nav-menu").addClass('open')
        })
        $(".traca-nav-menu-close, .slide-anchor").click(function(){
            $(".traca-nav-menu").removeClass('open')
        })
         $(".slide-anchor").on('click', function(event) {
            if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
                window.location.hash = hash;
              });
            }
         })
    })


})( jQuery );
