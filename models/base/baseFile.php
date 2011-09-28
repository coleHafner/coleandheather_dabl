<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseFile extends ApplicationModel {

	const FILE_ID = 'file.file_id';
	const FILE_TYPE_ID = 'file.file_type_id';
	const FILE_NAME = 'file.file_name';
	const UPLOAD_TIMESTAMP = 'file.upload_timestamp';
	const ACTIVE = 'file.active';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'file';

	/**
	 * Cache of objects retrieved from the database
	 * @var File[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'file_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'file_id';

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
		'file_id',
		'file_type_id',
		'file_name',
		'upload_timestamp',
		'active',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'file_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'file_type_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'file_name' => BaseModel::COLUMN_TYPE_VARCHAR,
		'upload_timestamp' => BaseModel::COLUMN_TYPE_INTEGER,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
	);

	/**
	 * `file_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $file_id;

	/**
	 * `file_type_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $file_type_id;

	/**
	 * `file_name` VARCHAR
	 * @var string
	 */
	protected $file_name;

	/**
	 * `upload_timestamp` INTEGER DEFAULT ''
	 * @var int
	 */
	protected $upload_timestamp;

	/**
	 * `active` TINYINT DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * Gets the value of the file_id field
	 */
	function getFileId() {
		return $this->file_id;
	}

	/**
	 * Sets the value of the file_id field
	 * @return File
	 */
	function setFileId($value) {
		return $this->setColumnValue('file_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for File::getFileId
	 * final because getFileId should be extended instead
	 * to ensure consistent behavior
	 * @see File::getFileId
	 */
	final function getFile_id() {
		return $this->getFileId();
	}

	/**
	 * Convenience function for File::setFileId
	 * final because setFileId should be extended instead
	 * to ensure consistent behavior
	 * @see File::setFileId
	 * @return File
	 */
	final function setFile_id($value) {
		return $this->setFileId($value);
	}

	/**
	 * Gets the value of the file_type_id field
	 */
	function getFileTypeId() {
		return $this->file_type_id;
	}

	/**
	 * Sets the value of the file_type_id field
	 * @return File
	 */
	function setFileTypeId($value) {
		return $this->setColumnValue('file_type_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for File::getFileTypeId
	 * final because getFileTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see File::getFileTypeId
	 */
	final function getFile_type_id() {
		return $this->getFileTypeId();
	}

	/**
	 * Convenience function for File::setFileTypeId
	 * final because setFileTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see File::setFileTypeId
	 * @return File
	 */
	final function setFile_type_id($value) {
		return $this->setFileTypeId($value);
	}

	/**
	 * Gets the value of the file_name field
	 */
	function getFileName() {
		return $this->file_name;
	}

	/**
	 * Sets the value of the file_name field
	 * @return File
	 */
	function setFileName($value) {
		return $this->setColumnValue('file_name', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for File::getFileName
	 * final because getFileName should be extended instead
	 * to ensure consistent behavior
	 * @see File::getFileName
	 */
	final function getFile_name() {
		return $this->getFileName();
	}

	/**
	 * Convenience function for File::setFileName
	 * final because setFileName should be extended instead
	 * to ensure consistent behavior
	 * @see File::setFileName
	 * @return File
	 */
	final function setFile_name($value) {
		return $this->setFileName($value);
	}

	/**
	 * Gets the value of the upload_timestamp field
	 */
	function getUploadTimestamp() {
		return $this->upload_timestamp;
	}

	/**
	 * Sets the value of the upload_timestamp field
	 * @return File
	 */
	function setUploadTimestamp($value) {
		return $this->setColumnValue('upload_timestamp', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for File::getUploadTimestamp
	 * final because getUploadTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see File::getUploadTimestamp
	 */
	final function getUpload_timestamp() {
		return $this->getUploadTimestamp();
	}

	/**
	 * Convenience function for File::setUploadTimestamp
	 * final because setUploadTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see File::setUploadTimestamp
	 * @return File
	 */
	final function setUpload_timestamp($value) {
		return $this->setUploadTimestamp($value);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return File
	 */
	function setActive($value) {
		return $this->setColumnValue('active', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * @return DABLPDO
	 */
	static function getConnection() {
		return DBManager::getConnection('default_connection');
	}

	/**
	 * @return File
	 */
	static function create() {
		return new File();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return File::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return File::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return File::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return File::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', File::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return File::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return File::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return File::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return File
	 */
	static function retrieveByPK($the_pk) {
		return File::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return File
	 */
	static function retrieveByPKs($file_id) {
		if (null === $file_id) {
			return null;
		}
		if (File::$_poolEnabled) {
			$pool_instance = File::retrieveFromPool($file_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = File::getConnection();
		$q = new Query;
		$q->add('file_id', $file_id);
		return array_shift(File::doSelect($q));
	}

	/**
	 * Searches the database for a row with a file_id
	 * value that matches the one provided
	 * @return File
	 */
	static function retrieveByFileId($value) {
		return File::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a file_type_id
	 * value that matches the one provided
	 * @return File
	 */
	static function retrieveByFileTypeId($value) {
		return File::retrieveByColumn('file_type_id', $value);
	}

	/**
	 * Searches the database for a row with a file_name
	 * value that matches the one provided
	 * @return File
	 */
	static function retrieveByFileName($value) {
		return File::retrieveByColumn('file_name', $value);
	}

	/**
	 * Searches the database for a row with a upload_timestamp
	 * value that matches the one provided
	 * @return File
	 */
	static function retrieveByUploadTimestamp($value) {
		return File::retrieveByColumn('upload_timestamp', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return File
	 */
	static function retrieveByActive($value) {
		return File::retrieveByColumn('active', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = File::getConnection();
		return array_shift(File::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('file_id')));
	}

	/**
	 * Populates and returns an instance of File with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return File
	 */
	static function fetchSingle($query_string) {
		return array_shift(File::fetch($query_string));
	}

	/**
	 * Populates and returns an array of File objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return File[]
	 */
	static function fetch($query_string) {
		$conn = File::getConnection();
		$result = $conn->query($query_string);
		return File::fromResult($result, 'File');
	}

	/**
	 * Returns an array of File objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'File') {
		return baseModel::fromResult($result, $class, File::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return File
	 */
	function castInts() {
		$this->file_id = (null === $this->file_id) ? null : (int) $this->file_id;
		$this->file_type_id = (null === $this->file_type_id) ? null : (int) $this->file_type_id;
		$this->upload_timestamp = (null === $this->upload_timestamp) ? null : (int) $this->upload_timestamp;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param File $object
	 * @return void
	 */
	static function insertIntoPool(File $object) {
		if (!File::$_poolEnabled) {
			return;
		}
		if (File::$_instancePoolCount > File::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		File::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++File::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return File
	 */
	static function retrieveFromPool($pk) {
		if (!File::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, File::$_instancePool)) {
			return File::$_instancePool[$pk];
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

		if (array_key_exists($pk, File::$_instancePool)) {
			unset(File::$_instancePool[$pk]);
			--File::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		File::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		File::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return File::$_poolEnabled;
	}

	/**
	 * Returns an array of all File objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return File[]
	 */
	static function getAll($extra = null) {
		$conn = File::getConnection();
		$table_quoted = $conn->quoteIdentifier(File::getTableName());
		return File::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = File::getConnection();
		if (!$q->getTable() || File::getTableName() != $q->getTable()) {
			$q->setTable(File::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = File::getConnection();
		$q = clone $q;
		if (!$q->getTable() || File::getTableName() != $q->getTable()) {
			$q->setTable(File::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			File::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return File[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'File');
			$class = $additional_classes;
		} else {
			$class = 'File';
		}

		return File::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, File::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = File::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), File::getTableName())) {
			$q->setTable(File::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return File[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : File::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return File::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getfile_type_id()) {
			$this->_validationErrors[] = 'file_type_id must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
