<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseArticle extends ApplicationModel {

	const ARTICLE_ID = 'article.article_id';
	const TITLE = 'article.title';
	const BODY = 'article.body';
	const POST_TIMESTAMP = 'article.post_timestamp';
	const ACTIVE = 'article.active';
	const USER_ID = 'article.user_id';
	const SECTION_ID = 'article.section_id';
	const VIEW_ID = 'article.view_id';
	const PRIORITY = 'article.priority';
	const TAG_STRING = 'article.tag_string';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'article';

	/**
	 * Cache of objects retrieved from the database
	 * @var Article[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'article_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'article_id';

	/**
	 * true if primary key is an auto-increment column
	 * @var bool
	 */
	protected static $_isAutoIncrement = true;

	/**
	 * array of all column names
	 * @var string[]
	 */
	protected static $_columnNames = array(
		'article_id',
		'title',
		'body',
		'post_timestamp',
		'active',
		'user_id',
		'section_id',
		'view_id',
		'priority',
		'tag_string',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'article_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'title' => BaseModel::COLUMN_TYPE_VARCHAR,
		'body' => BaseModel::COLUMN_TYPE_VARCHAR,
		'post_timestamp' => BaseModel::COLUMN_TYPE_INTEGER,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
		'user_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'section_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'view_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'priority' => BaseModel::COLUMN_TYPE_INTEGER,
		'tag_string' => BaseModel::COLUMN_TYPE_VARCHAR,
	);

	/**
	 * `article_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $article_id;

	/**
	 * `title` VARCHAR
	 * @var string
	 */
	protected $title;

	/**
	 * `body` VARCHAR
	 * @var string
	 */
	protected $body;

	/**
	 * `post_timestamp` INTEGER DEFAULT ''
	 * @var int
	 */
	protected $post_timestamp;

	/**
	 * `active` TINYINT DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * `user_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $user_id;

	/**
	 * `section_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $section_id;

	/**
	 * `view_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $view_id;

	/**
	 * `priority` INTEGER DEFAULT ''
	 * @var int
	 */
	protected $priority;

	/**
	 * `tag_string` VARCHAR
	 * @var string
	 */
	protected $tag_string;

	/**
	 * Gets the value of the article_id field
	 */
	function getArticleId() {
		return $this->article_id;
	}

	/**
	 * Sets the value of the article_id field
	 * @return Article
	 */
	function setArticleId($value) {
		return $this->setColumnValue('article_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Article::getArticleId
	 * final because getArticleId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::getArticleId
	 */
	final function getArticle_id() {
		return $this->getArticleId();
	}

	/**
	 * Convenience function for Article::setArticleId
	 * final because setArticleId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::setArticleId
	 * @return Article
	 */
	final function setArticle_id($value) {
		return $this->setArticleId($value);
	}

	/**
	 * Gets the value of the title field
	 */
	function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the value of the title field
	 * @return Article
	 */
	function setTitle($value) {
		return $this->setColumnValue('title', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the body field
	 */
	function getBody() {
		return $this->body;
	}

	/**
	 * Sets the value of the body field
	 * @return Article
	 */
	function setBody($value) {
		return $this->setColumnValue('body', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the post_timestamp field
	 */
	function getPostTimestamp() {
		return $this->post_timestamp;
	}

	/**
	 * Sets the value of the post_timestamp field
	 * @return Article
	 */
	function setPostTimestamp($value) {
		return $this->setColumnValue('post_timestamp', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Article::getPostTimestamp
	 * final because getPostTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see Article::getPostTimestamp
	 */
	final function getPost_timestamp() {
		return $this->getPostTimestamp();
	}

	/**
	 * Convenience function for Article::setPostTimestamp
	 * final because setPostTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see Article::setPostTimestamp
	 * @return Article
	 */
	final function setPost_timestamp($value) {
		return $this->setPostTimestamp($value);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return Article
	 */
	function setActive($value) {
		return $this->setColumnValue('active', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Gets the value of the user_id field
	 */
	function getUserId() {
		return $this->user_id;
	}

	/**
	 * Sets the value of the user_id field
	 * @return Article
	 */
	function setUserId($value) {
		return $this->setColumnValue('user_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Article::getUserId
	 * final because getUserId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::getUserId
	 */
	final function getUser_id() {
		return $this->getUserId();
	}

	/**
	 * Convenience function for Article::setUserId
	 * final because setUserId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::setUserId
	 * @return Article
	 */
	final function setUser_id($value) {
		return $this->setUserId($value);
	}

	/**
	 * Gets the value of the section_id field
	 */
	function getSectionId() {
		return $this->section_id;
	}

	/**
	 * Sets the value of the section_id field
	 * @return Article
	 */
	function setSectionId($value) {
		return $this->setColumnValue('section_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Article::getSectionId
	 * final because getSectionId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::getSectionId
	 */
	final function getSection_id() {
		return $this->getSectionId();
	}

	/**
	 * Convenience function for Article::setSectionId
	 * final because setSectionId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::setSectionId
	 * @return Article
	 */
	final function setSection_id($value) {
		return $this->setSectionId($value);
	}

	/**
	 * Gets the value of the view_id field
	 */
	function getViewId() {
		return $this->view_id;
	}

	/**
	 * Sets the value of the view_id field
	 * @return Article
	 */
	function setViewId($value) {
		return $this->setColumnValue('view_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Article::getViewId
	 * final because getViewId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::getViewId
	 */
	final function getView_id() {
		return $this->getViewId();
	}

	/**
	 * Convenience function for Article::setViewId
	 * final because setViewId should be extended instead
	 * to ensure consistent behavior
	 * @see Article::setViewId
	 * @return Article
	 */
	final function setView_id($value) {
		return $this->setViewId($value);
	}

	/**
	 * Gets the value of the priority field
	 */
	function getPriority() {
		return $this->priority;
	}

	/**
	 * Sets the value of the priority field
	 * @return Article
	 */
	function setPriority($value) {
		return $this->setColumnValue('priority', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Gets the value of the tag_string field
	 */
	function getTagString() {
		return $this->tag_string;
	}

	/**
	 * Sets the value of the tag_string field
	 * @return Article
	 */
	function setTagString($value) {
		return $this->setColumnValue('tag_string', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Article::getTagString
	 * final because getTagString should be extended instead
	 * to ensure consistent behavior
	 * @see Article::getTagString
	 */
	final function getTag_string() {
		return $this->getTagString();
	}

	/**
	 * Convenience function for Article::setTagString
	 * final because setTagString should be extended instead
	 * to ensure consistent behavior
	 * @see Article::setTagString
	 * @return Article
	 */
	final function setTag_string($value) {
		return $this->setTagString($value);
	}

	/**
	 * @return DABLPDO
	 */
	static function getConnection() {
		return DBManager::getConnection('default_connection');
	}

	/**
	 * @return Article
	 */
	static function create() {
		return new Article();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return Article::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return Article::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return Article::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return Article::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', Article::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return Article::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return Article::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return Article::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return Article
	 */
	static function retrieveByPK($the_pk) {
		return Article::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return Article
	 */
	static function retrieveByPKs($article_id) {
		if (null === $article_id) {
			return null;
		}
		if (Article::$_poolEnabled) {
			$pool_instance = Article::retrieveFromPool($article_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = Article::getConnection();
		$q = new Query;
		$q->add('article_id', $article_id);
		return array_shift(Article::doSelect($q));
	}

	/**
	 * Searches the database for a row with a article_id
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByArticleId($value) {
		return Article::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a title
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByTitle($value) {
		return Article::retrieveByColumn('title', $value);
	}

	/**
	 * Searches the database for a row with a body
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByBody($value) {
		return Article::retrieveByColumn('body', $value);
	}

	/**
	 * Searches the database for a row with a post_timestamp
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByPostTimestamp($value) {
		return Article::retrieveByColumn('post_timestamp', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByActive($value) {
		return Article::retrieveByColumn('active', $value);
	}

	/**
	 * Searches the database for a row with a user_id
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByUserId($value) {
		return Article::retrieveByColumn('user_id', $value);
	}

	/**
	 * Searches the database for a row with a section_id
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveBySectionId($value) {
		return Article::retrieveByColumn('section_id', $value);
	}

	/**
	 * Searches the database for a row with a view_id
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByViewId($value) {
		return Article::retrieveByColumn('view_id', $value);
	}

	/**
	 * Searches the database for a row with a priority
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByPriority($value) {
		return Article::retrieveByColumn('priority', $value);
	}

	/**
	 * Searches the database for a row with a tag_string
	 * value that matches the one provided
	 * @return Article
	 */
	static function retrieveByTagString($value) {
		return Article::retrieveByColumn('tag_string', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = Article::getConnection();
		return array_shift(Article::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('article_id')));
	}

	/**
	 * Populates and returns an instance of Article with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return Article
	 */
	static function fetchSingle($query_string) {
		return array_shift(Article::fetch($query_string));
	}

	/**
	 * Populates and returns an array of Article objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return Article[]
	 */
	static function fetch($query_string) {
		$conn = Article::getConnection();
		$result = $conn->query($query_string);
		return Article::fromResult($result, 'Article');
	}

	/**
	 * Returns an array of Article objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'Article') {
		return baseModel::fromResult($result, $class, Article::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return Article
	 */
	function castInts() {
		$this->article_id = (null === $this->article_id) ? null : (int) $this->article_id;
		$this->post_timestamp = (null === $this->post_timestamp) ? null : (int) $this->post_timestamp;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		$this->user_id = (null === $this->user_id) ? null : (int) $this->user_id;
		$this->section_id = (null === $this->section_id) ? null : (int) $this->section_id;
		$this->view_id = (null === $this->view_id) ? null : (int) $this->view_id;
		$this->priority = (null === $this->priority) ? null : (int) $this->priority;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param Article $object
	 * @return void
	 */
	static function insertIntoPool(Article $object) {
		if (!Article::$_poolEnabled) {
			return;
		}
		if (Article::$_instancePoolCount > Article::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		Article::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++Article::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return Article
	 */
	static function retrieveFromPool($pk) {
		if (!Article::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, Article::$_instancePool)) {
			return Article::$_instancePool[$pk];
		}

		return null;
	}

	/**
	 * Remove the object from the instance pool.
	 *
	 * @param mixed $object Object or PK to remove
	 * @return void
	 */
	static function removeFromPool($object) {
		$pk = is_object($object) ? implode('-', $object->getPrimaryKeyValues()) : $object;

		if (array_key_exists($pk, Article::$_instancePool)) {
			unset(Article::$_instancePool[$pk]);
			--Article::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		Article::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		Article::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return Article::$_poolEnabled;
	}

	/**
	 * Returns an array of all Article objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return Article[]
	 */
	static function getAll($extra = null) {
		$conn = Article::getConnection();
		$table_quoted = $conn->quoteIdentifier(Article::getTableName());
		return Article::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Article::getConnection();
		if (!$q->getTable() || Article::getTableName() != $q->getTable()) {
			$q->setTable(Article::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = Article::getConnection();
		$q = clone $q;
		if (!$q->getTable() || Article::getTableName() != $q->getTable()) {
			$q->setTable(Article::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			Article::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return Article[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'Article');
			$class = $additional_classes;
		} else {
			$class = 'Article';
		}

		return Article::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, Article::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Article::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), Article::getTableName())) {
			$q->setTable(Article::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return Article[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Article::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return Article::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getuser_id()) {
			$this->_validationErrors[] = 'user_id must not be null';
		}
		if (null === $this->getsection_id()) {
			$this->_validationErrors[] = 'section_id must not be null';
		}
		if (null === $this->getview_id()) {
			$this->_validationErrors[] = 'view_id must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
