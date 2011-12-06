<div class="color_tan_bg border_solid_tan" style="width:100%;">

	<div class="padder_10">
		<div class="header_text_sub color_sub">
			Add New Guest
		</div>

		<div class="results_div center" id="results_div"></div>

		<form id="guest_add_form">
			<div class="text_input_holder">
				<span class="text_input_tag color_black">
					First Name:
					<span class="color_red">*</span>
				</span>
				<input type="text" name="first_name" class="text_input rounded_corners_small border_solid_grey text_input_long  header_text_sub color_black" />
			</div>

			<div class="text_input_holder">
				<span class="text_input_tag color_black">
					Last Name:
					<span class="color_red">*</span>
				</span>
				<input type="text" name="last_name" class="text_input rounded_corners_small border_solid_grey text_input_long header_text_sub color_black" />
			</div>

			<input type="hidden" name="parent_guest_id" value="<?php echo $active_record->getGuestId();?>" />
			<input type="hidden" name="address_id" value="<?php echo $active_record->getParentAddressId(); ?>" />
			<input type="hidden" name="rsvp_through_site" value="1" />
			<input type="hidden" name="activation_code" value="0" />
			<input type="hidden" name="expected_count" value="0" />
			<input type="hidden" name="is_attending" value="1" />
			<input type="hidden" name="actual_count" value="0" />
		</form>

		<div class="guest_button_holder">
			<table>
				<tr>
					<td style="text-align:left;">
						<a href="#" class="rsvp button light_purple_bg center" process="add-guest" guest_id="<?php echo $active_record->getGuestId();?>" >
							<span class="header_text_sub color_white">
								Add Guest
							</span>
						</a>
					</td>
					<td style="width:10px;">
						&nbsp;
					</td>
					<td style="vertical-align:middle;text-align:left;">
						<a href="#" class="rsvp" process="hide-add-guest" guest_id="<?php echo $active_record->getGuestId();?>">
							Cancel
						</a>
					</td>
				</tr>
			</table>
		</div>

		<div class="guest_required_holder color_red center">
			* Required Field
		</div>

		<div class="clear"></div>
	</div>

</div>