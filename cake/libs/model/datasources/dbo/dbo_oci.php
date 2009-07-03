<?php
/* SVN FILE: $Id: dbo_oci.php 3259 2006-09-14 15:10:55Z phpnut $ */
/**
 * OCI8 layer for DBO
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright (c)	2006, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package			cake
 * @subpackage		cake.cake.libs.model.dbo
 * @since			CakePHP v 0.10.5.1790
 * @version			$Revision: 3259 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2006-09-13 13:49:55 -0500 (Wed, 13 Set 2006) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
 
 /* 
 To make the autoincrement feature in Oracle we can create a sequence and a trigger, like the example:
 
create sequence TABLENAME_id_seq;
/

CREATE OR REPLACE TRIGGER TABLENAME_id_trg
BEFORE INSERT ON TABLENAME FOR EACH ROW
DECLARE
        v_seq TABLENAME.id%TYPE;
BEGIN
   If :OLD.id IS NULL   THEN
        SELECT TABLENAME_id_seq.NEXTVAL INTO v_seq FROM DUAL;
        :NEW.id := v_seq;
   END IF;
END;
/
ALTER TRIGGER TABLENAME_id_trg ENABLE;
/
 
 
 */
 
 
/**
 * Include DBO.
 */
uses('model'.DS.'datasources'.DS.'dbo_source');
/**
 * Short description for class.
 *
 * Long description for class
 *
 * @package		cake
 * @subpackage	cake.cake.libs.model.dbo
 */
class DboOci extends DboSource {
/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $description = "OCI8 DBO Driver";
/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $startQuote = null;//"'";

/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $endQuote = null;//"'";
/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $alias = ' ';	
	
/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $goofyLimit = false;

/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $model;
		
	
/**
 * Base configuration settings for OCI driver
 *
 * @var array
 */
	var $_baseConfig = array('persistent' => true,
								'host' => '',//tns_name alias
								'login' => 'scott',
								'password' => 'tiger',
								'database' => '',
								'port' => '1521',
								'connect' => 'oci_pconnect');
/**
 * OCI column definition
 *
 * @var array
 */
	var $columns = array('primary_key' => array('name' => 'number(11) not NULL'),
						'string' => array('name' => 'varchar2', 'limit' => '255'),
						'text' => array('name' => 'varchar2', 'limit' => '2000'),
						'integer' => array('name' => 'number', 'limit' => '11', 'formatter' => 'intval'),
						'float' => array('name' => 'number', 'formatter' => 'floatval'),
						'datetime' => array('name' => 'date', 'format' => 'Y-m-d H:i:s', 'formatter' => 'date'),
						'timestamp' => array('name' => 'date', 'format' => 'Y-m-d H:i:s', 'formatter' => 'date'), 
						'time' => array('name' => 'date', 'format' => 'H:i:s', 'formatter' => 'date'),
						'date' => array('name' => 'date', 'format' => 'Y-m-d', 'formatter' => 'date'),
						'binary' => array('name' => 'blob'),
						'boolean' => array('name' => 'number', 'limit' => '1'));
/**
 * Connects to the database using options in the given configuration array.
 *
 * @return boolean True if the database could be connected, else false
 */
	function connect() {
		$config = $this->config;
		$connect = $config['connect'];
		$this->connected = false;

		if (!$config['persistent']) {
			$this->connection = oci_pconnect($config['login'], $config['password'], $config['host']);
		} else {
			$this->connection = oci_connect($config['login'], $config['password'], $config['host']);
		}

		if ($this->connection) {
			$this->connected = true;
		}
		return $this->connected;
	}
/**
 * Disconnects from database.
 *
 * @return boolean True if the database could be disconnected, else false
 */
	function disconnect() {
		$this->connected = !@oci_close($this->connection);
		return !$this->connected;
	}
/**
 * Executes given SQL statement.
 *
 * @param string $sql SQL statement
 * @return resource Result resource identifier
 * @access protected
 */
	function _execute($sql) { 
	echo $sql;
		$stmt = oci_parse($this->connection, $sql);
		$e = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS); //commit automatico
		if(!$e) {
			$erro = oci_error($stmt);
			echo "<font color=red><br>Erro no sql=$sql<br".$erro."<BR></font color>";
			
		}	
		return $stmt;
	}
