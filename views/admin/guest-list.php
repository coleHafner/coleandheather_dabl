<div class="title_button_container">
  <?php load_view('widgets/button-round', $params); ?>
</div>

<div id="guest_list_filter" class="margin_10_top padder_10 rounded_corners bg_color_light_tan" style="display:none;">
    <span class="title_span header color_accent">
	Filter Guest List
    </span>
    <div class="padder_10_top">
	<form id="guest_list_form">
	    <div style="position:relative;width:35%;float:left;">
		<span class="title_span">
		    Guest Type:
		</span>

		<div class="padder" style="padding-left:0px;">
		    <select name="guest_type_id">
			<option value="0">
			    All Guest Types
			</option>

<?php foreach ($guestTypes as $gt) { ?>
			<option value="<?php echo $gt->getGuestTypeID(); ?>">
				<?php echo $gt->getTitle(); ?>
			</option>
<?php }//end foreach ?>

		    </select>
		</div>
	    </div>

	    <div style="position:relative;width:35%;float:left;">
		<span class="title_span">
		    Has Replied:
		</span>
		<div class="padder" style="padding-left:0px;">
		    <input type="radio" name="has_replied" value="yes" />&nbsp;Yes
		    &nbsp;&nbsp;
		    <input type="radio" name="has_replied" value="no" />&nbsp;No
		    &nbsp;&nbsp;
		    <input type="radio" name="has_replied" value="-" checked="checked" />&nbsp;Doesn't Matter
		</div>
	    </div>

	    <div style="position:relative;width:30%;float:left;">
		' . Common::getHtml( "get-form-buttons", array(
		'left' => array(
		'pk_name' => "guest_list_id",
		'pk_value' => 0,
		'process' => "apply_filter",
		'id' => "guest_list",
		'button_value' => "Filter",
		'extra_style' => 'style="width:41px;"' ),

		'right' => array(
		'pk_name' => "guest_list_id",
		'pk_value' => 0,
		'process' => "cancel_filter",
		'id' => "guest_list",
		'button_value' => "Cancel",
		'extra_style' => 'style="width:41px;"' ),

		'table_style' => 'style="margin-top:18px;margin-left:15px;"'

		)
		) . '
	    </div>

	    <div class="clear"></div>
	</form>
    </div>
</div>

<div style="position:relative;margin:15px auto auto auto;width:100%;">

    <div class="padder" id="guest_list_container">
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
    </div>
</div>