<?php
include("DBConnection.php");
// Student
class Grievance 
{
    // Properties    
    protected $db;
    private $_grievance_id;
    private $_ir_no;
    private $_mode_of_com;
    private $_fname;
    private $_mname;
    private $_lname;
    private $_ext;
	private $_age;
	private $_city;
	private $_cpnum;
	private $_gender;
	private $_region;
	private $_con;
	private $_act;
	private $_staff;
	private $_date_created;
    private $_searchVal;
    private $_orderBy;
    private $_start;
    private $_length;

    // Methods
    public function setGrievanceId($grievance_id) {
        $this->_grievance_id = $grievance_id;
    }
    public function setIr_no($ir_no) {
        $this->_ir_no = $ir_no;
    }
    public function setModeOfCom($mode_of_com) {
        $this->_mode_of_com = $mode_of_com;
    }
    public function setFname($fname) {
        $this->_fname = $fname;
    }
    public function setMname($mname) {
        $this->_mname = $mname;
    }
    public function setLname($lname) {
        $this->_lname = $lname;
    }
    public function setExt($ext) {
        $this->_ext = $ext;
    }
	public function setAge($age) {
        $this->_age = $age;
    }
	public function setCity($city) {
        $this->_city = $city;
    }
	public function setCpnum($cpnum) {
        $this->_cpnum = $cpnum;
    }
	public function setGender($gender) {
        $this->_gender = $gender;
    }
	public function setRegion($region) {
        $this->_region = $region;
    }
	public function setCon($con) {
        $this->_con = $con;
    }
	public function setAct($act) {
        $this->_act = $act;
    }
	public function setStaff($staff) {
        $this->_staff = $staff;
    }
	public function setDateCreated($date_created) {
        $this->_date_created = $date_created;
    }
    public function setSearchVal($searchVal) {
        $this->_searchVal = $searchVal;
    }
    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }
    public function setStart($start) {
        $this->_start = $start;
    }
    public function setLength($length) {
        $this->_length = $length;
    }

    
    // __construct
    public function __construct() {
        $this->db = new DBConnection();
        $this->db = $this->db->returnConnection();
    }

    // create student record in database
    public function create() {
		try {
    		$sql = 'INSERT INTO data (ir_no, mode_of_com, fname, mname, lname, ext,age,city,cpnum,gender,region,con,act,staff,date_created)  VALUES (:ir_no, :mode_of_com, :fname, :mname, :lname, :ext, :age, :city, :cpnum, :gender, :region, :con, :act, :staff, :date_created)';
    		$data = [
			    'ir_no' => $this->_ir_no,
                'mode_of_com' => $this->_mode_of_com,
			    'fname' => $this->_fname,
                'mname' => $this->_mname,
                'lname' => $this->_lname,
                'ext' => $this->_ext,
				'age' => $this->_age,
				'city' => $this->_city,
				'cpnum' => $this->_cpnum,
				'gender' => $this->_gender,
				'region' => $this->_region,
				'con' => $this->_con,
				'act' => $this->_act,
				'staff' => $this->_staff,
				'date_created' => $this->_date_created,
			];
	    	$stmt = $this->db->prepare($sql);
	    	$stmt->execute($data);
			$status = $this->db->lastInsertId();
            return $status;

		} catch (Exception $err) {
    		die("Error!: ".$err);
		}

    }

    // update student record in database
    public function update() {
        try {
		    $sql = "UPDATE student SET roll_no=:roll_no, name=:name, email=:email, address=:address, class_name=:class_name, gender=:gender WHERE id=:student_id";
		     $data = [
			    'ir_no' => $this->_ir_no,
                'mode_of_com' => $this->_mode_of_com,
			    'fname' => $this->_fname,
                'mname' => $this->_mname,
                'lname' => $this->_lname,
                'ext' => $this->_ext,
				'age' => $this->_age,
				'city' => $this->_city,
				'cpnum' => $this->_cpnum,
				'gender' => $this->_gender,
				'region' => $this->_region,
				'con' => $this->_con,
				'act' => $this->_act,
				'staff' => $this->_staff,
				'date_created' => $this->_date_created,
			];
			$stmt = $this->db->prepare($sql);
			$stmt->execute($data);
			$status = $stmt->rowCount();
            return $status;
		} catch (Exception $err) {
			die("Error!: " . $err);
		}
    }

    // gwt student record from database
    public function getTotalResult() {
        try {
            $sql = "SELECT * FROM data";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->rowCount();
            return $result;
        } catch (Exception $e) {
            die("Error!: " . $err);
        }
    }
   
    // get all student records from database
    public function getList() {
    	try {
            // keyword serach
            $sqlQuery = '';
            if(!empty($this->_searchVal)){
                $sqlQuery .= 'WHERE (grievance_id LIKE "%'.$this->_searchVal.'%" ';
                $sqlQuery .= ' OR mode_of_com LIKE "%'.$this->_searchVal.'%" ';            
                $sqlQuery .= ' OR fname LIKE "%'.$this->_searchVal.'%" ';
                $sqlQuery .= ' OR mname LIKE "%'.$this->_searchVal.'%" ';
                $sqlQuery .= ' OR lname LIKE "%'.$this->_searchVal.'%") ';
                $sqlQuery .= ' OR ext LIKE "%'.$this->_searchVal.'%") ';
                $sqlQuery .= ' OR age LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR city LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR cpnum LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR gender LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR region LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR con LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR act LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR staff LIKE "%'.$this->_searchVal.'%") ';
				$sqlQuery .= ' OR date_created LIKE "%'.$this->_searchVal.'%") ';
            }
            // sorting
            if(!empty($this->_orderBy)){
                $sqlQuery .= 'ORDER BY '.$this->_orderBy['0']['column'].' '.$this->_orderBy['0']['dir'].' ';
            } else {
                $sqlQuery .= 'ORDER BY grievance_id DESC ';
            }
            // paging
            if($this->_length != -1){
                $sqlQuery .= 'LIMIT ' . $this->_start . ', ' . $this->_length;
            }

    		$sql = "SELECT ir_no, mode_of_com, fname, mname, lname, ext,age,city,cpnum,gender,region,con,act,staff,date_created FROM data ".$sqlQuery;
		    $stmt = $this->db->prepare($sql);
		    $stmt->execute();
		    $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
		} catch (Exception $err) {
		    die("Error!: " . $err);
		}
    }
    // gwt student record from database
    public function getStudent() {
        try {
            $sql = "SELECT ir_no, mode_of_com, fname, mname, lname, ext,age,city,cpnum,gender,region,con,act,staff,date_created FROM data WHERE id=:grievance_id";
            $stmt = $this->db->prepare($sql);
            $data = [
                'grievance_id' => $this->_grievanceID
            ];
            $stmt->execute($data);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            die("Error!: " . $err);
        }
    }

    // delete student record from database
    public function delete() {
    	try {
	    	$sql = "DELETE FROM data WHERE id=:grievance_id";
		    $stmt = $this->db->prepare($sql);
		    $data = [
		    	'grievance_id' => $this->_grievance_id
			];
	    	$stmt->execute($data);
            $status = $stmt->rowCount();
            return $status;
	    } catch (Exception $err) {
		    die("Error!: " . $err);
		}
    }

}
?>