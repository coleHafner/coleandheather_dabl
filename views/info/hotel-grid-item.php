<?php
$hotel = $params['active_record'];
$address_split = explode( "^", $hotel['address'] );
$address = $address_split[0] . '<br/>' . $address_split[1];
?>

<div class="color_tan_bg border_solid_grey" style="height:100%;margin:5px;">
	<div class="padder_10">
		<div>
			<div style="position:relative;width:70px;height:70px;overflow:hidden;float:left;margin-right:10px;">
				<img src="<?php echo site_url( '/images/' . $hotel['img'] ); ?>" />
			</div>
			<div style="position:relative;float:left;">
				<div class="header_text_sub color_black">
					<?php echo $hotel['name']; ?>
				</div>
				<a href="<?php echo $hotel['url']; ?>" target="_blank">
					<?php echo $hotel['url']; ?>
				</a>
			</div>
			<div class="clear"></div>
		</div>

		<div style="padding-bottom:5px;padding-top:5px;">
			<?php echo $address; ?>
		</div>

		<div style="padding:5px;padding-left:0px;">
			<?php echo $hotel['phone']; ?>
		</div>

	</div>
</div>