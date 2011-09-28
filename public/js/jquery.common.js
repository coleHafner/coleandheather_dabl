$( document ).ready( function() {
	
	$( ".gallery_click" ).imgbox();
	
	$( ".text_input" ).live( "click", function(){
		clearFormMessage();
	});
	
	$( ".text_input_short_height" ).live( "click", function(){
		clearFormMessage();
	});
	
	if( $( "#gallery_container" ).length > 0 ||
		$( "#postwall_container" ).length > 0 )
	{
		adjustCanvasHeightForGallery( function(){} );
	}
	
	if( $( "#her_story" ).length > 0 )
	{
		adjustCanvasHeightForTwoCol( function(){} );
	}
	
	$( ".rsvp" ).live( "click", function( event ) {
		
		event.preventDefault();
		var process = $( this ).attr( "process" ).toLowerCase();
		//alert( "we are here. this is process: " + process );
		
		switch( process )
		{
			case "validate-activation-code":
				
				var activation_code = $( "#activation_code" ).attr( "value" );
				
				//fetch current users data
				$.ajax({
					type:'post',
					url:'/www/ajax/cah_helper.php?task=rsvp&process=' + process,
					data: { activation_code: activation_code },
					success: function( reply ) {
						
						//get result
						var reply_split = reply.split( "^" );
						var result =  reply_split[0];
						var message = reply_split[1];
						
						if( result == 1 )
						{
							window.location = message;
						}
						else
						{
							showFormMessage( message, 0, function(){} );
						}
					}
				});
				break;
				
			case "update-rsvp":
				
				var guest_id = $( this ).attr( "guest_id" );
				var is_attending = $( this ).attr( "value" ); 
				
				$.ajax({
					type:'post',
					url:'/www/ajax/cah_helper.php?task=rsvp&process=' + process,
					data: { guest_id: guest_id, is_attending: is_attending },
					success: function( reply ) {
						
						//show html
						var options = new Object();
						options.guest_id = guest_id;
						options.is_attending = is_attending;
						showRsvpHtml( "show-rsvp-confirmation", options, function(){} );
					}
				});
				
				break;
				
			case "show-add-guest":
				adjustCanvasHeight( function(){ $( '#rsvp_form' ).slideDown( 'slow' ); } );
				break;
				
			case "hide-add-guest":
				$( '#rsvp_form' ).slideUp( 'slow' );
				break;
				
			case "add-guest":
				
				var guest_id = $( this ).attr( "guest_id" );
				
				//fetch current users data
				$.ajax({
					type:'post',
					url:'/www/ajax/cah_helper.php?task=rsvp&process=' + process,
					data: $( "#guest_add_form" ).serialize( true ),
					success: function( reply ) {
					
						//get result
						var reply_split = reply.split( "^" );
						var result =  reply_split[0];
						var message = reply_split[1];
						
						if( result == 1 )
						{
							var options = new Object();
							options.guest_id = guest_id;
							options.is_attending = "1";
							showRsvpHtml( "show-rsvp-confirmation", options, function(){} );
						}
						else
						{
							showFormMessage( message, 0, function(){} );
						}
					}
				});
				break;
				
			case "remove-guest":
				
				var guest_id = $( this ).attr( "guest_id" );
				
				//fetch current users data
				$.ajax({
					type:'post',
					url:'/www/ajax/cah_helper.php?task=rsvp&process=' + process,
					data: { guest_id: guest_id },
					success: function( reply ) {
						
						var target = $( "#guest_li_" + guest_id );
						target.fadeOut( 'slow', function(){ target.remove(); } );
					}
				});
				break;
				
			case "finalize-rsvp":
				
				var guest_id = $( this ).attr( "guest_id" );
				
				$.ajax({
					type:'post',
					url: '/www/ajax/cah_helper.php?task=rsvp&process=' + process,
					data:$( "#rsvp_final_step" ).serialize( true ),
					success: function( reply ) {
					
						//show html
						var options = new Object();
						options.guest_id = guest_id;
						showRsvpHtml( "rsvp-thank-you", options, function(){} );
					}
				});
				break;
		}
		
	});
	
	$( ".info" ).live( "click", function( event ) {
		
		event.preventDefault();
		var process = $( this ).attr( "process" ).toLowerCase();
		//alert( "we are here. this is process: " + process );
		
		switch( process )
		{
			case "toggle-map-controls":
				if( $( this ).html() == "Hide" )
				{
					mapToggleControls( "hide" );
				}
				else
				{
					mapToggleControls( "show" );
				}
				break;
				
			case "show-map":
				var address = $( "#address" ).attr( "value" ); 
				var city = $( "#city" ).attr( "value" );
				var state = $( "#state" ).attr( "value" );
				
				if( city.length > 0 &&
					state.length > 0 )
				{
					var start = ( address.length > 0 ) ? address + " " + city + " " + state : city + " " + state;
					mapShowRoute( start );
					
					//populate directions link
					var start_formatted = start.replace( / /g, "_" );
					$( "#full_screen_link" ).html( '<a href="/directions.php?start=' + start_formatted + '" target="_blank">Go Full Screen &gt;&gt;</a>' );
				}
				else
				{
					showFormMessage( "Hey, you forgot something!", "0",  function(){} );
				}
				break;
		}
	});
		
});

