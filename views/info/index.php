<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
?>

<div class="padder_10 header_text color_brown">
	Wedding Info
</div>

<div class="padder_10">

	<span style="font-weight:bold;">Date</span><br>
	Sunday July 17, 2011<br><br>

	<span style="font-weight:bold;">Time</span><br>
	4 - 8:30PM<br><br>

	<span style="font-weight:bold;">Venue Info</span><br>
	1116 Mission Street Southeast<br>
	Salem, OR 97302-6207<br>
	(503) 363-1825<br><br>

	<span style="font-weight:bold;">Colors:</span> Navy Blue and Yellow<br>
	<span style="font-weight:bold;">Free Beer and Wine:</span> Check<br>
	<span style="font-weight:bold;">Flowers:</span> Sunflower<br>
	<span style="font-weight:bold;">Bride:</span> Beautiful<br>
	<span style="font-weight:bold;">Groom:</span> Lucky
</div>

<?php } ?>