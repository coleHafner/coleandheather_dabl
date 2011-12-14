<table class="guest_list font_med_II color_accent" style="width:100%;border-collapse:collapse;">
    <tr class="font_med bg_color_light_tan">
	<td class="padder" style="width:33%;">
	    Guest Name
	</td>
	<td class="padder" style="width:33%;">
	    Replied?
	</td>
	<td class="padder" style="width:33%;">
	    Attending?
	    <div class="font_normal bg_color_white color_accent" style="postion:relative;float:right;">
		<div class="padder">
		    <?php echo count($guests); ?> Guests
		</div>
	    </div>
	</td>
    </tr>

<?php
if (is_array($guests) && count($guests) > 0) {
    foreach ($guests as $i => $g) {
	$is_attending = "-";
	$bg_class = ( $i % 2 ) ? 'class="bg_color_light_tan"' : '';
	$has_replied = (!is_null($g->getUpdateTimestamp()) ) ? "Yes" : "No";

	if ($has_replied == "Yes") {
	    $is_attending = ( $g->getIsAttending() ) ? "Yes" : "No";
	}
?>
    <tr <?php echo $bg_class; ?>>
	<td class="padder">
	    <? echo $g->getLastName() . ', ' . $g->getFirstName(); ?>
	</td>
	<td class="padder">
	    <?php echo $has_replied; ?>
	</td>
	<td class="padder">
	    <?php echo $is_attending; ?>
	</td>
    </tr>

<?php
    }//end foreach
}else {
?>
    <tr>
	<td colspan="3" style="text-align:center;">
	    <br/><br/>
	    There are 0 guests that match your criteria.
	</td>
    </tr>

<?php } ?>

</table>