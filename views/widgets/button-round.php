<?php
$active = '';
$vars = $params['button'];
$border_class = 'border_color_white';
$link_style = $style = ( array_key_exists( "link_style", $vars ) ) ? $vars['link_style'] : "";
$inner_div_style = ( array_key_exists( "inner_div_style", $vars ) ) ? $vars['inner_div_style'] : "";
$additional_attributes = ( array_key_exists( "additional_attributes", $vars ) ) ? $vars['additional_attributes'] : "";

//determine selected
if( array_key_exists( "selected", $vars ) && $vars['selected'] == 1 )
{
    $active = 'active="1"';
    $border_class = 'border_color_orange';
}

//determine link guts
if( !array_key_exists( "href", $vars) ) {
    $link_guts = 'href="#" id="' . $vars['id'] . '" process="' . $vars['process'] . '" ' . $vars['pk_name'] . '="' . $vars['pk_value'] . '"' . $additional_attributes;
}else {
    $link_guts = 'href="' . $vars['href'] . '"';
}
?>

<a <?php echo $link_guts; ?> class="no_hover admin_button bg_color_white center <?php echo $border_class; ?>" <?php echo $link_style . ' ' . $active; ?>>
    <div <?php echo $inner_div_style; ?>>
	<?php echo $vars['button_value']; ?>
</div>
</a>