$( document ).ready( function() {

    $( ".text_input" ).live( "click", function(){
	clearFormMessage();
    });

    $( ".text_input_short_height" ).live( "click", function(){
	clearFormMessage();
    });

    $( ".rsvp" ).live( "click", function( event ) {

	event.preventDefault();
	var process = $( this ).attr( "process" ).toLowerCase();

	switch( process )
	{
	    case "validate-activation-code":

		var activation_code = $( "#activation_code" ).attr( "value" );

		//fetch current users data
		$.ajax({
		    type:'post',
		    url:'/rsvp/' + process,
		    data: {
			activation_code: activation_code
		    },
		    success: function( reply ) {

			//get result
			var reply_split = reply.split( "^" );
			var result =  reply_split[0];
			var message = reply_split[1];

			if( result == 1 )
			{
			    var options = new Object();
			    options.activation_code = activation_code;
			    loadRsvpForm( 'step-2', options, function(){} );
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
		    url:'/rsvp/' + process,
		    data: {
			guest_id: guest_id,
			is_attending: is_attending
		    },
		    success: function( reply ) {

			//show html
			var options = new Object();
			options.guest_id = guest_id;
			options.is_attending = is_attending;
			loadRsvpForm( 'step-3', options, function(){} );
		    }
		});

		break;

	    case "show-add-guest":
		adjustCanvasHeight( function(){
		    $( '#rsvp_form' ).slideDown( 'slow' );
		} );
		break;

	    case "hide-add-guest":
		$( '#rsvp_form' ).slideUp( 'slow' );
		break;

	    case "add-guest":

		var guest_id = $( this ).attr( "guest_id" );

		//fetch current users data
		$.ajax({
		    type:'post',
		    url:'/rsvp/' + process,
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
			    options.is_attending = '1';
			    loadRsvpForm( 'step-3', options, function(){} );
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
		    url:'/rsvp/' + process,
		    data: {
			guest_id: guest_id
		    },
		    success: function( reply ) {
			var target = $( "#guest_li_" + guest_id );
			target.fadeOut( 'slow', function(){
			    target.remove();
			} );
		    }
		});
		break;

	    case "finalize-rsvp":

		var guest_id = $( this ).attr( "guest_id" );

		$.ajax({
		    type:'post',
		    url: '/rsvp/' + process,
		    data:$( "#rsvp_final_step" ).serialize( true ),
		    success: function( reply ) {

			//show html
			var options = new Object();
			options.guest_id = guest_id;
			loadRsvpForm( 'step-4', options, function(){} );
		    }
		});
		break;
	}

    });

    $( ".info" ).live( "click", function( event ) {

	event.preventDefault()
	var process = $( this ).attr( "process" ).toLowerCase();

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

                var $form = $(this).closest('form'),
                    address = $form.find('input[name=address]').val(),
                    state = $form.find('input[name=state]').val(),
                    city = $form.find('input[name=city]').val(),
                    zip = $form.find('input[name=zip]').val();

		if( city.length > 0 && state.length > 0 ) {

		    var start = ( address.length > 0 ) ? address + " " + city + " " + state : city + " " + state;
		    //mapShowRoute(start, true);
                    var url = '/info?address=' + address + '&city=' + city + '&state=' + state + '&from=' + start + '#directions';
                    window.location = encodeURI(url);
		}
		else
		{
                    alert("Hey, you forgot something!");
		    //showFormMessage( "Hey, you forgot something!", "0",  function(){} );
		}
		break;

            case "show-places":
                mapInitPlaces();
                break;
	}
    });

    $('#directions_canvas_toggle').click(function(event){

        event.preventDefault();
        togglePanel( $('#directions_canvas'), $(this), 'Hide Directions', 'Show Directions');
    });

    $('#places_list_toggle').click(function(event){

        event.preventDefault();
        togglePanel( $('#places_canvas_list'), $(this), 'Hide List', 'Show List');
    });

    $('.info_options').click(function(event){

        event.preventDefault();

        var targets = ['directions', 'gift-registries', 'hotels', 'general'];
        var target = $(this).attr('target');

        for(var i = 0; i < targets.length; i++) {

            if(targets[i] == target) {
                $('#' + targets[i]).show();
                window.location = '/info#' + targets[i];
                window.scrollTo(0,0);

            }else {
                $('#' + targets[i]).hide();
            }
        }

        if(target == 'hotels') {
            mapInitPlaces();
        }
    });

    $('#directions_form input[type=text]').keypress( function(event){
       if(event.which == 13) {
           $('#directions_search_button').trigger('click');
       }
    });

    $('.info_sub_nav a').click(function(){
        $('.info_sub_nav a').removeClass('selected');
        $(this).addClass('selected');
    })

    resizePage();
    resizeCanvas();
});

$(window).resize( function(){
    resizePage();
    resizeCanvas();
});

$( window ).load( function() {

    //google maps for wedding_info directions page
    if( $( "#map_canvas" ).length > 0 ) {
	var map;
	var geocoder;
        var infoWindow;
        var placesService;
	var directionsDisplay;
	var directionsService;
    }

    var loc = window.location.toString();

    if(loc.indexOf('info') != -1 && loc.indexOf('#') != -1) {

        if(loc.indexOf('?') == -1) {
            var nav_section = '#nav-' + loc.split('#')[1];
            $(nav_section).trigger('click');

        }else {
            window.scrollTo(0,0);

        }
    }

    resizePage();
    resizeCanvas();
});

function togglePanel(panel_target, link_target, hide, show) {

    var inner_val = hide;
    var visible_val = '1';
    var position = '0';

    if(link_target.attr('visible') == '1') {
        visible_val = '0';
        position = '-300';
        inner_val = show;
    }

    panel_target.animate({'right':position}, 700);
    link_target.attr('visible', visible_val);
    link_target.text(inner_val);

}//togglePanel()

function resizePage() {
    //resize page
    var $page = $('.page');
    var currentMargin = parseInt($page.css('margin-top'));
    var viewportWidth = parseInt($(window).width());
    var viewportHeight = parseInt($(window).height());

    var newHeight = viewportHeight - (currentMargin * 2);
    $page.css('min-height', newHeight);

    var newWidth = viewportWidth - (currentMargin * 2);
    //alert('newHeight: ' + newHeight + ' vpHeight: ' + viewportHeight);

    //check for scroll bar
    if(newHeight > viewportHeight) {
	newWidth -= currentMargin;
    }

    $page.css('width', newWidth);

}//resizePage()

function resizeCanvas() {
    var viewportHeight = parseInt($(window).height());
    var calcHeight = viewportHeight * .2;
    var minSpacerHeight = 125;
    var logoHeight = 65;


    var spacerHeight = (minSpacerHeight > calcHeight) ? minSpacerHeight : calcHeight;
    var padding = (spacerHeight > minSpacerHeight) ? (spacerHeight - logoHeight)/2 : 20;

    $('.canvas_spacer').css('height', spacerHeight);
    $('.canvas_spacer .nav').css('top', padding);
    $('.canvas_spacer .logo').css('top', padding);
    $('.canvas_spacer .nav_table td').css('lineHeight', logoHeight.toString() + 'px');

}//resizeCanvas()

function loadRsvpForm( cmd, options, callback ) {

    var $div_target = $( '#rsvp_container' );

    switch( cmd ) {

	case 'step-2':
	    $div_target.load( 'partial/rsvp?activation_code=' + options.activation_code );
	    break;

	case 'step-3':
	    $div_target.load( 'partial/rsvp?step=step-3-' + options.is_attending + '&guest_id=' + options.guest_id + '&is_attending=' + options.is_attending );
	    break;

	case 'step-4':
	    $div_target.load( 'partial/rsvp?step=' + cmd + '&guest_id=' + options.guest_id + '&guest_id=' + options.guest_id );
	    break;
    }

    adjustCanvasHeight( callback );
}

function mapShowDirections( start )
{
    mapInit();
    mapCalcRoute( start );

}//showShowDirections()

function mapInit(map_target, callback) {

    //endPoint = '3611+NW+Upas+Ave.+Redmond,+OR+97756';
    //var latLon = 'http://maps.googleapis.com/maps/api/geocode/json?address=' + address + '&sensor=false';

    markerCounter = 0;
    endPoint = '3611 NW Upas Ave. Redmond, OR 97756';

    geocoder = new google.maps.Geocoder();
    infoWindow = new google.maps.InfoWindow();
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();

    geocoder.geocode({address: endPoint}, function (results, status) {

        if (status == google.maps.GeocoderStatus.OK) {

            mapLocation = results[0].geometry.location;

            var options = {
                center:mapLocation,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById(map_target), options);
            callback();

        }else {
            alert( "Geocode was not successful for the following reason: " + status );
        }

    });

}//mapInit()

function mapShowRoute(start, show_link) {

    var callback = function(){
        directionsDisplay.setMap(map);
        var directionsCanvas = document.getElementById('directions_canvas')
        directionsCanvas.innerHTML = "";
        directionsDisplay.setPanel(directionsCanvas);
    }

    mapInit('map_canvas', callback);

    mapCalcRoute( start, function(){
        $('#directions_canvas').addClass('directions_canvas');
        $('.directions_canvas_toggle').show();

        if(show_link) {
            var $form = $('#directions_form'),
                address = $form.find('input[name=address]').val(),
                state = $form.find('input[name=state]').val(),
                city = $form.find('input[name=city]').val(),
                zip = $form.find('input[name=zip]').val();

            var url = '/directions?address=' + address + '&city=' + city + '&state=' + state + '&from=' + start + '#directions';
            var fullScreen = '<a href="' + encodeURI(url) + '">Get Full Screen Directions</a>';
            $('#directions_canvas').prepend('<div class="padder_10" id="full_screen_dir_link" style="text-align:center;">' + fullScreen + '</div>');
        }
    });

}//mapShowRoute()

function mapCalcRoute(start, callback)
{
    var request = {
	origin:start,
	destination:endPoint,
	travelMode: google.maps.DirectionsTravelMode.DRIVING
    };

    directionsService.route(request, function(result, status) {
        if(status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections( result );
            callback();
        }else {
            alert('Something went wrong!');
        }
    })

}//mapCalcRoute()

function mapInitPlaces() {

    var callback = function(){
        marker = new google.maps.Marker({
            map: map,
            position:mapLocation
        });

        //marker content
        var marker_content = '<table><tr>';
            marker_content += '<td><img src="/images/home_11_small.jpg" style="height:70px;width:70px;" /></td>';
            marker_content += '<td valign="top">The Venue<br/>' + endPoint.replace('.', '.<br/>') + '</td>';
            marker_content += '</tr></table>';

        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(marker_content);
            infoWindow.open(map, this);
        });

        //open info window by default
        infoWindow.setContent(marker_content);
        infoWindow.open(map, marker);
    }

    mapInit('places_canvas', callback);

    $('.places_list_toggle').show();

    geocoder.geocode({address:endPoint}, function (results, status) {

        if(status == google.maps.GeocoderStatus.OK ) {

            var request = {
                location: results[0].geometry.location,
                radius: '5000',
                keyword: 'hotel',
                types:['lodging']
            };

            placesService = new google.maps.places.PlacesService(map);
            placesService.search(request, mapShowPlaces);

        }else {
            alert( "Geocode was not successful for the following reason: " + status );
        }

    });

}//mapInitPlaces()

