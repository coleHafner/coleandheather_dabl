<?php
/**
 *		Created by Dan Blaisdell's DABL
 *		Do not alter base files, as they will be overwritten.
 *		To alter the objects, alter the extended classes in
 *		the 'models' folder.
 *
 */
abstract class baseGuest extends ApplicationModel {

	const GUEST_ID = 'guest.guest_id';
	const PARENT_GUEST_ID = 'guest.parent_guest_id';
	const ADDRESS_ID = 'guest.address_id';
	const FIRST_NAME = 'guest.first_name';
	const LAST_NAME = 'guest.last_name';
	const ACTIVATION_CODE = 'guest.activation_code';
	const INITIAL_TIMESTAMP = 'guest.initial_timestamp';
	const UPDATE_TIMESTAMP = 'guest.update_timestamp';
	const EXPECTED_COUNT = 'guest.expected_count';
	const ACTUAL_COUNT = 'guest.actual_count';
	const RSVP_THROUGH_SITE = 'guest.rsvp_through_site';
	const IS_ATTENDING = 'guest.is_attending';
	const IS_NEW = 'guest.is_new';
	const ACTIVE = 'guest.active';

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $_tableName = 'guest';

	/**
	 * Cache of objects retrieved from the database
	 * @var Guest[]
	 */
	protected static $_instancePool = array();

	protected static $_instancePoolCount = 0;

	protected static $_poolEnabled = true;

	/**
	 * Array of all primary keys
	 * @var string[]
	 */
	protected static $_primaryKeys = array(
		'guest_id',
	);

