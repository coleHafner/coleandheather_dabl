<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseFact extends ApplicationModel {

	const FACT_ID = 'fact.fact_id';
	const USER_ID = 'fact.user_id';
	const FACT = 'fact.fact';
	const ACTIVE = 'fact.active';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'fact';

	/**
	 * Cache of objects retrieved from the database
	 * @var Fact[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'fact_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'fact_id';

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
		'fact_id',
		'user_id',
		'fact',
		'active',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'fact_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'user_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'fact' => BaseModel::COLUMN_TYPE_VARCHAR,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
	);

	/**
	 * `fact_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $fact_id;

	/**
	 * `user_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $user_id;

	/**
	 * `fact` VARCHAR
	 * @var string
	 */
	protected $fact;

	/**
	 * `active` TINYINT DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * Gets the value of the fact_id field
	 */
	function getFactId() {
		return $this->fact_id;
	}

	/**
	 * Sets the value of the fact_id field
	 * @return Fact
	 */
	function setFactId($value) {
		return $this->setColumnValue('fact_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Fact::getFactId
	 * final because getFactId should be extended instead
	 * to ensure consistent behavior
	 * @see Fact::getFactId
	 */
	final function getFact_id() {
		return $this->getFactId();
	}

	/**
	 * Convenience function for Fact::setFactId
	 * final because setFactId should be extended instead
	 * to ensure consistent behavior
	 * @see Fact::setFactId
	 * @return Fact
	 */
	final function setFact_id($value) {
		return $this->setFactId($value);
	}

	/**
	 * Gets the value of the user_id field
	 */
	function getUserId() {
		return $this->user_id;
	}

	/**
	 * Sets the value of the user_id field
	 * @return Fact
	 */
	function setUserId($value) {
		return $this->setColumnValue('user_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Fact::getUserId
	 * final because getUserId should be extended instead
	 * to ensure consistent behavior
	 * @see Fact::getUserId
	 */
	final function getUser_id() {
		return $this->getUserId();
	}

	/**
	 * Convenience function for Fact::setUserId
	 * final because setUserId should be extended instead
	 * to ensure consistent behavior
	 * @see Fact::setUserId
	 * @return Fact
	 */
	final function setUser_id($value) {
		return $this->setUserId($value);
	}

	/**
	 * Gets the value of the fact field
	 */
	function getFact() {
		return $this->fact;
	}

	/**
	 * Sets the value of the fact field
	 * @return Fact
	 */
	function setFact($value) {
		return $this->setColumnValue('fact', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return Fact
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
	 * @return Fact
	 */
	static function create() {
		return new Fact();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return Fact::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return Fact::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return Fact::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return Fact::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', Fact::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return Fact::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return Fact::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return Fact::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return Fact
	 */
	static function retrieveByPK($the_pk) {
		return Fact::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return Fact
	 */
	static function retrieveByPKs($fact_id) {
		if (null === $fact_id) {
			return null;
		}
		if (Fact::$_poolEnabled) {
			$pool_instance = Fact::retrieveFromPool($fact_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = Fact::getConnection();
		$q = new Query;
		$q->add('fact_id', $fact_id);
		return array_shift(Fact::doSelect($q));
	}

	/**
	 * Searches the database for a row with a fact_id
	 * value that matches the one provided
	 * @return Fact
	 */
	static function retrieveByFactId($value) {
		return Fact::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a user_id
	 * value that matches the one provided
	 * @return Fact
	 */
	static function retrieveByUserId($value) {
		return Fact::retrieveByColumn('user_id', $value);
	}

	/**
	 * Searches the database for a row with a fact
	 * value that matches the one provided
	 * @return Fact
	 */
	static function retrieveByFact($value) {
		return Fact::retrieveByColumn('fact', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return Fact
	 */
	static function retrieveByActive($value) {
		return Fact::retrieveByColumn('active', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = Fact::getConnection();
		return array_shift(Fact::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('fact_id')));
	}

	/**
	 * Populates and returns an instance of Fact with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return Fact
	 */
	static function fetchSingle($query_string) {
		return array_shift(Fact::fetch($query_string));
	}

	/**
	 * Populates and returns an array of Fact objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return Fact[]
	 */
	static function fetch($query_string) {
		$conn = Fact::getConnection();
		$result = $conn->query($query_string);
		return Fact::fromResult($result, 'Fact');
	}

	/**
	 * Returns an array of Fact objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'Fact') {
		return baseModel::fromResult($result, $class, Fact::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return Fact
	 */
	function castInts() {
		$this->fact_id = (null === $this->fact_id) ? null : (int) $this->fact_id;
		$this->user_id = (null === $this->user_id) ? null : (int) $this->user_id;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param Fact $object
	 * @return void
	 */
	static function insertIntoPool(Fact $object) {
		if (!Fact::$_poolEnabled) {
			return;
		}
		if (Fact::$_instancePoolCount > Fact::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		Fact::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++Fact::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return Fact
	 */
	static function retrieveFromPool($pk) {
		if (!Fact::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, Fact::$_instancePool)) {
			return Fact::$_instancePool[$pk];
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

		if (array_key_exists($pk, Fact::$_instancePool)) {
			unset(Fact::$_instancePool[$pk]);
			--Fact::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		Fact::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		Fact::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return Fact::$_poolEnabled;
	}

	/**
	 * Returns an array of all Fact objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return Fact[]
	 */
	static function getAll($extra = null) {
		$conn = Fact::getConnection();
		$table_quoted = $conn->quoteIdentifier(Fact::getTableName());
		return Fact::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Fact::getConnection();
		if (!$q->getTable() || Fact::getTableName() != $q->getTable()) {
			$q->setTable(Fact::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = Fact::getConnection();
		$q = clone $q;
		if (!$q->getTable() || Fact::getTableName() != $q->getTable()) {
			$q->setTable(Fact::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			Fact::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return Fact[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'Fact');
			$class = $additional_classes;
		} else {
			$class = 'Fact';
		}

		return Fact::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, Fact::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Fact::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), Fact::getTableName())) {
			$q->setTable(Fact::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return Fact[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Fact::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return Fact::doSelect($q, $classes);
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
		return 0 === count($this->_validationErrors);
	}

}