$( ".fact" ).live( "click", function( event ) {
	event.preventDefault();
	var process = $( this ).attr( "process" ).toLowerCase();
	
	switch( process )
	{
		case "new-fact":
			var current_fact = $( "#current_fact" ).attr( "value" );
			var max_facts = $( "#max_facts" ).attr( "value" );
			var unique = false;
			var new_fact = 0;
			
			while( !unique )
			{
				new_fact = Math.ceil( Math.random() * max_facts );
				
				if( current_fact != new_fact )
				{
					unique = true;
				}
			}
			
			//hide current fact
			$( "#fact_" + current_fact ).hide();
			
			//set new current fact
			$( "#current_fact" ).attr( "value", new_fact );
			
			//show new fact
			$( "#fact_" + new_fact ).show();
			break;
	}
});

$( window ).load( function() {
	
	//google maps for wedding_info directions page
	if( $( "#map_canvas" ).length > 0 )
	{
		var map;
		var geocoder;
		var directionsDisplay;
		var directionsService;
	}
	
});

function mapShowDirections( start )
{
	mapInit();
	mapCalcRoute( start );
	
}//showShowDirections()

function mapInit()
{
	geocoder = new google.maps.Geocoder();
	directionsService = new google.maps.DirectionsService();
	directionsDisplay = new google.maps.DirectionsRenderer();
	
	var salem = mapConvertAddress( "salem, or" );
	var options = { zoom:5, center:salem, mapTypeId: google.maps.MapTypeId.ROADMAP };
	
	map = new google.maps.Map( document.getElementById( "map_canvas" ), options );
	directionsDisplay.setMap( map );
	document.getElementById( "directions_canvas" ).innerHTML = "";
	directionsDisplay.setPanel( document.getElementById( "directions_canvas" ) );
	
}//mapInit()

function mapCalcRoute( start, callback )
{
	var end = "Deepwood Estates 1116 Mission Street Southeast Salem, OR";
	var request = { origin:start,  destination:end, travelMode: google.maps.DirectionsTravelMode.DRIVING };

	directionsService.route( request, function( result, status ) {
	
		if ( status == google.maps.DirectionsStatus.OK ) 
		{
			directionsDisplay.setDirections( result );
			callback();
		}
	});
	
}//mapCalcRoute()

