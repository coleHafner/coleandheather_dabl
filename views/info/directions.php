<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
?>

<div class="directions_canvas">
	<div class="padder_10 header_text_sub color_brown">
		Directions
		<div id="full_screen_link"></div>
	</div>

	<div class="padder_10 padder_no_top" id="directions_canvas">

	</div>
</div>

<div  class="map_canvas" id="map_canvas"> </div>

<div class="clear"></div>

<div class="info_map_controls color_white_bg border_solid_grey controls_visible" id="map_controls">

	<div class="padder_10_top">

		<div class="header_bar color_tan_bg border_solid_grey_top border_solid_grey_bottom" style="-moz-border-radius:0em;-webkit-border-radius:0em;height:px;">
			<div class="padder_10">

				<div class="header_text color_brown">
					Get Directions
				</div>

				<div class="color_sub padder_10 padder_5_left">
					Wondering how to actually get to the wedding?
				</div>

			</div>
		</div>

		<div class="results_div center" id="results_div">
		</div>

		<div class="padder_10 padder_no_top">

			<div class="info_address_container">
				<table class="info_address_table">
					<tr>
						<td colspan="2">
							<div class="padder_10 padder_no_bottom">
								<span class="text_input_tag color_black">
									Address:
								</span>
								<input id="address" type="text" class="text_input_short_height rounded_corners_small border_solid_grey text_input_all header_text_medium" />
							</div>
						</td>
					</tr>
					<tr>
						<td style="width:50%;">
							<div class="padder_10">
								<span class="text_input_tag color_black">
									City:
									<span class="color_red">*</span>
								</span>
								<input id="city" type="text" class="text_input_short_height rounded_corners_small border_solid_grey text_input_all header_text_medium" />
							</div>
						</td>
						<td style="width:50%;">
							<div class="padder_10">
								<span class="text_input_tag color_black">
									State:
									<span class="color_red">*</span>
								</span>
								<input id="state" type="text" class="text_input_short_height rounded_corners_small border_solid_grey text_input_all header_text_medium" />
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="padder_10_left color_red">
								* Required Field
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class="info_button_container">
				<a href="#" class="button rounded_corners color_brown_bg center info" process="show-map" style="margin:auto;">
					<span class="header_text color_white">
						Go!
					</span>
				</a>
			</div>

			<div class="clear"></div>
		</div>

		<div class="info_map_controls_tab border_solid_grey center color_lime_bg">
			<div style="padding-top:5px;">
				<a href="#" class="info" process="toggle-map-controls" id="map_tab_link" style="font-weight:bold;color:#000;">Hide</a>
			</div>
		</div>
	</div>
</div>
<?php } ?>