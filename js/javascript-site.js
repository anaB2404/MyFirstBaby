$(document).ready(function(){
                 $(".navbar-toggle").on('click', function(){
                   var display = $(".sidebar").attr('display');
                     if(display === 'false'){
          	           $('.sidebar').animate({
          		                 marginLeft: '0px'
          	           }, 500 );
          	           $(".sidebar").attr('display', 'true');
                     }else{
          	          $('.sidebar').animate({
          		          marginLeft: '-250px'
          	          }, 500 );
          	         $(".sidebar").attr('display', 'false');
          	            }
                  })
                  })
				  
				  
function seta() {
	document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}