<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo ( !empty( $fb_xmls ) ) ? $fb_xmls : ''; ?>>

<head>

	<meta name="viewport" content="width=device-width; user-scalable=1;" ></meta>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" ></meta>
	<title><?php echo ucfirst( strtolower( $current_page ) ) . ' - ' . SITE_NAME; ?></title>

	<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/extensions/960_grid.css' ); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/extensions/jquery-ui-1.8.1.custom.css' ); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/extensions/imgbox.css' ); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/common.css' ); ?>" type="text/css" />

	<script type="text/javascript" src="<?php echo site_url( '/js/extensions/jquery-1.4.2.js' ); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url( '/js/extensions/jquery-ui-1.8.1.custom.min.js' ); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url( '/js/extensions/jquery.imgbox.js' ); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url( '/js/jquery.common.js' ); ?>"></script>
<!--	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->

<?php if($current_page == 'gallery') { ?>

	<link type="text/css" rel="stylesheet" href="<?php echo site_url('/css/gallery-style.css'); ?>" media="screen" />
	<link type="text/css" rel="stylesheet" href="<?php echo site_url('/js/shadowbox/shadowbox.css'); ?>" media="screen" />
	<script type="text/javascript" src="<?php echo site_url('/js/gallery-common.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo site_url('/js/shadowbox/shadowbox.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('/js/api_common.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('/js/api_google_picasa.js'); ?>"></script>

	<script type="text/javascript">
	    $(document).ready( function(){
		//if album id defined, load album
		loadPhotoGrid( "album", $('#pwa_album').val(), $('#pwa_username').val());
	    });
	</script>

<? } ?>

</script>


</head>