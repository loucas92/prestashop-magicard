function widthcard(bloc){
	var original_width = 250;
	var original_height =349;
	var actual_width = $(".cartecontent").width();
	var new_height = (original_height / original_width) * actual_width;
	 $(".cartecontent").height(new_height+"px") ;

}	
function widthbutton(bloc){
	var original_width = 115;
	var original_height =115;
	var actual_width = $(".addcart").width();
	var new_height = (original_height / original_width) * actual_width;
	 $(".addcart").height(new_height+"px") ;

}
function widthprice(bloc){
	var original_width = 150;
	var original_height =100;
	var actual_width = $(".price").width();
	var new_height = (original_height / original_width) * actual_width;
	var height = new_height;
	 $(".price").height(Math.floor(height)+"px") ;
	 console.log(Math.floor(new_height));
}

window.onload = function(){ 
 ;
	widthcard(".cartecontent");
	widthbutton(".addcart");
	widthprice(".price");

};
window.onresize = function(){ 

widthcard(".cartecontent")
widthbutton(".addcart");
widthprice(".price"); 
};
