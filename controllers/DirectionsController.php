<?php

class DirectionsController extends ApplicationController {

    function index() {
        $this->layout = 'layouts/minimal';
	$this['from'] = urldecode($_REQUEST['from']);
    }//index()

}//class DirectionsController