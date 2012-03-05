<div class="<?php echo ( $active_record->guestHasSpecialType() ) ? 'title_button_w_badge' : 'title_button'; ?>">
    <a href="#" class="rsvp" process="show-add-guest" guest_id="<?php $active_record->getGuestId() ?>">
        + Add Guest
    </a>
</div>