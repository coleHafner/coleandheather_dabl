
<div class="grid_10">

	 <div class="content" id="info_content">

		 <div class="side_bar">
			<div class="side_bar_inner">
				<div class="padder_10_top">
					<?php load_view( 'widgets/secondary-nav', $params ); ?>
				</div>
			</div>
		</div>

		<div class="main_bar" <?php echo ( $active_view == "info/hotels" ) ? 'id="info_hotels"' : ''; ?>>
			<div class="main_bar_inner">
				<div class="info_inner">
					<?php $params['skip_template'] = true; load_view( $active_view, $params ); ?>
				</div>
			</div>
		</div>

		<div class="clear"></div>
	</div>
</div>
