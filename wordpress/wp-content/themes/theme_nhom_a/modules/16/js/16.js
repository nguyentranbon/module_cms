$('.child').hide();
$('.trigger-search').click(function(){
    $('.type-33').toggle('1500');
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll > 200) {
        $('.no-response').one('webkitAnimationEnd', function(){
            $('.no-response').hide();
        });
        $('.responsive1').show();
        
    }else{
        $('.no-response').one('webkitAnimationEnd', function(){
            $('.no-response').show();
        });
        $('.responsive1').hide();
    }
});


$('.navbar-toggle').click(function(){
    console.log("da click");
    $('.collapse').slideToggle();
});


$("li.nav-item").click(function(){
    if (!$(this).hasClass("active")) {
      $("li.nav-item.active").removeClass("active");
      $(this).addClass("active");
    }
});
