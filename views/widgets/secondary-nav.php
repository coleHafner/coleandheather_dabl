<ul class="side_bar_nav <?php echo ( isset( $extra_classes ) ) ? $extra_classes : ''; ?>">
<?php
foreach( $primary_nav[$current_page]['sub'] as $display => $link ) :
	$go_to = ( $link == "index" ) ? $current_page : $current_page . '/' . $link;
	$selected = ( $active_sub_nav == $link ) ? 'selected' : '';
?>
	<li class="<?php echo $selected; ?>">
		<a href="<?php echo site_url( $go_to ); ?>" class="color_brown <?php echo $selected; ?>" >
			<?php echo $display; ?>
		</a>
	</li>
<?php endforeach; ?>

</ul>
