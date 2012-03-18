<?php

class DirectionsController extends ApplicationController {

    function index() {
        
        $this->layout = 'layouts/minimal';
	$this['from'] = (!empty($_REQUEST['from'])) ? urldecode($_REQUEST['from']) : '';
        $this['address'] = (!empty($_REQUEST['address'])) ? urldecode($_REQUEST['address']) : '';
        $this['city'] = (!empty($_REQUEST['city'])) ? urldecode($_REQUEST['city']) : '';
        $this['state'] = (!empty($_REQUEST['state'])) ? urldecode($_REQUEST['state']) : '';

    }//index()

}//class DirectionsController