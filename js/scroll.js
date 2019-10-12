$(document).ready(function){
	setBindings();
}
function setBindings(){
	$("nav a").click(function(e)){
		alert("hit");
	}
}