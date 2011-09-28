<?php

abstract class BaseGuestQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = Guest::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return GuestQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new GuestQuery($table_name, $alias);
	}

	/**
	 * @return Guest[]
	 */
	function select() {
		return Guest::doSelect($this);
	}

	/**
	 * @return Guest
	 */
	function selectOne() {
		return array_shift(Guest::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return Guest::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return Guest::doCount($this);
	}

	/**
	 * @return GuestQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Guest::isTemporalType($type)) {
			$value = Guest::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Guest::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return GuestQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Guest::isTemporalType($type)) {
			$value = Guest::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Guest::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestId($integer) {
		return $this->and(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdNot($integer) {
		return $this->andNot(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdLike($integer) {
		return $this->andLike(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdNotLike($integer) {
		return $this->andNotLike(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdGreater($integer) {
		return $this->andGreater(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdLess($integer) {
		return $this->andLess(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdLessEqual($integer) {
		return $this->andLessEqual(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdNull() {
		return $this->andNull(Guest::GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdNotNull() {
		return $this->andNotNull(Guest::GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdBetween($integer, $from, $to) {
		return $this->andBetween(Guest::GUEST_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdBeginsWith($integer) {
		return $this->andBeginsWith(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdEndsWith($integer) {
		return $this->andEndsWith(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andGuestIdContains($integer) {
		return $this->andContains(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestId($integer) {
		return $this->or(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdNot($integer) {
		return $this->orNot(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdLike($integer) {
		return $this->orLike(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdNotLike($integer) {
		return $this->orNotLike(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdGreater($integer) {
		return $this->orGreater(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdLess($integer) {
		return $this->orLess(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdLessEqual($integer) {
		return $this->orLessEqual(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdNull() {
		return $this->orNull(Guest::GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdNotNull() {
		return $this->orNotNull(Guest::GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdBetween($integer, $from, $to) {
		return $this->orBetween(Guest::GUEST_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdBeginsWith($integer) {
		return $this->orBeginsWith(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdEndsWith($integer) {
		return $this->orEndsWith(Guest::GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orGuestIdContains($integer) {
		return $this->orContains(Guest::GUEST_ID, $integer);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByGuestIdAsc() {
		return $this->orderBy(Guest::GUEST_ID, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByGuestIdDesc() {
		return $this->orderBy(Guest::GUEST_ID, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByGuestId() {
		return $this->groupBy(Guest::GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestId($integer) {
		return $this->and(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdNot($integer) {
		return $this->andNot(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdLike($integer) {
		return $this->andLike(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdNotLike($integer) {
		return $this->andNotLike(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdGreater($integer) {
		return $this->andGreater(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdLess($integer) {
		return $this->andLess(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdLessEqual($integer) {
		return $this->andLessEqual(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdNull() {
		return $this->andNull(Guest::PARENT_GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdNotNull() {
		return $this->andNotNull(Guest::PARENT_GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdBetween($integer, $from, $to) {
		return $this->andBetween(Guest::PARENT_GUEST_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdBeginsWith($integer) {
		return $this->andBeginsWith(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdEndsWith($integer) {
		return $this->andEndsWith(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andParentGuestIdContains($integer) {
		return $this->andContains(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestId($integer) {
		return $this->or(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdNot($integer) {
		return $this->orNot(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdLike($integer) {
		return $this->orLike(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdNotLike($integer) {
		return $this->orNotLike(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdGreater($integer) {
		return $this->orGreater(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdLess($integer) {
		return $this->orLess(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdLessEqual($integer) {
		return $this->orLessEqual(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdNull() {
		return $this->orNull(Guest::PARENT_GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdNotNull() {
		return $this->orNotNull(Guest::PARENT_GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdBetween($integer, $from, $to) {
		return $this->orBetween(Guest::PARENT_GUEST_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdBeginsWith($integer) {
		return $this->orBeginsWith(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdEndsWith($integer) {
		return $this->orEndsWith(Guest::PARENT_GUEST_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orParentGuestIdContains($integer) {
		return $this->orContains(Guest::PARENT_GUEST_ID, $integer);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByParentGuestIdAsc() {
		return $this->orderBy(Guest::PARENT_GUEST_ID, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByParentGuestIdDesc() {
		return $this->orderBy(Guest::PARENT_GUEST_ID, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByParentGuestId() {
		return $this->groupBy(Guest::PARENT_GUEST_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressId($integer) {
		return $this->and(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdNot($integer) {
		return $this->andNot(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdLike($integer) {
		return $this->andLike(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdNotLike($integer) {
		return $this->andNotLike(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdGreater($integer) {
		return $this->andGreater(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdLess($integer) {
		return $this->andLess(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdLessEqual($integer) {
		return $this->andLessEqual(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdNull() {
		return $this->andNull(Guest::ADDRESS_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdNotNull() {
		return $this->andNotNull(Guest::ADDRESS_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdBetween($integer, $from, $to) {
		return $this->andBetween(Guest::ADDRESS_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdBeginsWith($integer) {
		return $this->andBeginsWith(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdEndsWith($integer) {
		return $this->andEndsWith(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function andAddressIdContains($integer) {
		return $this->andContains(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressId($integer) {
		return $this->or(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdNot($integer) {
		return $this->orNot(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdLike($integer) {
		return $this->orLike(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdNotLike($integer) {
		return $this->orNotLike(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdGreater($integer) {
		return $this->orGreater(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdLess($integer) {
		return $this->orLess(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdLessEqual($integer) {
		return $this->orLessEqual(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdNull() {
		return $this->orNull(Guest::ADDRESS_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdNotNull() {
		return $this->orNotNull(Guest::ADDRESS_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdBetween($integer, $from, $to) {
		return $this->orBetween(Guest::ADDRESS_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdBeginsWith($integer) {
		return $this->orBeginsWith(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdEndsWith($integer) {
		return $this->orEndsWith(Guest::ADDRESS_ID, $integer);
	}

	/**
	 * @return GuestQuery
	 */
	function orAddressIdContains($integer) {
		return $this->orContains(Guest::ADDRESS_ID, $integer);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByAddressIdAsc() {
		return $this->orderBy(Guest::ADDRESS_ID, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByAddressIdDesc() {
		return $this->orderBy(Guest::ADDRESS_ID, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByAddressId() {
		return $this->groupBy(Guest::ADDRESS_ID);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstName($varchar) {
		return $this->and(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameNot($varchar) {
		return $this->andNot(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameLike($varchar) {
		return $this->andLike(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameNotLike($varchar) {
		return $this->andNotLike(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameGreater($varchar) {
		return $this->andGreater(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameGreaterEqual($varchar) {
		return $this->andGreaterEqual(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameLess($varchar) {
		return $this->andLess(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameLessEqual($varchar) {
		return $this->andLessEqual(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameNull() {
		return $this->andNull(Guest::FIRST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameNotNull() {
		return $this->andNotNull(Guest::FIRST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameBetween($varchar, $from, $to) {
		return $this->andBetween(Guest::FIRST_NAME, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameBeginsWith($varchar) {
		return $this->andBeginsWith(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameEndsWith($varchar) {
		return $this->andEndsWith(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andFirstNameContains($varchar) {
		return $this->andContains(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstName($varchar) {
		return $this->or(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameNot($varchar) {
		return $this->orNot(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameLike($varchar) {
		return $this->orLike(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameNotLike($varchar) {
		return $this->orNotLike(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameGreater($varchar) {
		return $this->orGreater(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameGreaterEqual($varchar) {
		return $this->orGreaterEqual(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameLess($varchar) {
		return $this->orLess(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameLessEqual($varchar) {
		return $this->orLessEqual(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameNull() {
		return $this->orNull(Guest::FIRST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameNotNull() {
		return $this->orNotNull(Guest::FIRST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameBetween($varchar, $from, $to) {
		return $this->orBetween(Guest::FIRST_NAME, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameBeginsWith($varchar) {
		return $this->orBeginsWith(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameEndsWith($varchar) {
		return $this->orEndsWith(Guest::FIRST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orFirstNameContains($varchar) {
		return $this->orContains(Guest::FIRST_NAME, $varchar);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByFirstNameAsc() {
		return $this->orderBy(Guest::FIRST_NAME, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByFirstNameDesc() {
		return $this->orderBy(Guest::FIRST_NAME, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByFirstName() {
		return $this->groupBy(Guest::FIRST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastName($varchar) {
		return $this->and(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameNot($varchar) {
		return $this->andNot(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameLike($varchar) {
		return $this->andLike(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameNotLike($varchar) {
		return $this->andNotLike(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameGreater($varchar) {
		return $this->andGreater(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameGreaterEqual($varchar) {
		return $this->andGreaterEqual(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameLess($varchar) {
		return $this->andLess(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameLessEqual($varchar) {
		return $this->andLessEqual(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameNull() {
		return $this->andNull(Guest::LAST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameNotNull() {
		return $this->andNotNull(Guest::LAST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameBetween($varchar, $from, $to) {
		return $this->andBetween(Guest::LAST_NAME, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameBeginsWith($varchar) {
		return $this->andBeginsWith(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameEndsWith($varchar) {
		return $this->andEndsWith(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andLastNameContains($varchar) {
		return $this->andContains(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastName($varchar) {
		return $this->or(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameNot($varchar) {
		return $this->orNot(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameLike($varchar) {
		return $this->orLike(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameNotLike($varchar) {
		return $this->orNotLike(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameGreater($varchar) {
		return $this->orGreater(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameGreaterEqual($varchar) {
		return $this->orGreaterEqual(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameLess($varchar) {
		return $this->orLess(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameLessEqual($varchar) {
		return $this->orLessEqual(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameNull() {
		return $this->orNull(Guest::LAST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameNotNull() {
		return $this->orNotNull(Guest::LAST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameBetween($varchar, $from, $to) {
		return $this->orBetween(Guest::LAST_NAME, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameBeginsWith($varchar) {
		return $this->orBeginsWith(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameEndsWith($varchar) {
		return $this->orEndsWith(Guest::LAST_NAME, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orLastNameContains($varchar) {
		return $this->orContains(Guest::LAST_NAME, $varchar);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByLastNameAsc() {
		return $this->orderBy(Guest::LAST_NAME, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByLastNameDesc() {
		return $this->orderBy(Guest::LAST_NAME, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByLastName() {
		return $this->groupBy(Guest::LAST_NAME);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCode($varchar) {
		return $this->and(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeNot($varchar) {
		return $this->andNot(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeLike($varchar) {
		return $this->andLike(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeNotLike($varchar) {
		return $this->andNotLike(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeGreater($varchar) {
		return $this->andGreater(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeGreaterEqual($varchar) {
		return $this->andGreaterEqual(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeLess($varchar) {
		return $this->andLess(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeLessEqual($varchar) {
		return $this->andLessEqual(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeNull() {
		return $this->andNull(Guest::ACTIVATION_CODE);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeNotNull() {
		return $this->andNotNull(Guest::ACTIVATION_CODE);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeBetween($varchar, $from, $to) {
		return $this->andBetween(Guest::ACTIVATION_CODE, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeBeginsWith($varchar) {
		return $this->andBeginsWith(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeEndsWith($varchar) {
		return $this->andEndsWith(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andActivationCodeContains($varchar) {
		return $this->andContains(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCode($varchar) {
		return $this->or(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeNot($varchar) {
		return $this->orNot(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeLike($varchar) {
		return $this->orLike(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeNotLike($varchar) {
		return $this->orNotLike(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeGreater($varchar) {
		return $this->orGreater(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeGreaterEqual($varchar) {
		return $this->orGreaterEqual(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeLess($varchar) {
		return $this->orLess(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeLessEqual($varchar) {
		return $this->orLessEqual(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeNull() {
		return $this->orNull(Guest::ACTIVATION_CODE);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeNotNull() {
		return $this->orNotNull(Guest::ACTIVATION_CODE);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeBetween($varchar, $from, $to) {
		return $this->orBetween(Guest::ACTIVATION_CODE, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeBeginsWith($varchar) {
		return $this->orBeginsWith(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeEndsWith($varchar) {
		return $this->orEndsWith(Guest::ACTIVATION_CODE, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orActivationCodeContains($varchar) {
		return $this->orContains(Guest::ACTIVATION_CODE, $varchar);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByActivationCodeAsc() {
		return $this->orderBy(Guest::ACTIVATION_CODE, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByActivationCodeDesc() {
		return $this->orderBy(Guest::ACTIVATION_CODE, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByActivationCode() {
		return $this->groupBy(Guest::ACTIVATION_CODE);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestamp($varchar) {
		return $this->and(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampNot($varchar) {
		return $this->andNot(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampLike($varchar) {
		return $this->andLike(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampNotLike($varchar) {
		return $this->andNotLike(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampGreater($varchar) {
		return $this->andGreater(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampGreaterEqual($varchar) {
		return $this->andGreaterEqual(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampLess($varchar) {
		return $this->andLess(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampLessEqual($varchar) {
		return $this->andLessEqual(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampNull() {
		return $this->andNull(Guest::INITIAL_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampNotNull() {
		return $this->andNotNull(Guest::INITIAL_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampBetween($varchar, $from, $to) {
		return $this->andBetween(Guest::INITIAL_TIMESTAMP, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampBeginsWith($varchar) {
		return $this->andBeginsWith(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampEndsWith($varchar) {
		return $this->andEndsWith(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andInitialTimestampContains($varchar) {
		return $this->andContains(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestamp($varchar) {
		return $this->or(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampNot($varchar) {
		return $this->orNot(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampLike($varchar) {
		return $this->orLike(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampNotLike($varchar) {
		return $this->orNotLike(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampGreater($varchar) {
		return $this->orGreater(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampGreaterEqual($varchar) {
		return $this->orGreaterEqual(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampLess($varchar) {
		return $this->orLess(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampLessEqual($varchar) {
		return $this->orLessEqual(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampNull() {
		return $this->orNull(Guest::INITIAL_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampNotNull() {
		return $this->orNotNull(Guest::INITIAL_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampBetween($varchar, $from, $to) {
		return $this->orBetween(Guest::INITIAL_TIMESTAMP, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampBeginsWith($varchar) {
		return $this->orBeginsWith(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampEndsWith($varchar) {
		return $this->orEndsWith(Guest::INITIAL_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orInitialTimestampContains($varchar) {
		return $this->orContains(Guest::INITIAL_TIMESTAMP, $varchar);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByInitialTimestampAsc() {
		return $this->orderBy(Guest::INITIAL_TIMESTAMP, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByInitialTimestampDesc() {
		return $this->orderBy(Guest::INITIAL_TIMESTAMP, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByInitialTimestamp() {
		return $this->groupBy(Guest::INITIAL_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestamp($varchar) {
		return $this->and(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampNot($varchar) {
		return $this->andNot(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampLike($varchar) {
		return $this->andLike(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampNotLike($varchar) {
		return $this->andNotLike(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampGreater($varchar) {
		return $this->andGreater(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampGreaterEqual($varchar) {
		return $this->andGreaterEqual(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampLess($varchar) {
		return $this->andLess(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampLessEqual($varchar) {
		return $this->andLessEqual(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampNull() {
		return $this->andNull(Guest::UPDATE_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampNotNull() {
		return $this->andNotNull(Guest::UPDATE_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampBetween($varchar, $from, $to) {
		return $this->andBetween(Guest::UPDATE_TIMESTAMP, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampBeginsWith($varchar) {
		return $this->andBeginsWith(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampEndsWith($varchar) {
		return $this->andEndsWith(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function andUpdateTimestampContains($varchar) {
		return $this->andContains(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestamp($varchar) {
		return $this->or(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampNot($varchar) {
		return $this->orNot(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampLike($varchar) {
		return $this->orLike(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampNotLike($varchar) {
		return $this->orNotLike(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampGreater($varchar) {
		return $this->orGreater(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampGreaterEqual($varchar) {
		return $this->orGreaterEqual(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampLess($varchar) {
		return $this->orLess(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampLessEqual($varchar) {
		return $this->orLessEqual(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampNull() {
		return $this->orNull(Guest::UPDATE_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampNotNull() {
		return $this->orNotNull(Guest::UPDATE_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampBetween($varchar, $from, $to) {
		return $this->orBetween(Guest::UPDATE_TIMESTAMP, $varchar, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampBeginsWith($varchar) {
		return $this->orBeginsWith(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampEndsWith($varchar) {
		return $this->orEndsWith(Guest::UPDATE_TIMESTAMP, $varchar);
	}

	/**
	 * @return GuestQuery
	 */
	function orUpdateTimestampContains($varchar) {
		return $this->orContains(Guest::UPDATE_TIMESTAMP, $varchar);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByUpdateTimestampAsc() {
		return $this->orderBy(Guest::UPDATE_TIMESTAMP, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByUpdateTimestampDesc() {
		return $this->orderBy(Guest::UPDATE_TIMESTAMP, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByUpdateTimestamp() {
		return $this->groupBy(Guest::UPDATE_TIMESTAMP);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCount($tinyint) {
		return $this->and(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountNot($tinyint) {
		return $this->andNot(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountLike($tinyint) {
		return $this->andLike(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountNotLike($tinyint) {
		return $this->andNotLike(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountGreater($tinyint) {
		return $this->andGreater(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountLess($tinyint) {
		return $this->andLess(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountLessEqual($tinyint) {
		return $this->andLessEqual(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountNull() {
		return $this->andNull(Guest::EXPECTED_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountNotNull() {
		return $this->andNotNull(Guest::EXPECTED_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountBetween($tinyint, $from, $to) {
		return $this->andBetween(Guest::EXPECTED_COUNT, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountBeginsWith($tinyint) {
		return $this->andBeginsWith(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountEndsWith($tinyint) {
		return $this->andEndsWith(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andExpectedCountContains($tinyint) {
		return $this->andContains(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCount($tinyint) {
		return $this->or(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountNot($tinyint) {
		return $this->orNot(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountLike($tinyint) {
		return $this->orLike(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountNotLike($tinyint) {
		return $this->orNotLike(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountGreater($tinyint) {
		return $this->orGreater(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountLess($tinyint) {
		return $this->orLess(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountLessEqual($tinyint) {
		return $this->orLessEqual(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountNull() {
		return $this->orNull(Guest::EXPECTED_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountNotNull() {
		return $this->orNotNull(Guest::EXPECTED_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountBetween($tinyint, $from, $to) {
		return $this->orBetween(Guest::EXPECTED_COUNT, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountBeginsWith($tinyint) {
		return $this->orBeginsWith(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountEndsWith($tinyint) {
		return $this->orEndsWith(Guest::EXPECTED_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orExpectedCountContains($tinyint) {
		return $this->orContains(Guest::EXPECTED_COUNT, $tinyint);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByExpectedCountAsc() {
		return $this->orderBy(Guest::EXPECTED_COUNT, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByExpectedCountDesc() {
		return $this->orderBy(Guest::EXPECTED_COUNT, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByExpectedCount() {
		return $this->groupBy(Guest::EXPECTED_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCount($tinyint) {
		return $this->and(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountNot($tinyint) {
		return $this->andNot(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountLike($tinyint) {
		return $this->andLike(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountNotLike($tinyint) {
		return $this->andNotLike(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountGreater($tinyint) {
		return $this->andGreater(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountLess($tinyint) {
		return $this->andLess(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountLessEqual($tinyint) {
		return $this->andLessEqual(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountNull() {
		return $this->andNull(Guest::ACTUAL_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountNotNull() {
		return $this->andNotNull(Guest::ACTUAL_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountBetween($tinyint, $from, $to) {
		return $this->andBetween(Guest::ACTUAL_COUNT, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountBeginsWith($tinyint) {
		return $this->andBeginsWith(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountEndsWith($tinyint) {
		return $this->andEndsWith(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActualCountContains($tinyint) {
		return $this->andContains(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCount($tinyint) {
		return $this->or(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountNot($tinyint) {
		return $this->orNot(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountLike($tinyint) {
		return $this->orLike(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountNotLike($tinyint) {
		return $this->orNotLike(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountGreater($tinyint) {
		return $this->orGreater(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountLess($tinyint) {
		return $this->orLess(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountLessEqual($tinyint) {
		return $this->orLessEqual(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountNull() {
		return $this->orNull(Guest::ACTUAL_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountNotNull() {
		return $this->orNotNull(Guest::ACTUAL_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountBetween($tinyint, $from, $to) {
		return $this->orBetween(Guest::ACTUAL_COUNT, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountBeginsWith($tinyint) {
		return $this->orBeginsWith(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountEndsWith($tinyint) {
		return $this->orEndsWith(Guest::ACTUAL_COUNT, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActualCountContains($tinyint) {
		return $this->orContains(Guest::ACTUAL_COUNT, $tinyint);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByActualCountAsc() {
		return $this->orderBy(Guest::ACTUAL_COUNT, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByActualCountDesc() {
		return $this->orderBy(Guest::ACTUAL_COUNT, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByActualCount() {
		return $this->groupBy(Guest::ACTUAL_COUNT);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSite($tinyint) {
		return $this->and(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteNot($tinyint) {
		return $this->andNot(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteLike($tinyint) {
		return $this->andLike(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteNotLike($tinyint) {
		return $this->andNotLike(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteGreater($tinyint) {
		return $this->andGreater(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteLess($tinyint) {
		return $this->andLess(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteLessEqual($tinyint) {
		return $this->andLessEqual(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteNull() {
		return $this->andNull(Guest::RSVP_THROUGH_SITE);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteNotNull() {
		return $this->andNotNull(Guest::RSVP_THROUGH_SITE);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteBetween($tinyint, $from, $to) {
		return $this->andBetween(Guest::RSVP_THROUGH_SITE, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteBeginsWith($tinyint) {
		return $this->andBeginsWith(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteEndsWith($tinyint) {
		return $this->andEndsWith(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andRsvpThroughSiteContains($tinyint) {
		return $this->andContains(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSite($tinyint) {
		return $this->or(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteNot($tinyint) {
		return $this->orNot(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteLike($tinyint) {
		return $this->orLike(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteNotLike($tinyint) {
		return $this->orNotLike(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteGreater($tinyint) {
		return $this->orGreater(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteLess($tinyint) {
		return $this->orLess(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteLessEqual($tinyint) {
		return $this->orLessEqual(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteNull() {
		return $this->orNull(Guest::RSVP_THROUGH_SITE);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteNotNull() {
		return $this->orNotNull(Guest::RSVP_THROUGH_SITE);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteBetween($tinyint, $from, $to) {
		return $this->orBetween(Guest::RSVP_THROUGH_SITE, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteBeginsWith($tinyint) {
		return $this->orBeginsWith(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteEndsWith($tinyint) {
		return $this->orEndsWith(Guest::RSVP_THROUGH_SITE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orRsvpThroughSiteContains($tinyint) {
		return $this->orContains(Guest::RSVP_THROUGH_SITE, $tinyint);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByRsvpThroughSiteAsc() {
		return $this->orderBy(Guest::RSVP_THROUGH_SITE, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByRsvpThroughSiteDesc() {
		return $this->orderBy(Guest::RSVP_THROUGH_SITE, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByRsvpThroughSite() {
		return $this->groupBy(Guest::RSVP_THROUGH_SITE);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttending($tinyint) {
		return $this->and(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingNot($tinyint) {
		return $this->andNot(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingLike($tinyint) {
		return $this->andLike(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingNotLike($tinyint) {
		return $this->andNotLike(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingGreater($tinyint) {
		return $this->andGreater(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingLess($tinyint) {
		return $this->andLess(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingLessEqual($tinyint) {
		return $this->andLessEqual(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingNull() {
		return $this->andNull(Guest::IS_ATTENDING);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingNotNull() {
		return $this->andNotNull(Guest::IS_ATTENDING);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingBetween($tinyint, $from, $to) {
		return $this->andBetween(Guest::IS_ATTENDING, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingBeginsWith($tinyint) {
		return $this->andBeginsWith(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingEndsWith($tinyint) {
		return $this->andEndsWith(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsAttendingContains($tinyint) {
		return $this->andContains(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttending($tinyint) {
		return $this->or(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingNot($tinyint) {
		return $this->orNot(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingLike($tinyint) {
		return $this->orLike(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingNotLike($tinyint) {
		return $this->orNotLike(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingGreater($tinyint) {
		return $this->orGreater(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingLess($tinyint) {
		return $this->orLess(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingLessEqual($tinyint) {
		return $this->orLessEqual(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingNull() {
		return $this->orNull(Guest::IS_ATTENDING);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingNotNull() {
		return $this->orNotNull(Guest::IS_ATTENDING);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingBetween($tinyint, $from, $to) {
		return $this->orBetween(Guest::IS_ATTENDING, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingBeginsWith($tinyint) {
		return $this->orBeginsWith(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingEndsWith($tinyint) {
		return $this->orEndsWith(Guest::IS_ATTENDING, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsAttendingContains($tinyint) {
		return $this->orContains(Guest::IS_ATTENDING, $tinyint);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByIsAttendingAsc() {
		return $this->orderBy(Guest::IS_ATTENDING, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByIsAttendingDesc() {
		return $this->orderBy(Guest::IS_ATTENDING, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByIsAttending() {
		return $this->groupBy(Guest::IS_ATTENDING);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNew($tinyint) {
		return $this->and(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewNot($tinyint) {
		return $this->andNot(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewLike($tinyint) {
		return $this->andLike(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewNotLike($tinyint) {
		return $this->andNotLike(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewGreater($tinyint) {
		return $this->andGreater(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewLess($tinyint) {
		return $this->andLess(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewLessEqual($tinyint) {
		return $this->andLessEqual(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewNull() {
		return $this->andNull(Guest::IS_NEW);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewNotNull() {
		return $this->andNotNull(Guest::IS_NEW);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewBetween($tinyint, $from, $to) {
		return $this->andBetween(Guest::IS_NEW, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewBeginsWith($tinyint) {
		return $this->andBeginsWith(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewEndsWith($tinyint) {
		return $this->andEndsWith(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andIsNewContains($tinyint) {
		return $this->andContains(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNew($tinyint) {
		return $this->or(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewNot($tinyint) {
		return $this->orNot(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewLike($tinyint) {
		return $this->orLike(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewNotLike($tinyint) {
		return $this->orNotLike(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewGreater($tinyint) {
		return $this->orGreater(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewLess($tinyint) {
		return $this->orLess(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewLessEqual($tinyint) {
		return $this->orLessEqual(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewNull() {
		return $this->orNull(Guest::IS_NEW);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewNotNull() {
		return $this->orNotNull(Guest::IS_NEW);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewBetween($tinyint, $from, $to) {
		return $this->orBetween(Guest::IS_NEW, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewBeginsWith($tinyint) {
		return $this->orBeginsWith(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewEndsWith($tinyint) {
		return $this->orEndsWith(Guest::IS_NEW, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orIsNewContains($tinyint) {
		return $this->orContains(Guest::IS_NEW, $tinyint);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByIsNewAsc() {
		return $this->orderBy(Guest::IS_NEW, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByIsNewDesc() {
		return $this->orderBy(Guest::IS_NEW, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByIsNew() {
		return $this->groupBy(Guest::IS_NEW);
	}

	/**
	 * @return GuestQuery
	 */
	function andActive($tinyint) {
		return $this->and(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveNull() {
		return $this->andNull(Guest::ACTIVE);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(Guest::ACTIVE);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(Guest::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActive($tinyint) {
		return $this->or(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveNull() {
		return $this->orNull(Guest::ACTIVE);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(Guest::ACTIVE);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(Guest::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(Guest::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(Guest::ACTIVE, $tinyint);
	}


	/**
	 * @return GuestQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(Guest::ACTIVE, self::ASC);
	}

	/**
	 * @return GuestQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(Guest::ACTIVE, self::DESC);
	}

	/**
	 * @return GuestQuery
	 */
	function groupByActive() {
		return $this->groupBy(Guest::ACTIVE);
	}


}