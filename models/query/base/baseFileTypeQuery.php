<?php

abstract class BaseFileTypeQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = FileType::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return FileTypeQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new FileTypeQuery($table_name, $alias);
	}

	/**
	 * @return FileType[]
	 */
	function select() {
		return FileType::doSelect($this);
	}

	/**
	 * @return FileType
	 */
	function selectOne() {
		return array_shift(FileType::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return FileType::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return FileType::doCount($this);
	}

	/**
	 * @return FileTypeQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && FileType::isTemporalType($type)) {
			$value = FileType::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = FileType::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return FileTypeQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && FileType::isTemporalType($type)) {
			$value = FileType::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = FileType::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeId($integer) {
		return $this->and(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdNot($integer) {
		return $this->andNot(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdLike($integer) {
		return $this->andLike(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdNotLike($integer) {
		return $this->andNotLike(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdGreater($integer) {
		return $this->andGreater(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdGreaterEqual($integer) {
		return $this->andGreaterEqual(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdLess($integer) {
		return $this->andLess(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdLessEqual($integer) {
		return $this->andLessEqual(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdNull() {
		return $this->andNull(FileType::FILE_TYPE_ID);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdNotNull() {
		return $this->andNotNull(FileType::FILE_TYPE_ID);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdBetween($integer, $from, $to) {
		return $this->andBetween(FileType::FILE_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdBeginsWith($integer) {
		return $this->andBeginsWith(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdEndsWith($integer) {
		return $this->andEndsWith(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andFileTypeIdContains($integer) {
		return $this->andContains(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeId($integer) {
		return $this->or(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdNot($integer) {
		return $this->orNot(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdLike($integer) {
		return $this->orLike(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdNotLike($integer) {
		return $this->orNotLike(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdGreater($integer) {
		return $this->orGreater(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdGreaterEqual($integer) {
		return $this->orGreaterEqual(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdLess($integer) {
		return $this->orLess(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdLessEqual($integer) {
		return $this->orLessEqual(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdNull() {
		return $this->orNull(FileType::FILE_TYPE_ID);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdNotNull() {
		return $this->orNotNull(FileType::FILE_TYPE_ID);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdBetween($integer, $from, $to) {
		return $this->orBetween(FileType::FILE_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdBeginsWith($integer) {
		return $this->orBeginsWith(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdEndsWith($integer) {
		return $this->orEndsWith(FileType::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orFileTypeIdContains($integer) {
		return $this->orContains(FileType::FILE_TYPE_ID, $integer);
	}


	/**
	 * @return FileTypeQuery
	 */
	function orderByFileTypeIdAsc() {
		return $this->orderBy(FileType::FILE_TYPE_ID, self::ASC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orderByFileTypeIdDesc() {
		return $this->orderBy(FileType::FILE_TYPE_ID, self::DESC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function groupByFileTypeId() {
		return $this->groupBy(FileType::FILE_TYPE_ID);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitle($varchar) {
		return $this->and(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleNot($varchar) {
		return $this->andNot(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleLike($varchar) {
		return $this->andLike(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleNotLike($varchar) {
		return $this->andNotLike(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleGreater($varchar) {
		return $this->andGreater(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleGreaterEqual($varchar) {
		return $this->andGreaterEqual(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleLess($varchar) {
		return $this->andLess(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleLessEqual($varchar) {
		return $this->andLessEqual(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleNull() {
		return $this->andNull(FileType::TITLE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleNotNull() {
		return $this->andNotNull(FileType::TITLE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleBetween($varchar, $from, $to) {
		return $this->andBetween(FileType::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleBeginsWith($varchar) {
		return $this->andBeginsWith(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleEndsWith($varchar) {
		return $this->andEndsWith(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andTitleContains($varchar) {
		return $this->andContains(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitle($varchar) {
		return $this->or(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleNot($varchar) {
		return $this->orNot(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleLike($varchar) {
		return $this->orLike(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleNotLike($varchar) {
		return $this->orNotLike(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleGreater($varchar) {
		return $this->orGreater(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleGreaterEqual($varchar) {
		return $this->orGreaterEqual(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleLess($varchar) {
		return $this->orLess(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleLessEqual($varchar) {
		return $this->orLessEqual(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleNull() {
		return $this->orNull(FileType::TITLE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleNotNull() {
		return $this->orNotNull(FileType::TITLE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleBetween($varchar, $from, $to) {
		return $this->orBetween(FileType::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleBeginsWith($varchar) {
		return $this->orBeginsWith(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleEndsWith($varchar) {
		return $this->orEndsWith(FileType::TITLE, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orTitleContains($varchar) {
		return $this->orContains(FileType::TITLE, $varchar);
	}


	/**
	 * @return FileTypeQuery
	 */
	function orderByTitleAsc() {
		return $this->orderBy(FileType::TITLE, self::ASC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orderByTitleDesc() {
		return $this->orderBy(FileType::TITLE, self::DESC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function groupByTitle() {
		return $this->groupBy(FileType::TITLE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActive($tinyint) {
		return $this->and(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveNull() {
		return $this->andNull(FileType::ACTIVE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(FileType::ACTIVE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(FileType::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActive($tinyint) {
		return $this->or(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveNull() {
		return $this->orNull(FileType::ACTIVE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(FileType::ACTIVE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(FileType::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(FileType::ACTIVE, $tinyint);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(FileType::ACTIVE, $tinyint);
	}


	/**
	 * @return FileTypeQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(FileType::ACTIVE, self::ASC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(FileType::ACTIVE, self::DESC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function groupByActive() {
		return $this->groupBy(FileType::ACTIVE);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectory($varchar) {
		return $this->and(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryNot($varchar) {
		return $this->andNot(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryLike($varchar) {
		return $this->andLike(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryNotLike($varchar) {
		return $this->andNotLike(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryGreater($varchar) {
		return $this->andGreater(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryGreaterEqual($varchar) {
		return $this->andGreaterEqual(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryLess($varchar) {
		return $this->andLess(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryLessEqual($varchar) {
		return $this->andLessEqual(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryNull() {
		return $this->andNull(FileType::DIRECTORY);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryNotNull() {
		return $this->andNotNull(FileType::DIRECTORY);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryBetween($varchar, $from, $to) {
		return $this->andBetween(FileType::DIRECTORY, $varchar, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryBeginsWith($varchar) {
		return $this->andBeginsWith(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryEndsWith($varchar) {
		return $this->andEndsWith(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function andDirectoryContains($varchar) {
		return $this->andContains(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectory($varchar) {
		return $this->or(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryNot($varchar) {
		return $this->orNot(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryLike($varchar) {
		return $this->orLike(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryNotLike($varchar) {
		return $this->orNotLike(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryGreater($varchar) {
		return $this->orGreater(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryGreaterEqual($varchar) {
		return $this->orGreaterEqual(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryLess($varchar) {
		return $this->orLess(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryLessEqual($varchar) {
		return $this->orLessEqual(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryNull() {
		return $this->orNull(FileType::DIRECTORY);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryNotNull() {
		return $this->orNotNull(FileType::DIRECTORY);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryBetween($varchar, $from, $to) {
		return $this->orBetween(FileType::DIRECTORY, $varchar, $from, $to);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryBeginsWith($varchar) {
		return $this->orBeginsWith(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryEndsWith($varchar) {
		return $this->orEndsWith(FileType::DIRECTORY, $varchar);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orDirectoryContains($varchar) {
		return $this->orContains(FileType::DIRECTORY, $varchar);
	}


	/**
	 * @return FileTypeQuery
	 */
	function orderByDirectoryAsc() {
		return $this->orderBy(FileType::DIRECTORY, self::ASC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function orderByDirectoryDesc() {
		return $this->orderBy(FileType::DIRECTORY, self::DESC);
	}

	/**
	 * @return FileTypeQuery
	 */
	function groupByDirectory() {
		return $this->groupBy(FileType::DIRECTORY);
	}


}