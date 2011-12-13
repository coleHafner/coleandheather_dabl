<?php load_view( 'layouts/headAdmin', $params ); ?>

<body class="font_normal bg_color_white">

    <!--nav section-->
    <div class="nav_section bg_color_tan">

	<!--nav container-->
	<div class="container_12 nav_container">

	    <!--nav-->
	    <div class="grid_12">

		<div class="padder_10">

		    <div class="logo_container rounded_corners bg_color_tan center border_color_accent">
			    <img src="/images/logo_halfnerd.png"/>
		    </div>

		    <div class="logo_words_container header_mega color_accent">
			    Halfnerd <span class="color_orange">CMS</span>
		    </div>
		</div>

	    </div>
	    <!--/nav-->

	</div>
	<!--/nav container-->

    </div>
    <!--/nav section-->

    <!--main content section-->
    <div class="main_section">

	    <!--main content container-->
	    <div class="container_12">
<?php $isLoggedIn = true; if($isLoggedIn) { ?>
		<div class="grid_3">
		    <div class="go_to_site_link">
			    <a href="<?php echo site_url(); ?>">
				    &lt;&lt; Go To Site
			    </a>
		    </div>
		    <?php load_view('admin/module-nav', $params); ?>
		</div>

		<div class="grid_9">
		    <div class="title_bar header center padder_15 bg_gradient_linear color_orange">
			    <?php echo (isset($title)) ? $title : ''; ?>
			    <?php echo (isset($titleButton)) ? $titleButton : ''; ?>
		    </div>
		    <?php echo $content; ?>
		</div>
<?php }else {
    $params['selected-button-key'] = 'login-button';
     load_view('admin/module-login', $params);
} ?>
 		<div class="clear"></div>
	    </div>
	    <!--/main content container-->

    </div>
    <!--/main content section-->

    <div class="footer_section bg_color_tan">

	<div class="container_12">

	    <div class="grid_12">
		<div class="padder_10 center font_small">
		    &copy; [Year] Client Name
		    <span style="color:#FF0000;">|</span>
		    Designed by HalfNerd
		    <span style="color:#FF0000;">|</span>
		    <a href="' . $this->m_common->makeLink( array( 'v' => "admin" ) ) . '">CMS Login</a>
		</div>
	    </div>

	    <div class="clear"></div>

	</div>
    </div>

    <iframe class="input text_input" style="height:200px;width:600px;margin:20px auto 20px auto;display:none;" id="hidden_frame" name="hidden_frame" ></iframe>

</body>
</html>