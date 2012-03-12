
<?php $display = (!empty($display)) ? 'display:' . $display . ';' : ''; ?>

<div class="rsvp_activation_form border_solid_grey" style="width:850px;overflow:hidden;<?php echo $display;?>" id="directions">
    <div class="header_bar color_tan_bg">

        <div class="padder_10 header_text grey">
            DIRECTIONS
        </div>

        <!--
        <div class="color_sub font_small">
            ... to the wedding
        </div>
        -->

        <div class="padder_10" style="position:relative;">

            <form method="post" id="directions_form">
                <table>
                    <tr>
                        <td>
                            <span class="font_small color_sub">Address:</span><br/>
                            <input type="text" name="address" />
                        </td>

                        <td>
                            <span class="font_small color_sub">City:</span><br/>
                            <input type="text" name="city"/>
                        </td>

                        <td>
                            <span class="font_small color_sub">State:</span><br/>
                            <input type="text" name="state"/>
                        </td>

                        <td>
                            <span class="font_small color_sub">Zip:</span><br/>
                            <input type="text" name="zip" />
                        </td>

                        <td>
                            <a href="#" class="button_small light_purple_bg center info" process="show-map" style="position:relative;top:7px;" id="directions_search_button">
                                <span class="color_white" style="font-weight:bold;">
                                    Go!
                                </span>
                            </a>
                        </td>
                    </tr>
                </table>
            </form>

            <div class="directions_canvas_toggle">
                <a id="directions_canvas_toggle" class="font_small" href="#" visible="0">
                    Show directions
                </a>
            </div>
        </div>
    </div>

    <div id="map_canvas"></div>
    <div id="directions_canvas"></div>
</div>