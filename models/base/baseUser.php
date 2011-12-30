<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseUser extends ApplicationModel {

	const USER_ID = 'user.userId';
	const USER_NAME = 'user.userName';
	const PASSWORD = 'user.password';
	const CREATED = 'user.created';
	const UPDATED = 'user.updated';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'user';

	/**
	 * Cache of objects retrieved from the database
	 * @var User[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'userId',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'userId';

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
		'userId',
		'userName',
		'password',
		'created',
		'updated',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'userId' => BaseModel::COLUMN_TYPE_INTEGER,
		'userName' => BaseModel::COLUMN_TYPE_VARCHAR,
		'password' => BaseModel::COLUMN_TYPE_VARCHAR,
		'created' => BaseModel::COLUMN_TYPE_TIMESTAMP,
		'updated' => BaseModel::COLUMN_TYPE_TIMESTAMP,
	);

	/**
	 * `userId` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $userId;

	/**
	 * `userName` VARCHAR NOT NULL
	 * @var string
	 */
	protected $userName;

	/**
	 * `password` VARCHAR NOT NULL
	 * @var string
	 */
	protected $password;

	/**
	 * `created` TIMESTAMP NOT NULL
	 * @var string
	 */
	protected $created;

	/**
	 * `updated` TIMESTAMP NOT NULL
	 * @var string
	 */
	protected $updated;

	/**
	 * Gets the value of the userId field
	 */
	function getUserId() {
		return $this->userId;
	}

	/**
	 * Sets the value of the userId field
	 * @return User
	 */
	function setUserId($value) {
		return $this->setColumnValue('userId', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Gets the value of the userName field
	 */
	function getUserName() {
		return $this->userName;
	}

	/**
	 * Sets the value of the userName field
	 * @return User
	 */
	function setUserName($value) {
		return $this->setColumnValue('userName', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the password field
	 */
	function getPassword() {
		return $this->password;
	}

	/**
	 * Sets the value of the password field
	 * @return User
	 */
	function setPassword($value) {
		return $this->setColumnValue('password', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the created field
	 */
	function getCreated($format = null) {
		if (null === $this->created || null === $format) {
			return $this->created;
		}
		if (0 === strpos($this->created, '0000-00-00')) {
			return null;
		}
		return date($format, strtotime($this->created));
	}

	/**
	 * Sets the value of the created field
	 * @return User
	 */
	function setCreated($value) {
		return $this->setColumnValue('created', $value, BaseModel::COLUMN_TYPE_TIMESTAMP);
	}

	/**
	 * Gets the value of the updated field
	 */
	function getUpdated($format = null) {
		if (null === $this->updated || null === $format) {
			return $this->updated;
		}
		if (0 === strpos($this->updated, '0000-00-00')) {
			return null;
		}
		return date($format, strtotime($this->updated));
	}

	/**
	 * Sets the value of the updated field
	 * @return User
	 */
	function setUpdated($value) {
		return $this->setColumnValue('updated', $value, BaseModel::COLUMN_TYPE_TIMESTAMP);
	}

	/**
	 * @return DABLPDO
	 */
	static function getConnection() {
		return DBManager::getConnection('default_connection');
	}

	/**
	 * @return User
	 */
	static function create() {
		return new User();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return User::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return User::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return User::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return User::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', User::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return User::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return User::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return User::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return User
	 */
	static function retrieveByPK($the_pk) {
		return User::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return User
	 */
	static function retrieveByPKs($userid) {
		if (null === $userid) {
			return null;
		}
		if (User::$_poolEnabled) {
			$pool_instance = User::retrieveFromPool($userid);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = User::getConnection();
		$q = new Query;
		$q->add('userId', $userid);
		return array_shift(User::doSelect($q));
	}

	/**
	 * Searches the database for a row with a userId
	 * value that matches the one provided
	 * @return User
	 */
	static function retrieveByUserId($value) {
		return User::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a userName
	 * value that matches the one provided
	 * @return User
	 */
	static function retrieveByUserName($value) {
		return User::retrieveByColumn('userName', $value);
	}

	/**
	 * Searches the database for a row with a password
	 * value that matches the one provided
	 * @return User
	 */
	static function retrieveByPassword($value) {
		return User::retrieveByColumn('password', $value);
	}

	/**
	 * Searches the database for a row with a created
	 * value that matches the one provided
	 * @return User
	 */
	static function retrieveByCreated($value) {
		return User::retrieveByColumn('created', $value);
	}

	/**
	 * Searches the database for a row with a updated
	 * value that matches the one provided
	 * @return User
	 */
	static function retrieveByUpdated($value) {
		return User::retrieveByColumn('updated', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = User::getConnection();
		return array_shift(User::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('userId')));
	}

	/**
	 * Populates and returns an instance of User with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return User
	 */
	static function fetchSingle($query_string) {
		return array_shift(User::fetch($query_string));
	}

	/**
	 * Populates and returns an array of User objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return User[]
	 */
	static function fetch($query_string) {
		$conn = User::getConnection();
		$result = $conn->query($query_string);
		return User::fromResult($result, 'User');
	}

	/**
	 * Returns an array of User objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'User') {
		return baseModel::fromResult($result, $class, User::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return User
	 */
	function castInts() {
		$this->userId = (null === $this->userId) ? null : (int) $this->userId;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param User $object
	 * @return void
	 */
	static function insertIntoPool(User $object) {
		if (!User::$_poolEnabled) {
			return;
		}
		if (User::$_instancePoolCount > User::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		User::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++User::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return User
	 */
	static function retrieveFromPool($pk) {
		if (!User::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, User::$_instancePool)) {
			return User::$_instancePool[$pk];
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

		if (array_key_exists($pk, User::$_instancePool)) {
			unset(User::$_instancePool[$pk]);
			--User::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		User::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		User::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return User::$_poolEnabled;
	}

	/**
	 * Returns an array of all User objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return User[]
	 */
	static function getAll($extra = null) {
		$conn = User::getConnection();
		$table_quoted = $conn->quoteIdentifier(User::getTableName());
		return User::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = User::getConnection();
		if (!$q->getTable() || User::getTableName() != $q->getTable()) {
			$q->setTable(User::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = User::getConnection();
		$q = clone $q;
		if (!$q->getTable() || User::getTableName() != $q->getTable()) {
			$q->setTable(User::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			User::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return User[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'User');
			$class = $additional_classes;
		} else {
			$class = 'User';
		}

		return User::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, User::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = User::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), User::getTableName())) {
			$q->setTable(User::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return User[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : User::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return User::doSelect($q, $classes);
	}

	/**
	 * Returns a Query for selecting session Objects(rows) from the session table
	 * with a userId that matches $this->userId.
	 * @return Query
	 */
	function getSessionsRelatedByUserIdQuery(Query $q = null) {
		return $this->getForeignObjectsQuery('session', 'userId', 'userId', $q);
	}

	/**
	 * Returns the count of Session Objects(rows) from the session table
	 * with a userId that matches $this->userId.
	 * @return int
	 */
	function countSessionsRelatedByUserId(Query $q = null) {
		if (null === $this->getuserId()) {
			return 0;
		}
		return Session::doCount($this->getSessionsRelatedByUserIdQuery($q));
	}

	/**
	 * Deletes the session Objects(rows) from the session table
	 * with a userId that matches $this->userId.
	 * @return int
	 */
	function deleteSessionsRelatedByUserId(Query $q = null) {
		if (null === $this->getuserId()) {
			return 0;
		}
		return Session::doDelete($this->getSessionsRelatedByUserIdQuery($q));
	}

	private $SessionsRelatedByUserId_c = array();

	/**
	 * Returns an array of Session objects with a userId
	 * that matches $this->userId.
	 * When first called, this method will cache the result.
	 * After that, if $this->userId is not modified, the
	 * method will return the cached result instead of querying the database
	 * a second time(for performance purposes).
	 * @return Session[]
	 */
	function getSessionsRelatedByUserId($extra = null) {
		if (null === $this->getuserId()) {
			return array();
		}

		if (!$extra || $extra instanceof Query) {
			return Session::doSelect($this->getSessionsRelatedByUserIdQuery($extra));
		}

		if (!$extra && $this->getCacheResults() && @$this->SessionsRelatedByUserId_c && !$this->isColumnModified('userId')) {
			return $this->SessionsRelatedByUserId_c;
		}

		$conn = $this->getConnection();
		$table_quoted = $conn->quoteIdentifier(Session::getTableName());
		$column_quoted = $conn->quoteIdentifier('userId');
		$sessions = Session::fetch("SELECT * FROM $table_quoted WHERE $column_quoted=" . $conn->prepareInput($this->getuserId()) . " $extra");
		if (null === $extra) $this->Sessions_c = $sessions;
		return $sessions;
	}

	/**
	 * Convenience function for User::getSessionsRelatedByuserId
	 * @return Session[]
	 * @see User::getSessionsRelatedByUserId
	 */
	function getSessions($extra = null) {
		return $this->getSessionsRelatedByUserId($extra);
	}

	/**
	  * Convenience function for User::getSessionsRelatedByuserIdQuery
	  * @return Query
	  * @see User::getSessionsRelatedByuserIdQuery
	  */
	function getSessionsQuery(Query $q = null) {
		return $this->getForeignObjectsQuery('session', 'userId','userId', $q);
	}

	/**
	  * Convenience function for User::deleteSessionsRelatedByuserId
	  * @return int
	  * @see User::deleteSessionsRelatedByuserId
	  */
	function deleteSessions(Query $q = null) {
		return $this->deleteSessionsRelatedByUserId($q);
	}

	/**
	  * Convenience function for User::countSessionsRelatedByuserId
	  * @return int
	  * @see User::countSessionsRelatedByUserId
	  */
	function countSessions(Query $q = null) {
		return $this->countSessionsRelatedByUserId($q);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getuserName()) {
			$this->_validationErrors[] = 'userName must not be null';
		}
		if (null === $this->getpassword()) {
			$this->_validationErrors[] = 'password must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
