<?php

class GuestType extends baseGuestType {
    public static function getAllValids() {
	$q = new Query;
	$q->add('guest_type_id', 0, Query::GREATER_THAN);
	$q->orderBy('title', Query::ASC);
	return self::doSelect($q);
    }//getAllValids()
}
