<?php
class LoggedInApplicationController extends ApplicationController {

    function __construct() {
	parent::__construct();


        if(!Application::haveActiveLogin()) {
            redirect(site_url('/login'));
        }

	$this['actions'] = array(
	    'index' => 'Rsvp Stats',
	    'guest-list' => 'Guest List',
	);

    }//__construct

}//class LoggedInApplicationController