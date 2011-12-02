<?php
$badge = null;

//grab badge html
if( isset( $active_record ) && is_object( $active_record ) ) {

	$badgeworthy_steps = array( "step-2", "step-3-0", "step-3-1", "step-4" );

	if( in_array( trim( strtolower( $step_num ) ), $badgeworthy_steps ) ) {
		if( $active_record->guestHasSpecialType() ) {
			$gt = $active_record->getBadgeType();
			$badge = true;
		}
	}
}
?>

<div id="rsvp_container">
	<div style="position:relative;width:100%;height:50px;">&nbsp;</div>

	<div class="rsvp_activation_form border_solid_grey" style="background-color:#fff;">
		<div class="header_bar color_tan_bg" id="rsvp_header_bar">
			<div class="padder_10">
				<div class="header_text grey">
					<?php echo $title; ?>
				</div>
	
				<div class="color_sub padder_10 padder_5_left">
					<?php echo $message; ?>
				</div>
			</div>
		</div>
	
	<? if( isset( $show_results ) && $show_results == 1 ) { ?>
	
		<div class="results_div center" id="results_div"></div>
	
	<?php } else { ?>
	
		<div class="padder_10_top">
	
			<div class="padder_10" id="rsvp_form" style="display:none;">
				<?php if( isset( $results_replacement ) ) { load_view( $results_replacement, $params ); }  ?>
			</div>
		</div>
	<?php } ?>
	
		<div id="rsvp_inner">
			<?php load_view( $active_form_view, $params ); ?>
		</div>
	
	<?php if( isset( $absolute ) ) { load_view( $absolute, $params ); }//absolute ?>
	
	<?php if( $badge ) { ?>
			<div class="rsvp_badge">
				<div class="rsvp_badge_title color_white center">
					<table>
						<tr>
							<td style="vertical-align:middle;">
								<?php echo $gt->getTitle(); ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
	<?php } ?>
	
	</div>
</div>