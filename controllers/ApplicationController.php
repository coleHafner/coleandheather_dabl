<?php

abstract class ApplicationController extends BaseController {

	function __construct() {

		$this['title'] = 'Site Title';

		$this['actions'] = array(
			'Home' => site_url()
		);

		$current_controller = str_replace('Controller', '', get_class($this));
		$this['current_page'] = strtolower( $current_controller );

		$this['primary_nav'] = array(
			'index' => array(
				'display' => 'Our Story',
				'sub' => array( 'Her Story' => 'index', 'His Story' => 'his-story', 'Did you know?' => 'facts' )
			),

			'rsvp' => array(
				'display' => 'RSVP',
				'sub' => null
			),

			'gallery' =>  array(
				'display' => 'Gallery',
				'sub' => null
			),

			'posts' => array(
				'display' => 'Write Us',
				'sub' => null
			),

			'info' => array(
				'display' => 'Wedding Info',
				'sub' => array( 'Wedding Info' => 'index', 'Gift Registries' => 'registries',
					'Event Venue' => 'venue', 'Get Directions' => 'directions', 'Area Hotels' => 'hotels' )
			)
		);
	}

	public function doAction($action_name = null, $params = array()) {
		if($this->outputFormat != 'html') {
			unset($this['title'], $this['current_page'], $this['actions']);
		}

		return parent::doAction($action_name, $params);
	}

}