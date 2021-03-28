
    $(document).ready(function() {
      var stickyNavTop = $('.menu-wrap').offset().top;
      var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
          $('.menu-wrap').css({ 'position': 'fixed', 'top':0, 'z-index': 9999, });
        } else {
          $('.menu-wrap').css({ 'position': 'relative' });
        }
      };
      stickyNav();
      $(window).scroll(function() {
        stickyNav();
      });   
    });  //Dijadikan file lain.