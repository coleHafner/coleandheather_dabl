<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseSession extends ApplicationModel {

	const SESSION_ID = 'session.sessionId';
	const USER_ID = 'session.userId';
	const SESSION_HASH = 'session.sessionHash';
	const USER_AGENT = 'session.userAgent';
	const IP_ADDRESS = 'session.ipAddress';
	const TERMINATED = 'session.terminated';
	const CREATED = 'session.created';
	const UPDATED = 'session.updated';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'session';

	/**
	 * Cache of objects retrieved from the database
	 * @var Session[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'sessionId',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'sessionId';

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
		'sessionId',
		'userId',
		'sessionHash',
		'userAgent',
		'ipAddress',
		'terminated',
		'created',
		'updated',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'sessionId' => BaseModel::COLUMN_TYPE_INTEGER,
		'userId' => BaseModel::COLUMN_TYPE_INTEGER,
		'sessionHash' => BaseModel::COLUMN_TYPE_VARCHAR,
		'userAgent' => BaseModel::COLUMN_TYPE_VARCHAR,
		'ipAddress' => BaseModel::COLUMN_TYPE_VARCHAR,
		'terminated' => BaseModel::COLUMN_TYPE_TIMESTAMP,
		'created' => BaseModel::COLUMN_TYPE_TIMESTAMP,
		'updated' => BaseModel::COLUMN_TYPE_TIMESTAMP,
	);

	/**
	 * `sessionId` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $sessionId;

	/**
	 * `userId` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $userId;

	/**
	 * `sessionHash` VARCHAR NOT NULL
	 * @var string
	 */
	protected $sessionHash;

	/**
	 * `userAgent` VARCHAR NOT NULL
	 * @var string
	 */
	protected $userAgent;

	/**
	 * `ipAddress` VARCHAR NOT NULL
	 * @var string
	 */
	protected $ipAddress;

	/**
	 * `terminated` TIMESTAMP
	 * @var string
	 */
	protected $terminated;

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
	 * Gets the value of the sessionId field
	 */
	function getSessionId() {
		return $this->sessionId;
	}

	/**
	 * Sets the value of the sessionId field
	 * @return Session
	 */
	function setSessionId($value) {
		return $this->setColumnValue('sessionId', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Gets the value of the userId field
	 */
	function getUserId() {
		return $this->userId;
	}

	/**
	 * Sets the value of the userId field
	 * @return Session
	 */
	function setUserId($value) {
		return $this->setColumnValue('userId', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Gets the value of the sessionHash field
	 */
	function getSessionHash() {
		return $this->sessionHash;
	}

	/**
	 * Sets the value of the sessionHash field
	 * @return Session
	 */
	function setSessionHash($value) {
		return $this->setColumnValue('sessionHash', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the userAgent field
	 */
	function getUserAgent() {
		return $this->userAgent;
	}

	/**
	 * Sets the value of the userAgent field
	 * @return Session
	 */
	function setUserAgent($value) {
		return $this->setColumnValue('userAgent', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the ipAddress field
	 */
	function getIpAddress() {
		return $this->ipAddress;
	}

	/**
	 * Sets the value of the ipAddress field
	 * @return Session
	 */
	function setIpAddress($value) {
		return $this->setColumnValue('ipAddress', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Gets the value of the terminated field
	 */
	function getTerminated($format = null) {
		if (null === $this->terminated || null === $format) {
			return $this->terminated;
		}
		if (0 === strpos($this->terminated, '0000-00-00')) {
			return null;
		}
		return date($format, strtotime($this->terminated));
	}

	/**
	 * Sets the value of the terminated field
	 * @return Session
	 */
	function setTerminated($value) {
		return $this->setColumnValue('terminated', $value, BaseModel::COLUMN_TYPE_TIMESTAMP);
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
	 * @return Session
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
	 * @return Session
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
	 * @return Session
	 */
	static function create() {
		return new Session();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return Session::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return Session::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return Session::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return Session::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', Session::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return Session::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return Session::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return Session::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return Session
	 */
	static function retrieveByPK($the_pk) {
		return Session::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return Session
	 */
	static function retrieveByPKs($sessionid) {
		if (null === $sessionid) {
			return null;
		}
		if (Session::$_poolEnabled) {
			$pool_instance = Session::retrieveFromPool($sessionid);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = Session::getConnection();
		$q = new Query;
		$q->add('sessionId', $sessionid);
		return array_shift(Session::doSelect($q));
	}

	/**
	 * Searches the database for a row with a sessionId
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveBySessionId($value) {
		return Session::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a userId
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveByUserId($value) {
		return Session::retrieveByColumn('userId', $value);
	}

	/**
	 * Searches the database for a row with a sessionHash
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveBySessionHash($value) {
		return Session::retrieveByColumn('sessionHash', $value);
	}

	/**
	 * Searches the database for a row with a userAgent
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveByUserAgent($value) {
		return Session::retrieveByColumn('userAgent', $value);
	}

	/**
	 * Searches the database for a row with a ipAddress
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveByIpAddress($value) {
		return Session::retrieveByColumn('ipAddress', $value);
	}

	/**
	 * Searches the database for a row with a terminated
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveByTerminated($value) {
		return Session::retrieveByColumn('terminated', $value);
	}

	/**
	 * Searches the database for a row with a created
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveByCreated($value) {
		return Session::retrieveByColumn('created', $value);
	}

	/**
	 * Searches the database for a row with a updated
	 * value that matches the one provided
	 * @return Session
	 */
	static function retrieveByUpdated($value) {
		return Session::retrieveByColumn('updated', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = Session::getConnection();
		return array_shift(Session::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('sessionId')));
	}

	/**
	 * Populates and returns an instance of Session with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return Session
	 */
	static function fetchSingle($query_string) {
		return array_shift(Session::fetch($query_string));
	}

	/**
	 * Populates and returns an array of Session objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return Session[]
	 */
	static function fetch($query_string) {
		$conn = Session::getConnection();
		$result = $conn->query($query_string);
		return Session::fromResult($result, 'Session');
	}

	/**
	 * Returns an array of Session objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'Session') {
		return baseModel::fromResult($result, $class, Session::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return Session
	 */
	function castInts() {
		$this->sessionId = (null === $this->sessionId) ? null : (int) $this->sessionId;
		$this->userId = (null === $this->userId) ? null : (int) $this->userId;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param Session $object
	 * @return void
	 */
	static function insertIntoPool(Session $object) {
		if (!Session::$_poolEnabled) {
			return;
		}
		if (Session::$_instancePoolCount > Session::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		Session::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++Session::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return Session
	 */
	static function retrieveFromPool($pk) {
		if (!Session::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, Session::$_instancePool)) {
			return Session::$_instancePool[$pk];
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

		if (array_key_exists($pk, Session::$_instancePool)) {
			unset(Session::$_instancePool[$pk]);
			--Session::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		Session::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		Session::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return Session::$_poolEnabled;
	}

	/**
	 * Returns an array of all Session objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return Session[]
	 */
	static function getAll($extra = null) {
		$conn = Session::getConnection();
		$table_quoted = $conn->quoteIdentifier(Session::getTableName());
		return Session::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Session::getConnection();
		if (!$q->getTable() || Session::getTableName() != $q->getTable()) {
			$q->setTable(Session::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = Session::getConnection();
		$q = clone $q;
		if (!$q->getTable() || Session::getTableName() != $q->getTable()) {
			$q->setTable(Session::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			Session::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return Session[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'Session');
			$class = $additional_classes;
		} else {
			$class = 'Session';
		}

		return Session::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, Session::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Session::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), Session::getTableName())) {
			$q->setTable(Session::getTableName());
		}

		return $q->doSelect($conn);
	}

	protected $_UserRelatedByUserId;

	/**
	 * @return Session
	 */
	function setUser(User $user = null) {
		$this->setUserRelatedByUserId($user);
		return $this;
	}

	/**
	 * @return Session
	 */
	function setUserRelatedByUserId(User $user = null) {
		if (null === $user) {
			$this->setuserId(null);
		} else {
			if (!$user->getuserId()) {
				throw new Exception('Cannot connect a User without a userId');
			}
			$this->setuserId($user->getuserId());
		}
		if ($this->getCacheResults()) {
			$this->_UserRelatedByUserId = $user;
		}
		return $this;
	}

	/**
	 * Returns a user object with a userId
	 * that matches $this->userId.
	 * @return User
	 */
	function getUser() {
		return $this->getUserRelatedByUserId();
	}

	/**
	 * Returns a user object with a userId
	 * that matches $this->userId.
	 * @return User
	 */
	function getUserRelatedByUserId() {
		if (null === $this->getuserId()) {
			$result = null;
		} else {
			if ($this->getCacheResults() && null !== $this->_UserRelatedByUserId) {
				return $this->_UserRelatedByUserId;
			}
			$result = User::retrieveByPK($this->getuserId());
		}
		if ($this->getCacheResults()) {
			$this->_UserRelatedByUserId = $result;
		}
		return $result;
	}

	static function doSelectJoinUser(Query $q = null, $join_type = Query::LEFT_JOIN) {
		return Session::doSelectJoinUserRelatedByUserId($q, $join_type);
	}

	/**
	 * @return Session[]
	 */
	static function doSelectJoinUserRelatedByUserId(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Session::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$to_table = User::getTableName();
		$q->join($to_table, $this_table . '.userId = ' . $to_table . '.userId', $join_type);
		$columns[] = $to_table . '.*';
		$q->setColumns($columns);

		return Session::doSelect($q, array('User'));
	}

	/**
	 * @return Session[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Session::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$to_table = User::getTableName();
		$q->join($to_table, $this_table . '.userId = ' . $to_table . '.userId', $join_type);
		$columns[] = $to_table . '.*';
		$classes[] = 'User';
	
		$q->setColumns($columns);
		return Session::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getuserId()) {
			$this->_validationErrors[] = 'userId must not be null';
		}
		if (null === $this->getsessionHash()) {
			$this->_validationErrors[] = 'sessionHash must not be null';
		}
		if (null === $this->getuserAgent()) {
			$this->_validationErrors[] = 'userAgent must not be null';
		}
		if (null === $this->getipAddress()) {
			$this->_validationErrors[] = 'ipAddress must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
