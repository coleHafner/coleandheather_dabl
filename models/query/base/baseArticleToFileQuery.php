<?php

abstract class BaseArticleToFileQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = ArticleToFile::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return ArticleToFileQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new ArticleToFileQuery($table_name, $alias);
	}

	/**
	 * @return ArticleToFile[]
	 */
	function select() {
		return ArticleToFile::doSelect($this);
	}

	/**
	 * @return ArticleToFile
	 */
	function selectOne() {
		return array_shift(ArticleToFile::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return ArticleToFile::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return ArticleToFile::doCount($this);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && ArticleToFile::isTemporalType($type)) {
			$value = ArticleToFile::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = ArticleToFile::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && ArticleToFile::isTemporalType($type)) {
			$value = ArticleToFile::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = ArticleToFile::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileId($integer) {
		return $this->and(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdNot($integer) {
		return $this->andNot(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdLike($integer) {
		return $this->andLike(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdNotLike($integer) {
		return $this->andNotLike(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdGreater($integer) {
		return $this->andGreater(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdGreaterEqual($integer) {
		return $this->andGreaterEqual(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdLess($integer) {
		return $this->andLess(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdLessEqual($integer) {
		return $this->andLessEqual(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdNull() {
		return $this->andNull(ArticleToFile::ARTICLE_TO_FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdNotNull() {
		return $this->andNotNull(ArticleToFile::ARTICLE_TO_FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdBetween($integer, $from, $to) {
		return $this->andBetween(ArticleToFile::ARTICLE_TO_FILE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdBeginsWith($integer) {
		return $this->andBeginsWith(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdEndsWith($integer) {
		return $this->andEndsWith(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleToFileIdContains($integer) {
		return $this->andContains(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileId($integer) {
		return $this->or(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdNot($integer) {
		return $this->orNot(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdLike($integer) {
		return $this->orLike(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdNotLike($integer) {
		return $this->orNotLike(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdGreater($integer) {
		return $this->orGreater(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdGreaterEqual($integer) {
		return $this->orGreaterEqual(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdLess($integer) {
		return $this->orLess(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdLessEqual($integer) {
		return $this->orLessEqual(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdNull() {
		return $this->orNull(ArticleToFile::ARTICLE_TO_FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdNotNull() {
		return $this->orNotNull(ArticleToFile::ARTICLE_TO_FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdBetween($integer, $from, $to) {
		return $this->orBetween(ArticleToFile::ARTICLE_TO_FILE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdBeginsWith($integer) {
		return $this->orBeginsWith(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdEndsWith($integer) {
		return $this->orEndsWith(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleToFileIdContains($integer) {
		return $this->orContains(ArticleToFile::ARTICLE_TO_FILE_ID, $integer);
	}


	/**
	 * @return ArticleToFileQuery
	 */
	function orderByArticleToFileIdAsc() {
		return $this->orderBy(ArticleToFile::ARTICLE_TO_FILE_ID, self::ASC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orderByArticleToFileIdDesc() {
		return $this->orderBy(ArticleToFile::ARTICLE_TO_FILE_ID, self::DESC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function groupByArticleToFileId() {
		return $this->groupBy(ArticleToFile::ARTICLE_TO_FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleId($integer) {
		return $this->and(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdNot($integer) {
		return $this->andNot(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdLike($integer) {
		return $this->andLike(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdNotLike($integer) {
		return $this->andNotLike(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdGreater($integer) {
		return $this->andGreater(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdGreaterEqual($integer) {
		return $this->andGreaterEqual(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdLess($integer) {
		return $this->andLess(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdLessEqual($integer) {
		return $this->andLessEqual(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdNull() {
		return $this->andNull(ArticleToFile::ARTICLE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdNotNull() {
		return $this->andNotNull(ArticleToFile::ARTICLE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdBetween($integer, $from, $to) {
		return $this->andBetween(ArticleToFile::ARTICLE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdBeginsWith($integer) {
		return $this->andBeginsWith(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdEndsWith($integer) {
		return $this->andEndsWith(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andArticleIdContains($integer) {
		return $this->andContains(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleId($integer) {
		return $this->or(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdNot($integer) {
		return $this->orNot(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdLike($integer) {
		return $this->orLike(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdNotLike($integer) {
		return $this->orNotLike(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdGreater($integer) {
		return $this->orGreater(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdGreaterEqual($integer) {
		return $this->orGreaterEqual(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdLess($integer) {
		return $this->orLess(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdLessEqual($integer) {
		return $this->orLessEqual(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdNull() {
		return $this->orNull(ArticleToFile::ARTICLE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdNotNull() {
		return $this->orNotNull(ArticleToFile::ARTICLE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdBetween($integer, $from, $to) {
		return $this->orBetween(ArticleToFile::ARTICLE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdBeginsWith($integer) {
		return $this->orBeginsWith(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdEndsWith($integer) {
		return $this->orEndsWith(ArticleToFile::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orArticleIdContains($integer) {
		return $this->orContains(ArticleToFile::ARTICLE_ID, $integer);
	}


	/**
	 * @return ArticleToFileQuery
	 */
	function orderByArticleIdAsc() {
		return $this->orderBy(ArticleToFile::ARTICLE_ID, self::ASC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orderByArticleIdDesc() {
		return $this->orderBy(ArticleToFile::ARTICLE_ID, self::DESC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function groupByArticleId() {
		return $this->groupBy(ArticleToFile::ARTICLE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileId($integer) {
		return $this->and(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdNot($integer) {
		return $this->andNot(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdLike($integer) {
		return $this->andLike(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdNotLike($integer) {
		return $this->andNotLike(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdGreater($integer) {
		return $this->andGreater(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdGreaterEqual($integer) {
		return $this->andGreaterEqual(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdLess($integer) {
		return $this->andLess(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdLessEqual($integer) {
		return $this->andLessEqual(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdNull() {
		return $this->andNull(ArticleToFile::FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdNotNull() {
		return $this->andNotNull(ArticleToFile::FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdBetween($integer, $from, $to) {
		return $this->andBetween(ArticleToFile::FILE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdBeginsWith($integer) {
		return $this->andBeginsWith(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdEndsWith($integer) {
		return $this->andEndsWith(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andFileIdContains($integer) {
		return $this->andContains(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileId($integer) {
		return $this->or(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdNot($integer) {
		return $this->orNot(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdLike($integer) {
		return $this->orLike(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdNotLike($integer) {
		return $this->orNotLike(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdGreater($integer) {
		return $this->orGreater(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdGreaterEqual($integer) {
		return $this->orGreaterEqual(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdLess($integer) {
		return $this->orLess(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdLessEqual($integer) {
		return $this->orLessEqual(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdNull() {
		return $this->orNull(ArticleToFile::FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdNotNull() {
		return $this->orNotNull(ArticleToFile::FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdBetween($integer, $from, $to) {
		return $this->orBetween(ArticleToFile::FILE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdBeginsWith($integer) {
		return $this->orBeginsWith(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdEndsWith($integer) {
		return $this->orEndsWith(ArticleToFile::FILE_ID, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orFileIdContains($integer) {
		return $this->orContains(ArticleToFile::FILE_ID, $integer);
	}


	/**
	 * @return ArticleToFileQuery
	 */
	function orderByFileIdAsc() {
		return $this->orderBy(ArticleToFile::FILE_ID, self::ASC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orderByFileIdDesc() {
		return $this->orderBy(ArticleToFile::FILE_ID, self::DESC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function groupByFileId() {
		return $this->groupBy(ArticleToFile::FILE_ID);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriority($integer) {
		return $this->and(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityNot($integer) {
		return $this->andNot(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityLike($integer) {
		return $this->andLike(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityNotLike($integer) {
		return $this->andNotLike(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityGreater($integer) {
		return $this->andGreater(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityGreaterEqual($integer) {
		return $this->andGreaterEqual(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityLess($integer) {
		return $this->andLess(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityLessEqual($integer) {
		return $this->andLessEqual(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityNull() {
		return $this->andNull(ArticleToFile::PRIORITY);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityNotNull() {
		return $this->andNotNull(ArticleToFile::PRIORITY);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityBetween($integer, $from, $to) {
		return $this->andBetween(ArticleToFile::PRIORITY, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityBeginsWith($integer) {
		return $this->andBeginsWith(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityEndsWith($integer) {
		return $this->andEndsWith(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function andPriorityContains($integer) {
		return $this->andContains(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriority($integer) {
		return $this->or(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityNot($integer) {
		return $this->orNot(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityLike($integer) {
		return $this->orLike(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityNotLike($integer) {
		return $this->orNotLike(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityGreater($integer) {
		return $this->orGreater(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityGreaterEqual($integer) {
		return $this->orGreaterEqual(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityLess($integer) {
		return $this->orLess(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityLessEqual($integer) {
		return $this->orLessEqual(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityNull() {
		return $this->orNull(ArticleToFile::PRIORITY);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityNotNull() {
		return $this->orNotNull(ArticleToFile::PRIORITY);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityBetween($integer, $from, $to) {
		return $this->orBetween(ArticleToFile::PRIORITY, $integer, $from, $to);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityBeginsWith($integer) {
		return $this->orBeginsWith(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityEndsWith($integer) {
		return $this->orEndsWith(ArticleToFile::PRIORITY, $integer);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orPriorityContains($integer) {
		return $this->orContains(ArticleToFile::PRIORITY, $integer);
	}


	/**
	 * @return ArticleToFileQuery
	 */
	function orderByPriorityAsc() {
		return $this->orderBy(ArticleToFile::PRIORITY, self::ASC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function orderByPriorityDesc() {
		return $this->orderBy(ArticleToFile::PRIORITY, self::DESC);
	}

	/**
	 * @return ArticleToFileQuery
	 */
	function groupByPriority() {
		return $this->groupBy(ArticleToFile::PRIORITY);
	}


}