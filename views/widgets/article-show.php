<?php
$q = new Query;
$q->add( 'title', $section_title );
$result = Section::doSelect( $q );

if( is_object( $result[0] ) ) {
	$q = new Query;
	$q->add( 'section_id', $result[0]->getSectionId() );
	$q->add( 'view_id', Article::$views[$current_page] );
	$result = Article::doSelect( $q );

	if( is_object( $result[0] ) ) {
		$active_article = $result[0];
	}
}

if( isset( $active_article ) ) {
?>

<div class="padder_10 header_text color_brown">
	<?php echo stripslashes( $active_article->getTitle() ); ?>
</div>

<div class="padder_10">
<?php
$class = ( isset( $extra_class ) ) ? 'class="default_line_height"' : '';
$text = str_replace( "\\n", "\n", $active_article->getBody() );

if( strlen( $text ) > 0 ) :
	$body_split = explode( "\n", $text );
	foreach( $body_split as $p ) :
?>
	<p class="<?php echo $class?>">
		<?php echo stripslashes( $p ) ?>
	</p>
	<?php endforeach; ?>
<?php endif; ?>
</div>

<?php } else { ?>
<div class="padder_10 header_text color_brown">
	Error: No article found
</div>
<?php } ?>