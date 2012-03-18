
<div class="rsvp_activation_form border_solid_grey" style="position:relative;width:960px;margin:auto;margin-top:10px;margin-bottom:10px;">

    <div class="header_bar color_tan_bg" style="position:relative;height:90px;">
        <div class="padder_10">
            <div class="header_text grey padder_10_bottom">
                DRIVING DIRECTIONS
            </div>

            <a href="/info?address=<?php echo $address; ?>&city=<?php echo $city; ?>&state=<?php echo $state; ?>&from=<?php echo $from; ?>#directions">&lt;&lt; Back to Info</a>
        </div>
    </div>

    <div id="map_canvas" style="position:relative;height:800px;width:70%;top:auto;float:left;"></div>

    <div id="directions_canvas" style="position:relative;height:800px;width:29%;top:auto;float:left;right:-5px;"></div>

    <div style="clear:both;"></div>
</div>

<script type="text/javascript">
    mapShowRoute('<?php echo $from; ?>',false);
</script>
