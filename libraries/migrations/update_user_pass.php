#!/usr/bin/php -q
<?php
$username = !empty($argv[1]) ? $argv[1] : null;
$password = !empty($argv[2]) ? $argv[2] : null;

if(!$username || !$password) {
	die("\nHow to use this script:\n[script name] [username] [password]\nThis script only changes the password for existing users.\n\n");
}

$skip_session = true;
require_once('../../config.php');
$q = new Query;
$q->add('username', $username);
$results = User::doSelect($q);
$u = array_shift($results);

if($u) {
	$u->setPassword(User::passwordEncrypt(User::passwordSalt(), $password));
	$u->save();
	echo "User " . $u->getUsername() . " updated.\n";
}else {
	echo "User " . $username . " not found.\n";
}
?>
