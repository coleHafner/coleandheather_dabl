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
		guestListFilter();
		break;

	    case 'add_type':

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

	if(action == 'add-type') {
	    $.post('/partial/admin/guest-add-type', {}, function(selectList){
		$('#additional-guest-types').append(selectList);
	    });
	}else {

	    //show form
	    var $di = getDialog(opts);
		$di.load('/partial/admin/' + type + '-' + action, {action:action, pk:pk, showForm:true}).dialog('open');
	}
    });


});

function editGuest(pk) {
    alert('here: ' + pk);
    //validate
    var $form = $('#guest-edit-form-' + pk);

    $.post(
	'/partial/admin/guest-edit?pk=' + pk,
	$form.serialize(),
	function(reply){
	    alert('reply: ' + reply);
	    var dialogId = '#guest-edit-' + pk;
	    $( dialogId ).dialog('close');
	    guestListFilter();
	}
    );
}//editGuest()

function deleteGuest(pk) {
    $.post(
	'/partial/admin/guest-delete',
	{pk:pk},
	function(reply){
	    var dialogId = '#guest-delete-' + pk;
	    $( dialogId ).dialog('close');
	    guestListFilter();
	}
    );
}//deleteGuest()

function guestListFilter() {
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
}//guestListFilter()