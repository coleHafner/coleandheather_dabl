<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
?>

<div class="padder_10">

	<div class="padder_10 header_text color_brown">
		Wedding Gift Registries
	</div>

	<div class="padder_10">
		Click on the images below to see our registry.
	</div>

	<div class="info_registry_holder center">
		<a href="http://www.target.com/registry/wedding/AQK2WP8P579K" target="_blank">
			<img src="/images/logo_target.jpg" />
		</a>
	</div>

	<div class="info_registry_holder_lower center">
		<a href="http://www.amazon.com/gp/registry/registry.html?ie=UTF8&type=wedding&id=32ZSD3JJK7QW1" target="_blank">
			<img src="/images/logo_amazon.jpg" />
		</a>
	</div>

	<div class="center header_text color_brown">
		<div class="padder_10 padder_no_bottom">
			OR
		</div>
	</div>

	<div style="position:relative;margin-top:20px;">&nbsp;</div>

	<div class="color_tan_bg border_solid_grey">
		<div class="padder_10">
			<table style="position:relative;width:100%;">
				<tr>
					<td style="width:70%;" class="center default_line_height" valign="middle">
						Don\'t like buying presents?
						<br/>
						Weddings are expensive. Help us out with a donation.
					</td>
					<td style="width:30%;" class="center">

						<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" alt="PayPal - The safer, easier way to pay online!" onClick="document.getElementById( 'paypal_form' ).submit();"/>

						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="paypal_form">
							<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest" />
							<input type="hidden" name="business" value="colehafner@gmail.com" />
							<input type="hidden" name="item_name" value="Cole and Heather\'s Wedding" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="cmd" value="_donations" />
							<input type="hidden" name="no_note" value="0" />
							<input type="hidden" name="lc" value="US" />
						</form>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php } ?>