
<?php $display = (!empty($display)) ? 'style="display:' . $display . ';"' : ''; ?>

<div class="rsvp_activation_form border_solid_grey info_container" <?php echo $display; ?> id="hotels">
    <div class="header_bar color_tan_bg">

        <div class="padder_10">
            <span class="header_text grey">
                HOTELS
            </span>
            <br/>
            <span class="font_small color_sub">
                &nbsp;&nbsp;&nbsp;Click on icon to see hotel
            </span>
        </div>

        <div class="places_list_toggle">
            <a id="places_list_toggle" class="font_small" href="#" visible="0">
                Show List
            </a>
        </div>

        <div style="clear:both;"></div>

    </div>

    <div id="places_canvas" class="sub_canvas"></div>
    <div id="places_canvas_list" class="sub_canvas list"></div>
</div>