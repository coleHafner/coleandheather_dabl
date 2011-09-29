<?php

class RsvpController extends ApplicationController {

	function index() {
		$this['step_num'] = 'step-1';
		$this['show_results'] = '1';
		$this['title'] = 'RSVP';
		$this['message'] = 'Enter your activation code.';
		$this['active_view'] = 'rsvp/index';
		$this['active_form_view'] = 'rsvp/step-1';
	}//index()

}//class RsvpController