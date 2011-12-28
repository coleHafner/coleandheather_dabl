<div class="padder_10_top">
    <form id="guest-edit-form-<?php echo ($activeRecord->isNew()) ? 0 : $activeRecord->getGuestId(); ?>" >
	<table >
	    <tr>
		<td style="text-align:right;">
		    First Name:
		</td>
		<td>
		    <input type="text" name="first_name" class="text_input" value="<?php echo $activeRecord->getFirstName(); ?>"/>
		</td>
	    </tr>
	    <tr>
		<td style="text-align:right;">
		    Last Name:
		</td>
		<td>
		    <input type="text" name="last_name" class="text_input" value="<?php echo $activeRecord->getLastName(); ?>"/>
		</td>
	    </tr>
<?php if($activeRecord->isNew()) { ?>
	    <tr><td>&nbsp;</td></tr>
	    <tr>
		<td style="text-align:right;vertical-align:top;">
		    Parent Guest:
		</td>
		<td>
		    <select name="parent_guest_id">
			<option value="0">No Parent Guest</option>

    <?php foreach(Guest::getAllParents() as $g) { ?>
			<option value="<?php echo $g->getGuestId(); ?>">
			    <?php echo $g->getLastName() . ', ' . $g->getFirstName(); ?>
			</option>
    <?php }//end foreach ?>

		    </select>
		</td>
	    </tr>

	    <tr>
		<td style="text-align:right;vertical-align:top;">
		    Guest Type:
		</td>
		<td>
		    <?php load_view('admin/guest-type-options', $params); ?> <a href="#" class="guest-record" type="guest" process="null" action="add-type" pk="0">+</a>
		    <div id="additional-guest-types"></div>
		</td>
	    </tr>
<?php } ?>
	    <tr><td>&nbsp;</td></tr>
	    <tr>
		<td style="text-align:right;">
		    <input type="checkbox" name="is_attending" <?php echo ($activeRecord->getIsAttending()) ? 'checked="checked"' : ''; ?> />
		</td>
		<td>
		    Attending
		</td>
	    </tr>
	</table>
    </form>
</div>