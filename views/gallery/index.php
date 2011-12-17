<!--
<div id="target" style="position:relative;width:100%;">

</div>
-->

<?php
$min = 1;
$max = 11;
$maxRow = 5;
$excl = array();
$selected = array();

for($i = 1; $i <= $maxRow; $i++) {
    $container_class = ($i == 1) ? 'index_top' : 'index_middle';
    $container_class = ($i == $maxRow) ? 'index_bottom' : $container_class;

    $index1 = randPic($min, $max, $excl);
    $excl[] = $index1;

    $index2 = randPic($min, $max, $excl);
    $excl[] = $index2;
?>
<div class="<?php echo $container_class; ?>">
    <div class="index_canvas index_border">
	<div class="index_photo_left">
	    <img src="/images/home_<?php echo $index1;?>_small.jpg" />
	</div>
    </div>

    <div class="index_canvas">
	<div class="index_photo_right">
	    <img src="/images/home_<?php echo $index2;?>_small.jpg" />
	</div>
    </div>

    <div style="clear:both;"></div>
</div>
<?php
}

function randPic($min, $max, $exclusions) {
    for($i = $min; $i <= $max; $i++) {
	$chosen = rand($min, $max);
	if(!in_array($chosen, $exclusions)) {
	    return $chosen;
	}
    }
}
?>