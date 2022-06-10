$(document).ready(function() {
    $("#nav-toggle").click(function() {
       $("#nav-toggle").toggleClass("open");
       $(".mobileDropDownNav").toggleClass("collapsed");
    });

    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
        $('.page-top').css('display', 'block');
      } else {
        $('.page-top').css('display', 'none');
      }
    });

    $(".page-top").click(function() {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
}); 