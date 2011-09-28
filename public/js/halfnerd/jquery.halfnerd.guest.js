/**
 * A class to handle article records.
 * @package	halfnerdCMS
 * @author	Hafner
 * @since	20101215
 */
 
$( document ).ready( function(){

	$( "#guest_list" )
		.live( "click", function( event ){
		
			//cancel event
			event.preventDefault();
			
			//get vars
			var process = $( this ).attr( "process" );
			
			//do action
			switch( process.toLowerCase() )
			{
				case "cancel_filter":
					$( "#guest_list_filter" ).slideUp();
					break;
					
				case "show_filter":
					$( "#guest_list_filter" ).slideDown();
					break;
					
				case "apply_filter":
					
					$.ajax({
						type:'post',
						url: '/ajax/halfnerd_helper.php?task=guest&process=' + process,
						data:$( "#guest_list_form" ).serialize( true ),
						success: function( reply ) {
							
							//show html
							$( "#guest_list_container" ).html( reply );
						}
					});
					break;
					
				default:
					alert( "Thing not avail." );
					break;
			}//end switch
		});
});