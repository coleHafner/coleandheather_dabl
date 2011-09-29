<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseSection extends ApplicationModel {

	const SECTION_ID = 'section.section_id';
	const TITLE = 'section.title';
	const ACTIVE = 'section.active';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'section';

	/**
	 * Cache of objects retrieved from the database
	 * @var Section[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'section_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'section_id';

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
		'section_id',
		'title',
		'active',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'section_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'title' => BaseModel::COLUMN_TYPE_VARCHAR,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
	);

	/**
	 * `section_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $section_id;

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
	 * Gets the value of the section_id field
	 */
	function getSectionId() {
		return $this->section_id;
	}

	/**
	 * Sets the value of the section_id field
	 * @return Section
	 */
	function setSectionId($value) {
		return $this->setColumnValue('section_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Section::getSectionId
	 * final because getSectionId should be extended instead
	 * to ensure consistent behavior
	 * @see Section::getSectionId
	 */
	final function getSection_id() {
		return $this->getSectionId();
	}

	/**
	 * Convenience function for Section::setSectionId
	 * final because setSectionId should be extended instead
	 * to ensure consistent behavior
	 * @see Section::setSectionId
	 * @return Section
	 */
	final function setSection_id($value) {
		return $this->setSectionId($value);
	}

	/**
	 * Gets the value of the title field
	 */
	function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the value of the title field
	 * @return Section
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
	 * @return Section
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
	 * @return Section
	 */
	static function create() {
		return new Section();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return Section::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return Section::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return Section::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return Section::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', Section::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return Section::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return Section::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return Section::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return Section
	 */
	static function retrieveByPK($the_pk) {
		return Section::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return Section
	 */
	static function retrieveByPKs($section_id) {
		if (null === $section_id) {
			return null;
		}
		if (Section::$_poolEnabled) {
			$pool_instance = Section::retrieveFromPool($section_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = Section::getConnection();
		$q = new Query;
		$q->add('section_id', $section_id);
		return array_shift(Section::doSelect($q));
	}

	/**
	 * Searches the database for a row with a section_id
	 * value that matches the one provided
	 * @return Section
	 */
	static function retrieveBySectionId($value) {
		return Section::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a title
	 * value that matches the one provided
	 * @return Section
	 */
	static function retrieveByTitle($value) {
		return Section::retrieveByColumn('title', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return Section
	 */
	static function retrieveByActive($value) {
		return Section::retrieveByColumn('active', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = Section::getConnection();
		return array_shift(Section::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('section_id')));
	}

	/**
	 * Populates and returns an instance of Section with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return Section
	 */
	static function fetchSingle($query_string) {
		return array_shift(Section::fetch($query_string));
	}

	/**
	 * Populates and returns an array of Section objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return Section[]
	 */
	static function fetch($query_string) {
		$conn = Section::getConnection();
		$result = $conn->query($query_string);
		return Section::fromResult($result, 'Section');
	}

	/**
	 * Returns an array of Section objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'Section') {
		return baseModel::fromResult($result, $class, Section::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return Section
	 */
	function castInts() {
		$this->section_id = (null === $this->section_id) ? null : (int) $this->section_id;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param Section $object
	 * @return void
	 */
	static function insertIntoPool(Section $object) {
		if (!Section::$_poolEnabled) {
			return;
		}
		if (Section::$_instancePoolCount > Section::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		Section::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++Section::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return Section
	 */
	static function retrieveFromPool($pk) {
		if (!Section::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, Section::$_instancePool)) {
			return Section::$_instancePool[$pk];
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

		if (array_key_exists($pk, Section::$_instancePool)) {
			unset(Section::$_instancePool[$pk]);
			--Section::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		Section::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		Section::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return Section::$_poolEnabled;
	}

	/**
	 * Returns an array of all Section objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return Section[]
	 */
	static function getAll($extra = null) {
		$conn = Section::getConnection();
		$table_quoted = $conn->quoteIdentifier(Section::getTableName());
		return Section::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Section::getConnection();
		if (!$q->getTable() || Section::getTableName() != $q->getTable()) {
			$q->setTable(Section::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = Section::getConnection();
		$q = clone $q;
		if (!$q->getTable() || Section::getTableName() != $q->getTable()) {
			$q->setTable(Section::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			Section::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return Section[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'Section');
			$class = $additional_classes;
		} else {
			$class = 'Section';
		}

		return Section::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, Section::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Section::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), Section::getTableName())) {
			$q->setTable(Section::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return Section[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Section::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return Section::doSelect($q, $classes);
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
