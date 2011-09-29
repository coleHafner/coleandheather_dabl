<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
?>
<div class="padder_10 header_text color_brown">
	Random Facts
</div>

<div class="padder_10 padder_no_top">
	Get to know Cole and Heather.
</div>

<div class="padder_10">
	<div class="padder_10 border_dashed_brown center header_text_sub color_black default_line_height" style="height:100px;margin-bottom:20px;">

<?php foreach( $facts as $i => $fact ) : ?>
		<span id="fact_<?php echo $i + 1; ?>" style="display:none;"><?php echo $fact;?></span>
<?php endforeach; ?>

		<input type="hidden" id="current_fact" value="0" />
		<input type="hidden" id="max_facts" value="<?php echo count( $facts ); ?>" />
	</div>
	<a href="#" class="button rounded_corners color_lime_bg center fact" process="new-fact" current_fact="0" style="margin:auto;width:200px;">
		<span class="header_text color_white">
			Get a Fact!
		</span>
	</a>
</div>
<?php } ?>