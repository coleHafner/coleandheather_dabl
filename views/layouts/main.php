<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo ( !empty( $fb_xmls ) ) ? $fb_xmls : ''; ?>>

	<?php load_view( 'layouts/head', $params ); ?>

	<body>
		<!--page-->
		<div class="page">
		
			<!--header-->
			<div class="canvas_spacer">
			
				<div class="container_12">
					<div class="grid_12">
						<div class="nav">
							<table class="nav_table">
								<tr>
<?php
$navs = array(
	'index' => 'Details',
	'gallery' => 'Gallery',
	'rsvp' => 'Rsvp',
	'posts' => 'Message Us',
);

foreach($navs as $link => $display) {
	$class = ($current_page == $link) ? 'class="active"' : '';
	echo '
									<td><a href="' . site_url( '/' . $link) . '" ' . $class . '>' . $display . '</a></td>';
}
?>
								</tr>
							</table>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="logo">
					<img src="/images/header_img1.png" />
				</div>

			</div>
			<!--/header-->
			
			<!--canvas container-->
			<div class="canvas_container">
			
				<!--canvas-->
				<div class="canvas">
					<div class="content_outer">
						<div style="content_inner">
							<?php echo $content;?>
						</div>
					</div>
					
					
					<div class="corner corner_ne">
						<img src="/images/photo_corner_ne.png" />
					</div>
					
					<div class="corner corner_nw">
						<img src="/images/photo_corner_nw.png" />
					</div>
					
					<div class="corner corner_sw">
						<img src="/images/photo_corner_sw.png" />
					</div>
					
					<div class="corner corner_se">
						<img src="/images/photo_corner_se.png" />
					</div>
					
				</div>
				<!--/canvas-->
				
				<div class="feather_ne">
					<img src="/images/feather.png" />
				</div>
				
				<!--
				<div class="feather_nw">
					<img src="/images/feather_nw.png" />
				</div>
				-->

			</div>
			<!--/canvas container-->
			
			<!--footer-->
			<div class="canvas_spacer_bottom">
				&nbsp;
			</div>
			<!--/footer-->
						
		</div>
		<!--/page-->
	</body>
</html>