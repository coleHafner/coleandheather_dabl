<?php

class RsvpController extends ApplicationController {

    function index() {
	$step = "step-1";
	$valid_steps = array('step-1', 'step-2', 'step-3-0', 'step-3-1', 'step-4');

	if (isset($_REQUEST['activation_code']) && Guest::validateActivationCode($_REQUEST['activation_code']) ||
		isset($_REQUEST['guest_id']) && Guest::validateGuestId($_REQUEST['guest_id'])) {
	    $step = ( isset($_REQUEST['step']) && in_array($_REQUEST['step'], $valid_steps) ) ? $_REQUEST['step'] : 'step-2';
	    $this['skip_template'] = true;
	}

	$step_vars = $this->_getStepVars($step);
	foreach ($step_vars as $k => $v) {
	    $this[$k] = $v;
	}

    }//index()

    function validateActivationCode() {
	$is_valid = Guest::validateActivationCode($_REQUEST['activation_code']);
	echo ( $is_valid ) ? '1^1' : '0^That activation code is not valid.';
	die();

    }//validateActivationCode()

    function updateRsvp() {
	$guest = Guest::retrieveByPk($_REQUEST['guest_id']);
	$guest_list = ( $_REQUEST['is_attending'] == '1' ) ? array($guest->getGuestId()) : array();
	$guest->updateGroupRsvpStatus($_POST['is_attending'], $guest_list);
	die();

    }//updateRsvp()

    function addGuest() {
	$q = new Query;
	$q->add('first_name', $_REQUEST['first_name']);
	$q->add('last_name', $_REQUEST['last_name']);
	$q->add('parent_guest_id', $_REQUEST['parent_guest_id']);

	$result = Guest::doSelect($q);
	$existing_g = array_shift($result);
	$ts = strtotime('now');
	$reply = true;

	if (!is_object($existing_g)) {
	    $_REQUEST['is_new'] = '1';
	    $_REQUEST['initial_timestamp'] = $ts;
	    $guest = Guest::create();

	    $guest->fromArray($_REQUEST);
	    $errors = $guest->validate();
	    $errors = $guest->getValidationErrors();

	    //add custom error check
	    if (strlen($_REQUEST['first_name']) == 0) {
		$errors[] = 'Please specify a first name.';
	    }
	    if (strlen($_REQUEST['last_name']) == 0) {
		$errors[] = 'Please specify a last name.';
	    }

	    if (count($errors) == 0) {
		$guest->save();
	    } else {
		//only display 1 error at a time
		$message = $errors[0];
		$reply = false;
	    }
	} else {
	    //reactivate guest
	    $existing_g->setUpdateTimestamp($ts);
	    $existing_g->setActive(1);
	    $existing_g->save();
	}

	echo ( $reply ) ? '1^Guest Added' : '0^' . $message;
	die();

    }//addGuest()

    function removeGuest() {
	$g = Guest::retrieveByPk($_REQUEST['guest_id']);
	if ($g) {
	    $g->setUpdateTimestamp(strtotime('now'));
	    $g->setActive(0);
	    echo "active: " . $g->getActive();
	    $g->save();

	    $g = Guest::retrieveByPk($_REQUEST['guest_id']);
	    echo "active again: " . $g->getActive();
	    exit;
	}
	die();

    }//removeGuest()

    function finalizeRsvp() {
	$guest = Guest::retrieveByPk($_REQUEST['parent_guest_id']);
	$guest->updateGroupRsvpStatus($_REQUEST['is_attending'], $_REQUEST['guests'], 1);
	die();

    }//finalizeRsvp()

    function _getStepVars($step) {

	switch ($step) {

	    case 'step-1':
		$return = array(
		    'step_num' => $step,
		    'show_results' => true,
		    'title' => 'RSVP',
		    'message' => 'Enter your activation code.',
		    'active_view' => 'rsvp/index',
		    'active_form_view' => 'rsvp/' . $step
		);
		break;

	    case 'step-2':
		$guest = array_shift(Guest::getGuestFromActivationCode($_REQUEST['activation_code']));
		$return = array(
		    'active_record' => $guest,
		    'step_num' => $step,
		    'show_results' => true,
		    'title' => $guest->getFirstName() . ' ' . $guest->getLastName(),
		    'message' => 'The moment of truth...',
		    'active_view' => 'rsvp/index',
		    'active_form_view' => 'rsvp/' . $step
		);
		break;

	    case 'step-3-0':
		$guest = Guest::getGuestFromId($_REQUEST['guest_id']);
		$return = array(
		    'active_record' => $guest,
		    'step_num' => $step,
		    'show_results' => true,
		    'title' => $guest->getFirstName() . ' ' . $guest->getLastName(),
		    'message' => 'Don\'t worry, we won\'t take it personally.',
		    'active_view' => 'rsvp/index',
		    'active_form_view' => 'rsvp/' . $step
		);
		break;

	    case 'step-3-1':
		$guest = Guest::getGuestFromId($_REQUEST['guest_id']);
		$return = array(
		    'active_record' => $guest,
		    'step_num' => $step,
		    'show_results' => false,
		    'results_replacement' => 'rsvp/guest-form-add',
		    'absolute' => 'rsvp/guest-link-add',
		    'title' => $guest->getFirstName() . ' ' . $guest->getLastName(),
		    'message' => "Just a new more details...",
		    'active_view' => 'rsvp/index',
		    'active_form_view' => 'rsvp/' . $step
		);
		break;

	    case 'step-4':
		$guest = Guest::getGuestFromId($_REQUEST['guest_id']);
		$return = array(
		    'active_record' => $guest,
		    'step_num' => $step,
		    'show_results' => true,
		    'title' => $guest->getFirstName() . ' ' . $guest->getLastName(),
		    'message' => "Thank you for rsvping.",
		    'active_view' => 'rsvp/index',
		    'active_form_view' => 'rsvp/' . $step
		);
		break;
	}

	return $return;
    }//_getStepVars()

}//class RsvpController