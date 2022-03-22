<?php include 'header.php';
      // include 'phpfunction/dbconn.php';
      $conn = mysqli_connect('localhost', 'root', '', 'sapsap');
      // include 'phpfunction/course.php';
      // include 'phpfunction/myfunction.php';
?>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet"  href="vendor/DataTables/jquery.datatables.min.css">	
    <script src="vendor/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> 

    <link href="style.css" rel="stylesheet" type="text/css" />
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/> -->
 
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script> -->
<!--<script type="text/javascript" src="DataTables/jQuery-1.12.4/jquery-3.5.1.js"></script> -->
 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <!--<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>-->
  <!--<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.min.css"/>-->
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
<style>tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
	</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">FSP Results</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">FST Results</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <button  class="btn btn-info"  type="submit" hidden><a href="add_course.php" class="text-white">Add Course</a></button>

    </div><!-- /.content-header -->
    <?php
      if(isset($_GET['successs'])){

        $cec = $_GET['successs'];
        if($cec == 'addexp'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Added Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><!-- Info boxes -->
        <div class="row">
          <div class="card col-12">
            <div class="card-header">
              <h3 class="card-title">FSP Results</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="fst" class="display" style="width:100%">
                <thead>
                <tr>
                  <th>Barcode</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Ext</th>
                  <th>Birthdate</th>
                  <th>City</th>
                  <th>Barangay</th>
                  <th>FSP</th>
                  <th>Contact Number</th>
				  <th>Amount</th>
				  <th>Remarks</th>
                  <th>Tagged as</th>
                </tr>
                </thead>
                 <!--  <tfoot>
            <tr>
                <th>Barcode</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Ext</th>
                  <th>Birthdate</th>
                    <th>Province</th>
                    <th>City</th>
                    <th>Barangay</th>
                    <th>PSGC_Barangay</th>
                    <th>Contact Number</th>
                    <th>Remarks</th>
            </tr>
        </tfoot> -->
               <!-- <tbody>
                   <?php
                      //$query = "SELECT * FROM users WHERE status = 'active' AND user_type = 'company'";
                    //$query = "SELECT * FROM list";
                    //  $result = $conn->query($query);
                    ?>
                    <?php //while($row = $result->fetch_object()):?>
                <tr id="<?php //echo $row->id;?>">
                  <td><?php //echo $row->barcode;?></td>
                  <td><?php //echo $row->fname;?></td>
                  <td><?php //echo $row->mname;?></td>
                  <td><?php //echo $row->lname;?></td>
                    <td><?php //echo $row->ext;?></td>
                    <td><?php //echo $row->bdate;?></td>
                    <td><?php //echo $row->province;?></td>
                    <td><?php //echo $row->city;?></td>
                    <td><?php //echo $row->barangay;?></td>
                    <td><?php //echo $row->PSGC_Bgy;?></td>
                    <td><?php //echo $row->cp;?></td>
                    <td><?php //echo $row->remarks;?></td>
                 <!--  <td>
                   <button class="btn btn-danger"><a href="expertise.php?user_id=<?php //echo $row->id;?>" class="text-white">Deactivate</a></button>
                  </td> -->
                  
                <!--</tr> -->
             <?php //endwhile;?>
                <!-- </tbody> -->
                 
              </table>
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
 <!--  <script src="DataTables/jQuery-1.12.4/jquery-1.12.4.min.js"></script> -->
  <!-- <script src="DataTables/jquery.dataTables.min.js"></script> -->
<!--<script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<!--<script src="plugins/datatables/jquery.dataTables.js"></script> -->
<!--<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script src="script/swal.js"></script>
<script src="script/delete-course.js"></script>
<script src="script/view-course.js"></script>
<!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script>-->
 <!-- <script type="text/javascript" src="DataTables/jquery.dataTables.min.js"></script> -->
<script>
  /*$(document).ready(function() {
    $('#list').DataTable({
		"processing": true,
		"serverSide": true,
		"ajax": "server_processing.php"
	});
} ); */
</script>
<script>
 // $(function () {
   // $("#example1").DataTable();
   // $('#example2').DataTable({
   //   "paging": true,
   //   "lengthChange": false,
    //  "searching": false,
    //  "ordering": true,
    //  "info": true,
    //  "autoWidth": false,
   // });
  //});
  /*$(document).ready(function() {
    // Setup - add a text input to each footer cell
   $('#list tfoot th').each( function () {
      var title = $(this).text();
		$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
   } );
 */
    // DataTable
 /*  var table = $('#list').DataTable({
     initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                   if ( that.search() !== this.value ) {
                        that
                           .search( this.value )
                           .draw();
                    }
               } );
            } );
        }
    });
 
} ); */
</script>
<script>
 $(document).ready(function ()
        {
            $('#fst thead th').each(function () {
                var title = $(this).text();
                $(this).html(title+' <input type="text" class="col-search-input" placeholder="Search ' + title + '" />');
            });
            
            var table = $('#fst').DataTable({
                	"scrollX": true,
            		"pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": "server_processing2.php",
                order: [[2, 'asc']],
                columnDefs: [{
                    targets: "_all",
                    orderable: false
                 }]
            });

            table.columns().every(function () {
                var table = this;
                $('input', this.header()).on('keyup change', function () {
                    if (table.search() !== this.value) {
                    	   table.search(this.value).draw();
                    }
                });
            });
        });


</script>
