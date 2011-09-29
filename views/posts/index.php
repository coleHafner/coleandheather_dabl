<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/one-col', $params );
} else {
?>


<div class="header_text color_brown padder_10 padder_no_left">
	Leave us a comment
</div>

<div class="color_tan_bg border_solid_grey">
	<div style="position:relative;padding:10px 0px 10px 25px;">
		<div id="fb-root">
		</div>

		<script src="http://connect.facebook.net/en_US/all.js#appId=194461467240936&amp;xfbml=1"></script>
		<fb:comments xid="194461467240936" numposts="10" width="730" publish_feed="true"></fb:comments>
	</div>
</div>

<?php } ?>