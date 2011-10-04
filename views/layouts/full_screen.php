<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<?php load_view( 'layouts/head', $params ); ?>

	<body onLoad="<?php echo $on_load; ?>">
		<div class="page">
			<?php echo $content; ?>
		</div>
	</body>
</html>