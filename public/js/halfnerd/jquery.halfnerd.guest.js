/**
 * A class to handle guest records.
 * @package	halfnerdCMS
 * @author	Hafner
 * @since	20101215
 */

$( document ).ready( function(){

    $( "#guest_list" ).live( "click", function( event ){

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
		    url: '/partial/admin/guest-list-search',
		    data:$( "#guest_list_form" ).serialize( true ),
		    success: function( reply ) {

			//show html
			$( "#guest_list_container" ).html( reply );

		    //hide filter
		    //$('#guest_list_filter').slideUp('fast');
		    }
		});
		break;

	    default:
		alert( "Thing not avail." );
		break;
	}//end switch
    });

    $('.guest-record').live( "click", function( event ) {

	//cancel event
	event.preventDefault();
	var opts = $(this);
	var pk = opts.attr('pk');
	var type = opts.attr('type');
	var action = opts.attr('action');
	var process = opts.attr('process');

	//show form
	var $di = getDialog(opts);
	$di.load('/partial/admin/' + type + '-' + process, {action:action, pk:pk}).dialog('open');

    });

});

function deleteGuest(pk) {
    alert('deleting guest #' + pk);
}//deleteGuest()

function editGuest(pk) {
    alert('editing guest #' + pk);
}