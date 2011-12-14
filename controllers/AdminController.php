<?php

class AdminController extends LoggedInApplicationController {

    function __construct() {
	parent::__construct();
	$this->layout = 'layouts/mainAdmin';
	$this['login-button'] = array(
	    'pk_name' => "auth_id",
	    'pk_value' => "0",
	    'id' => "authentication",
	    'process' => "login",
	    'button_value' => "Login",
	    'extra_style' => 'style="width:70px"',
	);
    }

//__construct

    function index() {
	$this['title'] = "RSVP Stats";
	$this['currentAction'] = 'index';

	$this['stats'] = Guest::getStats();
	$this['lists'] = Guest::getGuestLists();
    }//index

    function guestList(){

	$this['title'] = "Complete Guest List";
	$this['currentAction'] = 'guest-list';

	$this['guestTypes'] = GuestType::doSelect();
	$this['guests'] = Guest::getGuestListComplete();

	$this['button'] = array(
	    'id' => "guest_list",
	    'process' => "show_filter",
	    'pk_name' => "guest_list_id",
	    'pk_value' => "0",
	    'button_value' => "Filter List",
	    'inner_div_style' => 'style="padding-top:4px;padding-left:1px;"',
	    'link_style' => 'style="float:right;width:70px;font-size:10px;"',
	);

	$this['form-buttons'] = array(
	    'left' => array(
		'pk_name' => "guest_list_id",
		'pk_value' => 0,
		'process' => "apply_filter",
		'id' => "guest_list",
		'button_value' => "Filter",
		'extra_style' => 'style="width:41px;"' ),

	    'right' => array(
		'pk_name' => "guest_list_id",
		'pk_value' => 0,
		'process' => "cancel_filter",
		'id' => "guest_list",
		'button_value' => "Cancel",
		'extra_style' => 'style="width:41px;"' ),
		'table_style' => 'style="margin-top:18px;margin-left:15px;"'
	);

    }//guestList()

}//clas AdminController