<div class="padder_10" style="text-align:center;">
    <a href="#" target="directions" class="info_options">Get Directions</a>&nbsp;<span class="color_sub">|</span>&nbsp;
    <a href="#" target="gift-registries" class="info_options">Gift Registries</a>&nbsp;<span class="color_sub">|</span>&nbsp;
    <a href="http://lmgtfy.com/?q=hotels+Redmond%2C+OR" class="info_options" target="hotels">Hotels</a>&nbsp;<span class="color_sub">|</span>&nbsp;
    <a href="#" target="general" class="info_options">Wedding Info</a>
</div>

<?php load_view('info/registries', array('display' => 'none')); ?>
<?php load_view('info/general', array('display' => 'none')); ?>
<?php load_view('info/hotels', array('display' => 'none')); ?>
<?php load_view('info/directions', array('display' => 'block')); ?>