<?php

class IndexController extends ApplicationController {

	function index() {
		$this['active_sub_nav'] = 'index';
		$this['active_view'] = 'index';
		$this['section_title'] = 'her-story';
	}//index()

	function hisStory() {
		$this['active_sub_nav'] = 'his-story';
		$this['active_view'] = 'his-story';
		$this['section_title'] = 'his-story';
	}//hisStory()

	function facts() {
		$this['active_sub_nav'] = 'facts';
		$this['active_view'] = 'facts';
		$this['facts'] = array(
			'In the winter of 2012, Heather hopes to pursue her masters degree in special education at Pacific University in Forest Grove, Ore.',
			'Heather\'s engagement ring is made of sapphires and diamonds, which are the same stones that are included in Cole\'s mom\'s engagement ring.',
			'Heather and Cole grew up less than 20 minutes from each other, but did not meet until they attended college.',
			'In her senior year of college, Heather was editor-in-chief of the university newspaper "The Siskiyou."',
			'Cole and Heather\'s dog, Luna, owns an extensive collection of bandanas, one for every occasion.',
			'Heather graduated from Southern Oregon University in 2008 with a degree in Communication.',
			'Cole graduated from Southern Oregon University in 2008 with a degree in Computer Science.',
			'In his junior year of college, Cole spent a week scuba diving in Utila, Honduras.',
			'Heather works as a special education teaching assistant in Medford, Ore.',
			'While attending SOU, Heather spent a month studying abroad in Greece.',
			'Both Heather and Cole are die hard fans of "The Office."',
			'Heather and Cole will be honeymooning in Cozumel, Mexico.',
			'Cole works as a web developer/designer in Ashland, Ore.',
			'Heather and Cole have a lab/pitbull mix named Luna.',
			'Heather and Cole have been together for since 2004.',
			'Both Cole and Heather are certified scuba divers.',
			'Cole and Heather both have facebook accounts.',
			'Heather\'s favorite flower is the sunflower.',
			'Heather attended grades K - 6 in Las Vegas.',
			'Cole is actually a robot.'
		);
	}//facts()

}//class IndexController