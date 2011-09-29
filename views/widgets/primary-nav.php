<table class="primary_nav_table">
	<tr>
<?php
foreach( $primary_nav as $link => $info ) :
	$selected = ( strtolower( $link ) == strtolower( $current_page ) ) ? 'class="selected"' : '';
?>
		<td <?php echo $selected; ?>>
			<a href="<?php echo site_url( $link ) . '"'; ?>>
				<?php echo $info['display']; ?>
			</a>
		</td>
<?php endforeach ?>

	</tr>
</table>