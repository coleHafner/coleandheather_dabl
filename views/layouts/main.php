<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo ( !empty( $fb_xmls ) ) ? $fb_xmls : ''; ?>>

	<head>

		<meta name="viewport" content="width=device-width; user-scalable=1;" ></meta>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" ></meta>
		<title><?php echo $current_page . ' - ' . SITE_NAME; ?></title>

		<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/extensions/960_grid.css' ); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/extensions/jquery-ui-1.8.1.custom.css' ); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/extensions/imgbox.css' ); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo site_url( '/css/themes/cah/common.css' ); ?>" type="text/css" />

		<script type="text/javascript" src="<?php echo site_url( '/js/extensions/jquery-1.4.2.js' ); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url( '/js/extensions/jquery-ui-1.8.1.custom.min.js' ); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url( '/js/extensions/jquery.imgbox.js' ); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url( '/js/jquery.common.js' ); ?>"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!--[if lt IE 7 ]> <script type="text/javascript" src="' . $file_paths['js'] . '/jquery.ie6.js"></script><![endif]-->

	</head>

	<body>
		<!--page-->
		<div class="page">

			<!--header-->
			<div class="container_12">
				<div class="grid_1">
					&nbsp;
				</div>

				<div class="grid_10">
					<div class="header header<?php echo rand( 1, 4 ); ?>">
						<div style="position:absolute;bottom:10px;left:20px;">
							<img src="<?php echo site_url( '/images/logo_small.gif' ); ?>" />
						</div>
					</div>
				</div>

				<div class="grid_1">
					&nbsp;
				</div>

				<div class="clear"></div>
			</div>
			<!--/header-->

			<!--primary nav-->
			<div class="container_12">

				<div class="grid_1">
					&nbsp;
				</div>

				<div class="grid_10">
					<div class="primary_nav color_cyan_bg">
						<?php load_view( 'widgets/primary-nav', $params ); ?>
						<div style="position:absolute;top:0px;left:-14px;">
							<img src="<?php echo site_url( '/images/ribbon_end_left2.gif' ); ?>"/>
						</div>
						<div style="position:absolute;top:0px;right:-14px;">
							<img src="<?php echo site_url( '/images/ribbon_end_right2.gif' ); ?>"/>
						</div>
					</div>
				</div>

				<div class="grid_1">
					&nbsp;
				</div>

				<div class="clear"></div>
			</div>
			<!--/primary nav-->

			<!--content-->
			<div class="container_12">
				<div class="grid_1">
					&nbsp;
				</div>
				<?php echo $content ?>
				<div class="grid_1">
					&nbsp;
				</div>

				<div class="clear"></div>

			</div>
			<!--/content-->

			<!--footer-->
			<div class="container_12">
				<div class="grid_1">
					&nbsp;
				</div>

				<div class="grid_10">
					<div class="footer">
						<?php echo strtoupper( '&copy;Cole and Heather 2011 <span style="color:#00FFFF;font-weight:bold;">|</span> Lovingly handcrafted by <a href="http://colehafner.com" target="_blank">Cole</a>' ) ?>
					</div>
				</div>

				<div class="grid_1">
					&nbsp;
				</div>
				<div class="clear"></div>
			</div>
			<!--/footer-->

		</div>
		<!--/page-->
	</body>
</html>