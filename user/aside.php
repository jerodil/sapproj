<?php
// include '../userphpfunction/userloginfunction.php';

// session_start();
if(isset($_SESSION['username']) || isset($_SESSION['user_type'])){
  $username = $_SESSION['username'];
  $user_type = $_SESSION['user_type'];
}
?>
<aside class="main-sidebar bg-white elevation-3">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="Tonsberg Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span style="text-transform: full-width;font-weight: bolder;text-shadow: 0px 0px 5px black;" class="brand-text ml-4">SAP-Search App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/dswd.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo strtoupper($username);?> <?php echo strtoupper($user_type); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-uppercase" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../user/userindex.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                SAP Beneficiaries
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../user/viewbenes.php" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>SAP PAYROLL</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../user/fsp.php" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>SAP FSP RESULTS</p>
                </a>
              </li>
			  <li class="nav-item ml-3">
                <a href="#" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Clean List</p>
                </a>
              </li>
			  </li>
			  </ul>
			   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                SAP Dedup Result
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="dupres.php" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>SAP Dup Results</p>
                </a>
              </li>
			</li>
			</ul>
			  <!--
          <li class="nav-item">
            <a href="../user/viewbenes.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                View Beneficiary List
              </p>
            </a>
          </li> -->
		  <!--<li class="nav-item">
            <a href="../user/fsp.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                FSP Results
              </p>
            </a>
          </li>  -->
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-registered"></i>
              <p>
                TNVS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../user/tnvs_payroll_userview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TNVS PAYROLL</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TNVS FSP RESULTS</p>
                </a>
              </li>
			  </li>
			  </ul>
        <!--  <li class="nav-item">
            <a href="applicant_list.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
               Active Applicant List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="fired_applicant_list.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
               Fired Applicant List
              </p>
            </a>
          </li> -->
          <li class="nav-item active">
            <a href="phpfunction/logout.php" class="nav-link text-white bg-gradient-danger elevation-3">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        
      </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
  </aside>