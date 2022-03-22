<?php include('connect.php');
 $id = (isset($_POST['id']) ? $_POST['id'] : '');
//$id = $_POST['id'];
$sql = "SELECT * FROM dup_res WHERE id='$id' LIMIT 1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>