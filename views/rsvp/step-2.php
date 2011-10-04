<div class="padder_10 center" style="padding-top:0px;">
	<span class="header_text color_black">
		Will you be attending?
	</span>
</div>

<div class="rsvp_inner">
	<div class="padder_10">
		<table style="position:relative;margin:auto;">
			<tr>
				<td>
					<a href="#" class="rsvp button rounded_corners color_lime_bg center" process="update-rsvp" guest_id="<? echo $active_record->getGuestId(); ?>" value="1">
						<span class="header_text color_white">
							Yes
						</span>
					</a>
				</td>
				<td>
					<div class="padder_10">&nbsp;</div>
				</td>
				<td>

					<a href="#" class="rsvp button rounded_corners color_red_bg center" process="update-rsvp" guest_id="<?php echo $active_record->getGuestId(); ?>" value="0">
						<span class="header_text color_white">
							No
						</span>
					</a>
				</td>
			</tr>
		</table>
	</div>

</div>