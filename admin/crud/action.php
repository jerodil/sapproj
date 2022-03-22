<?php
// include class 
include_once 'class/Student.php';

// object
$grievanceObj = new Grievance();
// post method
$_post = $_POST;
$json = array();	
$grievanceInfo = array();
// create student record in database
if(!empty($_post['action']) && $_post['action']=="create") {
	  $grievanceObj->setGrievanceID($_post['grievance_id']);
	  $grievanceObj->setIrNo($_post['ir_no']);
	  $grievanceObj->setModeOfCom($_post['mode_of_com']);
	  $grievanceObj->setFname($_post['fname']);
	  $grievanceObj->setMname($_post['mname']);
	  $grievanceObj->setLname($_post['lname']);
	  $grievanceObj->setExt($_post['ext']);
	  $grievanceObj->setAge($_post['age']);
	  $grievanceObj->setCity($_post['city']);
	  $grievanceObj->setCpnum($_post['cpnum']);
	  $grievanceObj->setGender($_post['gender']);
	  $grievanceObj->setRegion($_post['region']);
	  $grievanceObj->setCon($_post['con']);
	  $grievanceObj->setAct($_post['act']);
	  $grievanceObj->setStaff($_post['staff']);
	  $grievanceObj->setDateCreated($_post['date_created']);;
	$status = $grievanceObj->create();
	if(!empty($status)){
		$json['msg'] = 'success';
		$json['task_id'] = $status;
	} else {
		$json['msg'] = 'failed';
		$json['task_id'] = '';
	}
	header('Content-Type: application/json');
  echo json_encode($json);  	
}

// get all student records in database
if(!empty($_post['action']) && $_post['action']=="fetch_all_grievance") {

  if(!empty($_post["search"]["value"])){
       $grievanceObj->setSearchVal($_post["search"]["value"]);       
  }
  if(!empty($_post["order"])){
    $grievanceObj->setOrderBy($_post["order"]);
  } 

  if($_post["length"]){
      $grievanceObj->setStart($_post["start"]);
      $grievanceObj->setLength($_post["length"]);
  }
  // get total result
  $totalResult = $grievanceObj->getTotalResult();
  // get student information
  $grievanceInformation = $grievanceObj->getList();
  foreach($grievanceInformation as $key=>$element) {    
      $grievanceInfo[] = array(
        $element['grievance_id'], 
        $element['ir_no'], 
        $element['mode_of_com'],
        $element['fname'], 
        $element['mname'], 
        $element['lname'],
		$element['ext'],
		$element['age'],
		$element['city'],
		$element['cpnum'],
		$element['gender'],
		$element['region'],
		$element['con'],
		$element['act'],
		$element['staff'],
		$element['date'],
        '<a data-grievanceid="'.$element["grievance_id"].'" class="text-white btn btn-info btn-sm view-grievance"> View </a>  <a data-grievanceid="'.$element["grievance_id"].'" class="text-white btn btn-success btn-sm update-grievance"> Edit </a>  <a data-grievanceid="'.$element["grievance_id"].'" class="text-white btn btn-danger btn-sm delete-grievance"> Delete</a>',
      );    
    }
  // draw data  
  $json['grievanceData'] = array(
      "draw"        =>  intval($_post["draw"]),
      "recordsTotal"    =>  $totalResult,
      "recordsFiltered"   =>  count($grievanceInformation),  
      "data"          =>  $grievanceInfo
    );
  header('Content-Type: application/json');
  echo json_encode($json['grievanceData']); 
}

// get student record in database
if(!empty($_post['action']) && $_post['action']=="fetch_grievance") {
	$grievanceObj->setGrievanceID($_post['grievance_id']);
	$json['fetchGrievance'] = $grievanceObj->getGrievance();
	header('Content-Type: application/json');
	echo json_encode($json['fetchGrievance']); 
}

// update student record in database
if(!empty($_post['action']) && $_post['action']=="update") {
	  $grievanceObj->setGrievanceID($_post['grievance_id']);
	  $grievanceObj->setIrNo($_post['ir_no']);
	  $grievanceObj->setModeOfCom($_post['mode_of_com']);
	  $grievanceObj->setFname($_post['fname']);
	  $grievanceObj->setMname($_post['mname']);
	  $grievanceObj->setLname($_post['lname']);
	  $grievanceObj->setExt($_post['ext']);
	  $grievanceObj->setAge($_post['age']);
	  $grievanceObj->setCity($_post['city']);
	  $grievanceObj->setCpnum($_post['cpnum']);
	  $grievanceObj->setGender($_post['gender']);
	  $grievanceObj->setRegion($_post['region']);
	  $grievanceObj->setCon($_post['con']);
	  $grievanceObj->setAct($_post['act']);
	  $grievanceObj->setStaff($_post['staff']);
	  $grievanceObj->setDateCreated($_post['date_created']);
	$status = $grievanceObj->update();
	if(!empty($status)){
		$json['msg'] = 'success';
	} else {
		$json['msg'] = 'failed';
	}
	header('Content-Type: application/json');	
	echo json_encode($json); 
}

// delete student record from database
if(!empty($_post['action']) && $_post['action']=="delete") {
	$grievanceObj->setGrievanceID($_post['grievance_id']);
	$status = $grievanceObj->delete();
	if(!empty($status)){
		$json['msg'] = 'success';
	} else {
		$json['msg'] = 'failed';
	}
	header('Content-Type: application/json');	
	echo json_encode($json);	
}
?>