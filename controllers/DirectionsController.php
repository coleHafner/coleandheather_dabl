<?php

class DirectionsController extends ApplicationController {

	function index() {
		$start = str_replace( '_', ' ', $_REQUEST['start'] );
		$this['on_load'] = "mapShowRoute( '" . $start . "' )";
		$this->layout = 'layouts/full_screen';
	}//index()

}//class GalleryController