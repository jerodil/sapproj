<?php
//database connection
//$dbDetails =array(
//	'host' => 'localhost';
//	'user' => 'root';
//	'pass' => '';
//	'db' => 'sapsap';
//);


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'dup_res';

// Table's primary key
$primaryKey = 'id_dup';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array('db' => 'file_rep','dt'=>0),
	array('db' => 'barcode','dt'=>1),
	array('db' => 'source_dup','dt'=>2),
	array('db' => 'fname','dt'=>3),
	array('db' => 'mname','dt'=>4),
	array('db' => 'lname','dt'=>5),
	array('db' => 'ext','dt'=>6),
	array('db' => 'bday','dt'=>7),
	array('db' => 'city','dt'=>8),
	array('db' => 'bgy','dt'=>9),
	array('db' => 'cp','dt'=>10),
	
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'sapsap',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


