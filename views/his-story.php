<?php
if( !isset( $skip_template ) ) {
	load_view( 'widgets/two-col', $params );
} else {
	load_view( 'widgets/article-show', $params );
}
?>