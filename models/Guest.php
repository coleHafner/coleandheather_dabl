<?php

class Guest extends baseGuest {

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function guestHasSpecialType() {
	$q = new Query(GuestToGuestType::getTableName() . ' g2gt');
	$q->join(GuestType::getTableName() . ' gt', 'gt.guest_type_id = g2gt.guest_type_id');
	$q->add('g2gt.guest_id', $this->getGuestId());
	$q->add('gt.is_special', '1');
	return GuestToGuestType::doCount($q);
    }//guestHasSpecialType()

    public function getBadgeType() {
	$q = new Query(GuestToGuestType::getTableName() . ' g2gt');
	$q->join(GuestType::getTableName() . ' gt', 'gt.guest_type_id = g2gt.guest_type_id');
	$q->addColumn('gt.guest_type_id AS guest_type_id');
	$q->addColumn('LOWER( gt.title ) AS title');
	$q->add('g2gt.guest_id', $this->getGuestId());
	$q->add('gt.is_special', '1');
	$found_types = GuestToGuestType::fetch($q);

	if (is_array($found_types)) {
	    reset($found_types);
	    $selected_id = current($found_types)->getGuestTypeId();
	    $q = new Query;
	    $q->add('guest_type_id', $selected_id);
	    $gt_results = GuestType::doSelect($q);
	    $return = array_shift($gt_results);
	}//if any types were found

	return ( isset($return) && is_object($return) ) ? $return : null;
    }//getBadgeType()

    function updateGroupRsvpStatus($rsvp_answer, $guest_list = array(), $rsvp_through_site = '1') {

	$update_timestamp = strtotime('now');
	$actual_count = ( $rsvp_answer == '1' ) ? count($guest_list) : 0;
	$is_attending = ( in_array($this->getGuestId(), $guest_list) ) ? '1' : '0';
	$this->updateIndividualRsvpStatus($this, $is_attending, $update_timestamp, $actual_count, $rsvp_through_site);

	foreach ($this->getChildren() as $sub_g) {
	    $is_attending = ( in_array($sub_g->getGuestId(), $guest_list) ) ? "1" : "0";
	    $this->updateIndividualRsvpStatus($sub_g, $is_attending, $update_timestamp, $actual_count, $rsvp_through_site);
	}
	return true;
    }//updateGroupRsvpStatus()

    function updateIndividualRsvpStatus($guest, $is_attending, $update_timestamp, $actual_count, $rsvp_through_site) {

	$guest->setIsAttending($is_attending);
	$guest->setRsvpThroughSite($rsvp_through_site);
	$guest->setUpdateTimestamp($update_timestamp);

	if ($guest->getParentGuestId() == 0) {
	    $guest->setActualCount($actual_count);
	}

	return $guest->save();
    }//updateIndividualRsvpStatus()

    function getChildren() {
	$q = new Query();
	$q->add('parent_guest_id', $this->getGuestId());
	$q->add('active', 1);
	return self::doSelect($q);
    }//getChildren()

    function getNumChildren() {
	$q = new Query();
	$q->add('parent_guest_id', $this->getGuestId());
	$q->add('active', 1);
	return self::doCount($q);
    }//getNumChildren()

    function getParentAddressId() {
	$pg_id = $this->getParentGuestId();
	if ($pg_id == 0) {
	    $return = $this->getAddressId();
	} else {
	    $q = new Query;
	    $q->add('parent_guest_id', $pg_id);
	    $g = array_shift(self::doSelect());
	    $return = $g->getAddressId();
	}

	return $return;
    }//getParentAddressId()

    function addGuestTypeId($gtId) {

        if(!$this->getGuestId()) return false;

        $g2gt = new GuestToGuestType;
        $g2gt->setGuestId($this->getGuestId());
        $g2gt->setGuestTypeId($gtId);
        return $g2gt->save();

    }//addGuestTypeId()

    static function getGuestQueries(){
	$qNew = new Query;
	$qNew->add('is_new', 1);

	$qTotal = new Query;
	$qTotal->add('guest_id', 0, Query::GREATER_THAN);
	$qTotal->add('is_new', 0);

	$qReplied = new Query;
	$qReplied->add('guest_id', 0, Query::GREATER_THAN);
	$qReplied->add('update_timestamp', null, Query::IS_NOT_NULL);
	$qReplied->add('is_new', 0);

	$qAttending = new Query;
	$qAttending->add('guest_id', 0, Query::GREATER_THAN);
	$qAttending->add('update_timestamp', null, Query::IS_NOT_NULL);
	$qAttending->add('is_attending', 1);

	$qNotAttending = new Query;
	$qNotAttending->add('is_attending', 0);
	$qNotAttending->add('guest_id', 0, Query::GREATER_THAN);
	$qNotAttending->add('update_timestamp', null, Query::IS_NOT_NULL);

	$qRecent = new Query;
	$qRecent->add('guest_id', 0, Query::GREATER_THAN);
	$qRecent->add('update_timestamp', null, Query::IS_NOT_NULL);
	$qRecent->orderBy('update_timestamp', Query::DESC);
	$qRecent->setLimit(10);

	return array(
	    'new' => $qNew,
	    'total' => $qTotal,
	    'recent' => $qRecent,
	    'replied' => $qReplied,
	    'attending' => $qAttending,
	    'not_attending' => $qNotAttending,
	);

    }//getGuestQueries()

