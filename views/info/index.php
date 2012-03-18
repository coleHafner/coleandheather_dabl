<div class="info_sub_nav">
    <a href="#" target="directions" class="info_options selected" id="nav-directions">Get Directions</a>
    <a href="#" target="gift-registries" class="info_options" id="nav-gift-registries">Gift Registries</a>
    <a href="http://lmgtfy.com/?q=hotels+Redmond%2C+OR" class="info_options" target="hotels" id="nav-hotels">Hotels</a>
    <a href="#" target="general" class="info_options" id="nav-general">Wedding Info</a>
    <div style="clear:both;"></div>
</div>

<?php load_view('info/registries', array('display' => 'none')); ?>
<?php load_view('info/general', array('display' => 'none')); ?>
<?php load_view('info/hotels', array('display' => 'none')); ?>
<?php load_view('info/directions', array_merge($params, array('display' => 'block'))); ?>