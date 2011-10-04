<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo ( !empty( $fb_xmls ) ) ? $fb_xmls : ''; ?>>

	<?php load_view( 'layouts/head', $params ); ?>

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