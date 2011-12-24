<?php
$active = '';
$border_class = 'border_color_white';
$type = ( array_key_exists("type", $params) ) ? ' type="' . $params['type'] . '"' : "";
$action = ( array_key_exists("action", $params) ) ? ' action="' . $params['action'] . '"' : "";
$extra_classes = ( array_key_exists("extra_classes", $params) ) ? $params['extra_classes'] : "";
$link_style = $style = ( array_key_exists( "link_style", $params ) ) ? $params['link_style'] : "";
$inner_div_style = ( array_key_exists( "inner_div_style", $params ) ) ? $params['inner_div_style'] : "";
$additional_attributes = ( array_key_exists( "additional_attributes", $params ) ) ? $params['additional_attributes'] : "";

//determine selected
if( array_key_exists( "selected", $params ) && $params['selected'] == 1 )
{
    $active = 'active="1"';
    $border_class = 'border_color_orange';
}

//determine link guts
if( !array_key_exists( "href", $params) ) {
    $link_guts = 'href="#" id="' . $params['id'] . '" process="' . $params['process'] . '" ' . $params['pk_name'] . '="' . $params['pk_value'] . '"' . $additional_attributes;
}else {
    $link_guts = 'href="' . $params['href'] . '"';
}
?>

<a <?php echo $link_guts; ?> class="no_hover admin_button bg_color_white center <?php echo $border_class; ?> <?php echo $extra_classes; ?>" <?php echo $link_style . ' ' . $active; ?> <?php echo $action; ?> <?php echo $type; ?>>
    <div <?php echo $inner_div_style; ?>>
	<?php echo $params['button_value']; ?>
</div>
</a>