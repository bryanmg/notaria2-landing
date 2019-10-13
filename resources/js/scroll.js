$(document).ready(function(){
var scrollLink=$('.scroll');
//smooth scrolling
	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({scrollTop: $(this.hash).offset().top},1000);
	});
});

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
	console.log(scroll);
	//mostrar o esconder animacion
	if(scroll > 885){
		console.log("entro o salgo");
	}
});