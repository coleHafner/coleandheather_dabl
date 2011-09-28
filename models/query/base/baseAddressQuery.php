<?php

abstract class BaseAddressQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = Address::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return AddressQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new AddressQuery($table_name, $alias);
	}

	/**
	 * @return Address[]
	 */
	function select() {
		return Address::doSelect($this);
	}

	/**
	 * @return Address
	 */
	function selectOne() {
		return array_shift(Address::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return Address::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return Address::doCount($this);
	}

	/**
	 * @return AddressQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Address::isTemporalType($type)) {
			$value = Address::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Address::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return AddressQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Address::isTemporalType($type)) {
			$value = Address::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Address::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressId($integer) {
		return $this->and(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdNot($integer) {
		return $this->andNot(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdLike($integer) {
		return $this->andLike(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdNotLike($integer) {
		return $this->andNotLike(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdGreater($integer) {
		return $this->andGreater(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdLess($integer) {
		return $this->andLess(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdLessEqual($integer) {
		return $this->andLessEqual(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdNull() {
		return $this->andNull(Address::ADDRESS_ID);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdNotNull() {
		return $this->andNotNull(Address::ADDRESS_ID);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdBetween($integer, $from, $to) {
		return $this->andBetween(Address::ADDRESS_ID, $integer, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdBeginsWith($integer) {
		return $this->andBeginsWith(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdEndsWith($integer) {
		return $this->andEndsWith(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function andAddressIdContains($integer) {
		return $this->andContains(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressId($integer) {
		return $this->or(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdNot($integer) {
		return $this->orNot(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdLike($integer) {
		return $this->orLike(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdNotLike($integer) {
		return $this->orNotLike(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdGreater($integer) {
		return $this->orGreater(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdLess($integer) {
		return $this->orLess(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdLessEqual($integer) {
		return $this->orLessEqual(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdNull() {
		return $this->orNull(Address::ADDRESS_ID);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdNotNull() {
		return $this->orNotNull(Address::ADDRESS_ID);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdBetween($integer, $from, $to) {
		return $this->orBetween(Address::ADDRESS_ID, $integer, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdBeginsWith($integer) {
		return $this->orBeginsWith(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdEndsWith($integer) {
		return $this->orEndsWith(Address::ADDRESS_ID, $integer);
	}

	/**
	 * @return AddressQuery
	 */
	function orAddressIdContains($integer) {
		return $this->orContains(Address::ADDRESS_ID, $integer);
	}


	/**
	 * @return AddressQuery
	 */
	function orderByAddressIdAsc() {
		return $this->orderBy(Address::ADDRESS_ID, self::ASC);
	}

	/**
	 * @return AddressQuery
	 */
	function orderByAddressIdDesc() {
		return $this->orderBy(Address::ADDRESS_ID, self::DESC);
	}

	/**
	 * @return AddressQuery
	 */
	function groupByAddressId() {
		return $this->groupBy(Address::ADDRESS_ID);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddress($varchar) {
		return $this->and(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressNot($varchar) {
		return $this->andNot(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressLike($varchar) {
		return $this->andLike(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressNotLike($varchar) {
		return $this->andNotLike(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressGreater($varchar) {
		return $this->andGreater(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressGreaterEqual($varchar) {
		return $this->andGreaterEqual(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressLess($varchar) {
		return $this->andLess(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressLessEqual($varchar) {
		return $this->andLessEqual(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressNull() {
		return $this->andNull(Address::STREET_ADDRESS);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressNotNull() {
		return $this->andNotNull(Address::STREET_ADDRESS);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressBetween($varchar, $from, $to) {
		return $this->andBetween(Address::STREET_ADDRESS, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressBeginsWith($varchar) {
		return $this->andBeginsWith(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressEndsWith($varchar) {
		return $this->andEndsWith(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStreetAddressContains($varchar) {
		return $this->andContains(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddress($varchar) {
		return $this->or(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressNot($varchar) {
		return $this->orNot(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressLike($varchar) {
		return $this->orLike(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressNotLike($varchar) {
		return $this->orNotLike(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressGreater($varchar) {
		return $this->orGreater(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressGreaterEqual($varchar) {
		return $this->orGreaterEqual(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressLess($varchar) {
		return $this->orLess(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressLessEqual($varchar) {
		return $this->orLessEqual(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressNull() {
		return $this->orNull(Address::STREET_ADDRESS);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressNotNull() {
		return $this->orNotNull(Address::STREET_ADDRESS);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressBetween($varchar, $from, $to) {
		return $this->orBetween(Address::STREET_ADDRESS, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressBeginsWith($varchar) {
		return $this->orBeginsWith(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressEndsWith($varchar) {
		return $this->orEndsWith(Address::STREET_ADDRESS, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStreetAddressContains($varchar) {
		return $this->orContains(Address::STREET_ADDRESS, $varchar);
	}


	/**
	 * @return AddressQuery
	 */
	function orderByStreetAddressAsc() {
		return $this->orderBy(Address::STREET_ADDRESS, self::ASC);
	}

	/**
	 * @return AddressQuery
	 */
	function orderByStreetAddressDesc() {
		return $this->orderBy(Address::STREET_ADDRESS, self::DESC);
	}

	/**
	 * @return AddressQuery
	 */
	function groupByStreetAddress() {
		return $this->groupBy(Address::STREET_ADDRESS);
	}

	/**
	 * @return AddressQuery
	 */
	function andCity($varchar) {
		return $this->and(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityNot($varchar) {
		return $this->andNot(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityLike($varchar) {
		return $this->andLike(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityNotLike($varchar) {
		return $this->andNotLike(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityGreater($varchar) {
		return $this->andGreater(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityGreaterEqual($varchar) {
		return $this->andGreaterEqual(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityLess($varchar) {
		return $this->andLess(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityLessEqual($varchar) {
		return $this->andLessEqual(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityNull() {
		return $this->andNull(Address::CITY);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityNotNull() {
		return $this->andNotNull(Address::CITY);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityBetween($varchar, $from, $to) {
		return $this->andBetween(Address::CITY, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityBeginsWith($varchar) {
		return $this->andBeginsWith(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityEndsWith($varchar) {
		return $this->andEndsWith(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andCityContains($varchar) {
		return $this->andContains(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCity($varchar) {
		return $this->or(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityNot($varchar) {
		return $this->orNot(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityLike($varchar) {
		return $this->orLike(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityNotLike($varchar) {
		return $this->orNotLike(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityGreater($varchar) {
		return $this->orGreater(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityGreaterEqual($varchar) {
		return $this->orGreaterEqual(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityLess($varchar) {
		return $this->orLess(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityLessEqual($varchar) {
		return $this->orLessEqual(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityNull() {
		return $this->orNull(Address::CITY);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityNotNull() {
		return $this->orNotNull(Address::CITY);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityBetween($varchar, $from, $to) {
		return $this->orBetween(Address::CITY, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityBeginsWith($varchar) {
		return $this->orBeginsWith(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityEndsWith($varchar) {
		return $this->orEndsWith(Address::CITY, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orCityContains($varchar) {
		return $this->orContains(Address::CITY, $varchar);
	}


	/**
	 * @return AddressQuery
	 */
	function orderByCityAsc() {
		return $this->orderBy(Address::CITY, self::ASC);
	}

	/**
	 * @return AddressQuery
	 */
	function orderByCityDesc() {
		return $this->orderBy(Address::CITY, self::DESC);
	}

	/**
	 * @return AddressQuery
	 */
	function groupByCity() {
		return $this->groupBy(Address::CITY);
	}

	/**
	 * @return AddressQuery
	 */
	function andState($varchar) {
		return $this->and(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateNot($varchar) {
		return $this->andNot(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateLike($varchar) {
		return $this->andLike(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateNotLike($varchar) {
		return $this->andNotLike(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateGreater($varchar) {
		return $this->andGreater(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateGreaterEqual($varchar) {
		return $this->andGreaterEqual(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateLess($varchar) {
		return $this->andLess(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateLessEqual($varchar) {
		return $this->andLessEqual(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateNull() {
		return $this->andNull(Address::STATE);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateNotNull() {
		return $this->andNotNull(Address::STATE);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateBetween($varchar, $from, $to) {
		return $this->andBetween(Address::STATE, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateBeginsWith($varchar) {
		return $this->andBeginsWith(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateEndsWith($varchar) {
		return $this->andEndsWith(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andStateContains($varchar) {
		return $this->andContains(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orState($varchar) {
		return $this->or(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateNot($varchar) {
		return $this->orNot(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateLike($varchar) {
		return $this->orLike(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateNotLike($varchar) {
		return $this->orNotLike(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateGreater($varchar) {
		return $this->orGreater(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateGreaterEqual($varchar) {
		return $this->orGreaterEqual(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateLess($varchar) {
		return $this->orLess(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateLessEqual($varchar) {
		return $this->orLessEqual(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateNull() {
		return $this->orNull(Address::STATE);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateNotNull() {
		return $this->orNotNull(Address::STATE);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateBetween($varchar, $from, $to) {
		return $this->orBetween(Address::STATE, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateBeginsWith($varchar) {
		return $this->orBeginsWith(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateEndsWith($varchar) {
		return $this->orEndsWith(Address::STATE, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orStateContains($varchar) {
		return $this->orContains(Address::STATE, $varchar);
	}


	/**
	 * @return AddressQuery
	 */
	function orderByStateAsc() {
		return $this->orderBy(Address::STATE, self::ASC);
	}

	/**
	 * @return AddressQuery
	 */
	function orderByStateDesc() {
		return $this->orderBy(Address::STATE, self::DESC);
	}

	/**
	 * @return AddressQuery
	 */
	function groupByState() {
		return $this->groupBy(Address::STATE);
	}

	/**
	 * @return AddressQuery
	 */
	function andZip($varchar) {
		return $this->and(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipNot($varchar) {
		return $this->andNot(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipLike($varchar) {
		return $this->andLike(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipNotLike($varchar) {
		return $this->andNotLike(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipGreater($varchar) {
		return $this->andGreater(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipGreaterEqual($varchar) {
		return $this->andGreaterEqual(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipLess($varchar) {
		return $this->andLess(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipLessEqual($varchar) {
		return $this->andLessEqual(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipNull() {
		return $this->andNull(Address::ZIP);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipNotNull() {
		return $this->andNotNull(Address::ZIP);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipBetween($varchar, $from, $to) {
		return $this->andBetween(Address::ZIP, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipBeginsWith($varchar) {
		return $this->andBeginsWith(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipEndsWith($varchar) {
		return $this->andEndsWith(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function andZipContains($varchar) {
		return $this->andContains(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZip($varchar) {
		return $this->or(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipNot($varchar) {
		return $this->orNot(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipLike($varchar) {
		return $this->orLike(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipNotLike($varchar) {
		return $this->orNotLike(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipGreater($varchar) {
		return $this->orGreater(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipGreaterEqual($varchar) {
		return $this->orGreaterEqual(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipLess($varchar) {
		return $this->orLess(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipLessEqual($varchar) {
		return $this->orLessEqual(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipNull() {
		return $this->orNull(Address::ZIP);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipNotNull() {
		return $this->orNotNull(Address::ZIP);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipBetween($varchar, $from, $to) {
		return $this->orBetween(Address::ZIP, $varchar, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipBeginsWith($varchar) {
		return $this->orBeginsWith(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipEndsWith($varchar) {
		return $this->orEndsWith(Address::ZIP, $varchar);
	}

	/**
	 * @return AddressQuery
	 */
	function orZipContains($varchar) {
		return $this->orContains(Address::ZIP, $varchar);
	}


	/**
	 * @return AddressQuery
	 */
	function orderByZipAsc() {
		return $this->orderBy(Address::ZIP, self::ASC);
	}

	/**
	 * @return AddressQuery
	 */
	function orderByZipDesc() {
		return $this->orderBy(Address::ZIP, self::DESC);
	}

	/**
	 * @return AddressQuery
	 */
	function groupByZip() {
		return $this->groupBy(Address::ZIP);
	}

	/**
	 * @return AddressQuery
	 */
	function andActive($tinyint) {
		return $this->and(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveNull() {
		return $this->andNull(Address::ACTIVE);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(Address::ACTIVE);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(Address::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActive($tinyint) {
		return $this->or(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveNull() {
		return $this->orNull(Address::ACTIVE);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(Address::ACTIVE);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(Address::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(Address::ACTIVE, $tinyint);
	}

	/**
	 * @return AddressQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(Address::ACTIVE, $tinyint);
	}


	/**
	 * @return AddressQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(Address::ACTIVE, self::ASC);
	}

	/**
	 * @return AddressQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(Address::ACTIVE, self::DESC);
	}

	/**
	 * @return AddressQuery
	 */
	function groupByActive() {
		return $this->groupBy(Address::ACTIVE);
	}


}