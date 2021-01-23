jQuery(document).ready(function ($) {
	//On scroll header add background
	$(window).scroll(function () {
		var a = 10;
		var pos = $(window).scrollTop();
		if (pos > a) {
			$(".header-top2 .navbar").css({
				background: '#7362de',
				transition: 'all 0.5s ease-in-out',
				height: 80,
			});
			$(".header-top2 .navbar").addClass("animated slideInDown");
      $(".navbar-brand").css({color:'#ffffff'})
		} else {
			$(".header-top2 .navbar").css({
				background: 'transparent'
			});
			$(".header-top2 .navbar").removeClass("animated slideInDown");
      $(".navbar-brand").css({color:'#694FB9'})
		}
	});

	//navbar click add class active
	$(".navbar-nav").on("click", "li", function () {
		$(".navbar-nav li").removeClass("active");
		$(this).addClass("active");
	});

	//Click to scroll to next section
	$('.button').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 500, 'linear');
	});
	$('.btn-IrArriba').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 500, 'linear');
	});
});
