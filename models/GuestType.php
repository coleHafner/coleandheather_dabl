<?php

class GuestType extends baseGuestType {

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const SPECIAL_YES = 1;
    const SPECIAL_NO = 0;

    public static function getAllValids() {
	$q = new Query;
	$q->add('guest_type_id', 0, Query::GREATER_THAN);
	$q->orderBy('title', Query::ASC);
	return self::doSelect($q);
    }//getAllValids()
}
