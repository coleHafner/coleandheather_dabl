$(document).ready(function() {
	
	$( ".primary_nav_table td, .side_bar_nav li" )
		.live( "mouseenter", function(){
			$( this ).addClass( "selected_hover" );
		})
		
		.live( "mouseleave", function(){		
			$( this ).removeClass( "selected_hover" );
		});
});
