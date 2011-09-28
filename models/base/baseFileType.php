<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseFileType extends ApplicationModel {

	const FILE_TYPE_ID = 'fileType.file_type_id';
	const TITLE = 'fileType.title';
	const ACTIVE = 'fileType.active';
	const DIRECTORY = 'fileType.directory';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'fileType';

	/**
	 * Cache of objects retrieved from the database
	 * @var FileType[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'file_type_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'file_type_id';

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
		'file_type_id',
		'title',
		'active',
		'directory',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'file_type_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'title' => BaseModel::COLUMN_TYPE_VARCHAR,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
		'directory' => BaseModel::COLUMN_TYPE_VARCHAR,
	);

	/**
	 * `file_type_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $file_type_id;

	/**
	 * `title` VARCHAR
	 * @var string
	 */
	protected $title;

	/**
	 * `active` TINYINT DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * `directory` VARCHAR
	 * @var string
	 */
	protected $directory;

	/**
	 * Gets the value of the file_type_id field
	 */
	function getFileTypeId() {
		return $this->file_type_id;
	}

	/**
	 * Sets the value of the file_type_id field
	 * @return FileType
	 */
	function setFileTypeId($value) {
		return $this->setColumnValue('file_type_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for FileType::getFileTypeId
	 * final because getFileTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see FileType::getFileTypeId
	 */
	final function getFile_type_id() {
		return $this->getFileTypeId();
	}

	/**
	 * Convenience function for FileType::setFileTypeId
	 * final because setFileTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see FileType::setFileTypeId
	 * @return FileType
	 */
	final function setFile_type_id($value) {
		return $this->setFileTypeId($value);
	}

	/**
	 * Gets the value of the title field
	 */
	function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the value of the title field
	 * @return FileType
	 */
	function setTitle($value) {
		return $this->setColumnValue('title', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return FileType
	 */
	function setActive($value) {
		return $this->setColumnValue('active', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Gets the value of the directory field
	 */
	function getDirectory() {
		return $this->directory;
	}

	/**
	 * Sets the value of the directory field
	 * @return FileType
	 */
	function setDirectory($value) {
		return $this->setColumnValue('directory', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * @return DABLPDO
	 */
	static function getConnection() {
		return DBManager::getConnection('default_connection');
	}

	/**
	 * @return FileType
	 */
	static function create() {
		return new FileType();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return FileType::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return FileType::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return FileType::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return FileType::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', FileType::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return FileType::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return FileType::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return FileType::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return FileType
	 */
	static function retrieveByPK($the_pk) {
		return FileType::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return FileType
	 */
	static function retrieveByPKs($file_type_id) {
		if (null === $file_type_id) {
			return null;
		}
		if (FileType::$_poolEnabled) {
			$pool_instance = FileType::retrieveFromPool($file_type_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = FileType::getConnection();
		$q = new Query;
		$q->add('file_type_id', $file_type_id);
		return array_shift(FileType::doSelect($q));
	}

	/**
	 * Searches the database for a row with a file_type_id
	 * value that matches the one provided
	 * @return FileType
	 */
	static function retrieveByFileTypeId($value) {
		return FileType::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a title
	 * value that matches the one provided
	 * @return FileType
	 */
	static function retrieveByTitle($value) {
		return FileType::retrieveByColumn('title', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return FileType
	 */
	static function retrieveByActive($value) {
		return FileType::retrieveByColumn('active', $value);
	}

	/**
	 * Searches the database for a row with a directory
	 * value that matches the one provided
	 * @return FileType
	 */
	static function retrieveByDirectory($value) {
		return FileType::retrieveByColumn('directory', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = FileType::getConnection();
		return array_shift(FileType::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('file_type_id')));
	}

	/**
	 * Populates and returns an instance of FileType with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return FileType
	 */
	static function fetchSingle($query_string) {
		return array_shift(FileType::fetch($query_string));
	}

	/**
	 * Populates and returns an array of FileType objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return FileType[]
	 */
	static function fetch($query_string) {
		$conn = FileType::getConnection();
		$result = $conn->query($query_string);
		return FileType::fromResult($result, 'FileType');
	}

	/**
	 * Returns an array of FileType objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'FileType') {
		return baseModel::fromResult($result, $class, FileType::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return FileType
	 */
	function castInts() {
		$this->file_type_id = (null === $this->file_type_id) ? null : (int) $this->file_type_id;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param FileType $object
	 * @return void
	 */
	static function insertIntoPool(FileType $object) {
		if (!FileType::$_poolEnabled) {
			return;
		}
		if (FileType::$_instancePoolCount > FileType::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		FileType::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++FileType::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return FileType
	 */
	static function retrieveFromPool($pk) {
		if (!FileType::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, FileType::$_instancePool)) {
			return FileType::$_instancePool[$pk];
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

		if (array_key_exists($pk, FileType::$_instancePool)) {
			unset(FileType::$_instancePool[$pk]);
			--FileType::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		FileType::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		FileType::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return FileType::$_poolEnabled;
	}

	/**
	 * Returns an array of all FileType objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return FileType[]
	 */
	static function getAll($extra = null) {
		$conn = FileType::getConnection();
		$table_quoted = $conn->quoteIdentifier(FileType::getTableName());
		return FileType::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = FileType::getConnection();
		if (!$q->getTable() || FileType::getTableName() != $q->getTable()) {
			$q->setTable(FileType::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = FileType::getConnection();
		$q = clone $q;
		if (!$q->getTable() || FileType::getTableName() != $q->getTable()) {
			$q->setTable(FileType::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			FileType::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return FileType[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'FileType');
			$class = $additional_classes;
		} else {
			$class = 'FileType';
		}

		return FileType::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, FileType::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = FileType::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), FileType::getTableName())) {
			$q->setTable(FileType::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return FileType[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : FileType::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return FileType::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		return 0 === count($this->_validationErrors);
	}

}
