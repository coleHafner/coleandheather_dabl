<?php

class AdminController extends LoggedInApplicationController {

    function __construct() {
	parent::__construct();
	$this->layout = 'layouts/mainAdmin';
    }//__construct

    function index() {
	$this['title'] = "RSVP Stats";
	$this['currentAction'] = 'index';

	$this['stats'] = Guest::getStats();
	$this['lists'] = Guest::getGuestLists();

    }//index()

    function guestList(){

	$this['title'] = "Complete Guest List";
	$this['currentAction'] = 'guest-list';

	$q= new Query;
	$q->add('guest_type_id', 0, Query::GREATER_THAN);
	$q->order('title');

	$this['guestTypes'] = GuestType::doSelect($q);
	$this['guests'] = Guest::getGuestListComplete();

	$this['button'] = array(
	    'id' => null,
	    'process' => "edit",
	    'pk_name' => "pk",
	    'pk_value' => "0",
	    'action' => 'edit',
	    'type' => 'guest',
	    'button_value' => "Add Guest",
	    'extra_classes' => 'guest-record',
	    'inner_div_style' => 'style="padding-top:4px;padding-left:1px;"',
	    'link_style' => 'style="float:right;width:70px;font-size:10px;"',
	);

        $this['button_2'] = array(
            'href' => site_url('admin/guest-list-print'),
	    'button_value' => "Print List",
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

	);

    }//guestList()

    function guestListSearch() {
	$guestTypeId = ($_REQUEST['guest_type_id'] > 0 ) ? $_REQUEST['guest_type_id'] : null;
	$hasReplied = ($_REQUEST['has_replied'] != '-' ) ? $_REQUEST['has_replied'] : null;
	$this['guests'] = Guest::getGuestListComplete($hasReplied, $guestTypeId);
    }//guestListSearch()

    function guestListPrint() {
        $this->layout = 'layouts/minimal';
        $q = new Query;
        $q->addOrder('last_name', Query::ASC);
        $q->add('parent_guest_id', null, Query::IS_NULL);
        $this['guests'] = Guest::doSelect($q);
        $this['total_guest_count'] = Guest::doCount();

    }//guestListPrint()

    function guestEdit() {

	if($_REQUEST['pk'] > 0) {
	    $activeRecord = Guest::retrieveByPK($_REQUEST['pk']);
	}else {
	     $activeRecord = new Guest;
	}


	if(isset($_REQUEST['showForm'])) {
	    $this['activeRecord'] = $activeRecord;
	    $this['action'] = $_REQUEST['action'];

	}else {

	    $activeRecord->doEdit($_REQUEST);
	    die;
	}
    }//guestEdit()

    function guestDelete() {

	$activeRecord = Guest::retrieveByPK($_REQUEST['pk']);

	if(isset($_REQUEST['showForm'])) {
	    $this['activeRecord'] = $activeRecord;
	    $this['action'] = $_REQUEST['action'];
	}else {
	    $activeRecord->delete();
	    die;
	}
    }//guestDelete()

}//class AdminController