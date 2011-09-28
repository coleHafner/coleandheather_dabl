<?php

abstract class BaseArticleQuery extends Query {

	function __construct($table_name = null, $alias = null) {
		if (null === $table_name) {
			$table_name = Article::getTableName();
		}
		return parent::__construct($table_name, $alias);
	}

	/**
	 * Returns new instance of self by passing arguments directly to constructor.
	 * @param string $alias
	 * @return ArticleQuery
	 */
	static function create($table_name = null, $alias = null) {
		return new ArticleQuery($table_name, $alias);
	}

	/**
	 * @return Article[]
	 */
	function select() {
		return Article::doSelect($this);
	}

	/**
	 * @return Article
	 */
	function selectOne() {
		return array_shift(Article::doSelect($this));
	}

	/**
	 * @return int
	 */
	function delete(){
		return Article::doDelete($this);
	}

	/**
	 * @return int
	 */
	function count(){
		return Article::doCount($this);
	}

	/**
	 * @return ArticleQuery
	 */
	function addAnd($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Article::isTemporalType($type)) {
			$value = Article::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Article::coerceTemporalValue($column, $type);
		}
		return parent::addAnd($column, $value, $operator, $quote);
	}

	/**
	 * @return ArticleQuery
	 */
	function addOr($column, $value=null, $operator=self::EQUAL, $quote = null, $type = null) {
		if (null !== $type && Article::isTemporalType($type)) {
			$value = Article::coerceTemporalValue($value, $type);
		}
		if (null === $value && is_array($column) && BaseModel::isTemporalType($type)) {
			$column = Article::coerceTemporalValue($column, $type);
		}
		return parent::addOr($column, $value, $operator, $quote);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleId($integer) {
		return $this->and(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdNot($integer) {
		return $this->andNot(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdLike($integer) {
		return $this->andLike(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdNotLike($integer) {
		return $this->andNotLike(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdGreater($integer) {
		return $this->andGreater(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdLess($integer) {
		return $this->andLess(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdLessEqual($integer) {
		return $this->andLessEqual(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdNull() {
		return $this->andNull(Article::ARTICLE_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdNotNull() {
		return $this->andNotNull(Article::ARTICLE_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdBetween($integer, $from, $to) {
		return $this->andBetween(Article::ARTICLE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdBeginsWith($integer) {
		return $this->andBeginsWith(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdEndsWith($integer) {
		return $this->andEndsWith(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andArticleIdContains($integer) {
		return $this->andContains(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleId($integer) {
		return $this->or(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdNot($integer) {
		return $this->orNot(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdLike($integer) {
		return $this->orLike(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdNotLike($integer) {
		return $this->orNotLike(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdGreater($integer) {
		return $this->orGreater(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdLess($integer) {
		return $this->orLess(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdLessEqual($integer) {
		return $this->orLessEqual(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdNull() {
		return $this->orNull(Article::ARTICLE_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdNotNull() {
		return $this->orNotNull(Article::ARTICLE_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdBetween($integer, $from, $to) {
		return $this->orBetween(Article::ARTICLE_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdBeginsWith($integer) {
		return $this->orBeginsWith(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdEndsWith($integer) {
		return $this->orEndsWith(Article::ARTICLE_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orArticleIdContains($integer) {
		return $this->orContains(Article::ARTICLE_ID, $integer);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByArticleIdAsc() {
		return $this->orderBy(Article::ARTICLE_ID, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByArticleIdDesc() {
		return $this->orderBy(Article::ARTICLE_ID, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByArticleId() {
		return $this->groupBy(Article::ARTICLE_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitle($varchar) {
		return $this->and(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleNot($varchar) {
		return $this->andNot(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleLike($varchar) {
		return $this->andLike(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleNotLike($varchar) {
		return $this->andNotLike(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleGreater($varchar) {
		return $this->andGreater(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleGreaterEqual($varchar) {
		return $this->andGreaterEqual(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleLess($varchar) {
		return $this->andLess(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleLessEqual($varchar) {
		return $this->andLessEqual(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleNull() {
		return $this->andNull(Article::TITLE);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleNotNull() {
		return $this->andNotNull(Article::TITLE);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleBetween($varchar, $from, $to) {
		return $this->andBetween(Article::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleBeginsWith($varchar) {
		return $this->andBeginsWith(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleEndsWith($varchar) {
		return $this->andEndsWith(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTitleContains($varchar) {
		return $this->andContains(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitle($varchar) {
		return $this->or(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleNot($varchar) {
		return $this->orNot(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleLike($varchar) {
		return $this->orLike(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleNotLike($varchar) {
		return $this->orNotLike(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleGreater($varchar) {
		return $this->orGreater(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleGreaterEqual($varchar) {
		return $this->orGreaterEqual(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleLess($varchar) {
		return $this->orLess(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleLessEqual($varchar) {
		return $this->orLessEqual(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleNull() {
		return $this->orNull(Article::TITLE);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleNotNull() {
		return $this->orNotNull(Article::TITLE);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleBetween($varchar, $from, $to) {
		return $this->orBetween(Article::TITLE, $varchar, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleBeginsWith($varchar) {
		return $this->orBeginsWith(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleEndsWith($varchar) {
		return $this->orEndsWith(Article::TITLE, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTitleContains($varchar) {
		return $this->orContains(Article::TITLE, $varchar);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByTitleAsc() {
		return $this->orderBy(Article::TITLE, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByTitleDesc() {
		return $this->orderBy(Article::TITLE, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByTitle() {
		return $this->groupBy(Article::TITLE);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBody($varchar) {
		return $this->and(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyNot($varchar) {
		return $this->andNot(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyLike($varchar) {
		return $this->andLike(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyNotLike($varchar) {
		return $this->andNotLike(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyGreater($varchar) {
		return $this->andGreater(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyGreaterEqual($varchar) {
		return $this->andGreaterEqual(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyLess($varchar) {
		return $this->andLess(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyLessEqual($varchar) {
		return $this->andLessEqual(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyNull() {
		return $this->andNull(Article::BODY);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyNotNull() {
		return $this->andNotNull(Article::BODY);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyBetween($varchar, $from, $to) {
		return $this->andBetween(Article::BODY, $varchar, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyBeginsWith($varchar) {
		return $this->andBeginsWith(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyEndsWith($varchar) {
		return $this->andEndsWith(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andBodyContains($varchar) {
		return $this->andContains(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBody($varchar) {
		return $this->or(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyNot($varchar) {
		return $this->orNot(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyLike($varchar) {
		return $this->orLike(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyNotLike($varchar) {
		return $this->orNotLike(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyGreater($varchar) {
		return $this->orGreater(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyGreaterEqual($varchar) {
		return $this->orGreaterEqual(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyLess($varchar) {
		return $this->orLess(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyLessEqual($varchar) {
		return $this->orLessEqual(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyNull() {
		return $this->orNull(Article::BODY);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyNotNull() {
		return $this->orNotNull(Article::BODY);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyBetween($varchar, $from, $to) {
		return $this->orBetween(Article::BODY, $varchar, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyBeginsWith($varchar) {
		return $this->orBeginsWith(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyEndsWith($varchar) {
		return $this->orEndsWith(Article::BODY, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orBodyContains($varchar) {
		return $this->orContains(Article::BODY, $varchar);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByBodyAsc() {
		return $this->orderBy(Article::BODY, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByBodyDesc() {
		return $this->orderBy(Article::BODY, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByBody() {
		return $this->groupBy(Article::BODY);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestamp($integer) {
		return $this->and(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampNot($integer) {
		return $this->andNot(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampLike($integer) {
		return $this->andLike(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampNotLike($integer) {
		return $this->andNotLike(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampGreater($integer) {
		return $this->andGreater(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampGreaterEqual($integer) {
		return $this->andGreaterEqual(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampLess($integer) {
		return $this->andLess(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampLessEqual($integer) {
		return $this->andLessEqual(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampNull() {
		return $this->andNull(Article::POST_TIMESTAMP);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampNotNull() {
		return $this->andNotNull(Article::POST_TIMESTAMP);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampBetween($integer, $from, $to) {
		return $this->andBetween(Article::POST_TIMESTAMP, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampBeginsWith($integer) {
		return $this->andBeginsWith(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampEndsWith($integer) {
		return $this->andEndsWith(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPostTimestampContains($integer) {
		return $this->andContains(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestamp($integer) {
		return $this->or(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampNot($integer) {
		return $this->orNot(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampLike($integer) {
		return $this->orLike(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampNotLike($integer) {
		return $this->orNotLike(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampGreater($integer) {
		return $this->orGreater(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampGreaterEqual($integer) {
		return $this->orGreaterEqual(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampLess($integer) {
		return $this->orLess(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampLessEqual($integer) {
		return $this->orLessEqual(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampNull() {
		return $this->orNull(Article::POST_TIMESTAMP);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampNotNull() {
		return $this->orNotNull(Article::POST_TIMESTAMP);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampBetween($integer, $from, $to) {
		return $this->orBetween(Article::POST_TIMESTAMP, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampBeginsWith($integer) {
		return $this->orBeginsWith(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampEndsWith($integer) {
		return $this->orEndsWith(Article::POST_TIMESTAMP, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPostTimestampContains($integer) {
		return $this->orContains(Article::POST_TIMESTAMP, $integer);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByPostTimestampAsc() {
		return $this->orderBy(Article::POST_TIMESTAMP, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByPostTimestampDesc() {
		return $this->orderBy(Article::POST_TIMESTAMP, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByPostTimestamp() {
		return $this->groupBy(Article::POST_TIMESTAMP);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActive($tinyint) {
		return $this->and(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveNot($tinyint) {
		return $this->andNot(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveLike($tinyint) {
		return $this->andLike(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveNotLike($tinyint) {
		return $this->andNotLike(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveGreater($tinyint) {
		return $this->andGreater(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveGreaterEqual($tinyint) {
		return $this->andGreaterEqual(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveLess($tinyint) {
		return $this->andLess(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveLessEqual($tinyint) {
		return $this->andLessEqual(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveNull() {
		return $this->andNull(Article::ACTIVE);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveNotNull() {
		return $this->andNotNull(Article::ACTIVE);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveBetween($tinyint, $from, $to) {
		return $this->andBetween(Article::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveBeginsWith($tinyint) {
		return $this->andBeginsWith(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveEndsWith($tinyint) {
		return $this->andEndsWith(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function andActiveContains($tinyint) {
		return $this->andContains(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActive($tinyint) {
		return $this->or(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveNot($tinyint) {
		return $this->orNot(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveLike($tinyint) {
		return $this->orLike(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveNotLike($tinyint) {
		return $this->orNotLike(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveGreater($tinyint) {
		return $this->orGreater(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveGreaterEqual($tinyint) {
		return $this->orGreaterEqual(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveLess($tinyint) {
		return $this->orLess(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveLessEqual($tinyint) {
		return $this->orLessEqual(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveNull() {
		return $this->orNull(Article::ACTIVE);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveNotNull() {
		return $this->orNotNull(Article::ACTIVE);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveBetween($tinyint, $from, $to) {
		return $this->orBetween(Article::ACTIVE, $tinyint, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveBeginsWith($tinyint) {
		return $this->orBeginsWith(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveEndsWith($tinyint) {
		return $this->orEndsWith(Article::ACTIVE, $tinyint);
	}

	/**
	 * @return ArticleQuery
	 */
	function orActiveContains($tinyint) {
		return $this->orContains(Article::ACTIVE, $tinyint);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByActiveAsc() {
		return $this->orderBy(Article::ACTIVE, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByActiveDesc() {
		return $this->orderBy(Article::ACTIVE, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByActive() {
		return $this->groupBy(Article::ACTIVE);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserId($integer) {
		return $this->and(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdNot($integer) {
		return $this->andNot(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdLike($integer) {
		return $this->andLike(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdNotLike($integer) {
		return $this->andNotLike(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdGreater($integer) {
		return $this->andGreater(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdLess($integer) {
		return $this->andLess(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdLessEqual($integer) {
		return $this->andLessEqual(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdNull() {
		return $this->andNull(Article::USER_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdNotNull() {
		return $this->andNotNull(Article::USER_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdBetween($integer, $from, $to) {
		return $this->andBetween(Article::USER_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdBeginsWith($integer) {
		return $this->andBeginsWith(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdEndsWith($integer) {
		return $this->andEndsWith(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andUserIdContains($integer) {
		return $this->andContains(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserId($integer) {
		return $this->or(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdNot($integer) {
		return $this->orNot(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdLike($integer) {
		return $this->orLike(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdNotLike($integer) {
		return $this->orNotLike(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdGreater($integer) {
		return $this->orGreater(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdLess($integer) {
		return $this->orLess(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdLessEqual($integer) {
		return $this->orLessEqual(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdNull() {
		return $this->orNull(Article::USER_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdNotNull() {
		return $this->orNotNull(Article::USER_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdBetween($integer, $from, $to) {
		return $this->orBetween(Article::USER_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdBeginsWith($integer) {
		return $this->orBeginsWith(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdEndsWith($integer) {
		return $this->orEndsWith(Article::USER_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orUserIdContains($integer) {
		return $this->orContains(Article::USER_ID, $integer);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByUserIdAsc() {
		return $this->orderBy(Article::USER_ID, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByUserIdDesc() {
		return $this->orderBy(Article::USER_ID, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByUserId() {
		return $this->groupBy(Article::USER_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionId($integer) {
		return $this->and(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdNot($integer) {
		return $this->andNot(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdLike($integer) {
		return $this->andLike(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdNotLike($integer) {
		return $this->andNotLike(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdGreater($integer) {
		return $this->andGreater(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdLess($integer) {
		return $this->andLess(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdLessEqual($integer) {
		return $this->andLessEqual(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdNull() {
		return $this->andNull(Article::SECTION_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdNotNull() {
		return $this->andNotNull(Article::SECTION_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdBetween($integer, $from, $to) {
		return $this->andBetween(Article::SECTION_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdBeginsWith($integer) {
		return $this->andBeginsWith(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdEndsWith($integer) {
		return $this->andEndsWith(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andSectionIdContains($integer) {
		return $this->andContains(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionId($integer) {
		return $this->or(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdNot($integer) {
		return $this->orNot(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdLike($integer) {
		return $this->orLike(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdNotLike($integer) {
		return $this->orNotLike(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdGreater($integer) {
		return $this->orGreater(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdLess($integer) {
		return $this->orLess(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdLessEqual($integer) {
		return $this->orLessEqual(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdNull() {
		return $this->orNull(Article::SECTION_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdNotNull() {
		return $this->orNotNull(Article::SECTION_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdBetween($integer, $from, $to) {
		return $this->orBetween(Article::SECTION_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdBeginsWith($integer) {
		return $this->orBeginsWith(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdEndsWith($integer) {
		return $this->orEndsWith(Article::SECTION_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orSectionIdContains($integer) {
		return $this->orContains(Article::SECTION_ID, $integer);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderBySectionIdAsc() {
		return $this->orderBy(Article::SECTION_ID, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderBySectionIdDesc() {
		return $this->orderBy(Article::SECTION_ID, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupBySectionId() {
		return $this->groupBy(Article::SECTION_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewId($integer) {
		return $this->and(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdNot($integer) {
		return $this->andNot(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdLike($integer) {
		return $this->andLike(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdNotLike($integer) {
		return $this->andNotLike(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdGreater($integer) {
		return $this->andGreater(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdGreaterEqual($integer) {
		return $this->andGreaterEqual(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdLess($integer) {
		return $this->andLess(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdLessEqual($integer) {
		return $this->andLessEqual(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdNull() {
		return $this->andNull(Article::VIEW_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdNotNull() {
		return $this->andNotNull(Article::VIEW_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdBetween($integer, $from, $to) {
		return $this->andBetween(Article::VIEW_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdBeginsWith($integer) {
		return $this->andBeginsWith(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdEndsWith($integer) {
		return $this->andEndsWith(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andViewIdContains($integer) {
		return $this->andContains(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewId($integer) {
		return $this->or(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdNot($integer) {
		return $this->orNot(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdLike($integer) {
		return $this->orLike(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdNotLike($integer) {
		return $this->orNotLike(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdGreater($integer) {
		return $this->orGreater(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdGreaterEqual($integer) {
		return $this->orGreaterEqual(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdLess($integer) {
		return $this->orLess(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdLessEqual($integer) {
		return $this->orLessEqual(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdNull() {
		return $this->orNull(Article::VIEW_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdNotNull() {
		return $this->orNotNull(Article::VIEW_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdBetween($integer, $from, $to) {
		return $this->orBetween(Article::VIEW_ID, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdBeginsWith($integer) {
		return $this->orBeginsWith(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdEndsWith($integer) {
		return $this->orEndsWith(Article::VIEW_ID, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orViewIdContains($integer) {
		return $this->orContains(Article::VIEW_ID, $integer);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByViewIdAsc() {
		return $this->orderBy(Article::VIEW_ID, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByViewIdDesc() {
		return $this->orderBy(Article::VIEW_ID, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByViewId() {
		return $this->groupBy(Article::VIEW_ID);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriority($integer) {
		return $this->and(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityNot($integer) {
		return $this->andNot(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityLike($integer) {
		return $this->andLike(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityNotLike($integer) {
		return $this->andNotLike(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityGreater($integer) {
		return $this->andGreater(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityGreaterEqual($integer) {
		return $this->andGreaterEqual(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityLess($integer) {
		return $this->andLess(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityLessEqual($integer) {
		return $this->andLessEqual(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityNull() {
		return $this->andNull(Article::PRIORITY);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityNotNull() {
		return $this->andNotNull(Article::PRIORITY);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityBetween($integer, $from, $to) {
		return $this->andBetween(Article::PRIORITY, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityBeginsWith($integer) {
		return $this->andBeginsWith(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityEndsWith($integer) {
		return $this->andEndsWith(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function andPriorityContains($integer) {
		return $this->andContains(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriority($integer) {
		return $this->or(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityNot($integer) {
		return $this->orNot(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityLike($integer) {
		return $this->orLike(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityNotLike($integer) {
		return $this->orNotLike(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityGreater($integer) {
		return $this->orGreater(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityGreaterEqual($integer) {
		return $this->orGreaterEqual(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityLess($integer) {
		return $this->orLess(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityLessEqual($integer) {
		return $this->orLessEqual(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityNull() {
		return $this->orNull(Article::PRIORITY);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityNotNull() {
		return $this->orNotNull(Article::PRIORITY);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityBetween($integer, $from, $to) {
		return $this->orBetween(Article::PRIORITY, $integer, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityBeginsWith($integer) {
		return $this->orBeginsWith(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityEndsWith($integer) {
		return $this->orEndsWith(Article::PRIORITY, $integer);
	}

	/**
	 * @return ArticleQuery
	 */
	function orPriorityContains($integer) {
		return $this->orContains(Article::PRIORITY, $integer);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByPriorityAsc() {
		return $this->orderBy(Article::PRIORITY, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByPriorityDesc() {
		return $this->orderBy(Article::PRIORITY, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByPriority() {
		return $this->groupBy(Article::PRIORITY);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagString($varchar) {
		return $this->and(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringNot($varchar) {
		return $this->andNot(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringLike($varchar) {
		return $this->andLike(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringNotLike($varchar) {
		return $this->andNotLike(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringGreater($varchar) {
		return $this->andGreater(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringGreaterEqual($varchar) {
		return $this->andGreaterEqual(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringLess($varchar) {
		return $this->andLess(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringLessEqual($varchar) {
		return $this->andLessEqual(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringNull() {
		return $this->andNull(Article::TAG_STRING);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringNotNull() {
		return $this->andNotNull(Article::TAG_STRING);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringBetween($varchar, $from, $to) {
		return $this->andBetween(Article::TAG_STRING, $varchar, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringBeginsWith($varchar) {
		return $this->andBeginsWith(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringEndsWith($varchar) {
		return $this->andEndsWith(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function andTagStringContains($varchar) {
		return $this->andContains(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagString($varchar) {
		return $this->or(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringNot($varchar) {
		return $this->orNot(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringLike($varchar) {
		return $this->orLike(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringNotLike($varchar) {
		return $this->orNotLike(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringGreater($varchar) {
		return $this->orGreater(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringGreaterEqual($varchar) {
		return $this->orGreaterEqual(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringLess($varchar) {
		return $this->orLess(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringLessEqual($varchar) {
		return $this->orLessEqual(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringNull() {
		return $this->orNull(Article::TAG_STRING);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringNotNull() {
		return $this->orNotNull(Article::TAG_STRING);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringBetween($varchar, $from, $to) {
		return $this->orBetween(Article::TAG_STRING, $varchar, $from, $to);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringBeginsWith($varchar) {
		return $this->orBeginsWith(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringEndsWith($varchar) {
		return $this->orEndsWith(Article::TAG_STRING, $varchar);
	}

	/**
	 * @return ArticleQuery
	 */
	function orTagStringContains($varchar) {
		return $this->orContains(Article::TAG_STRING, $varchar);
	}


	/**
	 * @return ArticleQuery
	 */
	function orderByTagStringAsc() {
		return $this->orderBy(Article::TAG_STRING, self::ASC);
	}

	/**
	 * @return ArticleQuery
	 */
	function orderByTagStringDesc() {
		return $this->orderBy(Article::TAG_STRING, self::DESC);
	}

	/**
	 * @return ArticleQuery
	 */
	function groupByTagString() {
		return $this->groupBy(Article::TAG_STRING);
	}


}