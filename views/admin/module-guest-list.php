<table class="guest_list font_med_II color_accent" style="width:100%;border-collapse:collapse;">
    <tr class="font_med bg_color_light_tan">
	<td class="padder" style="width:25%;">
	    Guest Name
	</td>
	<td class="padder" style="width:25%;">
	    Replied?
	</td>
        <td class="padder" style="width:25%;">
	    Activation Code
	</td>
	<td class="padder" style="width:25%;">
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
	//$bg_class = '';
	$is_attending = "-";
	$bg_class = ( $i % 2 ) ? 'class="bg_color_light_tan"' : '';
	$has_replied = (!is_null($g->getUpdateTimestamp()) ) ? "Yes" : "No";

	if ($has_replied == "Yes") {
	    $is_attending = ( $g->getIsAttending() ) ? "Yes" : "No";
	}
?>
    <tr <?php echo $bg_class; ?> id="guest-row-<?php echo $g->getGuestID(); ?>">
	<td class="padder">
	    <? echo $g->getLastName() . ', ' . $g->getFirstName(); ?>
	</td>
	<td class="padder">
	    <?php echo $has_replied; ?>
	</td>
        <td>
            <?php echo ($g->getActivationCode()) ? $g->getActivationCode() : '-'; ?>
        </td>
	<td class="padder">
	    <table class="guest_options">
		<tr>
		    <td>
	    <?php echo $is_attending; ?>
		    </td>
		    <td class="options">
			<a href="#" class="ui-icon ui-icon-close guest-record" type="guest" process="show-form" action="delete" pk="<?php echo $g->getGuestID(); ?>" style="float:right;margin-left:5px;">&nbsp;</a>
			<a href="#" class="ui-icon ui-icon-pencil guest-record" type="guest" process="show-form" action="edit" pk="<?php echo $g->getGuestID(); ?>" style="float:right;">&nbsp;</a>
		    </td>
		</tr>
	    </table>

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