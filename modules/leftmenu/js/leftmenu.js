  $(function() {
    $( "#tabs" ).tabs();
    $( "#accordion" ).accordion();
  });



  function height(bloc){
	var hauteur;
	
	if( typeof( window.innerWidth ) == 'number' )
		hauteur = window.innerHeight;
	else if( document.documentElement && document.documentElement.clientHeight )
		hauteur = document.documentElement.clientHeight;
	
	document.getElementById(bloc).style.height = hauteur+"px";
}

	

window.onload = function(){ 
	height("leftmenumagicard") ;
};
window.onresize = function(){ height("leftmenumagicard") };