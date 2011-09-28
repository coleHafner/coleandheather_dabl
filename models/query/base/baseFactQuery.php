<?php

abstract class BaseFactQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = Fact::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return FactQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new FactQuery($table_name, $alias);
	}

	/**
	 * @return Fact[]
	 */
	function select() {
		return Fact::doSelect($this);
	}

	/**
	 * @return Fact
	 */
	function selectOne() {
		return array_shift(Fact::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return Fact::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return Fact::doCount($this);
	}

	/**
	 * @return FactQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Fact::isTemporalType($type)) {
			$value = Fact::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Fact::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return FactQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Fact::isTemporalType($type)) {
			$value = Fact::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Fact::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return FactQuery
	 */
	function andFactId($integer) {
		return $this->and(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdNot($integer) {
		return $this->andNot(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdLike($integer) {
		return $this->andLike(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdNotLike($integer) {
		return $this->andNotLike(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdGreater($integer) {
		return $this->andGreater(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdLess($integer) {
		return $this->andLess(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdLessEqual($integer) {
		return $this->andLessEqual(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdNull() {
		return $this->andNull(Fact::FACT_ID);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdNotNull() {
		return $this->andNotNull(Fact::FACT_ID);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdBetween($integer, $from, $to) {
		return $this->andBetween(Fact::FACT_ID, $integer, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdBeginsWith($integer) {
		return $this->andBeginsWith(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdEndsWith($integer) {
		return $this->andEndsWith(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andFactIdContains($integer) {
		return $this->andContains(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactId($integer) {
		return $this->or(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdNot($integer) {
		return $this->orNot(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdLike($integer) {
		return $this->orLike(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdNotLike($integer) {
		return $this->orNotLike(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdGreater($integer) {
		return $this->orGreater(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdLess($integer) {
		return $this->orLess(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdLessEqual($integer) {
		return $this->orLessEqual(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdNull() {
		return $this->orNull(Fact::FACT_ID);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdNotNull() {
		return $this->orNotNull(Fact::FACT_ID);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdBetween($integer, $from, $to) {
		return $this->orBetween(Fact::FACT_ID, $integer, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdBeginsWith($integer) {
		return $this->orBeginsWith(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdEndsWith($integer) {
		return $this->orEndsWith(Fact::FACT_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orFactIdContains($integer) {
		return $this->orContains(Fact::FACT_ID, $integer);
	}


	/**
	 * @return FactQuery
	 */
	function orderByFactIdAsc() {
		return $this->orderBy(Fact::FACT_ID, self::ASC);
	}

	/**
	 * @return FactQuery
	 */
	function orderByFactIdDesc() {
		return $this->orderBy(Fact::FACT_ID, self::DESC);
	}

	/**
	 * @return FactQuery
	 */
	function groupByFactId() {
		return $this->groupBy(Fact::FACT_ID);
	}

	/**
	 * @return FactQuery
	 */
	function andUserId($integer) {
		return $this->and(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdNot($integer) {
		return $this->andNot(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdLike($integer) {
		return $this->andLike(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdNotLike($integer) {
		return $this->andNotLike(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdGreater($integer) {
		return $this->andGreater(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdLess($integer) {
		return $this->andLess(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdLessEqual($integer) {
		return $this->andLessEqual(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdNull() {
		return $this->andNull(Fact::USER_ID);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdNotNull() {
		return $this->andNotNull(Fact::USER_ID);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdBetween($integer, $from, $to) {
		return $this->andBetween(Fact::USER_ID, $integer, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdBeginsWith($integer) {
		return $this->andBeginsWith(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdEndsWith($integer) {
		return $this->andEndsWith(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function andUserIdContains($integer) {
		return $this->andContains(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserId($integer) {
		return $this->or(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdNot($integer) {
		return $this->orNot(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdLike($integer) {
		return $this->orLike(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdNotLike($integer) {
		return $this->orNotLike(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdGreater($integer) {
		return $this->orGreater(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdLess($integer) {
		return $this->orLess(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdLessEqual($integer) {
		return $this->orLessEqual(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdNull() {
		return $this->orNull(Fact::USER_ID);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdNotNull() {
		return $this->orNotNull(Fact::USER_ID);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdBetween($integer, $from, $to) {
		return $this->orBetween(Fact::USER_ID, $integer, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdBeginsWith($integer) {
		return $this->orBeginsWith(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdEndsWith($integer) {
		return $this->orEndsWith(Fact::USER_ID, $integer);
	}

	/**
	 * @return FactQuery
	 */
	function orUserIdContains($integer) {
		return $this->orContains(Fact::USER_ID, $integer);
	}


	/**
	 * @return FactQuery
	 */
	function orderByUserIdAsc() {
		return $this->orderBy(Fact::USER_ID, self::ASC);
	}

	/**
	 * @return FactQuery
	 */
	function orderByUserIdDesc() {
		return $this->orderBy(Fact::USER_ID, self::DESC);
	}

	/**
	 * @return FactQuery
	 */
	function groupByUserId() {
		return $this->groupBy(Fact::USER_ID);
	}

	/**
	 * @return FactQuery
	 */
	function andFact($varchar) {
		return $this->and(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactNot($varchar) {
		return $this->andNot(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactLike($varchar) {
		return $this->andLike(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactNotLike($varchar) {
		return $this->andNotLike(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactGreater($varchar) {
		return $this->andGreater(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactGreaterEqual($varchar) {
		return $this->andGreaterEqual(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactLess($varchar) {
		return $this->andLess(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactLessEqual($varchar) {
		return $this->andLessEqual(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactNull() {
		return $this->andNull(Fact::FACT);
	}

	/**
	 * @return FactQuery
	 */
	function andFactNotNull() {
		return $this->andNotNull(Fact::FACT);
	}

	/**
	 * @return FactQuery
	 */
	function andFactBetween($varchar, $from, $to) {
		return $this->andBetween(Fact::FACT, $varchar, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function andFactBeginsWith($varchar) {
		return $this->andBeginsWith(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactEndsWith($varchar) {
		return $this->andEndsWith(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function andFactContains($varchar) {
		return $this->andContains(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFact($varchar) {
		return $this->or(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactNot($varchar) {
		return $this->orNot(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactLike($varchar) {
		return $this->orLike(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactNotLike($varchar) {
		return $this->orNotLike(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactGreater($varchar) {
		return $this->orGreater(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactGreaterEqual($varchar) {
		return $this->orGreaterEqual(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactLess($varchar) {
		return $this->orLess(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactLessEqual($varchar) {
		return $this->orLessEqual(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactNull() {
		return $this->orNull(Fact::FACT);
	}

	/**
	 * @return FactQuery
	 */
	function orFactNotNull() {
		return $this->orNotNull(Fact::FACT);
	}

	/**
	 * @return FactQuery
	 */
	function orFactBetween($varchar, $from, $to) {
		return $this->orBetween(Fact::FACT, $varchar, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function orFactBeginsWith($varchar) {
		return $this->orBeginsWith(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactEndsWith($varchar) {
		return $this->orEndsWith(Fact::FACT, $varchar);
	}

	/**
	 * @return FactQuery
	 */
	function orFactContains($varchar) {
		return $this->orContains(Fact::FACT, $varchar);
	}


	/**
	 * @return FactQuery
	 */
	function orderByFactAsc() {
		return $this->orderBy(Fact::FACT, self::ASC);
	}

	/**
	 * @return FactQuery
	 */
	function orderByFactDesc() {
		return $this->orderBy(Fact::FACT, self::DESC);
	}

	/**
	 * @return FactQuery
	 */
	function groupByFact() {
		return $this->groupBy(Fact::FACT);
	}

	/**
	 * @return FactQuery
	 */
	function andActive($tinyint) {
		return $this->and(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveNull() {
		return $this->andNull(Fact::ACTIVE);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(Fact::ACTIVE);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(Fact::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActive($tinyint) {
		return $this->or(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveNull() {
		return $this->orNull(Fact::ACTIVE);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(Fact::ACTIVE);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(Fact::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(Fact::ACTIVE, $tinyint);
	}

	/**
	 * @return FactQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(Fact::ACTIVE, $tinyint);
	}


	/**
	 * @return FactQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(Fact::ACTIVE, self::ASC);
	}

	/**
	 * @return FactQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(Fact::ACTIVE, self::DESC);
	}

	/**
	 * @return FactQuery
	 */
	function groupByActive() {
		return $this->groupBy(Fact::ACTIVE);
	}


}