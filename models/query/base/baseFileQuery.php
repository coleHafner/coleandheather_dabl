<?php

abstract class BaseFileQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = File::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return FileQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new FileQuery($table_name, $alias);
	}

	/**
	 * @return File[]
	 */
	function select() {
		return File::doSelect($this);
	}

	/**
	 * @return File
	 */
	function selectOne() {
		return array_shift(File::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return File::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return File::doCount($this);
	}

	/**
	 * @return FileQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && File::isTemporalType($type)) {
			$value = File::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = File::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return FileQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && File::isTemporalType($type)) {
			$value = File::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = File::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return FileQuery
	 */
	function andFileId($integer) {
		return $this->and(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdNot($integer) {
		return $this->andNot(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdLike($integer) {
		return $this->andLike(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdNotLike($integer) {
		return $this->andNotLike(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdGreater($integer) {
		return $this->andGreater(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdGreaterEqual($integer) {
		return $this->andGreaterEqual(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdLess($integer) {
		return $this->andLess(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdLessEqual($integer) {
		return $this->andLessEqual(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdNull() {
		return $this->andNull(File::FILE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdNotNull() {
		return $this->andNotNull(File::FILE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdBetween($integer, $from, $to) {
		return $this->andBetween(File::FILE_ID, $integer, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdBeginsWith($integer) {
		return $this->andBeginsWith(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdEndsWith($integer) {
		return $this->andEndsWith(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileIdContains($integer) {
		return $this->andContains(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileId($integer) {
		return $this->or(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdNot($integer) {
		return $this->orNot(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdLike($integer) {
		return $this->orLike(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdNotLike($integer) {
		return $this->orNotLike(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdGreater($integer) {
		return $this->orGreater(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdGreaterEqual($integer) {
		return $this->orGreaterEqual(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdLess($integer) {
		return $this->orLess(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdLessEqual($integer) {
		return $this->orLessEqual(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdNull() {
		return $this->orNull(File::FILE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdNotNull() {
		return $this->orNotNull(File::FILE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdBetween($integer, $from, $to) {
		return $this->orBetween(File::FILE_ID, $integer, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdBeginsWith($integer) {
		return $this->orBeginsWith(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdEndsWith($integer) {
		return $this->orEndsWith(File::FILE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileIdContains($integer) {
		return $this->orContains(File::FILE_ID, $integer);
	}


	/**
	 * @return FileQuery
	 */
	function orderByFileIdAsc() {
		return $this->orderBy(File::FILE_ID, self::ASC);
	}

	/**
	 * @return FileQuery
	 */
	function orderByFileIdDesc() {
		return $this->orderBy(File::FILE_ID, self::DESC);
	}

	/**
	 * @return FileQuery
	 */
	function groupByFileId() {
		return $this->groupBy(File::FILE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeId($integer) {
		return $this->and(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdNot($integer) {
		return $this->andNot(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdLike($integer) {
		return $this->andLike(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdNotLike($integer) {
		return $this->andNotLike(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdGreater($integer) {
		return $this->andGreater(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdGreaterEqual($integer) {
		return $this->andGreaterEqual(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdLess($integer) {
		return $this->andLess(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdLessEqual($integer) {
		return $this->andLessEqual(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdNull() {
		return $this->andNull(File::FILE_TYPE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdNotNull() {
		return $this->andNotNull(File::FILE_TYPE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdBetween($integer, $from, $to) {
		return $this->andBetween(File::FILE_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdBeginsWith($integer) {
		return $this->andBeginsWith(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdEndsWith($integer) {
		return $this->andEndsWith(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andFileTypeIdContains($integer) {
		return $this->andContains(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeId($integer) {
		return $this->or(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdNot($integer) {
		return $this->orNot(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdLike($integer) {
		return $this->orLike(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdNotLike($integer) {
		return $this->orNotLike(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdGreater($integer) {
		return $this->orGreater(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdGreaterEqual($integer) {
		return $this->orGreaterEqual(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdLess($integer) {
		return $this->orLess(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdLessEqual($integer) {
		return $this->orLessEqual(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdNull() {
		return $this->orNull(File::FILE_TYPE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdNotNull() {
		return $this->orNotNull(File::FILE_TYPE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdBetween($integer, $from, $to) {
		return $this->orBetween(File::FILE_TYPE_ID, $integer, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdBeginsWith($integer) {
		return $this->orBeginsWith(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdEndsWith($integer) {
		return $this->orEndsWith(File::FILE_TYPE_ID, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orFileTypeIdContains($integer) {
		return $this->orContains(File::FILE_TYPE_ID, $integer);
	}


	/**
	 * @return FileQuery
	 */
	function orderByFileTypeIdAsc() {
		return $this->orderBy(File::FILE_TYPE_ID, self::ASC);
	}

	/**
	 * @return FileQuery
	 */
	function orderByFileTypeIdDesc() {
		return $this->orderBy(File::FILE_TYPE_ID, self::DESC);
	}

	/**
	 * @return FileQuery
	 */
	function groupByFileTypeId() {
		return $this->groupBy(File::FILE_TYPE_ID);
	}

	/**
	 * @return FileQuery
	 */
	function andFileName($varchar) {
		return $this->and(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameNot($varchar) {
		return $this->andNot(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameLike($varchar) {
		return $this->andLike(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameNotLike($varchar) {
		return $this->andNotLike(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameGreater($varchar) {
		return $this->andGreater(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameGreaterEqual($varchar) {
		return $this->andGreaterEqual(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameLess($varchar) {
		return $this->andLess(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameLessEqual($varchar) {
		return $this->andLessEqual(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameNull() {
		return $this->andNull(File::FILE_NAME);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameNotNull() {
		return $this->andNotNull(File::FILE_NAME);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameBetween($varchar, $from, $to) {
		return $this->andBetween(File::FILE_NAME, $varchar, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameBeginsWith($varchar) {
		return $this->andBeginsWith(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameEndsWith($varchar) {
		return $this->andEndsWith(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function andFileNameContains($varchar) {
		return $this->andContains(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileName($varchar) {
		return $this->or(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameNot($varchar) {
		return $this->orNot(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameLike($varchar) {
		return $this->orLike(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameNotLike($varchar) {
		return $this->orNotLike(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameGreater($varchar) {
		return $this->orGreater(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameGreaterEqual($varchar) {
		return $this->orGreaterEqual(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameLess($varchar) {
		return $this->orLess(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameLessEqual($varchar) {
		return $this->orLessEqual(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameNull() {
		return $this->orNull(File::FILE_NAME);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameNotNull() {
		return $this->orNotNull(File::FILE_NAME);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameBetween($varchar, $from, $to) {
		return $this->orBetween(File::FILE_NAME, $varchar, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameBeginsWith($varchar) {
		return $this->orBeginsWith(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameEndsWith($varchar) {
		return $this->orEndsWith(File::FILE_NAME, $varchar);
	}

	/**
	 * @return FileQuery
	 */
	function orFileNameContains($varchar) {
		return $this->orContains(File::FILE_NAME, $varchar);
	}


	/**
	 * @return FileQuery
	 */
	function orderByFileNameAsc() {
		return $this->orderBy(File::FILE_NAME, self::ASC);
	}

	/**
	 * @return FileQuery
	 */
	function orderByFileNameDesc() {
		return $this->orderBy(File::FILE_NAME, self::DESC);
	}

	/**
	 * @return FileQuery
	 */
	function groupByFileName() {
		return $this->groupBy(File::FILE_NAME);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestamp($integer) {
		return $this->and(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampNot($integer) {
		return $this->andNot(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampLike($integer) {
		return $this->andLike(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampNotLike($integer) {
		return $this->andNotLike(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampGreater($integer) {
		return $this->andGreater(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampGreaterEqual($integer) {
		return $this->andGreaterEqual(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampLess($integer) {
		return $this->andLess(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampLessEqual($integer) {
		return $this->andLessEqual(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampNull() {
		return $this->andNull(File::UPLOAD_TIMESTAMP);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampNotNull() {
		return $this->andNotNull(File::UPLOAD_TIMESTAMP);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampBetween($integer, $from, $to) {
		return $this->andBetween(File::UPLOAD_TIMESTAMP, $integer, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampBeginsWith($integer) {
		return $this->andBeginsWith(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampEndsWith($integer) {
		return $this->andEndsWith(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function andUploadTimestampContains($integer) {
		return $this->andContains(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestamp($integer) {
		return $this->or(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampNot($integer) {
		return $this->orNot(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampLike($integer) {
		return $this->orLike(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampNotLike($integer) {
		return $this->orNotLike(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampGreater($integer) {
		return $this->orGreater(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampGreaterEqual($integer) {
		return $this->orGreaterEqual(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampLess($integer) {
		return $this->orLess(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampLessEqual($integer) {
		return $this->orLessEqual(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampNull() {
		return $this->orNull(File::UPLOAD_TIMESTAMP);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampNotNull() {
		return $this->orNotNull(File::UPLOAD_TIMESTAMP);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampBetween($integer, $from, $to) {
		return $this->orBetween(File::UPLOAD_TIMESTAMP, $integer, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampBeginsWith($integer) {
		return $this->orBeginsWith(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampEndsWith($integer) {
		return $this->orEndsWith(File::UPLOAD_TIMESTAMP, $integer);
	}

	/**
	 * @return FileQuery
	 */
	function orUploadTimestampContains($integer) {
		return $this->orContains(File::UPLOAD_TIMESTAMP, $integer);
	}


	/**
	 * @return FileQuery
	 */
	function orderByUploadTimestampAsc() {
		return $this->orderBy(File::UPLOAD_TIMESTAMP, self::ASC);
	}

	/**
	 * @return FileQuery
	 */
	function orderByUploadTimestampDesc() {
		return $this->orderBy(File::UPLOAD_TIMESTAMP, self::DESC);
	}

	/**
	 * @return FileQuery
	 */
	function groupByUploadTimestamp() {
		return $this->groupBy(File::UPLOAD_TIMESTAMP);
	}

	/**
	 * @return FileQuery
	 */
	function andActive($tinyint) {
		return $this->and(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveNull() {
		return $this->andNull(File::ACTIVE);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(File::ACTIVE);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(File::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActive($tinyint) {
		return $this->or(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveNull() {
		return $this->orNull(File::ACTIVE);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(File::ACTIVE);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(File::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(File::ACTIVE, $tinyint);
	}

	/**
	 * @return FileQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(File::ACTIVE, $tinyint);
	}


	/**
	 * @return FileQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(File::ACTIVE, self::ASC);
	}

	/**
	 * @return FileQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(File::ACTIVE, self::DESC);
	}

	/**
	 * @return FileQuery
	 */
	function groupByActive() {
		return $this->groupBy(File::ACTIVE);
	}


}