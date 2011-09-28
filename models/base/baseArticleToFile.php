<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseArticleToFile extends ApplicationModel {

	const ARTICLE_TO_FILE_ID = 'articleToFile.article_to_file_id';
	const ARTICLE_ID = 'articleToFile.article_id';
	const FILE_ID = 'articleToFile.file_id';
	const PRIORITY = 'articleToFile.priority';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'articleToFile';

	/**
	 * Cache of objects retrieved from the database
	 * @var ArticleToFile[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'article_to_file_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'article_to_file_id';

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
		'article_to_file_id',
		'article_id',
		'file_id',
		'priority',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'article_to_file_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'article_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'file_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'priority' => BaseModel::COLUMN_TYPE_INTEGER,
	);

	/**
	 * `article_to_file_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $article_to_file_id;

	/**
	 * `article_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $article_id;

	/**
	 * `file_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $file_id;

	/**
	 * `priority` INTEGER DEFAULT ''
	 * @var int
	 */
	protected $priority;

	/**
	 * Gets the value of the article_to_file_id field
	 */
	function getArticleToFileId() {
		return $this->article_to_file_id;
	}

	/**
	 * Sets the value of the article_to_file_id field
	 * @return ArticleToFile
	 */
	function setArticleToFileId($value) {
		return $this->setColumnValue('article_to_file_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for ArticleToFile::getArticleToFileId
	 * final because getArticleToFileId should be extended instead
	 * to ensure consistent behavior
	 * @see ArticleToFile::getArticleToFileId
	 */
	final function getArticle_to_file_id() {
		return $this->getArticleToFileId();
	}

	/**
	 * Convenience function for ArticleToFile::setArticleToFileId
	 * final because setArticleToFileId should be extended instead
	 * to ensure consistent behavior
	 * @see ArticleToFile::setArticleToFileId
	 * @return ArticleToFile
	 */
	final function setArticle_to_file_id($value) {
		return $this->setArticleToFileId($value);
	}

	/**
	 * Gets the value of the article_id field
	 */
	function getArticleId() {
		return $this->article_id;
	}

	/**
	 * Sets the value of the article_id field
	 * @return ArticleToFile
	 */
	function setArticleId($value) {
		return $this->setColumnValue('article_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for ArticleToFile::getArticleId
	 * final because getArticleId should be extended instead
	 * to ensure consistent behavior
	 * @see ArticleToFile::getArticleId
	 */
	final function getArticle_id() {
		return $this->getArticleId();
	}

	/**
	 * Convenience function for ArticleToFile::setArticleId
	 * final because setArticleId should be extended instead
	 * to ensure consistent behavior
	 * @see ArticleToFile::setArticleId
	 * @return ArticleToFile
	 */
	final function setArticle_id($value) {
		return $this->setArticleId($value);
	}

	/**
	 * Gets the value of the file_id field
	 */
	function getFileId() {
		return $this->file_id;
	}

	/**
	 * Sets the value of the file_id field
	 * @return ArticleToFile
	 */
	function setFileId($value) {
		return $this->setColumnValue('file_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for ArticleToFile::getFileId
	 * final because getFileId should be extended instead
	 * to ensure consistent behavior
	 * @see ArticleToFile::getFileId
	 */
	final function getFile_id() {
		return $this->getFileId();
	}

	/**
	 * Convenience function for ArticleToFile::setFileId
	 * final because setFileId should be extended instead
	 * to ensure consistent behavior
	 * @see ArticleToFile::setFileId
	 * @return ArticleToFile
	 */
	final function setFile_id($value) {
		return $this->setFileId($value);
	}

	/**
	 * Gets the value of the priority field
	 */
	function getPriority() {
		return $this->priority;
	}

	/**
	 * Sets the value of the priority field
	 * @return ArticleToFile
	 */
	function setPriority($value) {
		return $this->setColumnValue('priority', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * @return DABLPDO
	 */
	static function getConnection() {
		return DBManager::getConnection('default_connection');
	}

	/**
	 * @return ArticleToFile
	 */
	static function create() {
		return new ArticleToFile();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return ArticleToFile::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return ArticleToFile::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return ArticleToFile::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return ArticleToFile::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', ArticleToFile::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return ArticleToFile::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return ArticleToFile::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return ArticleToFile::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return ArticleToFile
	 */
	static function retrieveByPK($the_pk) {
		return ArticleToFile::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return ArticleToFile
	 */
	static function retrieveByPKs($article_to_file_id) {
		if (null === $article_to_file_id) {
			return null;
		}
		if (ArticleToFile::$_poolEnabled) {
			$pool_instance = ArticleToFile::retrieveFromPool($article_to_file_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = ArticleToFile::getConnection();
		$q = new Query;
		$q->add('article_to_file_id', $article_to_file_id);
		return array_shift(ArticleToFile::doSelect($q));
	}

	/**
	 * Searches the database for a row with a article_to_file_id
	 * value that matches the one provided
	 * @return ArticleToFile
	 */
	static function retrieveByArticleToFileId($value) {
		return ArticleToFile::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a article_id
	 * value that matches the one provided
	 * @return ArticleToFile
	 */
	static function retrieveByArticleId($value) {
		return ArticleToFile::retrieveByColumn('article_id', $value);
	}

	/**
	 * Searches the database for a row with a file_id
	 * value that matches the one provided
	 * @return ArticleToFile
	 */
	static function retrieveByFileId($value) {
		return ArticleToFile::retrieveByColumn('file_id', $value);
	}

	/**
	 * Searches the database for a row with a priority
	 * value that matches the one provided
	 * @return ArticleToFile
	 */
	static function retrieveByPriority($value) {
		return ArticleToFile::retrieveByColumn('priority', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = ArticleToFile::getConnection();
		return array_shift(ArticleToFile::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('article_to_file_id')));
	}

	/**
	 * Populates and returns an instance of ArticleToFile with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return ArticleToFile
	 */
	static function fetchSingle($query_string) {
		return array_shift(ArticleToFile::fetch($query_string));
	}

	/**
	 * Populates and returns an array of ArticleToFile objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return ArticleToFile[]
	 */
	static function fetch($query_string) {
		$conn = ArticleToFile::getConnection();
		$result = $conn->query($query_string);
		return ArticleToFile::fromResult($result, 'ArticleToFile');
	}

	/**
	 * Returns an array of ArticleToFile objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'ArticleToFile') {
		return baseModel::fromResult($result, $class, ArticleToFile::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return ArticleToFile
	 */
	function castInts() {
		$this->article_to_file_id = (null === $this->article_to_file_id) ? null : (int) $this->article_to_file_id;
		$this->article_id = (null === $this->article_id) ? null : (int) $this->article_id;
		$this->file_id = (null === $this->file_id) ? null : (int) $this->file_id;
		$this->priority = (null === $this->priority) ? null : (int) $this->priority;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param ArticleToFile $object
	 * @return void
	 */
	static function insertIntoPool(ArticleToFile $object) {
		if (!ArticleToFile::$_poolEnabled) {
			return;
		}
		if (ArticleToFile::$_instancePoolCount > ArticleToFile::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		ArticleToFile::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++ArticleToFile::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return ArticleToFile
	 */
	static function retrieveFromPool($pk) {
		if (!ArticleToFile::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, ArticleToFile::$_instancePool)) {
			return ArticleToFile::$_instancePool[$pk];
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

		if (array_key_exists($pk, ArticleToFile::$_instancePool)) {
			unset(ArticleToFile::$_instancePool[$pk]);
			--ArticleToFile::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		ArticleToFile::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		ArticleToFile::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return ArticleToFile::$_poolEnabled;
	}

	/**
	 * Returns an array of all ArticleToFile objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return ArticleToFile[]
	 */
	static function getAll($extra = null) {
		$conn = ArticleToFile::getConnection();
		$table_quoted = $conn->quoteIdentifier(ArticleToFile::getTableName());
		return ArticleToFile::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = ArticleToFile::getConnection();
		if (!$q->getTable() || ArticleToFile::getTableName() != $q->getTable()) {
			$q->setTable(ArticleToFile::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = ArticleToFile::getConnection();
		$q = clone $q;
		if (!$q->getTable() || ArticleToFile::getTableName() != $q->getTable()) {
			$q->setTable(ArticleToFile::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			ArticleToFile::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return ArticleToFile[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'ArticleToFile');
			$class = $additional_classes;
		} else {
			$class = 'ArticleToFile';
		}

		return ArticleToFile::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, ArticleToFile::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = ArticleToFile::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), ArticleToFile::getTableName())) {
			$q->setTable(ArticleToFile::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return ArticleToFile[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : ArticleToFile::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return ArticleToFile::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getarticle_id()) {
			$this->_validationErrors[] = 'article_id must not be null';
		}
		if (null === $this->getfile_id()) {
			$this->_validationErrors[] = 'file_id must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