    function isParent() {
        return (bool)($this->getParentGuestId() == 0);
    }//isParent()

    function delete() {
        parent::delete();

        if($this->isParent()) {
            foreach($this->getChildren() as $child) {
                $child->delete();
            }
        }

    }//delete()

    public static function getStats() {
	$qs = self::getGuestQueries();

	return array(
	    'new' => self::doCount($qs['new']),
	    'total' => self::doCount($qs['total']),
	    'replied' => self::doCount($qs['replied']),
	    'attending' => self::doCount($qs['attending']),
	    'not_attending' => self::doCount($qs['not_attending']),
	);
    }//getStats()

    public static function getGuestLists() {
	$qs = self::getGuestQueries();

	return array(
	    'new' => self::doSelect($qs['new']),
	    'total' => self::doSelect($qs['total']),
	    'recent' => self::doSelect($qs['recent']),
	    'replied' => self::doSelect($qs['replied']),
	    'attending' => self::doSelect($qs['attending']),
	    'not_attending' => self::doSelect($qs['not_attending']),
	);
    }//getStats()

    public static function getGuestListComplete($has_replied = FALSE, $guest_type_id = FALSE) {

	$q = new Query(Guest::getTableName() . ' g');
	$q->add('g.guest_id', 0, Query::GREATER_THAN);
        //$q->add('g.activation_code', null, Query::IS_NOT_NULL);
	$q->orderBy('g.last_name', Query::ASC);

	//apply constraints
	if($has_replied) {
	    if ($has_replied == "yes") {
		$q->add('g.update_timestamp', null, Query::IS_NOT_NULL);
	    } else {
		$q->add('g.update_timestamp', null, Query::IS_NULL);
	    }
	}

	if($guest_type_id) {
	    $q->join('guestToGuestType g2gt', 'g2gt.guest_id = g.guest_id');
	    $q->add('g2gt.guest_type_id', $guest_type_id);
	}

	//echo $q;die;
	return self::doSelect($q);

    }//getGuestListComplete()

    public static function getAllParents() {
	$q = new Query;
	$q->add('parent_guest_id', null, Query::IS_NOT_NULL);
	$q->orderBy('last_name', Query::ASC);
	return self::doSelect($q);
    }//getAllParents()

    public static function validateActivationCode($code) {
	$q = new Query;
	$q->add('activation_code', $code);
	$q->add('activation_code', $code, Query::IS_NOT_NULL);
	return ( self::doCount($q) > 0 ) ? true : false;
    }//validateActivationCode()

    public static function getGuestFromActivationCode($code) {
	$q = new Query;
	$q->add('activation_code', $code, Query::LIKE);
	return self::doSelect($q);
    }//getGuestFromActivationCode()

    public static function validateGuestId($guest_id) {
	$q = new Query;
	$q->add('guest_id', $guest_id);
	return ( self::doCount() > 0 ) ? true : false;
    }//validateGuestId()

    public static function getGuestFromId($guest_id) {
	$q = new Query;
	$q->add('guest_id', $guest_id);
	$result = Guest::doSelect($q);
	return array_shift($result);
    }//getGuestFromId()

    public static function getUniqueActivationCode($salt = false) {

        //old way
        //$raw =  md5($salt . date("F d\, Y H:i:s"));
        //$code = strtolower(substr($raw, 0, 10));

        //new way
        $code = rand(1000, 9999);

        $q = new Query;
        $q->add(Guest::ACTIVATION_CODE, $code);
        if(Guest::doCount($q) > 0) { self::getUniqueActivationCode($salt); }

        return $code;
    }//getUniqueActivationCode()

    public function doEdit($form_vals) {

        if($this->isNew()) {
            $this->setParentGuestId($form_vals['parent_guest_id']);
            $this->setInitialTimestamp(strtotime('now'));
            $this->setRsvpThroughSite(0);
            $this->setAddressId(0);

            if($form_vals['parent_guest_id'] == 0) {
                $this->setActivationCode(Guest::getUniqueActivationCode($form_vals['first_name']));
            }

            $this->save();

            foreach($form_vals['guest_type_id'] as $gtId) {
                $this->addGuestTypeId($gtId);
            }
        }

        $isAttending = (isset($form_vals['is_attending'])) ? 1 : 0;
        $this->setFirstName($form_vals['first_name']);
        $this->setLastName($form_vals['last_name']);
        $this->setIsAttending($isAttending);
        $this->setUpdateTimestamp(time());

        return $this->save();

    }//doEdit()

}//class Guest
