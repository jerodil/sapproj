<?php
//database connection
$dbDetails =array(
	'host' => 'localhost';
	'user' => 'root';
	'pass' => '';
	'db' => 'sapsap';
);

//dbTable to use
$table ='list';

//Table's primary key 
$primaryKey = 'id';

//array of columns of db which should be read and sent back to DataTables.
//the 'db' parameter represents the column name in the database.
//the 'dt' parameter represents the DataTables column identifier.
$column =array(
	array('db' => 'barcode','dt'=>0),
	array('db' => 'fname','dt'=>1),
	array('db' => 'mname','dt'=>2),
	array('db' => 'lname','dt'=>3),
	array('db' => 'ext','dt'=>4),
	array('db' => 'bdate','dt'=>5),
	array('db' => 'province','dt'=>6),
	array('db' => 'city','dt'=>7),
	array('db' => 'barangay','dt'=>8),
	array('db' => 'PSGC_Bgy','dt'=>9),
	array('db' => 'cp','dt'=>10),
	array('db' => 'remarks','dt'=>11),
);

// include SQL query processing class.
require( 'ssp.class.php');

//output data as json format
echo json_encode(
	SSP::simple($_GET, $dbDetails, $table,$primaryKey, $columns)
);


?>