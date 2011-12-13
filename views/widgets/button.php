<?php
$vars = $params[$params['selected-button-key']];
$style = ( array_key_exists("extra_style", $vars) ) ? $vars['extra_style'] : "";
$extra_classes = ( array_key_exists("extra_classes", $vars) ) ? $vars['extra_classes'] : "";

if (!array_key_exists("href", $vars)) {
    $additional_attributes = ( array_key_exists("additional_attributes", $vars) ) ? $vars['additional_attributes'] : "";
    $link_guts = 'id="' . $vars['id'] . '" process="' . $vars['process'] . '" ' . $vars['pk_name'] . '="' . $vars['pk_value'] . '"' . $additional_attributes;
} else {
    $link_guts = 'href="' . $vars['href'] . '"';
}
?>

<a <?php echo $link_guts; ?> class="button rounded_corners color_accent center no_hover bg_color_white <?php echo $extra_classes; ?>" <?php echo $style; ?>>
    <?php echo $vars['button_value']; ?>
</a>