function mapConvertAddress( address )
{
	geocoder.geocode( { 'address': address }, function( results, status) {
		
	      if ( status == google.maps.GeocoderStatus.OK ) 
	      {
	    	  map.setCenter( results[0].geometry.location );
	    	  var marker = new google.maps.Marker( { map: map,  position: results[0].geometry.location } );
	      } 
	      else 
	      {
	        alert( "Geocode was not successful for the following reason: " + status );
	      }
	});
	
}//mapConvertAddress()

function mapToggleControls( cmd )
{
	cmd = cmd.toLowerCase();
	
	if( cmd == "hide" )
	{
		//$( "#map_controls" ).removeClass( "controls_visible" ).addClass( "controls_hidden" );
		$( "#map_controls" ).animate( { top:'-=324' }, 700 );
		$( "#map_tab_link" ).html( "Show" );
	}
	else
	{
		//$( "#map_controls" ).removeClass( "controls_hidden" ).addClass( "controls_visible" );
		$( "#map_controls" ).animate( { top:'+=323' }, 700 );
		$( "#map_tab_link" ).html( "Hide" );
	}
	
}//mapToggleControls()

function mapShowRoute( start )
{
	mapInit();
	mapCalcRoute( start, function(){
		mapToggleControls( "hide" ); 
	});
	
}//mapShowRoute()

/**
 * Shows result of form submission.
 * @param	String		message		message to display
 * @param 	int			success		1 or 0 
 * @param 	function	callback	callback function
 */
function showFormMessage( message, success, callback )
{
	var target = $( "#results_div" );
	var result_class = ( success != "1" ) ? "color_red_bg" : "";
	
	//apply class and show message, do callback
	target.addClass( result_class );
	target.html( message );
	callback();
	
}//showFormMessage()

function clearFormMessage()
{
	if( $( "#results_div" ).length > 0 )
	{
		$( "#results_div" ).removeClass( "color_red_bg" );
		$( "#results_div" ).html( "" );
	}
}//clearFormMessage()

/**
 * Displays the current RSVP step.
 * @param 	String		cmd			current command
 * @param	Object		options		variables for current step 
 * @param 	function	callback	callback function
 */
function showRsvpHtml( cmd, options, callback )
{
	switch( cmd )
	{
		case "show-rsvp-confirmation":
			$.ajax({
				type:'post',
				url:'/www/ajax/cah_helper.php?task=rsvp&process=' + cmd,
				data:{ guest_id: options.guest_id, is_attending: options.is_attending },
				success: function( reply_html ) {
					adjustCanvasHeight( function(){ $( "#rsvp_container" ).html( reply_html ); } );
				}
			});
			break;
			
		case "rsvp-thank-you":
			$.ajax({
				type:'post',
				url:'/www/ajax/cah_helper.php?task=rsvp&process=' + cmd,
				data:{ guest_id: options.guest_id },
				success: function( reply_html ) {
					adjustCanvasHeight( function(){ $( "#rsvp_container" ).html( reply_html ); } );
				}
			});
			break;
	}
	
}//showRsvpStep()


/**
 * Adjusts the height of the canvas to adapt to ajax content. 
 * @param 	function	callback	callback function
 */
function adjustCanvasHeight( callback )
{
	$( ".content" ).css( "padding-bottom", "50px" );
	$( ".content" ).css( "height", "auto" );
	callback();
}//adjustCanvasHeight()

/**
 * Adjusts the height of the canvas for the gallery page 
 * @param 	function	callback	callback function
 */
function adjustCanvasHeightForGallery( callback )
{
	$( ".content" ).css( "padding-bottom", "10px" );
	$( ".content" ).css( "height", "auto" );
	callback();
	
}//adjustCanvasHeightForGallery()

/**
 * Adjusts the height of the canvas for the gallery page 
 * @param 	function	callback	callback function
 */
function adjustCanvasHeightForTwoCol( callback )
{
	$( ".content" ).css( "height", "750px" );
	$( ".side_bar" ).css( "height", "750px" );
	callback();
	
}//adjustCanvasHeightForGallery()