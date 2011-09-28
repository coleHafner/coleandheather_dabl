<?php

abstract class BaseGuestToGuestTypeQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = GuestToGuestType::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return GuestToGuestTypeQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new GuestToGuestTypeQuery($table_name, $alias);
	}

	/**
	 * @return GuestToGuestType[]
	 */
	function select() {
		return GuestToGuestType::doSelect($this);
	}

	/**
	 * @return GuestToGuestType
	 */
	function selectOne() {
		return array_shift(GuestToGuestType::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return GuestToGuestType::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return GuestToGuestType::doCount($this);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && GuestToGuestType::isTemporalType($type)) {
			$value = GuestToGuestType::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = GuestToGuestType::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && GuestToGuestType::isTemporalType($type)) {
			$value = GuestToGuestType::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = GuestToGuestType::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeId($integer) {
		return $this->and(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdNot($integer) {
		return $this->andNot(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdLike($integer) {
		return $this->andLike(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdNotLike($integer) {
		return $this->andNotLike(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdGreater($integer) {
		return $this->andGreater(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdGreaterEqual($integer) {
		return $this->andGreaterEqual(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdLess($integer) {
		return $this->andLess(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdLessEqual($integer) {
		return $this->andLessEqual(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdNull() {
		return $this->andNull(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdNotNull() {
		return $this->andNotNull(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdBetween($integer, $from, $to) {
		return $this->andBetween(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdBeginsWith($integer) {
		return $this->andBeginsWith(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdEndsWith($integer) {
		return $this->andEndsWith(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestToGuestTypeIdContains($integer) {
		return $this->andContains(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeId($integer) {
		return $this->or(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdNot($integer) {
		return $this->orNot(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdLike($integer) {
		return $this->orLike(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdNotLike($integer) {
		return $this->orNotLike(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdGreater($integer) {
		return $this->orGreater(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdGreaterEqual($integer) {
		return $this->orGreaterEqual(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdLess($integer) {
		return $this->orLess(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdLessEqual($integer) {
		return $this->orLessEqual(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdNull() {
		return $this->orNull(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdNotNull() {
		return $this->orNotNull(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdBetween($integer, $from, $to) {
		return $this->orBetween(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdBeginsWith($integer) {
		return $this->orBeginsWith(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdEndsWith($integer) {
		return $this->orEndsWith(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestToGuestTypeIdContains($integer) {
		return $this->orContains(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, $integer);
	}


	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orderByGuestToGuestTypeIdAsc() {
		return $this->orderBy(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, self::ASC);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orderByGuestToGuestTypeIdDesc() {
		return $this->orderBy(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID, self::DESC);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function groupByGuestToGuestTypeId() {
		return $this->groupBy(GuestToGuestType::GUEST_TO_GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestId($integer) {
		return $this->and(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdNot($integer) {
		return $this->andNot(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdLike($integer) {
		return $this->andLike(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdNotLike($integer) {
		return $this->andNotLike(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdGreater($integer) {
		return $this->andGreater(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdGreaterEqual($integer) {
		return $this->andGreaterEqual(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdLess($integer) {
		return $this->andLess(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdLessEqual($integer) {
		return $this->andLessEqual(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdNull() {
		return $this->andNull(GuestToGuestType::GUEST_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdNotNull() {
		return $this->andNotNull(GuestToGuestType::GUEST_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdBetween($integer, $from, $to) {
		return $this->andBetween(GuestToGuestType::GUEST_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdBeginsWith($integer) {
		return $this->andBeginsWith(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdEndsWith($integer) {
		return $this->andEndsWith(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestIdContains($integer) {
		return $this->andContains(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestId($integer) {
		return $this->or(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdNot($integer) {
		return $this->orNot(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdLike($integer) {
		return $this->orLike(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdNotLike($integer) {
		return $this->orNotLike(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdGreater($integer) {
		return $this->orGreater(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdGreaterEqual($integer) {
		return $this->orGreaterEqual(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdLess($integer) {
		return $this->orLess(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdLessEqual($integer) {
		return $this->orLessEqual(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdNull() {
		return $this->orNull(GuestToGuestType::GUEST_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdNotNull() {
		return $this->orNotNull(GuestToGuestType::GUEST_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdBetween($integer, $from, $to) {
		return $this->orBetween(GuestToGuestType::GUEST_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdBeginsWith($integer) {
		return $this->orBeginsWith(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdEndsWith($integer) {
		return $this->orEndsWith(GuestToGuestType::GUEST_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestIdContains($integer) {
		return $this->orContains(GuestToGuestType::GUEST_ID, $integer);
	}


	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orderByGuestIdAsc() {
		return $this->orderBy(GuestToGuestType::GUEST_ID, self::ASC);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orderByGuestIdDesc() {
		return $this->orderBy(GuestToGuestType::GUEST_ID, self::DESC);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function groupByGuestId() {
		return $this->groupBy(GuestToGuestType::GUEST_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeId($integer) {
		return $this->and(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdNot($integer) {
		return $this->andNot(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdLike($integer) {
		return $this->andLike(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdNotLike($integer) {
		return $this->andNotLike(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdGreater($integer) {
		return $this->andGreater(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdGreaterEqual($integer) {
		return $this->andGreaterEqual(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdLess($integer) {
		return $this->andLess(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdLessEqual($integer) {
		return $this->andLessEqual(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdNull() {
		return $this->andNull(GuestToGuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdNotNull() {
		return $this->andNotNull(GuestToGuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdBetween($integer, $from, $to) {
		return $this->andBetween(GuestToGuestType::GUEST_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdBeginsWith($integer) {
		return $this->andBeginsWith(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdEndsWith($integer) {
		return $this->andEndsWith(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function andGuestTypeIdContains($integer) {
		return $this->andContains(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeId($integer) {
		return $this->or(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdNot($integer) {
		return $this->orNot(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdLike($integer) {
		return $this->orLike(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdNotLike($integer) {
		return $this->orNotLike(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdGreater($integer) {
		return $this->orGreater(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdGreaterEqual($integer) {
		return $this->orGreaterEqual(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdLess($integer) {
		return $this->orLess(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdLessEqual($integer) {
		return $this->orLessEqual(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdNull() {
		return $this->orNull(GuestToGuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdNotNull() {
		return $this->orNotNull(GuestToGuestType::GUEST_TYPE_ID);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdBetween($integer, $from, $to) {
		return $this->orBetween(GuestToGuestType::GUEST_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdBeginsWith($integer) {
		return $this->orBeginsWith(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdEndsWith($integer) {
		return $this->orEndsWith(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orGuestTypeIdContains($integer) {
		return $this->orContains(GuestToGuestType::GUEST_TYPE_ID, $integer);
	}


	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orderByGuestTypeIdAsc() {
		return $this->orderBy(GuestToGuestType::GUEST_TYPE_ID, self::ASC);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function orderByGuestTypeIdDesc() {
		return $this->orderBy(GuestToGuestType::GUEST_TYPE_ID, self::DESC);
	}

	/**
	 * @return GuestToGuestTypeQuery
	 */
	function groupByGuestTypeId() {
		return $this->groupBy(GuestToGuestType::GUEST_TYPE_ID);
	}


}