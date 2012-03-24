<!--
<div class="padder_10" style="border:1px solid #999;margin:10px;">
    There are <?php echo $total_guest_count; ?> Total Guests.<br/>
    <a href="<?php echo site_url('/admin'); ?>">&lt;&lt; Back to admin</a>
</div>
-->

<table class="guest-printout">
    <tr>

<?php
$counter = -1;
foreach($guests as $g) {
?>
        <td>
            <div class="guest-card">
                    <div class="guest-card-info">
                        <div class="padder_5">
                            <?php
                            $children = $g->getChildren();
                            echo $g->getFirstName() . ' ' . $g->getLastName() . '<br/>';

                            foreach($children as $g_ch) {
                                echo $g_ch->getFirstName() . ' ' . $g_ch->getLastName() . '<br/>';
                            }

                            ?>
                            RSVP Code: <?php echo $g->getActivationCode(); ?>
                        </div>
                    </div>

                    <div class="guest-note">
                        <div class="padder_5">
                            Visit nateandrebekah.com for gift registry info, directions, and to RSVP.
                        </div>
                    </div>

                </div>
            </div>
        </td>
<?php if($counter%3 == 1) { ?>
    </tr>

    <tr>
<?php
    }
    $counter++;
}?>
</table>