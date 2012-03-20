
<?php $display = (!empty($display)) ? 'style="display:' . $display . ';"' : ''; ?>

<div class="rsvp_activation_form border_solid_grey info_container" <?php echo $display; ?> id="gift-registries">
    <div class="header_bar color_tan_bg">

        <div class="padder_10">
            <span class="header_text grey">
                GIFT REGISTRIES
            </span>
            <br/>
            <span class="font_small color_sub">
               &nbsp;&nbsp;&nbsp;Send the happy couple off in style.
            </span>
        </div>

    </div>

    <div class="sub_canvas" style="position:relative;">
        <div class="padder_10">

            <div class="padder_10" style="position:relative;margin:auto;width:500px;margin-top:100px;">
                <img src="/images/macys.jpg" />
            </div>

            <div class="info_donate">
                <div class="left_floater donate_blurb">
                    The happy couple is also accepting donations.
                </div>

                <div class="left_floater donate_button">

                    <a href="#" onclick="document.getElementById( 'paypal_form' ).submit();">
                        <img src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" alt="PayPal - The safer, easier way to pay online!"/>
                    </a>

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="paypal_form">
                        <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
                        <input type="hidden" name="business" value="photonorthwest@gmail.com">
                        <input type="hidden" name="item_name" value="Nate and Rebekah's Wedding">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="lc" value="US">
                    </form>
                </div>

                <div style="clear:both;"></div>

            </div>
        </div>
    </div>
</div>