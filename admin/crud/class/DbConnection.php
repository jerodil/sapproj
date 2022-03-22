<?php
// class
class DbConnection {
    // Connect to an ODBC database using an alias
    private $_dbHostName = "localhost";
    private $_dbName = "sapsap";
    private $_dbUserName = "root";
    private $_dbPassword = "";
    private $_conn;
    // __construct
    public function __construct() {
    	try {
        	$this->_conn = new PDO("mysql:host=$this->_dbHostName;dbname=$this->_dbName", $this->_dbUserName, $this->_dbPassword, array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
            // set the PDO error mode to exception
        	$this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch(PDOException $e) {
			echo "Error!: " . $e->getMessage();
		}

    }
    // return Connection
    public function returnConnection() {
        return $this->_conn;
    }
}
?>