<select name="guest_type_id">
    <option value="0">Select Guest Type</option>

<?php foreach(GuestType::getAllValids() as $gt) { ?>
    <option value="<?php echo $gt->getGuestTypeId(); ?>">
	<?php echo $gt->getTitle(); ?>
    </option>
<?php }//end foreach ?>

</select>