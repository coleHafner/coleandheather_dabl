<li id="guest_li_<?php echo $active_record->getGuestId(); ?>" <?php echo ( $active_record->getNumChildren() == 0 ) ? 'class="rsvp_guest_list_last"' : ''; ?>>
    <table style="postion:relative;height:30px;">
        <tr>
            <td valign="middle" style="width:14px;text-align:center;">
                <input type="checkbox" <?php echo ( $active_record->getIsAttending() == 1 ) ? 'checked="checked"' : '' ?> name="guests[]" value="<?php echo $active_record->getGuestId(); ?>">
            </td>
            <td valign="middle">
                <span class="header_text_sub color_black">
                    <?php echo $active_record->getFirstName() . ' ' . $active_record->getLastName() ?>
                </span>
            </td>
            <?php
            //badge type
            if ($active_record->getParentGuestId() != 0) {
                if ($active_record->guestHasSpecialType() === TRUE) {
                    $type = $active_record->getBadgeType();
                    ?>
                    <td style="width:5px;">&nbsp;</td>
                    <td valign="middle">
                        <div class="rounded_corners_small color_black border_solid_grey color_cyan_bg sub_badge">
                            <?php echo $type->getTitle(); ?>
                        </div>
                    </td>
                    <?php
                }
            }
            ?>
        </tr>
    </table>

    <?php if ($active_record->getParentGuestId() != 0) { ?>
        <div class="rsvp_guest_list_remove">
            <a href="#" class="rsvp" process="remove-guest" guest_id="<?php echo $active_record->getGuestId(); ?>"> Remove</a>
        </div>
    <?php } ?>
</li>