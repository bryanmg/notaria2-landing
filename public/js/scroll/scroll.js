$(document).ready(function(){
var scrollLink=$('.scroll');
//smooth scrolling
	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({scrollTop: $(this.hash).offset().top},1000);
	});

	$(".check-email").on('click', function(){
		$(".emails-content").each(function ()
		{
			$(this).find('span').css("display", "none");
		});
		$(this).find('span').css("display", "block");
	});
});

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
	console.log(scroll);
	//mostrar o esconder animacion
	if(scroll > 680 && scroll < 1386){
		$("#services-content > div").each(function ()
		{
			$(this).removeClass("bounceOut");
			$(this).addClass("bounceIn delay-1s");
			$(this).attr("animated", "true");
		});
	}else{
		$("#services-content > div").each(function ()
		{
			if($(this).attr("animated") == "true"){
				$(this).removeClass("bounceIn");
				$(this).addClass("bounceOut");
				$(this).attr("animated", "false");
			}
		});
	}
});