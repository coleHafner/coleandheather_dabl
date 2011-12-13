<table class="rsvp_stats">
    <tr>
	<td>
	    <div class="rsvp_stat rounded_corners border_tan center bg_color_light_tan">
		<div class="padder">
		    <div class="bg_color_white center header padder rounded_corners color_orange">
			Attending
		    </div>
		    <div class="rsvp_num color_accent font_big">
			<?php echo $stats['attending']; ?>
		    </div>
		</div>
	    </div>
	</td>
	<td>
	    <div class="rsvp_stat rounded_corners border_tan center bg_color_light_tan">
		<div class="padder">
		    <div class="bg_color_white center header padder rounded_corners color_orange">
			Not Attending
		    </div>
		    <div class="rsvp_num color_accent font_big">
			<?php echo $stats['not_attending']; ?>
		    </div>
		</div>
	    </div>
	</td>
	<td>
	    <div class="rsvp_stat rounded_corners border_tan center bg_color_light_tan">
		<div class="padder">
		    <div class="bg_color_white center header padder rounded_corners color_orange">
			New Guests
		    </div>
		    <div class="rsvp_num color_accent font_big">
			<?php echo $stats['new']; ?>
		    </div>
		</div>
	    </div>
	</td>
	<td>
	    <div class="rsvp_stat rounded_corners border_tan center bg_color_light_tan">
		<div class="padder">
		    <div class="bg_color_white center header padder rounded_corners color_orange">
			% Replied
		    </div>
		    <div class="rsvp_num color_accent font_big">
			<?php echo substr($stats['replied'] / $stats['total'], 0, 4) * 100; ?>
		    </div>
		</div>
	    </div>
	</td>
    </tr>
</table>

<div style="position:relative;margin:15px auto auto auto;width:650px;">

    <div class="guest_list_container border_tan" style="margin-right:22px;">

	<div class="font_med padder bg_color_light_tan">
	    Not Attending
	</div>

	<div class="padder">
	    <table class="guest_list font_med_II color_accent">

<?php foreach ($lists['not_attending'] as $i => $g) { ?>
		<tr>
		    <td>
			<?php echo $g->getLastName() . ', ' . $g->getFirstName(); ?>
		    </td>
		</tr>
<?php }//end foreach ?>

	    </table>
	</div>
    </div>

    <div class="guest_list_container border_tan" style="margin-right:22px;">

	<div class="font_med padder bg_color_light_tan">
	    Attending
	</div>

	<div class="padder">
	    <table class="guest_list font_med_II color_accent">

<?php foreach ($lists['attending'] as $i => $g) { ?>
		<tr>
		    <td>
			<?php echo $g->getLastName() . ', ' . $g->getFirstName(); ?>
		    </td>
		</tr>
<?php } ?>
	    </table>
	</div>
    </div>

    <div class="guest_list_container border_tan">

	<div class="font_med padder bg_color_light_tan">
	    New
	</div>

	<div class="padder">
	    <table class="guest_list font_med_II color_accent">
<?php foreach ($lists['new'] as $i => $g) { ?>
		<tr>
		    <td>
			<?php echo $g->getLastName() . ', ' . $g->getFirstName(); ?>
		    </td>
		</tr>
<?php } ?>
	    </table>
	</div>
    </div>

    <div class="guest_list_container border_tan" style="margin-top:20px;">

	<div class="font_med padder bg_color_light_tan">
	    Most Recent
	</div>

	<div class="padder">
	    <table class="guest_list font_med_II color_accent">
<?php
foreach ($lists['recent'] as $i => $g) {
    $attending = ( $g->getIsAttending()) ? "Y" : "N";
?>
		<tr>
		    <td>
			<?php echo $g->getLastName() . ', ' . $g->getFirstName() . ' (' . $attending . ')'; ?>
		    </td>
		</tr>
<?php } ?>
	    </table>
	</div>
    </div>

    <div class="clear"></div>
</div>