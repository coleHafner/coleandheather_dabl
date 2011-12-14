<div class="title_button_container">
  <?php load_view('widgets/button-round', $params['button']); ?>
</div>

<div id="guest_list_filter" class="margin_10_top padder_10 rounded_corners bg_color_light_tan">
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
		<?php load_view('widgets/button-form', $params['form-buttons']); ?>
	    </div>

	    <div class="clear"></div>
	</form>
    </div>
</div>

<div style="position:relative;margin:15px auto auto auto;width:100%;">
    <div class="padder" id="guest_list_container">
	<?php load_view('admin/module-guest-list', $params); ?>
    </div>
</div>