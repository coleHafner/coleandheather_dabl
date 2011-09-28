<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseGuestType extends ApplicationModel {

	const GUEST_TYPE_ID = 'guestType.guest_type_id';
	const TITLE = 'guestType.title';
	const IS_SPECIAL = 'guestType.is_special';
	const ACTIVE = 'guestType.active';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'guestType';

	/**
	 * Cache of objects retrieved from the database
	 * @var GuestType[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'guest_type_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'guest_type_id';

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
		'guest_type_id',
		'title',
		'is_special',
		'active',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'guest_type_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'title' => BaseModel::COLUMN_TYPE_VARCHAR,
		'is_special' => BaseModel::COLUMN_TYPE_TINYINT,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
	);

	/**
	 * `guest_type_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $guest_type_id;

	/**
	 * `title` VARCHAR
	 * @var string
	 */
	protected $title;

	/**
	 * `is_special` TINYINT DEFAULT ''
	 * @var int
	 */
	protected $is_special;

	/**
	 * `active` TINYINT DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * Gets the value of the guest_type_id field
	 */
	function getGuestTypeId() {
		return $this->guest_type_id;
	}

	/**
	 * Sets the value of the guest_type_id field
	 * @return GuestType
	 */
	function setGuestTypeId($value) {
		return $this->setColumnValue('guest_type_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for GuestType::getGuestTypeId
	 * final because getGuestTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestType::getGuestTypeId
	 */
	final function getGuest_type_id() {
		return $this->getGuestTypeId();
	}

	/**
	 * Convenience function for GuestType::setGuestTypeId
	 * final because setGuestTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestType::setGuestTypeId
	 * @return GuestType
	 */
	final function setGuest_type_id($value) {
		return $this->setGuestTypeId($value);
	}

	/**
	 * Gets the value of the title field
	 */
	function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the value of the title field
	 * @return GuestType
	 */
	function setTitle($value) {
		return $this->setColumnValue('title', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the is_special field
	 */
	function getIsSpecial() {
		return $this->is_special;
	}

	/**
	 * Sets the value of the is_special field
	 * @return GuestType
	 */
	function setIsSpecial($value) {
		return $this->setColumnValue('is_special', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Convenience function for GuestType::getIsSpecial
	 * final because getIsSpecial should be extended instead
	 * to ensure consistent behavior
	 * @see GuestType::getIsSpecial
	 */
	final function getIs_special() {
		return $this->getIsSpecial();
	}

	/**
	 * Convenience function for GuestType::setIsSpecial
	 * final because setIsSpecial should be extended instead
	 * to ensure consistent behavior
	 * @see GuestType::setIsSpecial
	 * @return GuestType
	 */
	final function setIs_special($value) {
		return $this->setIsSpecial($value);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return GuestType
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
	 * @return GuestType
	 */
	static function create() {
		return new GuestType();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return GuestType::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return GuestType::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return GuestType::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return GuestType::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', GuestType::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return GuestType::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return GuestType::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return GuestType::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return GuestType
	 */
	static function retrieveByPK($the_pk) {
		return GuestType::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return GuestType
	 */
	static function retrieveByPKs($guest_type_id) {
		if (null === $guest_type_id) {
			return null;
		}
		if (GuestType::$_poolEnabled) {
			$pool_instance = GuestType::retrieveFromPool($guest_type_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = GuestType::getConnection();
		$q = new Query;
		$q->add('guest_type_id', $guest_type_id);
		return array_shift(GuestType::doSelect($q));
	}

	/**
	 * Searches the database for a row with a guest_type_id
	 * value that matches the one provided
	 * @return GuestType
	 */
	static function retrieveByGuestTypeId($value) {
		return GuestType::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a title
	 * value that matches the one provided
	 * @return GuestType
	 */
	static function retrieveByTitle($value) {
		return GuestType::retrieveByColumn('title', $value);
	}

	/**
	 * Searches the database for a row with a is_special
	 * value that matches the one provided
	 * @return GuestType
	 */
	static function retrieveByIsSpecial($value) {
		return GuestType::retrieveByColumn('is_special', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return GuestType
	 */
	static function retrieveByActive($value) {
		return GuestType::retrieveByColumn('active', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = GuestType::getConnection();
		return array_shift(GuestType::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('guest_type_id')));
	}

	/**
	 * Populates and returns an instance of GuestType with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return GuestType
	 */
	static function fetchSingle($query_string) {
		return array_shift(GuestType::fetch($query_string));
	}

	/**
	 * Populates and returns an array of GuestType objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return GuestType[]
	 */
	static function fetch($query_string) {
		$conn = GuestType::getConnection();
		$result = $conn->query($query_string);
		return GuestType::fromResult($result, 'GuestType');
	}

	/**
	 * Returns an array of GuestType objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'GuestType') {
		return baseModel::fromResult($result, $class, GuestType::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return GuestType
	 */
	function castInts() {
		$this->guest_type_id = (null === $this->guest_type_id) ? null : (int) $this->guest_type_id;
		$this->is_special = (null === $this->is_special) ? null : (int) $this->is_special;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param GuestType $object
	 * @return void
	 */
	static function insertIntoPool(GuestType $object) {
		if (!GuestType::$_poolEnabled) {
			return;
		}
		if (GuestType::$_instancePoolCount > GuestType::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		GuestType::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++GuestType::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return GuestType
	 */
	static function retrieveFromPool($pk) {
		if (!GuestType::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, GuestType::$_instancePool)) {
			return GuestType::$_instancePool[$pk];
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

		if (array_key_exists($pk, GuestType::$_instancePool)) {
			unset(GuestType::$_instancePool[$pk]);
			--GuestType::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		GuestType::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		GuestType::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return GuestType::$_poolEnabled;
	}

	/**
	 * Returns an array of all GuestType objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return GuestType[]
	 */
	static function getAll($extra = null) {
		$conn = GuestType::getConnection();
		$table_quoted = $conn->quoteIdentifier(GuestType::getTableName());
		return GuestType::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = GuestType::getConnection();
		if (!$q->getTable() || GuestType::getTableName() != $q->getTable()) {
			$q->setTable(GuestType::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = GuestType::getConnection();
		$q = clone $q;
		if (!$q->getTable() || GuestType::getTableName() != $q->getTable()) {
			$q->setTable(GuestType::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			GuestType::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return GuestType[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'GuestType');
			$class = $additional_classes;
		} else {
			$class = 'GuestType';
		}

		return GuestType::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, GuestType::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = GuestType::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), GuestType::getTableName())) {
			$q->setTable(GuestType::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return GuestType[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : GuestType::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return GuestType::doSelect($q, $classes);
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
