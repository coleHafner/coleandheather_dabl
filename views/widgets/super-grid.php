<?php

//shorten name
$vars = $grid_options;

//table data
$records = $vars['records'];
$num_records = count( $records );
$records_per_row = $vars['records_per_row'];
$num_rows = ceil( $num_records / $records_per_row );

//item renderer vars
$id = ( array_key_exists( "id", $vars ) ) ? $vars['id'] : '';
$extra_style = ( array_key_exists( "extra_style", $vars ) ) ? $vars['extra_style'] : '';
$extra_classes = ( array_key_exists( "extra_classes", $vars ) ) ? $vars['extra_classes'] : '';
?>

<table <?php echo $extra_classes . ' ' . $extra_style . ' ' . $id; ?>>

<?php
if( $num_records > 0 ) {
	for( $i = 0; $i < $num_rows; $i++ ) {
?>
	<tr>

<?php
		for( $j = 1; $j <= $records_per_row; $j++ ) {
			$key = $j + ( $records_per_row * $i );
			if( $key > $num_records ) {
?>
		<td>
			&nbsp;
		</td>
<?php			break;
			}//if were at last record

			$html_vars = ( array_key_exists( 'html_vars', $vars ) ) ? $vars['html_vars'] : null;
			$params['active_record'] = $records[$key];
			$params['options'] = $html_vars;
?>
		<td valign="top">
			<?php load_view( $vars['grid_item_view'], $params ); ?>
		</td>
		<?php }//loop through columns ?>

	</tr>

<?php
	}//loop through rows
} else { //if we have records
?>

	<tr>
		<td class="center" colspan="2">
			<?php echo ( isset( $vars['empty_message'] ) ) ? $vars['empty_message'] : ''; ?>
		</td>
	</tr>

<?php }//if no records were found ?>

</table>