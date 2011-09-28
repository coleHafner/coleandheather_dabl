<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseAddress extends ApplicationModel {

	const ADDRESS_ID = 'address.address_id';
	const STREET_ADDRESS = 'address.street_address';
	const CITY = 'address.city';
	const STATE = 'address.state';
	const ZIP = 'address.zip';
	const ACTIVE = 'address.active';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'address';

	/**
	 * Cache of objects retrieved from the database
	 * @var Address[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'address_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'address_id';

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
		'address_id',
		'street_address',
		'city',
		'state',
		'zip',
		'active',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'address_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'street_address' => BaseModel::COLUMN_TYPE_VARCHAR,
		'city' => BaseModel::COLUMN_TYPE_VARCHAR,
		'state' => BaseModel::COLUMN_TYPE_VARCHAR,
		'zip' => BaseModel::COLUMN_TYPE_VARCHAR,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
	);

	/**
	 * `address_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $address_id;

	/**
	 * `street_address` VARCHAR
	 * @var string
	 */
	protected $street_address;

	/**
	 * `city` VARCHAR
	 * @var string
	 */
	protected $city;

	/**
	 * `state` VARCHAR
	 * @var string
	 */
	protected $state;

	/**
	 * `zip` VARCHAR
	 * @var string
	 */
	protected $zip;

	/**
	 * `active` TINYINT DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * Gets the value of the address_id field
	 */
	function getAddressId() {
		return $this->address_id;
	}

	/**
	 * Sets the value of the address_id field
	 * @return Address
	 */
	function setAddressId($value) {
		return $this->setColumnValue('address_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Address::getAddressId
	 * final because getAddressId should be extended instead
	 * to ensure consistent behavior
	 * @see Address::getAddressId
	 */
	final function getAddress_id() {
		return $this->getAddressId();
	}

	/**
	 * Convenience function for Address::setAddressId
	 * final because setAddressId should be extended instead
	 * to ensure consistent behavior
	 * @see Address::setAddressId
	 * @return Address
	 */
	final function setAddress_id($value) {
		return $this->setAddressId($value);
	}

	/**
	 * Gets the value of the street_address field
	 */
	function getStreetAddress() {
		return $this->street_address;
	}

	/**
	 * Sets the value of the street_address field
	 * @return Address
	 */
	function setStreetAddress($value) {
		return $this->setColumnValue('street_address', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Address::getStreetAddress
	 * final because getStreetAddress should be extended instead
	 * to ensure consistent behavior
	 * @see Address::getStreetAddress
	 */
	final function getStreet_address() {
		return $this->getStreetAddress();
	}

	/**
	 * Convenience function for Address::setStreetAddress
	 * final because setStreetAddress should be extended instead
	 * to ensure consistent behavior
	 * @see Address::setStreetAddress
	 * @return Address
	 */
	final function setStreet_address($value) {
		return $this->setStreetAddress($value);
	}

	/**
	 * Gets the value of the city field
	 */
	function getCity() {
		return $this->city;
	}

	/**
	 * Sets the value of the city field
	 * @return Address
	 */
	function setCity($value) {
		return $this->setColumnValue('city', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the state field
	 */
	function getState() {
		return $this->state;
	}

	/**
	 * Sets the value of the state field
	 * @return Address
	 */
	function setState($value) {
		return $this->setColumnValue('state', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the zip field
	 */
	function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the value of the zip field
	 * @return Address
	 */
	function setZip($value) {
		return $this->setColumnValue('zip', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return Address
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
	 * @return Address
	 */
	static function create() {
		return new Address();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return Address::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return Address::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return Address::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return Address::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', Address::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return Address::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return Address::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return Address::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return Address
	 */
	static function retrieveByPK($the_pk) {
		return Address::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return Address
	 */
	static function retrieveByPKs($address_id) {
		if (null === $address_id) {
			return null;
		}
		if (Address::$_poolEnabled) {
			$pool_instance = Address::retrieveFromPool($address_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = Address::getConnection();
		$q = new Query;
		$q->add('address_id', $address_id);
		return array_shift(Address::doSelect($q));
	}

	/**
	 * Searches the database for a row with a address_id
	 * value that matches the one provided
	 * @return Address
	 */
	static function retrieveByAddressId($value) {
		return Address::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a street_address
	 * value that matches the one provided
	 * @return Address
	 */
	static function retrieveByStreetAddress($value) {
		return Address::retrieveByColumn('street_address', $value);
	}

	/**
	 * Searches the database for a row with a city
	 * value that matches the one provided
	 * @return Address
	 */
	static function retrieveByCity($value) {
		return Address::retrieveByColumn('city', $value);
	}

	/**
	 * Searches the database for a row with a state
	 * value that matches the one provided
	 * @return Address
	 */
	static function retrieveByState($value) {
		return Address::retrieveByColumn('state', $value);
	}

	/**
	 * Searches the database for a row with a zip
	 * value that matches the one provided
	 * @return Address
	 */
	static function retrieveByZip($value) {
		return Address::retrieveByColumn('zip', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return Address
	 */
	static function retrieveByActive($value) {
		return Address::retrieveByColumn('active', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = Address::getConnection();
		return array_shift(Address::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('address_id')));
	}

	/**
	 * Populates and returns an instance of Address with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return Address
	 */
	static function fetchSingle($query_string) {
		return array_shift(Address::fetch($query_string));
	}

	/**
	 * Populates and returns an array of Address objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return Address[]
	 */
	static function fetch($query_string) {
		$conn = Address::getConnection();
		$result = $conn->query($query_string);
		return Address::fromResult($result, 'Address');
	}

	/**
	 * Returns an array of Address objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'Address') {
		return baseModel::fromResult($result, $class, Address::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return Address
	 */
	function castInts() {
		$this->address_id = (null === $this->address_id) ? null : (int) $this->address_id;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param Address $object
	 * @return void
	 */
	static function insertIntoPool(Address $object) {
		if (!Address::$_poolEnabled) {
			return;
		}
		if (Address::$_instancePoolCount > Address::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		Address::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++Address::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return Address
	 */
	static function retrieveFromPool($pk) {
		if (!Address::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, Address::$_instancePool)) {
			return Address::$_instancePool[$pk];
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

		if (array_key_exists($pk, Address::$_instancePool)) {
			unset(Address::$_instancePool[$pk]);
			--Address::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		Address::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		Address::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return Address::$_poolEnabled;
	}

	/**
	 * Returns an array of all Address objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return Address[]
	 */
	static function getAll($extra = null) {
		$conn = Address::getConnection();
		$table_quoted = $conn->quoteIdentifier(Address::getTableName());
		return Address::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Address::getConnection();
		if (!$q->getTable() || Address::getTableName() != $q->getTable()) {
			$q->setTable(Address::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = Address::getConnection();
		$q = clone $q;
		if (!$q->getTable() || Address::getTableName() != $q->getTable()) {
			$q->setTable(Address::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			Address::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return Address[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'Address');
			$class = $additional_classes;
		} else {
			$class = 'Address';
		}

		return Address::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, Address::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Address::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), Address::getTableName())) {
			$q->setTable(Address::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return Address[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Address::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return Address::doSelect($q, $classes);
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
