<?php include('connect.php');

$output= array();
$sql = "SELECT * FROM dup_res ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'file_rep',
	2 => 'barcode',
	3 => 'source_dup',
	4 => 'fname',
	5 => 'mname',
	6 => 'lname',
	7 => 'ext',
	8 => 'bday',
	9 => 'city',
	10 => 'bgy',
	11 => 'cp',
);
/*
if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE username like '%".$search_value."%'";
	$sql .= " OR email like '%".$search_value."%'";
	$sql .= " OR mobile like '%".$search_value."%'";
	$sql .= " OR city like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	
*/
$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	//$sub_array[] = $row['id'];
	$sub_array[] = $row['file_rep'];
	$sub_array[] = $row['barcode'];
	$sub_array[] = $row['source_dup'];
	$sub_array[] = $row['fname'];
	$sub_array[] = $row['mname'];
	$sub_array[] = $row['lname'];
	$sub_array[] = $row['ext'];
	$sub_array[] = $row['bday'];
	$sub_array[] = $row['city'];
	$sub_array[] = $row['bgy'];
	$sub_array[] = $row['cp'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
