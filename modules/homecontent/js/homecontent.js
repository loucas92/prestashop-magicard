function widthcard(bloc){
	var original_width = 250;
	var original_height =349;
	var actual_width = $(".cartecontent").width();
	console.log(actual_width);
	var new_height = (original_height / original_width) * actual_width;
	 $(".cartecontent").height(new_height+"px") ;
	 console.log(Math.floor(new_height));
}	

window.onload = function(){ 
	height("leftmenumagicard") ;
	widthcard(".cartecontent");

};
window.onresize = function(){ height("leftmenumagicard")
widthcard(".cartecontent") };
