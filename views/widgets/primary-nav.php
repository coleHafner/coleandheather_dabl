<table class="primary_nav_table">
	<tr>
<?php
print_r( $storage );exit;
foreach( $views as $i => $view )  :
	$link_style = ( strlen( $view->m_external_link ) > 0 ) ? 'target="_blank"' : "";
	$selected = ( strtolower( $view->m_controller_name ) == strtolower( $this->m_active_controller_name ) ) ? 'class="selected"' : '';
	$link = ( strlen( $view->m_external_link ) > 0 ) ? $view->m_external_link : $link = $this->m_common->makeLink( array( 'v' => $view->m_controller_name ) );
?>
		<td <?php echo $selected; ?>>
			<a href="<?php echo $link . '" ' . $link_style; ?>>
				<?php echo $view->m_alias; ?>
			</a>
		</td>
<?php endforeach; ?>

	</tr>
</table>