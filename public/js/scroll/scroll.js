$(document).ready(function(){
	$('.item-services').click(function(){
		$('.modal-title').text($(this).attr('title'));
		$('#myModal').modal("show");
	});
	
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
	if ($(window).scrollTop() > window.innerHeight + $('#Servicios'). 
		  outerHeight()) { 
			  console.log("aaa");
			$("#services-content > div").each(function ()
			{
				if($(this).attr("animated") == "true"){
					$(this).removeClass("fadeIn");
					$(this).addClass("fadeOut");
					$(this).attr("animated", "false");
				}
			});
	  } 
	  if ($(window).scrollTop() < $('#Servicios').offset().top) { 
		  console.log("bbbb");
			$("#services-content > div").each(function ()
			{
				if($(this).attr("animated") == "true"){
					$(this).removeClass("fadeIn");
					$(this).addClass("fadeOut");
					$(this).attr("animated", "false");
				}
			});	
	  }
	  if ($(window).scrollTop() > $('#Servicios').offset().top && $(window).scrollTop() < $('#Servicios').offset().top + $('#Servicios'). 
	  outerHeight() - window.innerHeight +100) { 
		  console.log("vvvvv");
			$("#services-content > div").each(function ()
			{
				$(this).removeClass("fadeOut");
				$(this).addClass("fadeIn");
				$(this).attr("animated", "true");
			});	
	  }

	/*if(scroll > 680 && scroll < 1386){
		$("#services-content > div").each(function ()
		{
			$(this).removeClass("fadeOut");
			$(this).addClass("bounceIn delay-1s");
			$(this).attr("animated", "true");
		});
	}else{
		$("#services-content > div").each(function ()
		{
			if($(this).attr("animated") == "true"){
				$(this).removeClass("bounceIn");
				$(this).addClass("fadeOut");
				$(this).attr("animated", "false");
			}
		});
	}*/
});