<?php

class InfoController extends ApplicationController {

	function index() {
		$this['active_sub_nav'] = 'index';
		$this['active_view'] = 'info/index';
	}//index()

	function registries() {
		$this['active_sub_nav'] = 'registries';
		$this['active_view'] = 'info/registries';
	}//registries()

	function venue() {
		$this['active_sub_nav'] = 'venue';
		$this['active_view'] = 'info/venue';
	}//venue()

	function directions() {
		$this['active_sub_nav'] = 'directions';
		$this['active_view'] = 'info/directions';
	}//directions()

	function hotels() {
		$this['active_sub_nav'] = 'hotels';
		$this['active_view'] = 'info/hotels';

		$hotels = array(
			1 => array(
				'name' => 'Ramada Inn',
				'img' => 'hotels_ramadaInn.jpeg',
				'phone' => '(800) 311-5174',
				'address' => '200 Commercial Street Southeast^Salem, OR',
				'url' => 'http://ramada.com' ),

			2 => array(
				'name' => 'Shilo Inn',
				'img' => 'hotels_shiloInn.jpg',
				'phone' => '(503) 581-4001',
				'address' => '3304 Market Street Northeast^Salem, OR',
				'url' => 'http://shiloinns.com' ),

			3 => array(
				'name' => 'Super 8 Hotel',
				'img' => 'hotels_super8.jpeg',
				'phone' => '(503) 370-8888',
				'address' => '1288 Hawthorne Avenue Northeast^Salem, OR',
				'url' => 'http://super8.com' ),

			4 => array(
				'name' => 'Red Lion Inn',
				'img' => 'hotels_redLion.jpg',
				'phone' => '(503) 370-7888',
				'address' => '3301 Market Street NE^Salem, OR',
				'url' => 'http://redlion.rdln.com' ),

			5 => array(
				'name'=> 'Residence Inn',
				'img' => 'hotels_residenceInn.jpg',
				'phone' => '(503) 585-6500',
				'address' => '640 Hawthorne Avenue SE^Salem, OR',
				'url' => 'http://marriott.com' ),

			6 => array(
				'name' => 'Travel Lodge Inn',
				'img' => 'hotels_travelLodge.jpeg',
				'phone' => '(503) 581-2466',
				'address' => '1555 State Street^Salem, OR',
				'url' => 'http://travellodge.com' )
		);

		$this['grid_options'] = array(
			'records' => $hotels,
			'is_static' => FALSE,
			'records_per_row' => 2,
			'grid_item_view' => 'info/hotel-grid-item',
			'extra_classes' => 'class="hotel_grid"',
			'empty_message' => "There are 0 hotels. Please check back later."
		);

	}//hotels()

}//class InfoController