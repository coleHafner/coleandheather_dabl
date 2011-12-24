<?php
//print_r($params);die;
$style = ( array_key_exists("extra_style", $params) ) ? $params['extra_style'] : "";
$extra_classes = ( array_key_exists("extra_classes", $params) ) ? $params['extra_classes'] : "";

if (!array_key_exists("href", $params)) {
    $additional_attributes = ( array_key_exists("additional_attributes", $params) ) ? $params['additional_attributes'] : "";
    $link_guts = 'id="' . $params['id'] . '" process="' . $params['process'] . '" ' . $params['pk_name'] . '="' . $params['pk_value'] . '"' . $additional_attributes;
} else {
    $link_guts = 'href="' . $params['href'] . '"';
}
?>

<a <?php echo $link_guts; ?> class="button rounded_corners color_accent center no_hover bg_color_white <?php echo $extra_classes; ?>" <?php echo $style; ?>>
    <?php echo $params['button_value']; ?>
</a>