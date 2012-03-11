
<?php $display = (!empty($display)) ? 'display:' . $display . ';' : ''; ?>

<div class="rsvp_activation_form border_solid_grey" style="width:850px;overflow:hidden;<?php echo $display; ?>" id="hotels">
    <div class="header_bar color_tan_bg">

        <div class="padder_10 header_text grey">
            HOTELS
        </div>

        <div class="directions_canvas_toggle right_floater">
            <a id="places_list_toggle" class="font_small" href="#" visible="1">
                Hide List
            </a>
        </div>

    </div>

    <div id="places_canvas"></div>
    <div id="places_canvas_list"></div>
</div>