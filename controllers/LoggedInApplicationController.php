<?php
class LoggedInApplicationController extends ApplicationController {

    function __construct() {
	parent::__construct();
	$this['actions'] = array(
	    'index' => 'Rsvp Stats',
	    'guest-list' => 'Guest List',
	);
    }//__construct

}//class LoggedInApplicationController