/**
 * Returns an array of sources (tables) in the database.
 *
 * @return array Array of tablenames in the database
 */
	function listSources() {
		$cache = parent::listSources();
		if ($cache != null) {
			return $cache;
		}

		$stmt = oci_parse($this->connection, "select * from tab");
		$res = oci_execute($stmt, OCI_DEFAULT);
		if(!$res) {
			return array();
		}
		else {
			$tables = array();
			
			while (oci_fetch($stmt)) {
				$tables[] = strtolower(oci_result($stmt, "TNAME"));
			}
			parent::listSources($tables);
			return $tables;
		}	
	}
/**
 * Returns an array of the fields in given table name.
 *
 * @param string $tableName Name of database table to inspect
 * @return array Fields in table. Keys are name and type
 */
	function describe(&$model) {//duvida
		$this->model = &$model;
		$cache = parent::describe($model);
		if ($cache != null) {
			return $cache;
		}

		$fields = false;

		$stmt = oci_parse($this->connection,"select column_name NAME, data_type type, nullable   from ALL_TAB_COLUMNS where table_name=upper('" . $this->fullTableName($model). "')");
		$res = oci_execute($stmt, OCI_DEFAULT);
		while($row = oci_fetch_array($stmt)) {
			$fields[] = array('name' => strtolower(oci_result($stmt,'NAME')), 'type' => $this->column(strtolower(oci_result($stmt,'TYPE'))), 'null' => strtolower(oci_result($stmt,'NULLABLE')));		
		}
		$this->__cacheDescription($model->tablePrefix.$model->table, $fields);
		
		return $fields;
	}
/**
 * Returns a quoted name of $data for use in an SQL statement.
 *
 * @param string $data Name (table.field) to be prepared for use in an SQL statement
 * @return string Quoted for Oci
 */
	function name($data) {
		if ($data == '*') {
			return '*';
		}
		return $data;
	}
/**
 * Returns a quoted and escaped string of $data for use in an SQL statement.
 *
 * @param string $data String to be prepared for use in an SQL statement
 * @param string $column The column into which this data will be inserted
 * @param boolean $safe Whether or not numeric data should be handled automagically if no column data is provided
 * @return string Quoted and escaped data
 */
	function value($data, $column = null, $safe = false) {
		$parent = parent::value($data, $column, $safe);

		if ($parent != null) {
			return $parent;
		}

		if ($data === null) {
			return 'NULL';
		}

		if($data === '') {
			return  "''";
		}

		switch ($column) {
			case 'boolean':
				$data = $this->boolean((bool)$data);
			break;
			default:
				if (ini_get('magic_quotes_gpc') == 1) {
					$data = stripslashes($data);
				}
			break;
		}

		return "'" . $data . "'";
	}
/**
 * Begin a transaction
 *
 * @param unknown_type $model
 * @return boolean True on success, false on fail
 * (i.e. if the database/model does not support transactions).
 */
	function begin(&$model) {
		if (parent::begin($model)) {
			$this->__transactionStarted = true;
			return true;
		}
		return false;
	}
/**
 * Commit a transaction
 *
 * @param unknown_type $model
 * @return boolean True on success, false on fail
 * (i.e. if the database/model does not support transactions,
 * or a transaction has not started).
 */
	function commit(&$model) {
		if (parent::commit($model)) {
			$this->__transactionStarted;
			return oci_commit($this->connection);
		}
		return false;
	}
/**
 * Rollback a transaction
 *
 * @param unknown_type $model
 * @return boolean True on success, false on fail
 * (i.e. if the database/model does not support transactions,
 * or a transaction has not started).
 */
	function rollback(&$model) {
		if (parent::rollback($model)) {
			return oci_rollback($this->connection);
		}
		return false;
	}
