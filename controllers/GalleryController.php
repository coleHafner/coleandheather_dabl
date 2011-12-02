<?php

class GalleryController extends ApplicationController {

	function index() {
		/*
		//zend framework has some deprecated functions, will need to silence errors temporarily
		ini_set( 'display_errors', false );
		$pa = new PicasaAlbum( "colehafner" );
		$album_feed = $pa->getAlbum( "title", "coleandheatherdotcom" );
		$pics = $pa->getAlbumSummary( $album_feed, array( 'thumb_key' => "2" ) );
		ini_set( 'display_errors', true );

		$this['active_view'] = 'gallery/index';
		$this['grid_options']  = array(
			'records' => $pics,
			'records_per_row' => 3,
			'grid_item_view' => 'gallery/pic-grid-item',
			'extra_classes' => 'class="gallery_pic_grid"',
			'empty_message' => "There are 0 pictures. Please check back later."
		);
		*/
		//this is handled by ajax

	}//index()

}//class GalleryController