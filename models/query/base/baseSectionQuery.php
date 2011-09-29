<?php

abstract class BaseSectionQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = Section::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return SectionQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new SectionQuery($table_name, $alias);
	}

	/**
	 * @return Section[]
	 */
	function select() {
		return Section::doSelect($this);
	}

	/**
	 * @return Section
	 */
	function selectOne() {
		return array_shift(Section::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return Section::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return Section::doCount($this);
	}

	/**
	 * @return SectionQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Section::isTemporalType($type)) {
			$value = Section::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Section::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return SectionQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Section::isTemporalType($type)) {
			$value = Section::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Section::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionId($integer) {
		return $this->and(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdNot($integer) {
		return $this->andNot(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdLike($integer) {
		return $this->andLike(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdNotLike($integer) {
		return $this->andNotLike(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdGreater($integer) {
		return $this->andGreater(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdLess($integer) {
		return $this->andLess(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdLessEqual($integer) {
		return $this->andLessEqual(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdNull() {
		return $this->andNull(Section::SECTION_ID);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdNotNull() {
		return $this->andNotNull(Section::SECTION_ID);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdBetween($integer, $from, $to) {
		return $this->andBetween(Section::SECTION_ID, $integer, $from, $to);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdBeginsWith($integer) {
		return $this->andBeginsWith(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdEndsWith($integer) {
		return $this->andEndsWith(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function andSectionIdContains($integer) {
		return $this->andContains(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionId($integer) {
		return $this->or(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdNot($integer) {
		return $this->orNot(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdLike($integer) {
		return $this->orLike(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdNotLike($integer) {
		return $this->orNotLike(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdGreater($integer) {
		return $this->orGreater(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdLess($integer) {
		return $this->orLess(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdLessEqual($integer) {
		return $this->orLessEqual(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdNull() {
		return $this->orNull(Section::SECTION_ID);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdNotNull() {
		return $this->orNotNull(Section::SECTION_ID);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdBetween($integer, $from, $to) {
		return $this->orBetween(Section::SECTION_ID, $integer, $from, $to);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdBeginsWith($integer) {
		return $this->orBeginsWith(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdEndsWith($integer) {
		return $this->orEndsWith(Section::SECTION_ID, $integer);
	}

	/**
	 * @return SectionQuery
	 */
	function orSectionIdContains($integer) {
		return $this->orContains(Section::SECTION_ID, $integer);
	}


	/**
	 * @return SectionQuery
	 */
	function orderBySectionIdAsc() {
		return $this->orderBy(Section::SECTION_ID, self::ASC);
	}

	/**
	 * @return SectionQuery
	 */
	function orderBySectionIdDesc() {
		return $this->orderBy(Section::SECTION_ID, self::DESC);
	}

	/**
	 * @return SectionQuery
	 */
	function groupBySectionId() {
		return $this->groupBy(Section::SECTION_ID);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitle($varchar) {
		return $this->and(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleNot($varchar) {
		return $this->andNot(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleLike($varchar) {
		return $this->andLike(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleNotLike($varchar) {
		return $this->andNotLike(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleGreater($varchar) {
		return $this->andGreater(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleGreaterEqual($varchar) {
		return $this->andGreaterEqual(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleLess($varchar) {
		return $this->andLess(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleLessEqual($varchar) {
		return $this->andLessEqual(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleNull() {
		return $this->andNull(Section::TITLE);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleNotNull() {
		return $this->andNotNull(Section::TITLE);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleBetween($varchar, $from, $to) {
		return $this->andBetween(Section::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleBeginsWith($varchar) {
		return $this->andBeginsWith(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleEndsWith($varchar) {
		return $this->andEndsWith(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function andTitleContains($varchar) {
		return $this->andContains(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitle($varchar) {
		return $this->or(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleNot($varchar) {
		return $this->orNot(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleLike($varchar) {
		return $this->orLike(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleNotLike($varchar) {
		return $this->orNotLike(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleGreater($varchar) {
		return $this->orGreater(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleGreaterEqual($varchar) {
		return $this->orGreaterEqual(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleLess($varchar) {
		return $this->orLess(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleLessEqual($varchar) {
		return $this->orLessEqual(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleNull() {
		return $this->orNull(Section::TITLE);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleNotNull() {
		return $this->orNotNull(Section::TITLE);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleBetween($varchar, $from, $to) {
		return $this->orBetween(Section::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleBeginsWith($varchar) {
		return $this->orBeginsWith(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleEndsWith($varchar) {
		return $this->orEndsWith(Section::TITLE, $varchar);
	}

	/**
	 * @return SectionQuery
	 */
	function orTitleContains($varchar) {
		return $this->orContains(Section::TITLE, $varchar);
	}


	/**
	 * @return SectionQuery
	 */
	function orderByTitleAsc() {
		return $this->orderBy(Section::TITLE, self::ASC);
	}

	/**
	 * @return SectionQuery
	 */
	function orderByTitleDesc() {
		return $this->orderBy(Section::TITLE, self::DESC);
	}

	/**
	 * @return SectionQuery
	 */
	function groupByTitle() {
		return $this->groupBy(Section::TITLE);
	}

	/**
	 * @return SectionQuery
	 */
	function andActive($tinyint) {
		return $this->and(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveNull() {
		return $this->andNull(Section::ACTIVE);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(Section::ACTIVE);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(Section::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActive($tinyint) {
		return $this->or(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveNull() {
		return $this->orNull(Section::ACTIVE);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(Section::ACTIVE);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(Section::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(Section::ACTIVE, $tinyint);
	}

	/**
	 * @return SectionQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(Section::ACTIVE, $tinyint);
	}


	/**
	 * @return SectionQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(Section::ACTIVE, self::ASC);
	}

	/**
	 * @return SectionQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(Section::ACTIVE, self::DESC);
	}

	/**
	 * @return SectionQuery
	 */
	function groupByActive() {
		return $this->groupBy(Section::ACTIVE);
	}


}