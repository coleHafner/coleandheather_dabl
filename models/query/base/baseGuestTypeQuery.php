<?php

abstract class BaseGuestTypeQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = GuestType::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return GuestTypeQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new GuestTypeQuery($table_name, $alias);
	}

	/**
	 * @return GuestType[]
	 */
	function select() {
		return GuestType::doSelect($this);
	}

	/**
	 * @return GuestType
	 */
	function selectOne() {
		return array_shift(GuestType::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return GuestType::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return GuestType::doCount($this);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && GuestType::isTemporalType($type)) {
			$value = GuestType::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = GuestType::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && GuestType::isTemporalType($type)) {
			$value = GuestType::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = GuestType::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeId($integer) {
		return $this->and(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdNot($integer) {
		return $this->andNot(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdLike($integer) {
		return $this->andLike(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdNotLike($integer) {
		return $this->andNotLike(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdGreater($integer) {
		return $this->andGreater(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdGreaterEqual($integer) {
		return $this->andGreaterEqual(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdLess($integer) {
		return $this->andLess(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdLessEqual($integer) {
		return $this->andLessEqual(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdNull() {
		return $this->andNull(GuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdNotNull() {
		return $this->andNotNull(GuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdBetween($integer, $from, $to) {
		return $this->andBetween(GuestType::GUEST_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdBeginsWith($integer) {
		return $this->andBeginsWith(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdEndsWith($integer) {
		return $this->andEndsWith(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andGuestTypeIdContains($integer) {
		return $this->andContains(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeId($integer) {
		return $this->or(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdNot($integer) {
		return $this->orNot(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdLike($integer) {
		return $this->orLike(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdNotLike($integer) {
		return $this->orNotLike(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdGreater($integer) {
		return $this->orGreater(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdGreaterEqual($integer) {
		return $this->orGreaterEqual(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdLess($integer) {
		return $this->orLess(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdLessEqual($integer) {
		return $this->orLessEqual(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdNull() {
		return $this->orNull(GuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdNotNull() {
		return $this->orNotNull(GuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdBetween($integer, $from, $to) {
		return $this->orBetween(GuestType::GUEST_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdBeginsWith($integer) {
		return $this->orBeginsWith(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdEndsWith($integer) {
		return $this->orEndsWith(GuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orGuestTypeIdContains($integer) {
		return $this->orContains(GuestType::GUEST_TYPE_ID, $integer);
	}


	/**
	 * @return GuestTypeQuery
	 */
	function orderByGuestTypeIdAsc() {
		return $this->orderBy(GuestType::GUEST_TYPE_ID, self::ASC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orderByGuestTypeIdDesc() {
		return $this->orderBy(GuestType::GUEST_TYPE_ID, self::DESC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function groupByGuestTypeId() {
		return $this->groupBy(GuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitle($varchar) {
		return $this->and(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleNot($varchar) {
		return $this->andNot(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleLike($varchar) {
		return $this->andLike(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleNotLike($varchar) {
		return $this->andNotLike(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleGreater($varchar) {
		return $this->andGreater(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleGreaterEqual($varchar) {
		return $this->andGreaterEqual(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleLess($varchar) {
		return $this->andLess(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleLessEqual($varchar) {
		return $this->andLessEqual(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleNull() {
		return $this->andNull(GuestType::TITLE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleNotNull() {
		return $this->andNotNull(GuestType::TITLE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleBetween($varchar, $from, $to) {
		return $this->andBetween(GuestType::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleBeginsWith($varchar) {
		return $this->andBeginsWith(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleEndsWith($varchar) {
		return $this->andEndsWith(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andTitleContains($varchar) {
		return $this->andContains(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitle($varchar) {
		return $this->or(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleNot($varchar) {
		return $this->orNot(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleLike($varchar) {
		return $this->orLike(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleNotLike($varchar) {
		return $this->orNotLike(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleGreater($varchar) {
		return $this->orGreater(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleGreaterEqual($varchar) {
		return $this->orGreaterEqual(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleLess($varchar) {
		return $this->orLess(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleLessEqual($varchar) {
		return $this->orLessEqual(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleNull() {
		return $this->orNull(GuestType::TITLE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleNotNull() {
		return $this->orNotNull(GuestType::TITLE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleBetween($varchar, $from, $to) {
		return $this->orBetween(GuestType::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleBeginsWith($varchar) {
		return $this->orBeginsWith(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleEndsWith($varchar) {
		return $this->orEndsWith(GuestType::TITLE, $varchar);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orTitleContains($varchar) {
		return $this->orContains(GuestType::TITLE, $varchar);
	}


	/**
	 * @return GuestTypeQuery
	 */
	function orderByTitleAsc() {
		return $this->orderBy(GuestType::TITLE, self::ASC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orderByTitleDesc() {
		return $this->orderBy(GuestType::TITLE, self::DESC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function groupByTitle() {
		return $this->groupBy(GuestType::TITLE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecial($tinyint) {
		return $this->and(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialNot($tinyint) {
		return $this->andNot(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialLike($tinyint) {
		return $this->andLike(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialNotLike($tinyint) {
		return $this->andNotLike(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialGreater($tinyint) {
		return $this->andGreater(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialGreaterEqual($tinyint) {
		return $this->andGreaterEqual(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialLess($tinyint) {
		return $this->andLess(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialLessEqual($tinyint) {
		return $this->andLessEqual(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialNull() {
		return $this->andNull(GuestType::IS_SPECIAL);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialNotNull() {
		return $this->andNotNull(GuestType::IS_SPECIAL);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialBetween($tinyint, $from, $to) {
		return $this->andBetween(GuestType::IS_SPECIAL, $tinyint, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialBeginsWith($tinyint) {
		return $this->andBeginsWith(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialEndsWith($tinyint) {
		return $this->andEndsWith(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andIsSpecialContains($tinyint) {
		return $this->andContains(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecial($tinyint) {
		return $this->or(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialNot($tinyint) {
		return $this->orNot(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialLike($tinyint) {
		return $this->orLike(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialNotLike($tinyint) {
		return $this->orNotLike(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialGreater($tinyint) {
		return $this->orGreater(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialGreaterEqual($tinyint) {
		return $this->orGreaterEqual(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialLess($tinyint) {
		return $this->orLess(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialLessEqual($tinyint) {
		return $this->orLessEqual(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialNull() {
		return $this->orNull(GuestType::IS_SPECIAL);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialNotNull() {
		return $this->orNotNull(GuestType::IS_SPECIAL);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialBetween($tinyint, $from, $to) {
		return $this->orBetween(GuestType::IS_SPECIAL, $tinyint, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialBeginsWith($tinyint) {
		return $this->orBeginsWith(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialEndsWith($tinyint) {
		return $this->orEndsWith(GuestType::IS_SPECIAL, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orIsSpecialContains($tinyint) {
		return $this->orContains(GuestType::IS_SPECIAL, $tinyint);
	}


	/**
	 * @return GuestTypeQuery
	 */
	function orderByIsSpecialAsc() {
		return $this->orderBy(GuestType::IS_SPECIAL, self::ASC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orderByIsSpecialDesc() {
		return $this->orderBy(GuestType::IS_SPECIAL, self::DESC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function groupByIsSpecial() {
		return $this->groupBy(GuestType::IS_SPECIAL);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActive($tinyint) {
		return $this->and(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveNull() {
		return $this->andNull(GuestType::ACTIVE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(GuestType::ACTIVE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(GuestType::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActive($tinyint) {
		return $this->or(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveNull() {
		return $this->orNull(GuestType::ACTIVE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(GuestType::ACTIVE);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(GuestType::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(GuestType::ACTIVE, $tinyint);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(GuestType::ACTIVE, $tinyint);
	}


	/**
	 * @return GuestTypeQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(GuestType::ACTIVE, self::ASC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(GuestType::ACTIVE, self::DESC);
	}

	/**
	 * @return GuestTypeQuery
	 */
	function groupByActive() {
		return $this->groupBy(GuestType::ACTIVE);
	}


}