function mapShowPlaces(results, status) {

    if(status == google.maps.places.PlacesServiceStatus.OK) {

        map.setZoom(12);
        var place = null;

        for (var i = 0; i < results.length; i++) {
            place = results[i]
            var request = {reference: place.reference};
            placesService.getDetails(request, mapInitMarker);
        }
    }else {
        alert('Error: failed to show places for the following reason: ' + status);
    }
}//mapShowPlaces()

function mapInitMarker(place, status) {

    if(status == google.maps.places.PlacesServiceStatus.OK) {
        mapCreateMarker(place);

    }else {
        alert('Error: Place details not found for the following reason "' + status + '"');
    }
}
function mapCreateMarker(place) {

    var request = {map: map, position: place.geometry.location}
    var marker = new google.maps.Marker(request);
    var markerLinkId = 'marker' + markerCounter;

    var pretty_rating = (place.rating && typeof place.rating != 'undefined') ? 'Rating: ' + place.rating + '/5 stars' : 'No rating available.';
    var pretty_address = place.formatted_address.replace(',', '<br/>').replace(', United States', '') + '<br/>';
    var pretty_phone = place.formatted_phone_number + '<br/>';

    var image = new google.maps.MarkerImage(
      place.icon,
      new google.maps.Size(35, 35),
      new google.maps.Point(0, 0),
      new google.maps.Point(17, 34),
      new google.maps.Size(25, 25)
    );

    marker.setIcon(image);

    var desc = '<a href="' + place.url + '" target="_blank" >' + place.name + '</a>' + '<br/>';
        desc += pretty_address + pretty_phone + pretty_rating;

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(desc);
        infoWindow.open(map, this);
    });

    var list_desc = '<div class="padder_10"><a href="#" id="' + markerLinkId + '" >' + place.name + '</a>' + '<br/>';
        list_desc += pretty_address +  pretty_phone + '</div><hr/>';

    //add to list
    document.getElementById('places_canvas_list').innerHTML += list_desc;

    var link = document.getElementById(markerLinkId);

    //add the listener
    google.maps.event.addDomListener(link, 'click', function() {
        google.maps.event.trigger(marker, 'click');
        return false;
    });

    markerCounter++;

}//mapCreateMarker()

/**
 * Shows result of form submission.
 * @param	String		message		message to display
 * @param 	int			success		1 or 0
 * @param 	function	callback	callback function
 */
function showFormMessage( message, success, callback )
{
    var target = $( "#results_div" );
    var result_class = ( success != "1" ) ? "dark_grey_bg" : "";

    //apply class and show message, do callback
    target.addClass( result_class );
    target.html( message );
    callback();

}//showFormMessage()

function clearFormMessage()
{
    if( $( "#results_div" ).length > 0 )
    {
	$( "#results_div" ).removeClass( "dark_grey_bg" );
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
		data:{
		    guest_id: options.guest_id,
		    is_attending: options.is_attending
		},
		success: function( reply_html ) {
		    adjustCanvasHeight( function(){
			$( "#rsvp_container" ).html( reply_html );
		    } );
		}
	    });
	    break;

	case "rsvp-thank-you":
	    $.ajax({
		type:'post',
		url:'/www/ajax/cah_helper.php?task=rsvp&process=' + cmd,
		data:{
		    guest_id: options.guest_id
		},
		success: function( reply_html ) {
		    adjustCanvasHeight( function(){
			$( "#rsvp_container" ).html( reply_html );
		    } );
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