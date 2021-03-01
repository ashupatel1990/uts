$(document).ready(function (){
	new WOW().init();
	//viewPassword();
	$(".navbar-toggler").click(function (){
		$("body").toggleClass("nav-open");
	});	
	$(".nav-close").click(function (){
		$("body").removeClass("nav-open");
	});
	/*$('body').click(function(){
		$("body").removeClass('nav-open');
	});
	$('.navbar-collapse .navbar-nav').click(function(e){
		e.stopPropagation();
	});*/

	$('[data-fancybox="gallery"]').fancybox({
		// Options will go here
	});
	

});


$('.home-banner').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1
});

$('.featured-slider').slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.about-slider').slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});




$(".navbar-nav .dropdown").each(function() {
  $(this).children("a.nav-link").after("<span class='arrow'></span>");
});
$(".navbar-nav .dropdown .arrow").click(function() {
  if($(this).next(".dropdown-menu").is(":visible")){
    $(this).next(".dropdown-menu").slideUp();
    $(this).parent(".dropdown").removeClass("is-open");

    $(".submenu-level3").slideUp();
    $(".navbar-nav li.submenu").removeClass("is-open");
  }
  else
  {
    $(".dropdown-menu").slideUp();
    $(".navbar-nav .dropdown").removeClass("is-open");
    $(this).next(".dropdown-menu").slideDown();
    $(this).parent(".dropdown").addClass("is-open");

    $(".submenu-level3").slideUp();
    $(".navbar-nav li.submenu").removeClass("is-open");
  }
});

$(".dropdown-menu li.submenu").each(function() {
  $(this).children("a.dropdown-item").after("<span class='arrow'></span>");
});
$(".dropdown-menu li.submenu .arrow").click(function() {
  if($(this).next(".submenu-level3").is(":visible")){
    $(this).next(".submenu-level3").slideUp();
    $(this).parent("li.submenu").removeClass("is-open");
  }
  else
  {
    $(".submenu-level3").slideUp();
    $(".navbar-nav li.submenu").removeClass("is-open");

    $(this).next(".submenu-level3").slideDown();
    $(this).parent("li.submenu").addClass("is-open");
  }
});


/*$(".accordian-title").click(function(){
	
	if($(this).parent(".accordian-head").next(".accordian-cont").is(":visible"))
	{
		$(this).parent(".accordian-head").parent(".accordian-row").removeClass("open");
		$(this).parent(".accordian-head").next(".accordian-cont").slideUp();
		$(this).parent(".accordian-head").removeClass("active");
		$("body").removeClass("active");
	}
	else
	{
		$(".accordian-cont").slideUp();
		$(".accordian-head").parent(".accordian-row").removeClass("open");
		$(this).parent(".accordian-head").next(".accordian-cont").slideDown();
		$(this).parent(".accordian-head").parent(".accordian-row").addClass("open");
		$(".accordian-head").removeClass("active");
		$(this).parent(".accordian-head").addClass("active");
		$("body").addClass("active");
	}
});



$(".arrowss").click(function(){
	if($(this).parent(".accordian-head").next(".accordian-cont").is(":visible"))
	{
		$(this).parent(".accordian-head").next(".accordian-cont").slideUp();
		$(".accordian-head").removeClass("openssss");
	}
	else
	{
		$(".accordian-cont").slideUp();
		$(".accordian-head").removeClass("openssss");
		$(this).parent(".accordian-head").next(".accordian-cont").slideDown();
		$(this).parent(".accordian-head").addClass("openssss");

	}
});




$(window).scroll(function(){
	var header_height = $("section").offset().top;
	if($(window).scrollTop() > header_height)
	{
		$("header").addClass("fixed");
	}
	else
	{
		$("header").removeClass("fixed");
	}
});


$(".request-quote-button .btnss").click(function(){
	if($(this).parent(".request-quote-button").next(".rightcolss").is(":visible"))
	{
		$(this).parent(".request-quote-button").next(".rightcolss").addClass("opens");
		$(this).parent(".request-quote-button").addClass("active");
	}
});
$(".closed").click(function(){
	$(this).parent(".rightcolss").removeClass("opens");
	$(".request-quote-button").removeClass("active");
});*/






/*function viewPassword(){
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}*/

/*
$(".toggle-password").click(function() {
	$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
	  input.attr("type", "text");
	} else {
	  input.attr("type", "password");
	}
});*/




