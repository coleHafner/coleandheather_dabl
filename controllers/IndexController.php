<?php

class IndexController extends ApplicationController {

    function index() {
	$this['active_sub_nav'] = 'index';
	$this['active_view'] = 'index';
	$this['section_title'] = 'her-story';
    }//index()

}//class IndexController