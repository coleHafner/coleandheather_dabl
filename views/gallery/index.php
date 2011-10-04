<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/one-col', $params );
} else {
	load_view( 'widgets/super-grid', $params );
} ?>