/**
 * Returns a formatted error message from previous database operation.
 *
 * @return string Error message with error number
 */
	function lastError() {
		$e = oci_error($this->connection);
		if ($e) {
			return $e["message"];
		}
		return null;
	}
/**
 * Returns number of affected rows in previous database operation. If no previous operation exists,
 * this returns false.
 *
 * @return int Number of affected rows
 */
	function lastAffected() {
		if ($this->_result) {
			return oci_num_rows($this->_result);//duvida
		}
		return null;
	}
/**
 * Returns number of rows in previous resultset. If no previous resultset exists,
 * this returns false.
 *
 * @return int Number of rows in resultset
 */
	function lastNumRows() {
		if ($this->_result and is_resource($this->_result)) {
			return @oci_num_rows($this->_result); //duvida
		}
		return null;
	}
/**
 * Returns the ID generated from the previous INSERT operation.
 *
 * @param unknown_type $source
 * @return in
 */
	function lastInsertId($source = null) {
		$stmt = oci_parse($this->connection,"select ".$source."_seq_id.nextval cur from dual");
		$res = oci_execute($stmt,OCI_DEFAULT);
		oci_fetch($stmt);
		$id = oci_result($stmt, "CUR");
		if ($id) {
			return $id;
		}

	}
/**
 * Converts database-layer column types to basic types
 *
 * @param string $real Real database-layer column type (i.e. "varchar(255)")
 * @return string Abstract column type (i.e. "string")
 */
	function column($real) {
		if (is_array($real)) {
			$col = $real['name'];
			if (isset($real['limit']))
			{
				$col .= '('.$real['limit'].')';
			}
			return $col;
		}

		$col = r(')', '', $real);
		$limit = null;
		@list($col, $limit) = explode('(', $col);

		if ($col == 'varchar2'/* && $limit == '255'*/) {
			return 'string';
		}
		if ($col == 'varchar2' && $limit == '2000') {
			return 'text';
		}
		if ($col == 'number') {
			return 'integer';
		}
		if ($col == 'number' && $limit == '1') {
			return 'boolean';
		}
		if (in_array($col, array('date'))) {
			return 'date';
		}
		if (in_array($col, array('blob'))) {
			return 'binary';
		}
		
		return 'text';
	}
/**
 * Enter description here...
 *
 * @param unknown_type $results
 */
 	function resultSet(&$results) {
		$this->results =&$results;
		$this->map = array();
		$num_fields = oci_num_fields($results);
		$index = 0;
		for ($j = 1; $j <= $num_fields; $j++) {
			$column_name  = strtolower(oci_field_name($results, $j));
			if ($column_name != "count") {
				$this->map[$index++] = array($this->model->name, $column_name);
			} else {
				$this->map[$index++] = array(0, $column_name);
			}
		}
	}
	
/**
 * Fetches the next row from the current result set
 *
 * @return unknown
 */
	function fetchResult() {//duvida com maiusculo e minusculo
		if ($row = oci_fetch_row($this->results)) {
			$resultRow = array();
			$i = 0;
			foreach ($row as $index => $field) {
				list($table, $column) = $this->map[$index];
				
				$resultRow[$table][$column] = $row[$index];
				$i++;
			}
			return $resultRow;
		} else {
			return false;
		}
	}
/**
 * Enter description here...
 *
 * @param unknown_type $schema
 *  @return unknown
 */
	function buildSchemaQuery($schema) {
		$search = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}', '{FULLTEXT}',
						'{FULLTEXT_MYSQL}', '{BOOLEAN}', '{UTF_8}');
		$replace = array('number(11) not null', 'primary key', '',
						'', '', 'NUMBER DEFAULT 1 NOT NULL',
						'');
		$query = trim(r($search, $replace, $schema));
		return $query;
	}
	
/**
 * Returns a limit statement in the correct format for the particular database.
 *
 * @param int $limit Limit of results returned
 * @param int $offset Offset from which to start results
 * @return string SQL limit/offset statement
 */
	function limit($limit, $offset = null) {
		return '';
	}	
}	
?>