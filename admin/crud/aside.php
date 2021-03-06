<aside class="main-sidebar bg-white elevation-3">
    <!-- Brand Logo -->
    <a href="../dashboard.php" class="brand-link">
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
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-uppercase" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-registered"></i>
              <p>
                Manage account
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../add_account.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Account</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../account_list_company.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beneficiary List</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../upload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload File</p>
                </a>
              </li>
			  <li class="nav-item ml-3">
                <a href="../fstlist.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FST Results</p>
                </a>
              </li>
			  <li class="nav-item ml-3">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Grievance</p>
                </a>
              </li>
            
          </li>
			</ul>
        <!--   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="enrollment_reports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bene Reports</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="payment_reports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Reports</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="account_list_company.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance Reports</p>
                </a>
              </li> -->
              <!-- <li class="nav-item ml-3">
                <a href="account_list_cashier.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Evaluation Reports</p>
                </a>
              </li> -->
             <!--  <li class="nav-item ml-3">
                <a href="account_list_trainor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assessment Reports</p>
                </a>
              </li> -->
             <!--  <li class="nav-item ml-3">
                <a href="account_list_trainor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate Reports</p>
                </a>
              </li> 
            </ul>
          </li>-->
         
          <li class="nav-item active">
            <a href="../phpfunction/logout.php" class="nav-link text-white bg-gradient-danger elevation-3">
              <i class="nav-icon fas fa-power-off"></i>
             Logout
                <!-- <p>
                
              </p> -->
            </a>
          </li>
        
      </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
  </aside>