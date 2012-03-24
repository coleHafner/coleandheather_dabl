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

	switch(action) {
	    case'add-type':
		var $list = $('#guest_type_list').clone();
		$list.attr('id', '');
		$('#additional-guest-types').append($list);
		break;

            case 'print':
                alert('here');
               break;

	    default:
		var $di = getDialog(opts);
		$di.load('/partial/admin/' + type + '-' + action, {action:action, pk:pk, showForm:true}).dialog('open');
		break;
	}
    });


});

function editGuest(pk) {

    var form_id = '#guest-edit-form-' + pk;
    var $form = $(form_id);
    var need = [];

    //validate
    if( $(form_id + ' input:text[name=first_name]').val().length == 0) {
        need.push('First Name');
    }

    if( $(form_id + ' input:text[name=last_name]').val().length == 0) {
        need.push('Last Name');
    }

    if(pk == 0 && $('#guest_type_list').val() == 0) {
        need.push('Guest type');
    }

    if(need.length > 0) {
        alert('Please fill in the following fields: ' + need.join(', '));
        return false;
    }


    $.post(
	'/partial/admin/guest-edit?pk=' + pk,
	$form.serialize(),
	function(reply){
	    var dialogId = '#guest-edit-' + pk;
	    $( dialogId ).remove();
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