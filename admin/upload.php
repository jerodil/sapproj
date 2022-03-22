<?php include 'header.php';
      // include 'phpfunction/dbconn.php';
      $conn = mysqli_connect('localhost', 'root', '', 'sapsap');
      // include 'phpfunction/course.php';
      // include 'phpfunction/myfunction.php';
     
?>

 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'nav.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'aside.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload .csv File</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Upload File</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <button  class="btn btn-info"  type="submit" hidden><a href="add_course.php" class="text-white">Add Course</a></button>

    </div><!-- /.content-header -->
       <?php 
      $conn = mysqli_connect('localhost', 'root', '', 'sapsap');
      if(isset($_POST["import"])){
        $fileName = $_FILES["file"]["tmp_name"];
        
        if($_FILES["file"]["size"]>0){
            $file = fopen($fileName,"r");
            
            while(($column = fgetcsv($file,1000,",")) !== FALSE){
                $sqlInsert = "Insert into list (barcode,fname, mname,lname,ext,bdate,province,city,barangay,PSGC_Bgy,cp,remarks) values ('".$column[0]."','". $column[1]."','". $column[2]."','". $column[3]."','". $column[4]."','". $column[5]."','". $column[6]."','". $column[7]."','". $column[8]."','". $column[9]."','". $column[10]."','". $column[11]."')";
                
                $result = mysqli_query($conn, $sqlInsert);
                
                if(!empty($result)){
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Uploaded Successfully!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                    //echo 'imported successfully!' ;   
                }else{
                    echo'<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>There is a problem on your csv file!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                    //echo 'error!' ;
                }
            }
        }
    }
         ?>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><!-- Info boxes -->
        <div class="row">
          <div class="card col-12">
            <div class="card-header">
              <h3 class="card-title">File Upload</h3>
            </div>
              <div>
   
            <!-- /.card-header -->
            <div class="card-body">
             <form class="form-horizontal" action="" method="post" name ="uploadCsv" enctype="multipart/form-data">
    
    <div>
    <label>Choose CSV File</label>
    <input type="file" name="file" accept=".csv">
    <button type="submit" id="import" name="import">Import</button>        
    </div>
    </form>
                            
            </div>
            </div>
            

                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
        </div>
      </div>
    </section><!-- /.content -->

    <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" hidden="">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div> 
      </div>  
 </div>  
  </div>
  <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0) 
}, 2000);
  </script>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script src="script/swal.js"></script>
<script src="script/delete-course.js"></script>
<script src="script/view-course.js"></script>
<script >
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
