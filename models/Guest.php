<?php

class Guest extends baseGuest {

	static function validateActivationCode( $code ) {
		$q = new Query;
		$q->add( 'activation_code', $code );
		$q->add( 'activation_code', $code, Query::IS_NOT_NULL );
		return ( self::doCount( $q ) > 0 ) ? true : false;
	}//validateActivationCode()

	static function getGuestFromActivationCode( $code ) {
		$q = new Query;
		$q->add( 'activation_code', $code, Query::LIKE );
		return self::doSelect( $q );
	}//getGuestFromActivationCode()

	static function validateGuestId( $guest_id ) {
		$q = new Query;
		$q->add( 'guest_id', $guest_id );
		return ( self::doCount() > 0 ) ? true : false;
	}//validateGuestId()

	static function getGuestFromId( $guest_id ) {
		$q = new Query;
		$q->add( 'guest_id', $guest_id );
		$result = Guest::doSelect( $q );
		return array_shift( $result );
	}//getGuestFromId()

	public function guestHasSpecialType() {
		$q = new Query( GuestToGuestType::getTableName() . ' g2gt' );
		$q->join( GuestType::getTableName() . ' gt', 'gt.guest_type_id = g2gt.guest_type_id' );
		$q->add( 'g2gt.guest_id', $this->getGuestId() );
		$q->add( 'gt.is_special', '1' );
		return GuestToGuestType::doCount( $q );
	}//guestHasSpecialType()

	public function getBadgeType() {
		$q = new Query( GuestToGuestType::getTableName() . ' g2gt' );
		$q->join( GuestType::getTableName() . ' gt', 'gt.guest_type_id = g2gt.guest_type_id' );
		$q->addColumn( 'gt.guest_type_id AS guest_type_id' );
		$q->addColumn( 'LOWER( gt.title ) AS title' );
		$q->add( 'g2gt.guest_id', $this->getGuestId());
		$q->add( 'gt.is_special', '1' );
		$found_types = GuestToGuestType::fetch( $q );

		if( is_array( $found_types ) ) {
			reset( $found_types );
			$selected_id = current( $found_types )->getGuestTypeId();
			$q = new Query;
			$q->add( 'guest_type_id', $selected_id );
			$gt_results = GuestType::doSelect( $q );
			$return = array_shift( $gt_results );
		}//if any types were found

		return ( isset( $return ) && is_object( $return ) ) ? $return : null;

	}//getBadgeType()

	function updateGroupRsvpStatus( $rsvp_answer, $guest_list = array(), $rsvp_through_site = '1' ) {

		$update_timestamp = strtotime( 'now' );
		$actual_count = ( $rsvp_answer == '1' ) ? count( $guest_list ) : 0;
		$is_attending = ( in_array( $this->getGuestId(), $guest_list) ) ? '1' : '0';
		$this->updateIndividualRsvpStatus( $this, $is_attending, $update_timestamp, $actual_count, $rsvp_through_site );

		foreach( $this->getChildren() as $sub_g ) {
			$is_attending = ( in_array( $sub_g->getGuestId(), $guest_list) ) ? "1" : "0";
			$this->updateIndividualRsvpStatus( $sub_g, $is_attending, $update_timestamp, $actual_count, $rsvp_through_site );
		}
		return true;

	}//updateGroupRsvpStatus()

	function updateIndividualRsvpStatus( $guest, $is_attending, $update_timestamp, $actual_count, $rsvp_through_site ) {

		$guest->setIsAttending( $is_attending );
		$guest->setRsvpThroughSite( $rsvp_through_site );
		$guest->setUpdateTimestamp( $update_timestamp );

		if( $guest->getParentGuestId() == 0 ) {
			$guest->setActualCount( $actual_count );
		}

		return $guest->save();
	}//updateIndividualRsvpStatus()

	function getChildren() {
		$q = new Query();
		$q->add( 'parent_guest_id', $this->getGuestId() );
		$q->add( 'active', 1 );
		return self::doSelect( $q );
	}//getChildren()

	function getNumChildren() {
		$q = new Query();
		$q->add( 'parent_guest_id', $this->getGuestId() );
		$q->add( 'active', 1 );
		return self::doCount( $q );
	}//getNumChildren()

	function getParentAddressId() {
		$pg_id = $this->getParentGuestId();
		if( $pg_id == 0 ) {
			$return = $this->getAddressId();
		} else {
			$q = new Query;
			$q->add( 'parent_guest_id', $pg_id );
			$g = array_shift( self::doSelect() );
			$return = $g->getAddressId();
		}

		return $return;
	}//getParentAddressId()

}//class Guest
