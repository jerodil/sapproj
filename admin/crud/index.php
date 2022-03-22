<?php
 $_conn = mysqli_connect('localhost', 'root', '', 'sapsap');
//include('templates/header.php');
include('header.php');
include('aside.php');
include('nav.php');
?>

<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>SAP Grievance Form</h2>
    </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-md-right">
        	<a id="add-grievance" class="text-white btn btn-primary btn-sm float-right" style="margin-bottom: 5px;"> Add Grievance </a>
            <table id="grievance-list" class="table table-bordered table-striped"style="width:100%;">
				<thead>
					<tr>
						<th width="5%">IR No</th>
						<th width="10%">Mode of Communication</th>
						<th width="10%">First Name</th>					
						<th width="10%">Middle Name</th>
						<th width="30%">Last Name</th>
						<th width="15%">Ext</th>
						<th width="20%">Age</th>
						<th width="20%">Contact Number</th>
						<th width="20%">Gender</th>
						<th width="20%">Region</th>
						<th width="20%">Concern</th>
						<th width="20%">Action Taken</th>
						<th width="20%">Name of Staff</th>
						<th width="20%">Date</th>
						<th width="20%">Action</th>				
					</tr>
				</thead>
			</table>
        </div>
      </div>
  </div>
</section>
<?php
include('modal/add.php');
include('modal/view.php');
include('footer.php');
?>
<?php 
//include('templates/footer.php');
//include('footer.php');
?>