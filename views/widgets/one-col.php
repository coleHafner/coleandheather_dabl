<? $ids = array( 'rsvp' => 'rsvp_container', 'posts' => 'postwall_container', 'gallery' => 'gallery_container' ); ?>

<div class="grid_10">
	<div class="content" id="<?php echo $ids[$current_page]; ?>">
		<div class="padder_10">
			<?php $params['skip_template'] = true; load_view( $active_view, $params ); ?>
		</div>
	</div>

<?php if( $current_page == 'rsvp' ) : ?>
	<div style="position:absolute;top:10px;right:10px;font-size:12px;">
		Having trouble with your RSVP? <a href="mailto:colehafner@gmail.com?subject=RSVP Trouble - coleandheather.com">Get help.</a>
	</div>
<?php endif; ?>
</div>