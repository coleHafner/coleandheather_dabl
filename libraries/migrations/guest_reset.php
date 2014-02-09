#!/usr/bin/php -q
<?php
$skip_session = true;
require_once('../../config.php');

$q = new Query;
$q->add('update_timestamp', null, Query::IS_NOT_NULL);
$results = Guest::doSelect($q);

foreach($results as $g) {
	$g->setUpdateTimestamp(null);
	$g->save();
	echo "saved guest " . $g->getFirstName() . " " . $g->getLastName() . "\n";
}
?>
