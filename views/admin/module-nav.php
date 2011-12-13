<div class="admin_menu_container rounded_corners padder bg_color_light_tan">

    <div class="bg_color_white center header padder rounded_corners color_orange">
	Admin Options
    </div>

    <div class="padder_15 padder_no_top padder_no_bottom">
	<ul class="main_nav_list">
<?php
foreach ($actions as $sub => $display) {
    $selected = '';
    $pointer = '';
    if($sub == $currentAction) {
	$selected = 'class="selected"';
	$pointer = '&nbsp;&gt;&gt;';
    }
?>
	    <li>
		<a <?php echo $selected;?> href="<?php echo site_url('admin/' . $sub); ?>">
		    <?php echo $display . $pointer; ?>
		</a>
	    </li>
<?php } ?>
    </ul>
</div>

</div>