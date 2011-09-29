<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
?>
<div class="padder_10 header_text color_brown">
	Hotels in the Area
</div>
<div class="padder_10_left padder_10_bottom">
	Coming from out of town? These are some great hotels in the Salem area.
</div>

<?php
load_view( 'widgets/super-grid', $params );
}
?>