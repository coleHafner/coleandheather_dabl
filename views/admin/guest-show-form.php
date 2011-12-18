<?php
switch($action) {
    case 'delete':
?>
<div class="padder_10_bottom">
    Are you sure you want to delete <?php echo $activeRecord->getFirstName() . ' ' . $activeRecord->getLastName(); ?>?
</div>
<?php
	break;

    case 'add':
    case 'edit':
?>
<form id="guest-edit-form">
    <div>We are editing...</div>
</form>
<?php
	break;

}//end switch