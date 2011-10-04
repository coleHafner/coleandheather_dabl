<div class="padder_10 padder_no_top">
	<form id="rsvp_final_step">
		<ul class="rsvp_guest_list">
			<?php load_view( 'rsvp/guest-list-item', $params ); ?>
<?php
foreach( $active_record->getChildren() as $i => $sub_g ) {
	load_view( 'rsvp/guest-list-item', array( 'active_record' => $sub_g ) );
}
?>
		</ul>

		<input type="hidden" name="parent_guest_id" value="<?php echo $active_record->getGuestId(); ?>" />
		<input type="hidden" name="is_attending" value="<?php echo $active_record->getIsAttending(); ?>" />

	</form>
</div>

<div class="rsvp_inner">
	<div class="padder_10">
		<a href="#" class="rsvp button rounded_corners color_lime_bg center" process="finalize-rsvp" guest_id="<?php echo $active_record->getGuestId(); ?>" >
			<span class="header_text color_white">
				RSVP
			</span>
		</a>
	</div>
</div>