<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
?>
<div class="padder_10">

	<div class="padder_10 header_text color_brown" style="padding-left:0px;">
		Historic Deepwood Estate
	</div>

	<div class="color_tan_bg padder_10 info_photo border_solid_grey" >
		<img src="/images/info_estate.jpg" />
	</div>

	<div class="info_paragraph default_line_height">
		Deepwood Estate is an 1894 Queen Anne Victorian Home situated on approximately 4 acres of manicured
		gardens and nature trails set in the heart of Salem near its downtown core. The home was placed on the National
		Register of Historic Homes in 1973.
	</div>

	<div class="clear"></div>

	<p class="default_line_height">
		Set beside an 1894 white Queen Anne Victorian home and Carriage House, the estate features several gardens
		connected by brick and gravel pathways bordered by charming wrought iron fencing and gates. Ivy covered arbor
		and gazebo provide unparrelled wedding backdrops for exquisite photographs. Tiny white lights illuminate the trees
		above your tables under candlelit glow.
	</p>

	<p class="default_line_height">
		The on-site gardens contain boxwood gardens, an English tea house garden, covered arches and gazebos, ornamental gates and
		fences as well at The Rita Steiner Nature Trail weaving its way through the western border of the property towards Bush Park.
		The design embodies a landscape made of a series of smaller gardens and paths, hidden places and open vistas. For more info see <a href="http://www.historicdeepwoodestate.org/" target="_blank">historicdeepwoodestate.org</a>.
	</p>

</div>

<?php } ?>