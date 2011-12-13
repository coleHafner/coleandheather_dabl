<?php

class PostsController extends ApplicationController {

    function index() {
	$this['fb_xmls'] = 'xmlns:fb="http://www.facebook.com/2008/fbml"';
	$this['active_view'] = 'posts/index';
    }//index()
    
}//class PostsController