	/**
	 * string name of the primary key column
	 * @var string
	 */
	protected static $_primaryKey = 'guest_id';

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
		'guest_id',
		'parent_guest_id',
		'address_id',
		'first_name',
		'last_name',
		'activation_code',
		'initial_timestamp',
		'update_timestamp',
		'expected_count',
		'actual_count',
		'rsvp_through_site',
		'is_attending',
		'is_new',
		'active',
	);

	/**
	 * array of all column types
	 * @var string[]
	 */
	protected static $_columnTypes = array(
		'guest_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'parent_guest_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'address_id' => BaseModel::COLUMN_TYPE_INTEGER,
		'first_name' => BaseModel::COLUMN_TYPE_VARCHAR,
		'last_name' => BaseModel::COLUMN_TYPE_VARCHAR,
		'activation_code' => BaseModel::COLUMN_TYPE_VARCHAR,
		'initial_timestamp' => BaseModel::COLUMN_TYPE_VARCHAR,
		'update_timestamp' => BaseModel::COLUMN_TYPE_VARCHAR,
		'expected_count' => BaseModel::COLUMN_TYPE_TINYINT,
		'actual_count' => BaseModel::COLUMN_TYPE_TINYINT,
		'rsvp_through_site' => BaseModel::COLUMN_TYPE_TINYINT,
		'is_attending' => BaseModel::COLUMN_TYPE_TINYINT,
		'is_new' => BaseModel::COLUMN_TYPE_TINYINT,
		'active' => BaseModel::COLUMN_TYPE_TINYINT,
	);

	/**
	 * `guest_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $guest_id;

	/**
	 * `parent_guest_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $parent_guest_id;

	/**
	 * `address_id` INTEGER NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $address_id;

	/**
	 * `first_name` VARCHAR
	 * @var string
	 */
	protected $first_name;

	/**
	 * `last_name` VARCHAR
	 * @var string
	 */
	protected $last_name;

	/**
	 * `activation_code` VARCHAR
	 * @var string
	 */
	protected $activation_code;

	/**
	 * `initial_timestamp` VARCHAR NOT NULL
	 * @var string
	 */
	protected $initial_timestamp;

	/**
	 * `update_timestamp` VARCHAR
	 * @var string
	 */
	protected $update_timestamp;

	/**
	 * `expected_count` TINYINT DEFAULT ''
	 * @var int
	 */
	protected $expected_count;

	/**
	 * `actual_count` TINYINT DEFAULT ''
	 * @var int
	 */
	protected $actual_count;

	/**
	 * `rsvp_through_site` TINYINT NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $rsvp_through_site;

	/**
	 * `is_attending` TINYINT NOT NULL DEFAULT ''
	 * @var int
	 */
	protected $is_attending;

	/**
	 * `is_new` TINYINT NOT NULL DEFAULT 0
	 * @var int
	 */
	protected $is_new = 0;

	/**
	 * `active` TINYINT NOT NULL DEFAULT 1
	 * @var int
	 */
	protected $active = 1;

	/**
	 * Gets the value of the guest_id field
	 */
	function getGuestId() {
		return $this->guest_id;
	}

	/**
	 * Sets the value of the guest_id field
	 * @return Guest
	 */
	function setGuestId($value) {
		return $this->setColumnValue('guest_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Guest::getGuestId
	 * final because getGuestId should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getGuestId
	 */
	final function getGuest_id() {
		return $this->getGuestId();
	}

	/**
	 * Convenience function for Guest::setGuestId
	 * final because setGuestId should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setGuestId
	 * @return Guest
	 */
	final function setGuest_id($value) {
		return $this->setGuestId($value);
	}

	/**
	 * Gets the value of the parent_guest_id field
	 */
	function getParentGuestId() {
		return $this->parent_guest_id;
	}

	/**
	 * Sets the value of the parent_guest_id field
	 * @return Guest
	 */
	function setParentGuestId($value) {
		return $this->setColumnValue('parent_guest_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Guest::getParentGuestId
	 * final because getParentGuestId should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getParentGuestId
	 */
	final function getParent_guest_id() {
		return $this->getParentGuestId();
	}

	/**
	 * Convenience function for Guest::setParentGuestId
	 * final because setParentGuestId should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setParentGuestId
	 * @return Guest
	 */
	final function setParent_guest_id($value) {
		return $this->setParentGuestId($value);
	}

	/**
	 * Gets the value of the address_id field
	 */
	function getAddressId() {
		return $this->address_id;
	}

	/**
	 * Sets the value of the address_id field
	 * @return Guest
	 */
	function setAddressId($value) {
		return $this->setColumnValue('address_id', $value, BaseModel::COLUMN_TYPE_INTEGER);
	}

	/**
	 * Convenience function for Guest::getAddressId
	 * final because getAddressId should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getAddressId
	 */
	final function getAddress_id() {
		return $this->getAddressId();
	}

	/**
	 * Convenience function for Guest::setAddressId
	 * final because setAddressId should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setAddressId
	 * @return Guest
	 */
	final function setAddress_id($value) {
		return $this->setAddressId($value);
	}

	/**
	 * Gets the value of the first_name field
	 */
	function getFirstName() {
		return $this->first_name;
	}

	/**
	 * Sets the value of the first_name field
	 * @return Guest
	 */
	function setFirstName($value) {
		return $this->setColumnValue('first_name', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Guest::getFirstName
	 * final because getFirstName should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getFirstName
	 */
	final function getFirst_name() {
		return $this->getFirstName();
	}

	/**
	 * Convenience function for Guest::setFirstName
	 * final because setFirstName should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setFirstName
	 * @return Guest
	 */
	final function setFirst_name($value) {
		return $this->setFirstName($value);
	}

	/**
	 * Gets the value of the last_name field
	 */
	function getLastName() {
		return $this->last_name;
	}

	/**
	 * Sets the value of the last_name field
	 * @return Guest
	 */
	function setLastName($value) {
		return $this->setColumnValue('last_name', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Guest::getLastName
	 * final because getLastName should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getLastName
	 */
	final function getLast_name() {
		return $this->getLastName();
	}

	/**
	 * Convenience function for Guest::setLastName
	 * final because setLastName should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setLastName
	 * @return Guest
	 */
	final function setLast_name($value) {
		return $this->setLastName($value);
	}

	/**
	 * Gets the value of the activation_code field
	 */
	function getActivationCode() {
		return $this->activation_code;
	}

	/**
	 * Sets the value of the activation_code field
	 * @return Guest
	 */
	function setActivationCode($value) {
		return $this->setColumnValue('activation_code', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Guest::getActivationCode
	 * final because getActivationCode should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getActivationCode
	 */
	final function getActivation_code() {
		return $this->getActivationCode();
	}

	/**
	 * Convenience function for Guest::setActivationCode
	 * final because setActivationCode should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setActivationCode
	 * @return Guest
	 */
	final function setActivation_code($value) {
		return $this->setActivationCode($value);
	}

	/**
	 * Gets the value of the initial_timestamp field
	 */
	function getInitialTimestamp() {
		return $this->initial_timestamp;
	}

	/**
	 * Sets the value of the initial_timestamp field
	 * @return Guest
	 */
	function setInitialTimestamp($value) {
		return $this->setColumnValue('initial_timestamp', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Guest::getInitialTimestamp
	 * final because getInitialTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getInitialTimestamp
	 */
	final function getInitial_timestamp() {
		return $this->getInitialTimestamp();
	}

	/**
	 * Convenience function for Guest::setInitialTimestamp
	 * final because setInitialTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setInitialTimestamp
	 * @return Guest
	 */
	final function setInitial_timestamp($value) {
		return $this->setInitialTimestamp($value);
	}

	/**
	 * Gets the value of the update_timestamp field
	 */
	function getUpdateTimestamp() {
		return $this->update_timestamp;
	}

	/**
	 * Sets the value of the update_timestamp field
	 * @return Guest
	 */
	function setUpdateTimestamp($value) {
		return $this->setColumnValue('update_timestamp', $value, BaseModel::COLUMN_TYPE_VARCHAR);
	}

	/**
	 * Convenience function for Guest::getUpdateTimestamp
	 * final because getUpdateTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getUpdateTimestamp
	 */
	final function getUpdate_timestamp() {
		return $this->getUpdateTimestamp();
	}

	/**
	 * Convenience function for Guest::setUpdateTimestamp
	 * final because setUpdateTimestamp should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setUpdateTimestamp
	 * @return Guest
	 */
	final function setUpdate_timestamp($value) {
		return $this->setUpdateTimestamp($value);
	}

	/**
	 * Gets the value of the expected_count field
	 */
	function getExpectedCount() {
		return $this->expected_count;
	}

	/**
	 * Sets the value of the expected_count field
	 * @return Guest
	 */
	function setExpectedCount($value) {
		return $this->setColumnValue('expected_count', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Convenience function for Guest::getExpectedCount
	 * final because getExpectedCount should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getExpectedCount
	 */
	final function getExpected_count() {
		return $this->getExpectedCount();
	}

	/**
	 * Convenience function for Guest::setExpectedCount
	 * final because setExpectedCount should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setExpectedCount
	 * @return Guest
	 */
	final function setExpected_count($value) {
		return $this->setExpectedCount($value);
	}

	/**
	 * Gets the value of the actual_count field
	 */
	function getActualCount() {
		return $this->actual_count;
	}

	/**
	 * Sets the value of the actual_count field
	 * @return Guest
	 */
	function setActualCount($value) {
		return $this->setColumnValue('actual_count', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Convenience function for Guest::getActualCount
	 * final because getActualCount should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getActualCount
	 */
	final function getActual_count() {
		return $this->getActualCount();
	}

	/**
	 * Convenience function for Guest::setActualCount
	 * final because setActualCount should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setActualCount
	 * @return Guest
	 */
	final function setActual_count($value) {
		return $this->setActualCount($value);
	}

	/**
	 * Gets the value of the rsvp_through_site field
	 */
	function getRsvpThroughSite() {
		return $this->rsvp_through_site;
	}

	/**
	 * Sets the value of the rsvp_through_site field
	 * @return Guest
	 */
	function setRsvpThroughSite($value) {
		return $this->setColumnValue('rsvp_through_site', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Convenience function for Guest::getRsvpThroughSite
	 * final because getRsvpThroughSite should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getRsvpThroughSite
	 */
	final function getRsvp_through_site() {
		return $this->getRsvpThroughSite();
	}

	/**
	 * Convenience function for Guest::setRsvpThroughSite
	 * final because setRsvpThroughSite should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setRsvpThroughSite
	 * @return Guest
	 */
	final function setRsvp_through_site($value) {
		return $this->setRsvpThroughSite($value);
	}

	/**
	 * Gets the value of the is_attending field
	 */
	function getIsAttending() {
		return $this->is_attending;
	}

	/**
	 * Sets the value of the is_attending field
	 * @return Guest
	 */
	function setIsAttending($value) {
		return $this->setColumnValue('is_attending', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Convenience function for Guest::getIsAttending
	 * final because getIsAttending should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getIsAttending
	 */
	final function getIs_attending() {
		return $this->getIsAttending();
	}

	/**
	 * Convenience function for Guest::setIsAttending
	 * final because setIsAttending should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setIsAttending
	 * @return Guest
	 */
	final function setIs_attending($value) {
		return $this->setIsAttending($value);
	}

	/**
	 * Gets the value of the is_new field
	 */
	function getIsNew() {
		return $this->is_new;
	}

	/**
	 * Sets the value of the is_new field
	 * @return Guest
	 */
	function setIsNew($value) {
		return $this->setColumnValue('is_new', $value, BaseModel::COLUMN_TYPE_TINYINT);
	}

	/**
	 * Convenience function for Guest::getIsNew
	 * final because getIsNew should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::getIsNew
	 */
	final function getIs_new() {
		return $this->getIsNew();
	}

	/**
	 * Convenience function for Guest::setIsNew
	 * final because setIsNew should be extended instead
	 * to ensure consistent behavior
	 * @see Guest::setIsNew
	 * @return Guest
	 */
	final function setIs_new($value) {
		return $this->setIsNew($value);
	}

	/**
	 * Gets the value of the active field
	 */
	function getActive() {
		return $this->active;
	}

	/**
	 * Sets the value of the active field
	 * @return Guest
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
	 * @return Guest
	 */
	static function create() {
		return new Guest();
	}

	/**
	 * Returns String representation of table name
	 * @return string
	 */
	static function getTableName() {
		return Guest::$_tableName;
	}

	/**
	 * Access to array of column names
	 * @return array
	 */
	static function getColumnNames() {
		return Guest::$_columnNames;
	}

	/**
	 * Access to array of column types, indexed by column name
	 * @return array
	 */
	static function getColumnTypes() {
		return Guest::$_columnTypes;
	}

	/**
	 * Get the type of a column
	 * @return array
	 */
	static function getColumnType($column_name) {
		return Guest::$_columnTypes[$column_name];
	}

	/**
	 * @return bool
	 */
	static function hasColumn($column_name) {
		static $lower_case_columns = null;
		if (null === $lower_case_columns) {
			$lower_case_columns = array_map('strtolower', Guest::$_columnNames);
		}
		return in_array(strtolower($column_name), $lower_case_columns);
	}

	/**
	 * Access to array of primary keys
	 * @return array
	 */
	static function getPrimaryKeys() {
		return Guest::$_primaryKeys;
	}

	/**
	 * Access to name of primary key
	 * @return array
	 */
	static function getPrimaryKey() {
		return Guest::$_primaryKey;
	}

	/**
	 * Returns true if the primary key column for this table is auto-increment
	 * @return bool
	 */
	static function isAutoIncrement() {
		return Guest::$_isAutoIncrement;
	}

	/**
	 * Searches the database for a row with the ID(primary key) that matches
	 * the one input.
	 * @return Guest
	 */
	static function retrieveByPK($the_pk) {
		return Guest::retrieveByPKs($the_pk);
	}

	/**
	 * Searches the database for a row with the primary keys that match
	 * the ones input.
	 * @return Guest
	 */
	static function retrieveByPKs($guest_id) {
		if (null === $guest_id) {
			return null;
		}
		if (Guest::$_poolEnabled) {
			$pool_instance = Guest::retrieveFromPool($guest_id);
			if (null !== $pool_instance) {
				return $pool_instance;
			}
		}
		$conn = Guest::getConnection();
		$q = new Query;
		$q->add('guest_id', $guest_id);
		return array_shift(Guest::doSelect($q));
	}

	/**
	 * Searches the database for a row with a guest_id
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByGuestId($value) {
		return Guest::retrieveByPK($value);
	}

	/**
	 * Searches the database for a row with a parent_guest_id
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByParentGuestId($value) {
		return Guest::retrieveByColumn('parent_guest_id', $value);
	}

	/**
	 * Searches the database for a row with a address_id
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByAddressId($value) {
		return Guest::retrieveByColumn('address_id', $value);
	}

	/**
	 * Searches the database for a row with a first_name
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByFirstName($value) {
		return Guest::retrieveByColumn('first_name', $value);
	}

	/**
	 * Searches the database for a row with a last_name
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByLastName($value) {
		return Guest::retrieveByColumn('last_name', $value);
	}

	/**
	 * Searches the database for a row with a activation_code
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByActivationCode($value) {
		return Guest::retrieveByColumn('activation_code', $value);
	}

	/**
	 * Searches the database for a row with a initial_timestamp
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByInitialTimestamp($value) {
		return Guest::retrieveByColumn('initial_timestamp', $value);
	}

	/**
	 * Searches the database for a row with a update_timestamp
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByUpdateTimestamp($value) {
		return Guest::retrieveByColumn('update_timestamp', $value);
	}

	/**
	 * Searches the database for a row with a expected_count
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByExpectedCount($value) {
		return Guest::retrieveByColumn('expected_count', $value);
	}

	/**
	 * Searches the database for a row with a actual_count
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByActualCount($value) {
		return Guest::retrieveByColumn('actual_count', $value);
	}

	/**
	 * Searches the database for a row with a rsvp_through_site
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByRsvpThroughSite($value) {
		return Guest::retrieveByColumn('rsvp_through_site', $value);
	}

	/**
	 * Searches the database for a row with a is_attending
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByIsAttending($value) {
		return Guest::retrieveByColumn('is_attending', $value);
	}

	/**
	 * Searches the database for a row with a is_new
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByIsNew($value) {
		return Guest::retrieveByColumn('is_new', $value);
	}

	/**
	 * Searches the database for a row with a active
	 * value that matches the one provided
	 * @return Guest
	 */
	static function retrieveByActive($value) {
		return Guest::retrieveByColumn('active', $value);
	}

	static function retrieveByColumn($field, $value) {
		$conn = Guest::getConnection();
		return array_shift(Guest::doSelect(Query::create()->add($field, $value)->setLimit(1)->order('guest_id')));
	}

	/**
	 * Populates and returns an instance of Guest with the
	 * first result of a query.  If the query returns no results,
	 * returns null.
	 * @return Guest
	 */
	static function fetchSingle($query_string) {
		return array_shift(Guest::fetch($query_string));
	}

	/**
	 * Populates and returns an array of Guest objects with the
	 * results of a query.  If the query returns no results,
	 * returns an empty Array.
	 * @return Guest[]
	 */
	static function fetch($query_string) {
		$conn = Guest::getConnection();
		$result = $conn->query($query_string);
		return Guest::fromResult($result, 'Guest');
	}

	/**
	 * Returns an array of Guest objects from
	 * a PDOStatement(query result).
	 *
	 * @see BaseModel::fromResult
	 */
	static function fromResult(PDOStatement $result, $class = 'Guest') {
		return baseModel::fromResult($result, $class, Guest::$_poolEnabled);
	}

	/**
	 * Casts values of int fields to (int)
	 * @return Guest
	 */
	function castInts() {
		$this->guest_id = (null === $this->guest_id) ? null : (int) $this->guest_id;
		$this->parent_guest_id = (null === $this->parent_guest_id) ? null : (int) $this->parent_guest_id;
		$this->address_id = (null === $this->address_id) ? null : (int) $this->address_id;
		$this->expected_count = (null === $this->expected_count) ? null : (int) $this->expected_count;
		$this->actual_count = (null === $this->actual_count) ? null : (int) $this->actual_count;
		$this->rsvp_through_site = (null === $this->rsvp_through_site) ? null : (int) $this->rsvp_through_site;
		$this->is_attending = (null === $this->is_attending) ? null : (int) $this->is_attending;
		$this->is_new = (null === $this->is_new) ? null : (int) $this->is_new;
		$this->active = (null === $this->active) ? null : (int) $this->active;
		return $this;
	}

	/**
	 * Add (or replace) to the instance pool.
	 *
	 * @param Guest $object
	 * @return void
	 */
	static function insertIntoPool(Guest $object) {
		if (!Guest::$_poolEnabled) {
			return;
		}
		if (Guest::$_instancePoolCount > Guest::MAX_INSTANCE_POOL_SIZE) {
			return;
		}

		Guest::$_instancePool[implode('-', $object->getPrimaryKeyValues())] = $object;
		++Guest::$_instancePoolCount;
	}

	/**
	 * Return the cached instance from the pool.
	 *
	 * @param mixed $pk Primary Key
	 * @return Guest
	 */
	static function retrieveFromPool($pk) {
		if (!Guest::$_poolEnabled || null === $pk) {
			return null;
		}
		if (array_key_exists($pk, Guest::$_instancePool)) {
			return Guest::$_instancePool[$pk];
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

		if (array_key_exists($pk, Guest::$_instancePool)) {
			unset(Guest::$_instancePool[$pk]);
			--Guest::$_instancePoolCount;
		}
	}

	/**
	 * Empty the instance pool.
	 *
	 * @return void
	 */
	static function flushPool() {
		Guest::$_instancePool = array();
	}

	static function setPoolEnabled($bool = true) {
		Guest::$_poolEnabled = $bool;
	}

	static function getPoolEnabled() {
		return Guest::$_poolEnabled;
	}

	/**
	 * Returns an array of all Guest objects in the database.
	 * $extra SQL can be appended to the query to LIMIT, SORT, and/or GROUP results.
	 * If there are no results, returns an empty Array.
	 * @param $extra string
	 * @return Guest[]
	 */
	static function getAll($extra = null) {
		$conn = Guest::getConnection();
		$table_quoted = $conn->quoteIdentifier(Guest::getTableName());
		return Guest::fetch("SELECT * FROM $table_quoted $extra ");
	}

	/**
	 * @return int
	 */
	static function doCount(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Guest::getConnection();
		if (!$q->getTable() || Guest::getTableName() != $q->getTable()) {
			$q->setTable(Guest::getTableName());
		}
		return $q->doCount($conn);
	}

	/**
	 * @param Query $q
	 * @param bool $flush_pool
	 * @return int
	 */
	static function doDelete(Query $q, $flush_pool = true) {
		$conn = Guest::getConnection();
		$q = clone $q;
		if (!$q->getTable() || Guest::getTableName() != $q->getTable()) {
			$q->setTable(Guest::getTableName());
		}
		$result = $q->doDelete($conn);

		if ($flush_pool) {
			Guest::flushPool();
		}

		return $result;
	}

	/**
	 * @param Query $q The Query object that creates the SELECT query string
	 * @param array $additional_classes Array of additional classes for fromResult to instantiate as properties
	 * @return Guest[]
	 */
	static function doSelect(Query $q = null, $additional_classes = null) {
		if (is_array($additional_classes)) {
			array_unshift($additional_classes, 'Guest');
			$class = $additional_classes;
		} else {
			$class = 'Guest';
		}

		return Guest::fromResult(self::doSelectRS($q), $class);
	}

	static function coerceTemporalValue($value, $column_type) {
		return parent::coerceTemporalValue($value, $column_type, Guest::getConnection());
	}

	/**
	 * Executes a select query and returns the PDO result
	 * @return PDOStatement
	 */
	static function doSelectRS(Query $q = null) {
		$q = $q ? clone $q : new Query;
		$conn = Guest::getConnection();

		if (!$q->getTable() || false === strrpos($q->getTable(), Guest::getTableName())) {
			$q->setTable(Guest::getTableName());
		}

		return $q->doSelect($conn);
	}

	/**
	 * @return Guest[]
	 */
	static function doSelectJoinAll(Query $q = null, $join_type = Query::LEFT_JOIN) {
		$q = $q ? clone $q : new Query;
		$columns = $q->getColumns();
		$classes = array();
		$alias = $q->getAlias();
		$this_table = $alias ? $alias : Guest::getTableName();
		if (!$columns) {
			$columns[] = $this_table . '.*';
		}

		$q->setColumns($columns);
		return Guest::doSelect($q, $classes);
	}

	/**
	 * Returns true if the column values validate.
	 * @return bool
	 */
	function validate() {
		$this->_validationErrors = array();
		if (null === $this->getparent_guest_id()) {
			$this->_validationErrors[] = 'parent_guest_id must not be null';
		}
		if (null === $this->getaddress_id()) {
			$this->_validationErrors[] = 'address_id must not be null';
		}
		if (null === $this->getinitial_timestamp()) {
			$this->_validationErrors[] = 'initial_timestamp must not be null';
		}
		if (null === $this->getrsvp_through_site()) {
			$this->_validationErrors[] = 'rsvp_through_site must not be null';
		}
		if (null === $this->getis_attending()) {
			$this->_validationErrors[] = 'is_attending must not be null';
		}
		return 0 === count($this->_validationErrors);
	}

}
