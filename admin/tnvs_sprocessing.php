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
$table = 'tnvs_payroll';

// Table's primary key
$primaryKey = 'tnvs_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array('db' => 'barcode','dt'=>0),
	array('db' => 'fname','dt'=>1),
	array('db' => 'mname','dt'=>2),
	array('db' => 'lname','dt'=>3),
	array('db' => 'ext','dt'=>4),
	array('db' => 'bday','dt'=>5),
	//array('db' => 'province','dt'=>6),
	array('db' => 'address','dt'=>6),
	array('db' => 'cp','dt'=>7),
	//array('db' => 'PSGC_Bgy','dt'=>9),
	array('db' => 'fsp','dt'=>8),
	//array('db' => 'cat','dt'=>9),
	array('db' => 'remarks','dt'=>9),
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


