<?php load_view('layouts/head', $params); ?>

<body>

    <?php if ($current_page == 'gallery') { ?>
        <!-- php vars -->
        <input type="hidden" id="root_url" value="<?php site_url(); ?>" />
        <input type="hidden" id="pwa_username" value="<?php echo PICASA_USER; ?>" />
        <input type="hidden" id="pwa_album" value="<?php echo PICASA_ALBUM; ?>" />

        <input type="hidden" id="max_pagesets" value="0" />
        <input type="hidden" id="cur_pageset" value="0" />
        <!-- end php vars -->
    <?php } ?>


    <!--page-->
    <div class="page">

	<!--header-->
	<div class="canvas_spacer">

	    <div class="container_12">
		<div class="grid_12">


		    <div class="logo">
			<img src="/images/header_img1.png" />
		    </div>

		    <div class="nav">
			<table class="nav_table">
			    <tr>
				<?php
				$navs = array(
				    'index' => 'Details',
				    'gallery' => 'Gallery',
				    'rsvp' => 'Rsvp',
				    'posts' => 'Message Us',
				);

				foreach ($navs as $link => $display) {
				    $class = ($current_page == $link) ? 'class="active"' : '';
				    echo '
									<td><a href="' . site_url('/' . $link) . '" ' . $class . '>' . $display . '</a></td>';
				}
				?>
			    </tr>
			</table>
		    </div>
		</div>
		<div class="clear"></div>
	    </div>

	</div>
	<!--/header-->

	<!--canvas container-->
	<div class="canvas_container">

	    <!--canvas-->
	    <div class="canvas">
		<div class="content_outer">
		    <div style="content_inner" id="content">
			<?php echo $content; ?>
		    </div>
		</div>


		<div class="corner corner_ne">
		    <img src="/images/photo_corner_ne.png" />
		</div>

		<div class="corner corner_nw">
		    <img src="/images/photo_corner_nw.png" />
		</div>

		<div class="corner corner_sw">
		    <img src="/images/photo_corner_sw.png" />
		</div>

		<div class="corner corner_se">
		    <img src="/images/photo_corner_se.png" />
		</div>

	    </div>
	    <!--/canvas-->

	    <div class="feather_ne">
		<img src="/images/feather.png" />
	    </div>

	    <!--
	    <div class="feather_nw">
		    <img src="/images/feather_nw.png" />
	    </div>
	    -->

	</div>
	<!--/canvas container-->

	<!--spacer-->
	<div class="canvas_spacer_bottom footer color_white">
	    &copy; 2011 <a href="http://colehafner.com" target="_blank">Cole Hafner</a>
	    <span class="green_nav bold">&nbsp;|&nbsp;</span>
	    Powered by <a href="https://github.com/ManifestWebDesign/DABL" target="blank">Dabl</a>
	</div>
	<!--/spacer-->



    </div>
    <!--/page-->
</body>
</html>
