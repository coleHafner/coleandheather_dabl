<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseGuestToGuestType extends ApplicationModel {

	const GUEST_TO_GUEST_TYPE_ID = 'guestToGuestType.guest_to_guest_type_id';
	const GUEST_ID = 'guestToGuestType.guest_id';
	const GUEST_TYPE_ID = 'guestToGuestType.guest_type_id';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'guestToGuestType';

	/**
	 * Cache of objects retrieved from the database
	 * @var GuestToGuestType[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'guest_to_guest_type_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'guest_to_guest_type_id';

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
		'guest_to_guest_type_id',
		'guest_id',
		'guest_type_id',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'guest_to_guest_type_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'guest_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'guest_type_id' => BaseModel::COLUMN_TYPE_INTEGER,
	);

	/**
	 * `guest_to_guest_type_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $guest_to_guest_type_id;

	/**
	 * `guest_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $guest_id;

	/**
	 * `guest_type_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $guest_type_id;

	/**
	 * Gets the value of the guest_to_guest_type_id field
	 */
	function getGuestToGuestTypeId() {
		return $this->guest_to_guest_type_id;
	}

	/**
	 * Sets the value of the guest_to_guest_type_id field
	 * @return GuestToGuestType
	 */
	function setGuestToGuestTypeId($value) {
		return $this->setColumnValue('guest_to_guest_type_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for GuestToGuestType::getGuestToGuestTypeId
	 * final because getGuestToGuestTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestToGuestType::getGuestToGuestTypeId
	 */
	final function getGuest_to_guest_type_id() {
		return $this->getGuestToGuestTypeId();
	}

	/**
	 * Convenience function for GuestToGuestType::setGuestToGuestTypeId
	 * final because setGuestToGuestTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestToGuestType::setGuestToGuestTypeId
	 * @return GuestToGuestType
	 */
	final function setGuest_to_guest_type_id($value) {
		return $this->setGuestToGuestTypeId($value);
	}

	/**
	 * Gets the value of the guest_id field
	 */
	function getGuestId() {
		return $this->guest_id;
	}

	/**
	 * Sets the value of the guest_id field
	 * @return GuestToGuestType
	 */
	function setGuestId($value) {
		return $this->setColumnValue('guest_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for GuestToGuestType::getGuestId
	 * final because getGuestId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestToGuestType::getGuestId
	 */
	final function getGuest_id() {
		return $this->getGuestId();
	}

	/**
	 * Convenience function for GuestToGuestType::setGuestId
	 * final because setGuestId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestToGuestType::setGuestId
	 * @return GuestToGuestType
	 */
	final function setGuest_id($value) {
		return $this->setGuestId($value);
	}

	/**
	 * Gets the value of the guest_type_id field
	 */
	function getGuestTypeId() {
		return $this->guest_type_id;
	}

	/**
	 * Sets the value of the guest_type_id field
	 * @return GuestToGuestType
	 */
	function setGuestTypeId($value) {
		return $this->setColumnValue('guest_type_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for GuestToGuestType::getGuestTypeId
	 * final because getGuestTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestToGuestType::getGuestTypeId
	 */
	final function getGuest_type_id() {
		return $this->getGuestTypeId();
	}

	/**
	 * Convenience function for GuestToGuestType::setGuestTypeId
	 * final because setGuestTypeId should be extended instead
	 * to ensure consistent behavior
	 * @see GuestToGuestType::setGuestTypeId
	 * @return GuestToGuestType
	 */
	final function setGuest_type_id($value) {
		return $this->setGuestTypeId($value);
	}

	/**
	 * @return DABLPDO
	 */
	static function getConnection() {
		return DBManager::getConnection('default_connection');
	}

	/**
	 * @return GuestToGuestType
	 */
	static function create() {
		return new GuestToGuestType();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return GuestToGuestType::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return GuestToGuestType::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return GuestToGuestType::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return GuestToGuestType::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', GuestToGuestType::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return GuestToGuestType::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return GuestToGuestType::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return GuestToGuestType::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return GuestToGuestType
	 */
	static function retrieveByPK($the_pk) {
		return GuestToGuestType::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return GuestToGuestType
	 */
	static function retrieveByPKs($guest_to_guest_type_id) {
		if (null === $guest_to_guest_type_id) {
			return null;
		}
		if (GuestToGuestType::$_poolEnabled) {
			$pool_instance = GuestToGuestType::retrieveFromPool($guest_to_guest_type_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = GuestToGuestType::getConnection();
		$q = new Query;
		$q->add('guest_to_guest_type_id', $guest_to_guest_type_id);
		return array_shift(GuestToGuestType::doSelect($q));
	}

	/**
	 * Searches the database for a row with a guest_to_guest_type_id
	 * value that matches the one provided
	 * @return GuestToGuestType
	 */
	static function retrieveByGuestToGuestTypeId($value) {
		return GuestToGuestType::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a guest_id
	 * value that matches the one provided
	 * @return GuestToGuestType
	 */
	static function retrieveByGuestId($value) {
		return GuestToGuestType::retrieveByColumn('guest_id', $value);
	}

	/**
	 * Searches the database for a row with a guest_type_id
	 * value that matches the one provided
	 * @return GuestToGuestType
	 */
	static function retrieveByGuestTypeId($value) {
		return GuestToGuestType::retrieveByColumn('guest_type_id', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = GuestToGuestType::getConnection();
		return array_shift(GuestToGuestType::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('guest_to_guest_type_id')));
	}

	/**
	 * Populates and returns an instance of GuestToGuestType with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return GuestToGuestType
	 */
	static function fetchSingle($query_string) {
		return array_shift(GuestToGuestType::fetch($query_string));
	}

	/**
	 * Populates and returns an array of GuestToGuestType objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return GuestToGuestType[]
	 */
	static function fetch($query_string) {
		$conn = GuestToGuestType::getConnection();
		$result = $conn->query($query_string);
		return GuestToGuestType::fromResult($result, 'GuestToGuestType');
	}

	/**
	 * Returns an array of GuestToGuestType objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'GuestToGuestType') {
		return baseModel::fromResult($result, $class, GuestToGuestType::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return GuestToGuestType
	 */
	function castInts() {
		$this->guest_to_guest_type_id = (null === $this->guest_to_guest_type_id) ? null : (int) $this->guest_to_guest_type_id;
		$this->guest_id = (null === $this->guest_id) ? null : (int) $this->guest_id;
		$this->guest_type_id = (null === $this->guest_type_id) ? null : (int) $this->guest_type_id;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param GuestToGuestType $object
	 * @return void
	 */
	static function insertIntoPool(GuestToGuestType $object) {
		if (!GuestToGuestType::$_poolEnabled) {
			return;
		}
		if (GuestToGuestType::$_instancePoolCount > GuestToGuestType::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		GuestToGuestType::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++GuestToGuestType::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return GuestToGuestType
	 */
	static function retrieveFromPool($pk) {
		if (!GuestToGuestType::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, GuestToGuestType::$_instancePool)) {
			return GuestToGuestType::$_instancePool[$pk];
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

		if (array_key_exists($pk, GuestToGuestType::$_instancePool)) {
			unset(GuestToGuestType::$_instancePool[$pk]);
			--GuestToGuestType::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		GuestToGuestType::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		GuestToGuestType::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return GuestToGuestType::$_poolEnabled;
	}

	/**
	 * Returns an array of all GuestToGuestType objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return GuestToGuestType[]
	 */
	static function getAll($extra = null) {
		$conn = GuestToGuestType::getConnection();
		$table_quoted = $conn->quoteIdentifier(GuestToGuestType::getTableName());
		return GuestToGuestType::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = GuestToGuestType::getConnection();
		if (!$q->getTable() || GuestToGuestType::getTableName() != $q->getTable()) {
			$q->setTable(GuestToGuestType::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = GuestToGuestType::getConnection();
		$q = clone $q;
		if (!$q->getTable() || GuestToGuestType::getTableName() != $q->getTable()) {
			$q->setTable(GuestToGuestType::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			GuestToGuestType::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return GuestToGuestType[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'GuestToGuestType');
			$class = $additional_classes;
		} else {
			$class = 'GuestToGuestType';
		}

		return GuestToGuestType::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, GuestToGuestType::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = GuestToGuestType::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), GuestToGuestType::getTableName())) {
			$q->setTable(GuestToGuestType::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return GuestToGuestType[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : GuestToGuestType::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return GuestToGuestType::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getguest_id()) {
			$this->_validationErrors[] = 'guest_id must not be null';
		}
		if (null === $this->getguest_type_id()) {
			$this->_validationErrors[] = 'guest_type_id must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
