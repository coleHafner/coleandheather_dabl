<div class="padder_10_bottom">
    Really delete <?php echo $activeRecord->getFirstName() . ' ' . $activeRecord->getLastName(); ?>?

<?php if($activeRecord->isParent()) { ?>
    <br/><br/>
    This will delete all of this guest's children too!
<?php }?>

</div>